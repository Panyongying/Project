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
	}