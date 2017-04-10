<?php
	namespace HMadmin\Model;

	use Think\Model;

	class CommentaryModel extends Model
	{
		public function getList($map)
		{
			// 获取所有评论数据
			$CommentaryList = M('commentary')->field('id')->where($map)->select();

			// 分页
			$page = new \Think\Page(count($CommentaryList), 10);

			$CommentaryList = M('commentary')->where($map)->limit($page->firstRow.','.$page->listRows)->select();


			// 处理日期信息
			foreach ($CommentaryList as $k => $v) {
				$CommentaryList[$k]['addtime'] = date('Y-m-d H:i:s', $v['addtime']);
			}

			// 拿到分页按钮存入数组返回
			$data['show'] = $page->show();

			$data['CommentaryList'] = $CommentaryList;

			return $data;
		}

		public function deleteCommentary()
		{
			if (IS_AJAX) {
				$id = $_GET['id'];
			}

			$map['id'] = $id;

			$res = M('commentary')->where($map)->delete();

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

				$res = M('commentary')->where($map)->delete();

				if ($res) {
					return 1;
				} else {
					return 0;
				}
			}
		}
	}