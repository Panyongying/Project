<?php
	namespace Home\Controller;

	use Think\Controller;

	class CartController extends Controller
	{
		public function index()
		{
			$data = D('cart')->showCart();

			$this->assign('data', $data);

			$this->display();
		}
	}