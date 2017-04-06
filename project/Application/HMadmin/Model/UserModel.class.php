<?php
	
	namespace HMadmin\Model;

	use Think\Model;

	Class UserModel extends Model
	{	

		protected $_map = array(

			//把表单中username映射到数据表的name字段
			'useremail' => 'email',
			'userpass' => 'password',
		);

		//使用自动完成
		protected $_auto  = array(
			//会自动调用myHash()方法，然后将myHash的返回的结果插入到数据库
			array('password', 'Hash', 1, 'callback'),

			array('addtime','time',1,'function'), // addtime字段在更新的时候写入当前时间戳

		);

		//自动验证
		protected $_validate = array(

			//如果定义了字段映射的话，第一个是数据表的字段名
			array('email', 'require', '邮箱不能为空'),

			array('password', 'require', '密码不能为空'),

			array('email', '', '该邮箱已经存在！',0,'unique',1),

			array('email', 'email', '你给的不是邮箱!'),

			array('password','6,12','密码长度在6-12之间!',3,'length'), // 验证密码长度

			 
		);
		//获取用户数据
		public function getUserInfo()
		{	
			
			$name = I('get.keyword');


	        if ( !empty($name) ) {

	            $search['email'] = array('like', "%{$name}%");

	        }

            $listAll = $this->where($search)->select();
           
            
            //统计总条数
            $total = count($listAll);

            $page = new \Think\Page($total, 5);

            //分页
            $userInfo = $this->field('id,email,status,addtime')->where($search)->limit($page->firstRow.','.$page->listRows)->select();

            //拿到分页按钮
            $show = $page->show();

			$userArr = [1=>'未激活', '激活', '禁用'];

			for ($i=0; $i<count($userInfo); $i++) {

				$userInfo[$i]['status'] = $userArr[ $userInfo[$i]['status'] ];

				$userInfo[$i]['addtime'] = date('Y-m-d H:i:s', $userInfo[$i]['addtime']);
			}
			
			$userInfo['show'] = $show;
			return $userInfo;
		}
		//删除用户
		public function deleteUser()
		{

			$id = I('get.id');

            $res = $this->where('id='.$id)->delete();

            return $res;
            
		}
		//编辑用户
		public function editUser()
		{
			$id = I('get.id');

			$data = I('post.');

			$res = M('account')->where('uid='.$id)->save($data);

			return $res;
		}
		//获取用户详情
		public function getUserdetail()
		{
			$id = I('get.id');

			$data[] = $this->where('id='.$id)->find();

			$data[] = M('account')->where('uid='.$id)->find();

			$data[0]['addtime'] = date('Y-m-d H:i:s', $data[0]['addtime']);

			$userArr = [1=>'未激活', '激活', '禁用'];

			$data[0]['status'] = $userArr[ $data[0]['status'] ];

			$userSex = [0=>'女', '男', '保密'];

			$data[1]['sex']  = $userSex[ $data[1]['sex']];

			return $data;

		}

		//ajax批量删除
		public function ajaxdelsome()
		{
		   $ids = I('post.id');

	       $ids = rtrim($ids,',');

	       $map['id'] = array('in',"$ids");  

	       $list =	$this->where($map)->delete();

	       return $list;
		}

		//单击ajax修改用户状态
		public function changeUserStatus()
		{
			$id = I('post.id');

      		 $list = $this->field('status')->where('id='.$id)->find();

	        if($list['status'] == 3){

	            $list['status']=1;

	        }else if($list['status'] == 1){

	            $list['status']=3;
	        }

	       	$res = M('user')->where('id='.$id)->save($list);

		    if ($res){

	         	return $list['status'];

		    } else {

		        $this->error('修改失败');
		    }

		}

		protected function Hash()
		{
			return password_hash(I('post.userpass'), PASSWORD_DEFAULT);
		}
		
	}