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

	}
