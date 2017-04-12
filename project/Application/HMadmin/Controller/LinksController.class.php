<?php
	namespace HMadmin\Controller;

	class LinksController extends CommonController
	{
		// 显示友链列表
		public function index()
		{
			if (IS_GET) {
				$data = D('links')->getAllLinks();

				//关闭表单令牌
				C('TOKEN_ON',false);

	    		$this->assign('list', $data['linksList']);

	    		$this->assign('pageBtn', $data['show']);

	    		$this->display();
			}
		}

		// 添加友情链接
		public function addLinks()
		{
			if (IS_POST) {
				$res = D('links')->addLinks();

				if ($res) {
					$this->success('添加成功', U('addLinks'));
				} else {
					$this->error('操作失败');
				}
			} else if (IS_GET) {
				$this->display();
			}
		}

		// 修改友情链接
		public function editLinks()
		{
			if (IS_POST) {
				$res = D('links')->editLinks();

				if ($res) {
					$this->success('修改成功', U('index'));
				} else {
					$this->success('操作失败');
				}
			} else if (IS_GET) {
				$list = D('links')->editLinks();

				$this->assign('list', $list);

				$this->display();
			}
		}

		public function deleteLinks()
		{
			$res = D('links')->deleteLinks();

			echo $res;
		}

		public function multipleDelete()
		{
			$res = D('links')->multipleDelete();

			echo $res;
		}
	}
