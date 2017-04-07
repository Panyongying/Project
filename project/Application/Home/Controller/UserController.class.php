<?php
	
	namespace Home\Controller;

	use Think\Controller;

	class UserController extends Controller
	{
		// 用户注册
		public function register ()
		{

	        $addModel = D('user');
	        if (IS_POST){

		     //使用create()方法来创建数据对象
		      	$res = $addModel->create();

		        if (!$res) {

		            $this->error( $addModel->getError() );
		            exit;
		        }

		        $addModel->add();

		        $status = $addModel->sendEmail();

		        if ($status){

		          	$this->success('邮件已发送至你的邮箱,请前去激活',U('Index/index'),2);

		        }
	        }

	        if (IS_GET){

	           	$addtime = I('get.time');

	            $nowtime = time();

	            //当邮箱发送后超过30分钟,使验证失效
	            if ($nowtime - $addtime > 3600){
	            	//跳转至激活页面
	            	echo '<script> alert("链接已失效,请重新激活")</script>';
	            	exit;
	            }

	            $email = I('get.mail');

				$data['status'] = '2';

				$res = $addModel->where('email='."'$email'")->save($data);

				if ($res) {

					$this->success('<script> alert("激活成功")</script>', U('Index/index'),3);
				}
	        }
	          	        
	         
	    }

	    //用户登录
	    public function login()
	    {
    	
	    	$res = D('user')->signIn();
			
			if ($res) {

				$this->success('登录成功');

			}else {

				$this->error('登录失败');
			}
	    	
	    }

	    //用户注销
	    
	    public function logout()
	    {
	    	unset($_SESSION['userInfo']);

	    	$this->success('退出成功');
	    }

	  	
	} 