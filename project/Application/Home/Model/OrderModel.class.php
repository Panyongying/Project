<?php
	namespace Home\Model;

	use Think\Model;

	class OrderModel extends Model
	{
		public function checkoutLogin()
		{
			if (IS_POST) {
				
			} else if (IS_GET) {
				if (empty($_SESSION['userInfo'])) {
					return false;
				} else {
					return ture;
				}
			}
		}
	}