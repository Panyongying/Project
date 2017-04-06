<?php
	namespace HMadmin\Controller;

	class OrderController extends CommonController
	{
		// 显示订单列表
		public function index()
		{
			if (IS_GET) {
				$orderStatus = I('get.orderStatus');

				$orderSendStatus = I('get.orderSendStatus');

				// 预定义搜索条件
				$map = [];

				if ($orderStatus != 0) {
					$map['orderStatus'] = array('EQ', $orderStatus);
				}

				if ($orderSendStatus != 0) {
					$map['orderSendStatus'] = array('EQ', $orderSendStatus);
				}

				$data = D('order')->getAllOrder($map);

				//关闭表单令牌
				C('TOKEN_ON',false);

	    		$this->assign('list', $data['orderList']);

	    		$this->assign('pageBtn', $data['show']);

	    		$this->display();
			}
		}

		public function deleteOrder()
		{
			$res = D('order')->deleteOrder();

			echo $res;
		}

		public function multipleDelete()
		{
			$res = D('order')->multipleDelete();

			echo $res;
		}
	}
