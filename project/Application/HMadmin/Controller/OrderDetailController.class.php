<?php
	namespace HMadmin\Controller;

	class OrderDetailController extends CommonController
	{
		public function getOrderDetail()
		{
			$data = D('OrderDetail')->getOrderDetail();

			if ($data) {
				$this->assign('data', $data);

				$this->display();
			} else {
				$this->error('操作失败');
			}

		}
	}