<?php
	namespace HMadmin\Model;

	use Think\Model;

	class LinksModel extends Model
	{
		public function getAllLinks()
		{
			// 获取所有订单数据
			$linksList = M('order')->field('id')->select();

			// 分页
			$page = new \Think\Page(count($orderList), 10);

			$linksList = M('link')->limit($page->firstRow.','.$page->listRows)->select();

			// 处理状态信息
			$linksStatus = [1=>'显示', '不显示'];

			foreach ($linksList as $k => $v) {
				$linksList[$k]['status'] = $linksStatus[$v['status']];
			}

			// 拿到分页按钮存入数组返回
			$data['show'] = $page->show();

			$data['linksList'] = $linksList;

			return $data;
		}

		public function deleteLinks()
		{
			if (IS_AJAX) {
				$id = $_GET['id'];
			}

			$map['id'] = $id;

			$res = M('links')->where($map)->delete();

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

				$res = M('links')->where($map)->delete();

				if ($res) {
					return 1;
				} else {
					return 0;
				}
			}
		}
	}