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

		        }else {

		        	$this->error('邮件发送失败,请稍后激活');
		        }
	        }

	        if (IS_GET){

	           	$addtime = I('get.time');

	            $nowtime = time();

	            //当邮箱发送后超过30分钟,使验证失效
	            if ($nowtime - $addtime > 3600){
	            	//跳转至激活页面
	            	$this->error('邮件已过期', U('Index/index'),3);
	            }

	            $email = I('get.mail');

				$data['status'] = '2';

				$res = $addModel->where('email='."'$email'")->save($data);

				if ($res) {

					$this->success('激活成功', U('Index/index'),3);
				}
	        }
	          	        
	         
	    }

	    //用户登录
	    public function login()
	    {	
	 
			$email = I('post.username');

	    	$status = D('user')->field('status')->where('email='."'$email'")->find();

	    	$status = $status['status'];
	    	//查询用户状态
	    	if ($status == 3){

	    		$this->error('该用户被禁用,请联系管理员');
	    	}
	    	//修改或者添加用户的登录资料
	    	$num = D('user')->saveUserStatus();

	    	if($num == 3) {

	    		$this->error('该账户输入密码次数太多,暂时锁定30Min');
	    	}
	    	//判断用户的账号密码
		    $res = D('user')->signIn();
				
			if ($res) {

				$this->redirect('Home/Index/index');
			
				//登录成功
				
			}else {

				$this->error('登录失败');
			}
	    		    	
	    }

	    //用户注销	    
	    public function logout()
	    {	

	    	unset($_SESSION['userInfo']);

	    	$this->redirect('Home/Index/index');
	    	
	    }
	    //找回密码    
	    public function forgetPassword()
	    {
	    	if( IS_GET){

	    		$this->display();
	    	}
	    	if (IS_POST){

	    		if (!I('post.email')){

	    			$this->error('邮箱不能为空');
	    		}

	    		$status = D('user')->findPassword();

	    		if ($status){

	    			$this->display('User/forgot');

	    		}else {

	    			$this->error('邮件发送失败,请稍后再试');
	    		}
	    	}
	    	
	    }
	    //收集发送邮件
	    public function collectEmail()
	    {
	    	if (IS_GET) {

	    		$time = time();

	    		$sendTime = I('get.time');
	    		//半小时让邮箱失效						
	    		if ($time - $sendTime > 1800){

	    			$this->error('邮件已过期', U('Index/index'),3);
	    		}

	    		$this->display('User/findPwd');

	    	}
	    	if (IS_POST){

	    		$res = D('user')->savePassword();

	    		if ($res ){

	    			$this->success('修改成功');

	    		}else{

	    			$this->error('修改失败');
	    		}

	    	}
	    }

	    //激活用户	    
	    public function active()
	    {
	    	$status = D('user')->activation();

	    	// dump($status);exit;
	        if ($status){

		        $this->success('邮件已发送至你的邮箱,请前去激活',U('Index/index'),2);

		    }else {

		       $this->error('邮件发送失败,请稍后激活');
		    }

	    }
	  	//个人中心首页
	  	public function person()
	  	{	

	  		if( !isset($_SESSION['userInfo']) ){

	  			$this->display('Sign/signin');

	  			exit;
	  		}       	

	  		$res = D('user')->showPersonal();
	  		
			$this->assign('user', $res);

			$this->display('Person/person');

			return $res;
	  	}

	  	//个人中心的个人信息页的修改和添加
	  	public function account()
	  	{	

	  		if (IS_GET){

	  			if( !isset($_SESSION['userInfo']) ){

	  				$this->display('Sign/signin');

	  				exit;
	  			}

	  			$res = D('user')->showPersonal();

	  			$this->assign('list', $res);

	  			$this->display('Person/account');
	  		}

	  		if (IS_AJAX){
	  			//保存个人信息
	  			$res = D('user')->savePersonal();

	  			echo $res;
	  		}

	  	
	  	}

	  	//页面注册
	  	public function signUp()
	  	{	
	  		$this->display('Sign/signup');
	  	}
	  	//页面登录
	  	
	  	public function signIn()
	  	{
	  		$this->display('Sign/signin');

	  	}
	  	//修改密码
	  	public function updatePassword()
	  	{

			if( !isset($_SESSION['userInfo']) ){

	  			$this->display('Sign/signin');

	  			exit;
	  		}

	  		if (IS_GET) {

				$this->display('Person/updatePassword');
				
	  		}		


	  		if (IS_AJAX) {

	  			$res = D('user')->updatePassword();

	  			echo $res;

	  		}
	  	

	  	}

	  	//添加地址和修改地址
	  	public function addAddress()
	  	{
	  		if( !isset($_SESSION['userInfo']) ){

	  			$this->display('Sign/signin');

	  			exit;
	  		}

	  		if (IS_GET){

	  			$res = D('user')->getAddress();

	  			$this->assign('list', $res);

	  			$this->display('Address/address');
	  		}

	  		if (IS_AJAX){

	  			$res = D('user')->addAddress();

	  			echo $res;

	  		}
	  		
	  	}


	} 