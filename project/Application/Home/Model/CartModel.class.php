<?php
	namespace Home\Model;

	use Think\Model;

	class CartModel extends Model
	{
		public function showCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				// 查询出购物车表的数据
				$uid = $_SESSION['userInfo']['id'];

				$map['id'] = array('EQ', $uid);

				$cartList = M('cart')->where($map)->select();
			} else { // 未登录
				$cartList = $_SESSION['cart'];
			}

			// 购物车为空时
			if (!$cartList) {
				return 'empty';
			}

			// 统计购物车的商品数量和总价
			$data['num'] = 0;
			$data['totalPrice'] = 0;

			// 根据商品id，属性id查询价格，库存
			foreach ($cartList as $k => $v) {
				$gid = $v['gid'];
				$aid = $v['aid'];

				// 查询颜色
				$map['id'] = array('IN', $aid);
				$map['attrType'] = array('EQ', 1);
				$color = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];

				// 查询尺码
				$map['attrType'] = array('EQ', 2); // 先查询衣服的尺码
				$size = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];

				// 当结果为空时说明不是衣服继续查鞋子尺码
				if (!$size) {
					$map['attrType'] = array('EQ', 3);
					$size = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];
				}

				$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

				$where['gid'] = array('EQ', $gid);
				$where['aid'] = array('EQ', $aid);

				$stock = M('stock')->field('num')->where($where)->find()['stock'];

				$cartList[$k]['color'] = $color;
				$cartList[$k]['size']  = $size;
				$cartList[$k]['price'] = $price;
				$cartList[$k]['stock'] = $stock;
				$data['num'] += $cartList[$k]['gnum'];
				$data['totalPrice'] += $cartList[$k]['gnum'] * $price;
			}

			$data['cartList'] = $cartList;
			return $data;
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

		// 添加进购物车
		public function addToCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$map = I('get.');

				$map['uid'] = $_SESSION['userInfo']['id'];

				$res = M('cart')->add($map);

				if ($res) {
					return 1;
				} else {
					return 2;
				}
			} else {
				$_SESSION['cart'][] = I('get.');

				return 1;
			}
		}

		// 删除购物车中的商品
		public function delFromCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$map = I('get.');

				$map['uid'] = $_SESSION['userInfo']['id'];

				$res = M('cart')->where($map)->delete();

				if ($res) {
					$cartList = M('cart')->where("uid={$map['uid']}")->select();

					$totalPrice = 0;

					// 根据商品id，属性id查询价格
					foreach ($cartList as $k => $v) {
						$gid = $v['gid'];

						$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

						$totalPrice += $cartList[$k]['gnum'] * $price;
					}

					return $totalPrice;
				} else {
					return 2;
				}
			} else { // 未登录
				foreach ($_SESSION['cart'] as $k => $v) {
					if ($v['gid'] = I('get.gid')) {
						unset($_SESSION['cart'][$k]);
					}
				}

				$cartList = $_SESSION['cart'];

				$totalPrice = 0;

				// 根据商品id，属性id查询价格
				foreach ($cartList as $k => $v) {
					$gid = $v['gid'];

					$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

					$totalPrice += $cartList[$k]['gnum'] * $price;
				}

				return $totalPrice;
			}
		}

		// 更改购物车中商品的数量
		public function changeNum()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$data = I('get.gnum');

				$map['gid'] = I('get.gid');
				$map['uid'] = $_SESSION['userInfo']['id'];

				$res = M('cart')->where($map)->save($data);

				if ($res) {
					return 1;
				} else {
					return 2;
				}
			} else { // 未登录
				foreach ($_SESSION['cart'] as $k => $v) {
					if ($v['gid'] = I('get.gid')) {
						$_SESSION['cart'][$k]['gnum'] = I('get.gnum');
					}
				}

				return 1;
			}
		}

		// 购物车到收藏夹
		public function cartToFav()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$map = I('get.');
				$map['uid'] = $_SESSION['userInfo']['id'];

				// 开启事务
				$this->startTrans();

				// 添加数据给收藏表
				$res = M('favorite')->add($map);

				if (!$res) {
					// 回滚
					$this->rollback();

					return 2;
				}

				// 删除购物车表数据
				$res = M('cart')->where($map)->delete();

				if (!$res) {
					// 回滚
					$this->rollback();

					return 2;
				}

				// 提交事务
				$this->commit();

				$cartList = M('cart')->where("uid={$map['uid']}")->select();

				$totalPrice = 0;

				// 根据商品id，属性id查询价格
				foreach ($cartList as $k => $v) {
					$gid = $v['gid'];

					$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

					$totalPrice += $cartList[$k]['gnum'] * $price;
				}

				return $totalPrice;
			} else { // 未登录
				return 3;
			}
		}
	}