<?php
	namespace Home\Controller;

	use Think\Controller;

	class OrderController extends Controller
	{
		public function checkoutLogin()
		{
			if (IS_POST) {
				$email = I('post.username');

		    	$status = D('user')->field('status')->where('email='."'$email'")->find();

		    	$status = $status['status'];

		    	if ($status == 3){
		    		$this->error('该用户被禁用,请联系管理员');
		    	}

		    	$num = D('user')->saveUserStatus();

		    	if($num == 3) {
		    		$this->error('该账户输入密码次数太多,暂时锁定30Min');
		    	}

			    $res = D('user')->signIn();
					
				if ($res) {
					$this->redirect('Home/Order/checkout');
				}else {
					dump(I('post.'));
					echo 1;exit;
					$this->error('登录失败');
				}
			} else if (IS_GET) {
				$data = D('cart')->showCart();

				$this->assign('data', $data);

				$this->display();
			}
		}

		public function checkout()
		{
			$res = D('order')->checkoutLogin();

			if (!$res) {
				$this->checkoutLogin();

				exit;
			} else {
				$this->display();
			}
		}
	}