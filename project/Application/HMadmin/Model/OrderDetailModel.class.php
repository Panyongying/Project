<?php
	namespace HMadmin\Model;

	use Think\Model;

	class OrderDetailModel extends Model
	{
		public function getOrderDetail()
		{
			$oid = I('get.oid');

			if (empty($oid)) {
				return false;
			}

			// 先获取订单的全部信息
			$map1['id'] = $oid;

			$orderData = M('order')->where($map1)->find();

			// 结果为空或出错时
			if (!$orderData) {
				return false;
			}

			// 获取订单详情
			$map2['oid'] = $oid;
			$orderDetail = M('order_detail')->where($oid)->select();

			// 结果为空或出错时
			if (!$orderDetail) {
				return false;
			}

			// 存入数组返回
			$data['orderData'] = $orderData;
			$data['orderDetail'] = $orderDetail;
		}
	}