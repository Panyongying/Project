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

		// 添加购物车
		public function addToCart()
		{
			$res = D('cart')->addToCart();

			echo $res;
		}

		// 删除购物车中的商品
		public function delFromCart()
		{
			$res = D('cart')->delFromCart();

			echo $res;
		}

		// 更改购物车中商品的数量
		public function changeNum()
		{
			$res = D('cart')->changeNum();

			echo $res;
		}

		// 购物车到收藏夹
		public function cartToFav()
		{
			$res = D('cart')->cartToFav();

			echo $res;
		}
	}