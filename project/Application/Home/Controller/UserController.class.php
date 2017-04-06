<?php
	
	namespace Home\Controller;

	use Think\Controller;

	class UserController extends Controller
	{
		// 用户注册
		public function register ()
		{

			if (IS_POST) {

	            $addModel = D('user');

	            //使用create()方法来创建数据对象
	            $res = $addModel->create();

	            if (!$res) {

	                $this->error( $addModel->getError() );
	                exit;
	            }

	            $addModel->add();
	            
	            $this->success('成功', U('addUser'), 2);


        	}

		}
	} 