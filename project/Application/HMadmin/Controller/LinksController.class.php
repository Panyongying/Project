<?php
	namespace HMadmin\Controller;

	class LinksController extends CommonController
	{
		// 显示友链列表
		public function index()
		{
			if (IS_GET) {
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

			}

			if (IS_GET) {
				
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
