<?php
	namespace HMadmin\Controller;

	class CommentaryController extends CommonController
	{
		// 显示评论列表
		public function index()
		{
			if (IS_GET) {
				$uid = I('get.uid');

				$gid = I('get.gid');

				// 预定义搜索条件
				$map = [];

				if ($uid != 0) {
					$map['uid'] = array('EQ', $uid);
				}

				if ($gid != 0) {
					$map['gid'] = array('EQ', $gid);
				}

				$data = D('commentary')->getList($map);

				//关闭表单令牌
				C('TOKEN_ON',false);

	    		$this->assign('list', $data['CommentaryList']);

	    		$this->assign('pageBtn', $data['show']);

	    		$this->display();
			}
		}

		public function deleteCommentary()
		{
			$res = D('commentary')->deleteCommentary();

			echo $res;
		}

		public function multipleDelete()
		{
			$res = D('commentary')->multipleDelete();

			echo $res;
		}
	}
