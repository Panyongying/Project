<?php
	
	namespace HMadmin\Model;

	use Think\Model;

	Class UserModel extends Model
	{	
		public function getUserInfo()
		{	//获取用户数据
			$userInfo = $this->field('id,email,status,addtime')->select();

			$userArr = [1=>'未激活', '激活', '禁用'];

			for ($i=0; $i<count($userInfo); $i++) {

				$userInfo[$i]['status'] = $userArr[ $userInfo[$i]['status'] ];

			}

			return $userInfo;
		}
		//删除用户
		public function deleteUser()
		{

			$id = I('get.id');

            $res = $this->where('id='.$id)->delete();

            return $res;
            
		}
		
	}