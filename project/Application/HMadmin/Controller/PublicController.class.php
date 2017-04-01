<?php

	namespace HMadmin\Controller;

	use Think\Controller;

	class PublicController extends Controller
	{
		public function login()
		{
			if (IS_POST) {

				$adminModel = D('admin');

				$bool = $adminModel->signIn();
				
				if ( $bool ) {

					$this->success('登录成功', U('Index/index'));exit;
					
				} else {

					$this->error('登录失败');
				}
			} else if (IS_GET) {

				$this->display();
			}
		}
	}