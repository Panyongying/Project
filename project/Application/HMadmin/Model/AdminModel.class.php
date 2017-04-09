<?php

	namespace HMadmin\Model;

	use Think\Model;

	class AdminModel extends Model
	{	
		protected $_validate = array(
            array('name', 'require', '管理员名不能为空'),
            array('name','','帐号名称已经存在！',0,'unique',1),
            array('password', 'require', '密码不能为空'),
            array('password', 'repassword', '确认密码不正确', 0, 'confirm'),
				  );

        protected $_auto = array(
            array('password', 'myHash', 3, 'callback'),

                  );


		//处理登录
		public function signIn()
		{

			$data = I('post.');

			$map['name'] = $data['name'];
			
			$userInfo = $this->where($map)->field('id,name,password')->find();

            $pwd =  $userInfo['password'];
			
            unset($userInfo['password']);

			//验证密码
			$bool = password_verify($data['password'], $pwd);


			if ($bool) {

				//登录成功将信息写入sesson
				$_SESSION['adminInfo'] = $userInfo;

				return true;
			}else {

				return false;
			}

		}
        

        //删除管理员
         public function deleteAdmin($id)
         {
             return $this->delete($id);
 
         }

         //密码处理函数
         protected function myHash()
        {
            return password_hash(I('post.password'), PASSWORD_DEFAULT);
        }

       	//搜索admin资料
        public function findAdmin($id)
        {
        	return $this->where("id=$id")->find();
        }

        //查找admin所属组
        public function findAdminGroup($id)
        {
        	return M('AuthGroupAccess')->where("uid=$id")->find();
        }
	}