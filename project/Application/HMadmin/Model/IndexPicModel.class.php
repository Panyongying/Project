<?php
	namespace HMadmin\Model;

	use Think\Model;

	class IndexPicModel extends Model
	{
		protected $_validate = array(
			array('url','url','正确的url'),
			array('location',array(1,2,3,4,5,6,7,8,9,10,11),'值的范围不正确！',2,'in'),
			array('fontcolor',array(1,2),'值的范围不正确！',2,'in'),
			array('align',array(1,2,3),'值的范围不正确！',2,'in'),
			array('btncolor',array(1,2),'值的范围不正确！',2,'in'),
			array('hor',array(1,2,3),'值的范围不正确！',2,'in'),
			array('ver',array(1,2,3),'值的范围不正确！',2,'in'),
			array('status',array(1,2),'值的范围不正确！',2,'in'),
		);

		public function getList()
		{
			if (IS_GET) {
				$location = I('get.location');

				$list = M('index_pic')->where("location={$location}")->select();

				$status = [1=>'显示', '不显示'];

				foreach ($list as $k => $v) {
					$list[$k]['addtime'] = date('Y-m-d H:i:s', $v['addtime']);

					$list[$k]['status'] = $status[$v['status']];
				}


				return $list;
			}
		}

		// 添加大图
		public function addIndexPic()
		{
			if (IS_POST) {
				// 判断不能为空的字段
				if (empty(I('post.smalltitle')) || empty(I('post.bigtitle')) || empty(I('post.url')) || $_FILES['error'] != 0) {
					return false;
				}

				$upload = new \Think\Upload();

				$upload->maxSize = 10485760;

				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');

				$upload->rootPath = './Public/Uploads/';

				$info = $upload->uploadOne($_FILES['pic']);

				if ($info) {
					$data = I('post.');

					$data['pic'] = '/Uploads/'.$info['savepath'].$info['savename'];
					$data['addtime'] = time();

					if (D('IndexPic')->create()) {
						$res = M('index_pic')->add($data);
						
						if ($res) {
							return ture;
						} else {
							return false;
						}
					} else {
						return false;
					}

				}
				//  else {
				// 	dump($upload->getError());
				// }
			}
		}

		// 删除一条
		public function deleteIndexPic()
		{
			if (IS_AJAX) {
				$id = $_GET['id'];
			}

			$map['id'] = $id;

			$res = M('index_pic')->where($map)->delete();

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

				$res = M('index_pic')->where($map)->delete();

				if ($res) {
					return 1;
				} else {
					return 0;
				}
			}
		}

		// 修改大图
		public function editIndexPic()
		{
			if (IS_POST) {
				// 判断不能为空的字段
				if (empty(I('post.smalltitle')) || empty(I('post.bigtitle')) || empty(I('post.url'))) {
					return false;
				}

				$data = I('post.');

				if ($_FILES['error'] = 0) {
					$upload = new \Think\Upload();

					$upload->maxSize = 10485760;

					$upload->exts = array('jpg', 'gif', 'png', 'jpeg');

					$upload->rootPath = './Public/Uploads/';

					$info = $upload->uploadOne($_FILES['pic']);

					if ($info) {
						$data['pic'] = '/Uploads/'.$info['savepath'].$info['savename'];
					} else {
						return false;
					}
				}

				if (D('IndexPic')->create()) {
					if ($data['status'] == 1) {
						$update['status'] = 2;

						M('index_pic')->where("location={$data['location']} and status=1")->save($update);
					}

					$res = M('index_pic')->save($data);

					if ($res === false) {
						return false;
					} else {
						return ture;
					}
				} else {
					return false;
				}
			} else if (IS_GET) {
				$id = I('get.id');

				$list = M('index_pic')->where("id={$id}")->find();

				return $list;
			}
		}
	}