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

		public function addAddress()
		{
			$res = D('user')->addAddress();

			if ($res == 1) { // 成功添加
				// 获取地址信息
				$addrData = $this->showAddress();

				if (!$addrData) {
					return false;
				}

				$addr = '';
				// 处理成html代码
				foreach ($addrData as $k => $v) {
					$addr .= '<li class="item js-check-option check-option delivery-option ng-scope">
				<label for="delivery-address-'.$v['id'].'" class="delivery-option-label">
					<input type="radio" name="addrid" id="delivery-address-'.$v['id'].'" class="js-update-on-change delivery-option-radio js-check-option-input ng-pristine ng-untouched ng-valid"';
					if ($v['status'] == 1) {
						$addr .= 'checked';
					}

					$addr .= '

					 value="'.$v['id'].'">
					<span class="vcard read-only-delivery-address">
						<span class="item fn ng-binding" itemprop="name">'.$v['recname'].'</span>
						<span class="adr ng-binding">'.$v['addr'].'<br>'.$v['zip'].'<br>'.$v['phone'].'</span>
					</span>
				</label>
			</li>';
				}

			} else {
				return false;
			}
		}

		public function showAddress()
		{
			$uid = $_SESSION['userInfo']['id'];

			$map['uid'] = $uid;

			$addrData = M('addr')->where($map)->select();

			if (empty($addrData)) {
				$addrData = 'empty';
			}

			return $addrData;
		}

		// 确认订单操作
		public function queryOrder()
		{
			if (IS_POST) {
				$uid = $_SESSION['userInfo']['id'];

				// 判断非法访问
				if (empty($uid)) {
					return false;
				}

				$addrid = I('post.addrid');

				if (empty($addrid)) {
					return false;
				}

				// 根据地址id查出地址信息
				$addrData = M('addr')->where("id={$addrid}")->find();

				// 查出购物车信息
				$cartData = M('cart')->where("id={$uid}")->select();

				// 总价
				$totalPrice = 0;

				// 遍历出商品价格并放回数组
				foreach ($cartData as $k => $v) {
					$cartData[$k]['gprice'] = M('goods')->field('price')->where("id={$v['gid']}")->find()['price'];

					$totalPrice += $v['gnum'] * $cartData[$k]['gprice'];
				}

				// 创建订单
				$order['uid'] = $uid;
				$order['orderAddtime'] = time();
				$order['totalPrice'] = $totalPrice;
				$order['orderRecName'] = $addrData['recname'];
				$order['orderZip'] = $addrData['zip'];
				$order['orderRecAddr'] = $addrData['addr'];
				$order['orderRecPhone'] = $addrData['phone'];

				// 开启事务插入数据
				$this->startTrans();

				$oid = M('order')->add($order);

				if (!$oid) { // 添加失败
					$this->rollback();

					return false;
				}

				// 循环将购物车的内容添加入订单详情
				foreach ($cartData as $k => $v) {
					$v['oid'] = $oid;

					$res = M('order_detail')->add($v);

					if (!$res) { // 添加失败
						$this->rollback();

						return false;
					}
				}

				// 删除购物车表的信息
				$res = M('cart')->where("uid={$uid}")->delete();

				if ($res === false) { // 出错
					$this->rollback();

					return false;
				}

				// 提交事务
				$this->commit();

				// 返回订单号
				return $oid;
			} else if (IS_GET) {
				$oid = I('get.oid');

				$order['id'] = $oid;

				// 查出订单信息
				$orderData = M('order')->where($order)->find();

				if (empty($orderData)) {
					return false;
				}

				// 查出订单详情
				$orderDetail = M('order_detail')->where($order)->select();

				// 循环查出详细信息
				foreach ($orderDetail as $k => $v) {
					$gid = $v['gid'];
					$aid = $v['aid'];

					// 查询名字
					$name = M('goods')->field('name')->where("id={$gid}")->find()['name'];

					// 查询颜色
					$map['id'] = array('IN', $aid);
					$map['attrType'] = array('EQ', 1);
					$color = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];

					// 查询图片
					$where['aid'] = array('IN', $aid);
					$where['gid'] = array('EQ', $gid);
					$pic = M('goods_pic')->field('pic')->where($where)->find()['pic'];

					// 查询尺码
					$map['attrType'] = array('EQ', 2); // 先查询衣服的尺码
					$size = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];

					// 当结果为空时说明不是衣服继续查鞋子尺码
					if (!$size) {
						$map['attrType'] = array('EQ', 3);
						$size = M('goods_attr')->field('attrName')->where($map)->find()['attrName'];
					}

					$orderDetail[$k]['name'] = $name;
					$orderDetail[$k]['color'] = $color;
					$orderDetail[$k]['size'] = $size;
				}

				// 存入数组返回
				$data['orderDetail'] = $orderDetail;
				$data['orderData'] = $orderData;

				return $data;
			}
		}
	}