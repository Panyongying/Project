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
	    		//登录成功
	    		if ($bool) {

	    			//写入SESSION
	    			$_SESSION['userInfo'] = $res;

	    			//如果用户已登录过不能多次写入登录信息表
	    			$rows = M('user_login_detail')->where('uid='.$res['id'])->find();

	    			if ($rows) {
	    				//如果用户之前已经登录过就修改它的登录信息
		    			$data['login_time'] = time();

						$data['login_IP'] = ip2long( $_SERVER['REMOTE_ADDR'] );

						$map['uid'] = $res['id'];

						$map['login_result'] = 1;

						M('user_login_detail')->where($map)->save($data);

	    			}else {
	    				//没有登录就写入信息
		    			$data['uid'] = $res['id'];
						
		    			$data['login_time'] = time();

		    			$data['login_result'] = 1;

						$data['login_IP'] = ip2long( $_SERVER['REMOTE_ADDR'] );
		    			
		    			M('user_login_detail')->add($data);

	    			}

	    			return ture;

	    			//登录失败
	    		}else{

	    			$data['uid'] = $res['id'];
						
		    		$data['login_time'] = time();

		    		$data['login_result'] = 2;

					$data['login_IP'] = ip2long( $_SERVER['REMOTE_ADDR'] );
		    			
		    		M('user_login_detail')->add($data);

	    			return false;
	    		}

	    	}else{

	    		return false;
	    	}
		}

		//查询用户的登录状态		
		public function saveUserStatus()
		{	
			$email = I('post.username');

	    	$res = $this->where('email='."'$email'")->find();

			$map['login_result'] = 2;

			$map['login_IP'] = ip2long( $_SERVER['REMOTE_ADDR'] );

			$map['uid'] = $res['id'];

			$time = time();

			$num = M('user_login_detail')->field('login_time')->where($map)->select();

			$lasttime = $num[0]['login_time'];
			//当过了3600秒后,用户登录表中的登录错误结果会自动删除.
			if ($time - $lasttime >= 1800){

				M('user_login_detail')->where($map)->delete();

			}	

			$num = M('user_login_detail')->field('login_time')->where($map)->select();
			
			$num = count($num);
			
			return $num;

		}
		//发送邮件修改密码
		public function findPassword()
		{				
			$mail = new \Org\Util\mailer\PHPMailer;
			$email = I('post.email');
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
			$mail->Subject = '找回H&M密码';//主题
			$mail->Body = "<span style='font-size:18px;'>您好,我们收到了你的账户的密码重置申请,如果您没有申请重置密码，请忽略该电子邮件，您的账户不会受到任何影响。</span><br><a href='http://127.0.0.1/obj-4.6/Project/project/index.php/Home/User/collectEmail/mail/$email/time/$time' style='color:red'>点击这里</a>
							<br>进入链接修改密码
							<br>请注意!该链接有效期只有半个小时。<br>
							此致， H&M 客户服务";
			$status = $mail->send();

			return $status;
		}

		//不知道密码的情况下修改密码
		public function savePassword()
		{
			$i = I('post.');

			$pwd = $i['pwd'];

			$email = $i['email'];

			$checkPwd = $i['checkPwd'];

			if ($pwd == $checkPwd){

				$data['password'] = password_hash($pwd, PASSWORD_DEFAULT);

				$res = $this->where('email='."'$email'")->save($data);

				return $res;

			}else {

				return false;
			}
		}

		//激活邮箱
		public function activation()
		{
			$mail = new \Org\Util\mailer\PHPMailer;
			$email = I('get.email');
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

		//拿到数据给个人中心	
		public function showPersonal()
		{
			$id = $_SESSION['userInfo']['id'];

			$res = M('user')->field('hm_user.id,hm_user.email,hm_user.addtime,hm_account.birthday,hm_account.nickname,hm_account.sex,hm_account.phone')->join('left join hm_account ON hm_account.uid = hm_user.id')->where("hm_user.id=$id")->find();

			$res['addtime'] = date('Y-m-d H:i:s',$res['addtime']);

			$arr = ['小姐','先生','保密'];

			$res['sex'] = $arr[$res['sex']];
			
			$res['birthyear'] = substr($res['birthday'],0,4);

			$res['birthmonth'] = substr($res['birthday'],4,2);

			$res['birthday'] = substr($res['birthday'],6);

			return $res;
		}

		//修改个人资料,如果开始account没有资料则为添加,如果有就为修改
		public function savePersonal()
		{	

			$id = I('post.id');

			$number = M('account')->field('uid')->where('uid='.$id)->find();
			//判断用户在account表是否有信息
			//有用户，用修改操作
			if ($number) {

				$year = I('post.birthyear');

				$month = I('post.birthmonth');

				$day = I('post.birthday');

				$data['birthday'] = $year.$month.$day;

				$data['phone'] = I('post.phone');

				$data['nickname'] = I('post.nickname');

				$data['sex'] = I('post.sex');

				$res = M('account')->where('uid='.$id)->save($data);


				return $res;
				//用户资料不在数据库中，用插入操作
			} else{

				$year = I('post.birthyear');

				$month = I('post.birthmonth');

				$day = I('post.birthday');

				$data['uid'] = $id;

				$data['nickname'] = I('post.nickname');

				$data['birthday'] = $year.$month.$day;

				$data['phone'] = I('post.phone');

				$data['sex'] = I('post.sex');

				$res = M('account')->add($data);



				return $res;

			}


		}

		//原密码修改密码
		public function updatePassword()
		{
			$id = $_SESSION['userInfo']['id'];

			$oldpass = I('post.oldpass');

			$newpass = I('post.newpass');

			$checkpass = I('post.checkpass');
			//修改密码与确认不一致
			if ( $newpass != $checkpass ) {

				return 2;

				exit;
			}

			$truePassword = $this->field('password')->where('id='.$id)->find();

			$truePassword = $truePassword['password'];

			$bool = password_verify($oldpass, $truePassword );

			if ($bool) {

				$data['password'] =  password_hash($newpass, PASSWORD_DEFAULT);

				$map['id'] = $id;

				$res = $this->where($map)->save($data);
				//修改成功
				if ($res == 1) {

					return 1;
					//修改失败
				} else {

					return 0;
				}

				//原密码输入错误
			} else {

				return 3;
			} 

		

		}
	}
