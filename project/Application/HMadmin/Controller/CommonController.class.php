<?php

	namespace HMadmin\Controller;

	use Think\Controller;

	class CommonController extends Controller
	{


		public function __construct()
		{
			parent::__construct();

				//判断是否登录
			if ( !$_SESSION['adminInfo'] ) {

				$this->error('请登录', U('Public/login') );


				exit;
			}

			//权限验证
			$auth = new \Think\Auth;

			$uid = $_SESSION['adminInfo']['id'];

			$name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME; 

			$bool = $auth->check($name ,$uid);

			// var_dump($bool);


			// if ( !$bool ) {

				// 没有权限
				// $this->error('你对此页面没有权限', U('Index/index') );
				// exit;
// 
			// }




		}
	}