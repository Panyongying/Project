<?php
	
	namespace Home\Model;

	use Think\Model;

	Class UserModel extends Model
	{
		//把表单中username映射到数据表的name字段
		protected $_map = array(

			
			'useremail' => 'email',
			'userpass' => 'password',
		);

		//使用自动完成
		protected $_auto  = array(
			//会自动调用myHash()方法，然后将myHash的返回的结果插入到数据库
			array('password', 'Hash', 1, 'callback'),

			array('addtime','time',1,'function'), // addtime字段在更新的时候写入当前时间戳

		);


		//自动验证
		protected $_validate = array(

			//如果定义了字段映射的话，第一个是数据表的字段名
			array('email', 'require', '邮箱不能为空'),

			array('password', 'require', '密码不能为空'),

			array('email', '', '该邮箱已经存在！',0,'unique',1),

			array('email', 'email', '你给的不是邮箱!'),

			array('password','6,12','密码长度在6-12之间!',3,'length'), // 验证密码长度

			array('checkPwd','password','确认密码不正确',0,'confirm'),

			array('termsAndConditions', 'on', '请阅读隐私政策',1, 'equal'),

			 
		);


		protected function Hash()
		{
			return password_hash(I('post.userpass'), PASSWORD_DEFAULT);
		}

		//邮箱发送
		public function sendEmail()
		{
			$mail = new \Org\Util\mailer\PHPMailer;
			$email = I('post.useremail');
			$inner = md5(mt_rand(0,999));
			$time = time();
			$mail->SMTPDebug = false;
			$mail->isSMTP();
			$mail->SMTPAuth=true;
			$mail->Host = 'smtp.qq.com';
			$mail->SMTPSecure = 'ssl';
			//设置ssl连接smtp服务器的远程服务器端口号 可选465或587
			$mail->Port = 465;
			$mail->Hostname = 'localhost';
			$mail->CharSet = 'UTF-8';
			$mail->FromName = 'H&M';//寄件人名
			$mail->Username ='472671496';//smtp邮件服务器
			$mail->Password = 'ngszqfcsinfjcbdg';//stmp连接认证不用改
			$mail->From = '472671496@qq.com';//发件人
			$mail->isHTML(true); 
			$mail->addAddress($email,'');//收件人
			$mail->Subject = '激活H&M邮箱';//主题
			$mail->Body = "请点链接激活你的邮箱"."<a href='http://127.0.0.1/obj-4.6/Project/project/index.php/Home/User/register/mail/$email/time/$time'>".$inner."</a>";
			$status = $mail->send();
			

			
			return $status;
		}

		//登录
		public function signIn()
		{
			$email = I('post.username');

	    	$password = I('post.password');

	    	$res = $this->where('email='."'$email'")->find();

	    	$truePassword = $res['password'];

	    	unset($res['password']);

	    	if($res) {

	    		$bool = password_verify($password, $truePassword );

	    		if ($bool) {

	    			$_SESSION['userInfo'] = $res;


	    			return ture;

	    		}else{

	    			return false;
	    		}

	    	}else{

	    		return false;
	    	}
		}

	}
