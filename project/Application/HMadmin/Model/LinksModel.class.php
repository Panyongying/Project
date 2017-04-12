<?php
	namespace HMadmin\Model;

	use Think\Model;

	class LinksModel extends Model
	{
		protected $_validate = array(
			array('url','url','正确的url'),
			array('name','0,50','帐号名称已经存在！',2,'length'),
			array('status',array(1,2),'值的范围不正确！',2,'in'),
		);

		public function getAllLinks()
		{
			// 获取所有友链数据
			$linksList = M('links')->field('id')->select();

			// 分页
			$page = new \Think\Page(count($orderList), 10);

			$linksList = M('links')->limit($page->firstRow.','.$page->listRows)->select();

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

		// 删除一条
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

		// 多选删除
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

		// 添加友情连接
		public function addLinks()
		{
			foreach (I('post.') as $k => $v) {
				if (empty($v)) {
					return false;
				}
			}

			if (D('links')->create(I('post.'))) {
				$res = M('links')->add(I('post.'));

				if ($res) {
					return ture;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		// 修改友情链接
		public function editLinks()
		{
			if (IS_POST) {
				foreach (I('post.') as $k => $v) {
					if (empty($v)) {
						return false;
					}
				}

				if (D('links')->create(I('post.'))) {
					$res = M('links')->save(I('post.'));

					if ($res) {
						return ture;
					} else {
						return false;
					}
				} else {
					return false;
				}
			} else if (IS_GET) {
				$id = I('get.id');

				$list = M('links')->where("id={$id}")->find();

				return $list;
			}
		}
	}