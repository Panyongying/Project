<?php

	namespace Admin\Controller;

	use Think\Controller;

	class CommonController extends Controller
	{


		public function __construct()
		{
			parent::__construct();

	/*			//判断是否登录
			if ( !$_SESSION['admin'] ) {

				$this->error('请登录', U('Public/login') );

				exit;
			}*/


			// 登陆成功后还需要判断对某个方法是否有权限
			
			//实例化auth类
			// $auth = new \Think\Auth;

			//假设mary登录
			// $uid = 2;


			// $name = 'Admin/Order/select';

			// echo CONTROLLER_NAME;

			// $name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME; 

			//调用check方法进行权限验证
			// $bool = $auth->check($name ,$uid);

			// var_dump($bool);


			// if ( !$bool ) {

				//没有权限
			/*	$this->error('你对此页面没有权限', U('Index/index') );
				exit;*/
// 
			// }




		}
	}