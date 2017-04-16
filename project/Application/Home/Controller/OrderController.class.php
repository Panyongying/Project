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
					$this->error('登录失败');
				}
			} else if (IS_GET) {
				$data = D('cart')->showCart();

				$this->assign('data', $data);

				$this->display('checkoutLogin');
			}
		}

		public function checkout()
		{
			$res = D('order')->checkoutLogin();

			if (!$res) {
				$this->checkoutLogin();
			} else {
				$data = D('cart')->showCart();

				$addr = D('order')->showAddress();

				$this->assign('data', $data);
				$this->assign('addr', $addr);

				$this->display();
			}
		}

		public function addAddress()
		{
			$res = D('user')->addAddress();

			if (!$res) {
				echo 2;
			}

			echo $res;
		}

		public function queryOrder()
		{
			if (IS_POST) {
				$res = D('order')->queryOrder();

				if ($res === false) {
					echo 2;
				}

				$this->redirect("queryOrder/oid/{$res}");
			} else if (IS_GET) {
				$oid = I('get.oid');

				if (empty($oid)) {
					$this->redirect('Cart/index');
				}

				// 获取订单数据
				$order = D('order')->queryOrder();

				if (!$order) { // 非法访问
					$this->redirect('Cart/index');
				}

				// 购物车数据
				$data = D('cart')->showCart();

				$this->assign('data', $data);
				$this->assign('orderData', $order['orderData']);
				$this->assign('orderDetail', $order['orderDetail']);
			}
		}
	}