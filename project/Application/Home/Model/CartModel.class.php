<?php
	namespace Home\Model;

	use Think\Model;

	class CartModel extends Model
	{
		public function showCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				// 查询出购物车的数据
				$uid = $_SESSION['userInfo']['id'];

				$map['id'] = array('EQ', $uid);

				$cartList = M('cart')->where($map)->select();
			} else { // 未登录
				$cartList = $_SESSION['cart'];
			}

			// 购物车为空时
			if ($cartList == null or empty($cartList)) {
				return 'empty';
			}

			// 统计购物车的商品数量
			$cartList['num'] = 0;

			// 根据商品id，属性id查询价格，库存
			foreach ($cartList as $k => $v) {
				$gid = $v['gid'];
				$aid = $v['aid'];

				$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

				$where['gid'] = array('EQ', $gid);
				$where['aid'] = array('EQ', $aid);

				$stock = M('stock')->field('num')->where($where)->find()['stock'];

				$cartList[$k]['price'] = $price;
				$cartList[$k]['stock'] = $stock;
				$cartList['num'] += $cartList[$k]['gnum'];
			}

			return $cartList;
		}

		// 这个方法检查用户是否登陆
		public function checkLogin()
		{
			if (empty($_SESSION['userInfo'])) {
				return false;
			} else {
				return ture;
			}
		}
	}