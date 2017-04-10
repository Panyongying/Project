<?php
	namespace HMadmin\Controller;

	class IndexPicController extends CommonController
	{
		public function index()
		{
			$this->display();
		}

		public function indexPicList()
		{
			$list = D('IndexPic')->getList();

			$this->assign('list', $list);

			$this->display();
		}

		public function addIndexPic()
		{
			if (IS_POST) {
				$res = D('IndexPic')->addIndexPic();

				if ($res) {
					$this->success('添加成功', U('addIndexPic'));
				} else {
					$this->error('操作失败');
				}
			} else if (IS_GET) {
				$this->display();
			}
		}

		public function editIndexPic()
		{
			if (IS_POST) {
				$res = D('IndexPic')->editIndexPic();

				if ($res) {
					$this->success('操作成功', U("IndexPic/indexPicList?location={$_POST['location']}"));
				} else {
					$this->error('操作失败');
				}
			} else if (IS_GET) {
				$data = D('IndexPic')->editIndexPic();

				$this->assign('list', $data);
				$this->display();
			}
		}

		public function deleteIndexPic()
		{
			$res = D('IndexPic')->deleteIndexPic();

			echo $res;
		}

		public function multipleDelete()
		{
			$res = D('IndexPic')->multipleDelete();

			echo $res;
		}
	}