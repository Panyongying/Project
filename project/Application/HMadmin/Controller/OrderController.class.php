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

				$uid = I('get.uid');
				// $startdate = strtotime(I('get.startdate'));
				// $enddate = strtotime(I('get.enddate'));

				// if ($startdate > $enddate) {
				// 	$tmp = $startdate;
				// 	$startdate = $enddate;
				// 	$enddate = $tmp;
				// }

				// 预定义搜索条件
				$map = [];

				if ($orderStatus != 0) {
					$map['orderStatus'] = array('EQ', $orderStatus);
				}

				if ($orderSendStatus != 0) {
					$map['orderSendStatus'] = array('EQ', $orderSendStatus);
				}

				if ($uid != '') {
					$map['uid'] = array('EQ', $uid);
				}

				// if (I('get.startdate') == '') {
				// 	$startdate = 0;
				// }

				// if (I('get.enddate') == '') {
				// 	$startdate = time();
				// }

				// if ($startdate > $enddate) {
				// 	$tmp = $startdate;
				// 	$startdate = $enddate;
				// 	$enddate = $tmp;
				// }

				$map['addtime'] = array('BETWEEN', "{$startdate},{$enddate}");

				$data = D('order')->getAllOrder($map);

				//关闭表单令牌
				C('TOKEN_ON',false);

	    		$this->assign('list', $data['orderList']);

	    		$this->assign('pageBtn', $data['show']);

	    		$this->display();
			}
		}

		// 单个删除
		public function deleteOrder()
		{
			$res = D('order')->deleteOrder();

			echo $res;
		}

		// 多选删除
		public function multipleDelete()
		{
			$res = D('order')->multipleDelete();

			echo $res;
		}

		// 修改订单
		public function editOrder()
		{
			if (IS_POST) {
				$res = D('order')->editOrder();

				if ($res) {
					$this->success('修改成功', U('index'));
				} else {
					$this->error('操作失败');
				}
			} else if (IS_GET) {
				$list = D('order')->editOrder();

				if (!$list) {
					$this->error('操作失败');
				}

				$this->assign('list', $list);

				$this->display();
			}
		}
	}
