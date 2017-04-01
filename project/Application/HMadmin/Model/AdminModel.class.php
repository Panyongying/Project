<?php

	namespace HMadmin\Model;

	use Think\Model;

	class AdminModel extends Model
	{	//处理登录
		public function signIn()
		{

			$data = I('post.');

			$map['name'] = $data['name'];
			
			$userInfo = $this->where($map)->field('id,name,password')->find();
			
			//验证密码
			$bool = password_verify($data['password'], $userInfo['password']);


			if ($bool) {

				//登录成功将信息写入sesson
				$_SESSION['adminInfo'] = $userInfo;

				return true;
			}else {

				return false;
			}

		}
	}