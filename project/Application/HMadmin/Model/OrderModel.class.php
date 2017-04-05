<?php
	namespace HMadmin\Model;

	use Think\Model;

	class OrderModel extends Model
	{
		public function getAllOrder($map)
		{
			// 获取所有订单数据
			$orderList = M('order')->field('id')->where($map)->select();

			// 分页
			$page = new \Think\Page(count($orderList), 10);

			$orderList = M('order')->field('id,uid,orderAddtime,orderStatus,orderSendStatus,orderTotalPrice')->where($map)->limit($page->firstRow.','.$page->listRows)->select();


			// 处理状态信息
			$orderStatus = [1=>'未付款', '已付款', '已取消'];
			$orderSendStatus = [1=>'等待配送', '配送中', '已收货'];

			foreach ($orderList as $k => $v) {
				$orderList[$k]['orderstatus'] = $orderStatus[$v['orderstatus']];

				$orderList[$k]['ordersendstatus'] = $orderSendStatus[$v['ordersendstatus']];
			}

			// 拿到分页按钮存入数组返回
			$data['show'] = $page->show();

			$data['orderList'] = $orderList;

			return $data;
		}

		public function deleteOrder()
		{
			if (IS_GET) {
				$id = $_GET['ids'];
			}

			$map['id'] = $id;

			$res = M('order')->where($map)->delete();

			return $res;
		}
	}