<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>添加管理员</title>

<meta name="description" content='learn more write less'>
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/Project/project/Public/Backstage/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Project/project/Public/Backstage/i/app-icon72x72@2x.png">
<link rel="stylesheet" href="/Project/project/Public/Dropzone/dropzone.css" />
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Project/project/Public/Backstage/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Project/project/Public/Backstage/css/admin.css">
<script src="/Project/project/Public/Backstage/js/jquery.min.js"></script>
<script src="/Project/project/Public/Backstage/js/app.js"></script>
<script src="/Project/project/Public/Dropzone/dropzone.js"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->






</head>

<body>

<!-- header part start -->
<header class="am-topbar admin-header">
    <div class="am-topbar-brand"><img src="/Project/project/Public/Backstage/i/logo.png"></div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

        <li class="am-dropdown tognzhi" data-am-dropdown>
        <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理　</button>
      <ul class="am-dropdown-content">

        <li class="am-dropdown-header">所有消息都在这里</li>



        <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
        <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
        <li><a href="#">未处理汇款</a></li>
        <li><a href="#">未发放提现</a></li>
        <li><a href="#">未发货订单</a></li>
        <li><a href="#">低库存产品</a></li>
        <li><a href="#">信息反馈</a></li>

      </ul>


   <li class="kuanjie">

   	<a href="/Project/project/index.php/HMadmin/User/index">会员管理</a>
   	<a href="#">奖金管理</a>
   	<a href="#">订单管理</a>
   	<a href="/Project/project/index.php/HMadmin/Goods/index">商品管理</a>
   	<a href="#">个人中心</a>
   	<a href="#">系统设置</a>
   </li>

   <li class="soso">

  <p>

  	   <select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
            <option value="b">全部</option>
            <option value="o">产品</option>
            <option value="o">会员</option>

       </select>

  </p>

    <p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
    <p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
   </li>




        <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
      </ul>
    </div>
</header>

<!-- header part end -->


<div class="am-cf admin-main">
<!-- left-nav part start -->
<div class="nav-navicon admin-main admin-sidebar">


    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<?php echo ($_SESSION['adminInfo']['name']); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="/Project/project/index.php/HMadmin/Goods/index">商品管理</a></h3>
      <ul>
        <li><a href="/Project/project/index.php/HMadmin/Goods/index">商品列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'><a href="/Project/project/index.php/HMadmin/Goods/addGood">添加新商品</a></li>
        <li><a href="/Project/project/index.php/HMadmin/Type/index">商品分类</a></li>
        <li>用户评论</li>
        <li>商品回收站</li>
        <li>库存管理 </li>
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li>订单列表</li>
        <li>合并订单</li>
        <li>订单打印</li>
        <li>添加订单</li>
        <li>发货单列表</li>
        <li>换货单列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="/Project/project/index.php/HMadmin/User/index">会员管理</a></h3>
      <ul>
        <li><a href="/Project/project/index.php/HMadmin/User/index">会员列表</a> </li>
        <li><a href="/Project/project/index.php/HMadmin/User/addUser">添加会员</a></li>
        <li><a href="/Project/project/index.php/HMadmin/User/inactive">未激活会员</a></li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="">权限管理</a></h3>
      <ul>

        <li><a href="/Project/project/index.php/HMadmin/Admin/index">管理员列表</a> </li>
        <li><a href="/Project/project/index.php/HMadmin/AuthGroup/index">管理组列表</a></li>
        <li><a href="/Project/project/index.php/HMadmin/AuthRule/index">权限列表</a></li>

        <li>团队系谱图</li>
        <li>会员推荐图</li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
      <ul>
        <li>站内消息 /留言 </li>
        <li>短信</li>
        <li>邮件</li>
        <li>微信</li>
        <li>客服</li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
      <ul>
        <li>数据备份</li>
        <li>邮件/短信管理</li>
        <li>上传/下载</li>
        <li>权限</li>
        <li>网站设置</li>
        <li>第三方支付</li>
        <li>提现 /转账 出入账汇率</li>
        <li>平台设置</li>
        <li>声音文件</li>
      </ul>
    </div>
    <!-- sideMenu End -->

    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:false,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script>
<!-- left-nav end start -->








</div>

<!-- admin-content part start -->
<div class=" admin-content">

    <div class="daohang">
      <ul>
        <li><a href="/Project/project/index.php/HMadmin/Index/index" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </a></li>
        <li></li>
        <li></li>
        <li></li>


      </ul>
</div>
<!-- admin-content part end -->


<div class="admin-biaogelist">
	
    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 添加管理员</ul>
      
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">添加管理员</a></dl>

      
      
    </div>
	
    <div class="fbneirong">
      <form method="post" class="am-form">
        
        <div class="am-form-group am-cf">
          <div class="zuo">管理员名：</div>
          <div class="you">
            <input type="text" class="am-input-sm"  name="name" placeholder="请输入管理员名">
          </div>
        </div>

        <div class="am-form-group am-cf">
          <div class="zuo">密码：</div>
          <div class="you">
            <input type="password" class="am-input-sm"  name="password" placeholder="请输入密码">
          </div>
        </div>

        <div class="am-form-group am-cf">
          <div class="zuo">确认密码：</div>
          <div class="you">
            <input type="password" class="am-input-sm"  name="repassword" placeholder="请再次输入密码">
          </div>
        </div>




        <div class="am-form-group am-cf">
          <div class="zuo">部门:</div>
          <div class="you">
            <?php if(is_array($authGroup)): foreach($authGroup as $key=>$v): ?><label style="margin-top:7px;margin-left:5px"><input  type="radio" name="group_id" checked value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></label><?php endforeach; endif; ?>
          </div>
        </div>
        
        
        <div class="zuo">状态：</div>
        <div class="you" style="margin-top: 5px;">
          <label class="am-checkbox-inline">
            <input type="radio" value="1" checked name="status">
            正常 </label>
          <label class="am-checkbox-inline">
            <input type="radio" value="2" name="status">
            禁用 </label>
            </div>
          <div class="am-form-group am-cf">
              <div class="you" style="margin-left: 11%;">
                  <a href="/Project/project/index.php/HMadmin/Admin/index" type="submit" class="am-btn am-btn-default am-radius">返回</a>&nbsp;  &raquo; &nbsp; <input type="submit" class="am-btn am-btn-success am-radius" value="提交">

              </div>
          </div>



        </div>
        
      </form>
    </div>
     
     





   <!--  <div class="foods">
    	<ul>版权所有@2015</ul>
    	<dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>
    </div> -->


</div>

</div>




</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Project/project/Public/Backstage/js/polyfill/rem.min.js"></script>
<script src="/Project/project/Public/Backstage/js/polyfill/respond.min.js"></script>
<script src="/Project/project/Public/Backstage/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Project/project/Public/Backstage/js/amazeui.min.js"></script>
<!--<![endif]-->



</body>
</html>