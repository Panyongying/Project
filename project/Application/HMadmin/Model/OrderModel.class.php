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

				$orderList[$k]['orderaddtime'] = date('Y-m-d H:i:s', $v['orderaddtime']);
			}

			// 拿到分页按钮存入数组返回
			// $data['show'] = $page->show();

			$page->lastSuffix = false;//最后一页不显示为总页数
			$page->setConfig('header','<li class="am-disabled"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%页</a></li>');
	        $page->setConfig('prev','上一页');
	        $page->setConfig('next','下一页');
	        $page->setConfig('last','末页');
	        $page->setConfig('first','首页');
	        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			$page_show = bootstrap_page_style($page->show());//重点在这里

			$data['show'] = $page_show;


			$data['orderList'] = $orderList;

			return $data;
		}

		public function deleteOrder()
		{
			if (IS_AJAX) {
				$id = $_GET['id'];
			}

			$map['id'] = $id;

			$res = M('order')->where($map)->delete();

			if ($res) {
				return 1;
			} else {
				return 0;
			}
		}

		public function multipleDelete()
		{
			if (IS_AJAX) {
				$ids = rtrim($_POST['ids']);

				$map['id'] = array('IN', $ids);

				$res = M('order')->where($map)->delete();

				if ($res) {
					return 1;
				} else {
					return 0;
				}
			}
		}

		// 修改订单
		public function editOrder()
		{
			if (IS_POST) {
				foreach (I('post.') as $v) {
					if (empty($v)) {
						return false;
					}
				}

				$map = I('post.');

				$res = M('order')->save($map);

				if ($res === false) {
					return false;
				} else {
					return ture;
				}
			} else if (IS_GET) {
				// 显示订单部分能修改的信息
				$map['id'] = I('get.id');

				$list = M('order')->field('id,uid,orderStatus,orderSendStatus,orderRecName,orderRecPhone,orderRecZip,orderRecAddr,orderTotalPrice')->where($map)->find();

				return $list;
			}
		}
	}