<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>商品分类管理</title>

<meta name="description" content='learn more write less'>
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/Project/project/Public/Backstage/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Project/project/Public/Backstage/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Project/project/Public/Backstage/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Project/project/Public/Backstage/css/admin.css">
<script src="/Project/project/Public/Backstage/js/jquery.min.js"></script>
<script src="/Project/project/Public/Backstage/js/app.js"></script>
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
<<<<<<< HEAD

   	<a href="#">会员管理</a>
   	<a href="#">奖金管理</a>
   	<a href="#">订单管理</a>
   	<a href="/Project/project/index.php/HMadmin/Goods/index">商品管理</a>
   	<a href="#">个人中心</a>
=======
   	
   	<a href="/Project/project/index.php/HMadmin/User/index">会员管理</a>          
   	<a href="#">奖金管理</a> 
   	<a href="#">订单管理</a>   
   	<a href="#">产品管理</a> 
   	<a href="#">个人中心</a> 
>>>>>>> 720a383ab48b8e6ce86fdca92e41a41e6f400092
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


    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：清风抚雪</div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="/Project/project/index.php/HMadmin/Goods/index">商品管理</a></h3>
      <ul>
        <li><a href="/Project/project/index.php/HMadmin/Goods/index">商品列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'>添加新商品</li>
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
        <li>未激活会员</li>
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
        <li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
        <li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
        <li></li>
        <li></li>


      </ul>
</div>
<!-- admin-content part end -->


 <div class="admin-biaogelist">
      <div class="listbiaoti am-cf">
        <ul class="am-icon-flag on">
          商品分类栏目管理
        </ul>
        <dl class="am-icon-home" style="float: right;">
          当前位置： 首页 > <a href="#">分类列表</a>
        </dl>
        <dl>
          <a href="/Project/project/index.php/HMadmin/Type/showAddType" type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" data-am-modal="{target: '#my-popup'}">添加商品一级分类</a>
        </dl>
        <!--data-am-modal="{target: '#my-popup'}" 弹出层 ID  弹出层 190行 开始  271行结束--> 
        
      </div>
      <form action="/Project/project/index.php/HMadmin/Type/deleteTypeAll" method="post" class="am-form am-g">
        <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
          <thead>
            <tr class="am-success">
              <th class="table-check"><input id="checkBox" type="checkbox" /></th>
              <th class="table-id am-text-center">ID</th>
              <th class="table-id am-text-center">父类ID</th>
              <th class="table-id am-text-center">路径</th>
              <th class="table-title">栏目名称</th>
              <th width="163px" class="table-set">操作</th>
            </tr>
          </thead>
          <tbody>
            <!-- 循环 -->
            <?php if(is_array($typeList)): foreach($typeList as $key=>$v): ?><tr>
                  <td><input type="checkbox" name="ids[]" value="<?php echo ($v["id"]); ?>" /></td>
                  <td class="am-text-center"><?php echo ($v["id"]); ?></td>
                  <td class="am-text-center"><?php echo ($v["pid"]); ?></td>
                  <td class="am-text-center"><?php echo ($v["path"]); ?></td>
                  <td>
                      <?php if($v["path"] != '0,'): ?>　├─<?php echo ($v["name"]); ?>
                      <?php else: echo ($v["name"]); endif; ?>
                  </td>
                  <td><div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                      <a href="/Project/project/index.php/HMadmin/Type/showAddType/id/<?php echo ($v["id"]); ?>/path/<?php echo ($v["path"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-success am-round am-icon-file" data-am-modal="{target: '#my-popups'}" title="添加子栏目"></a>
                        <button class="modifyBtn am-btn am-btn-default am-btn-xs am-text-secondary am-round" onclick="return false" data-id="<?php echo ($v["id"]); ?>" title="修改"><span class="am-icon-pencil-square-o" ></span></button>             
                        <a href="/Project/project/index.php/HMadmin/Type/deleteTypeOne/id/<?php echo ($v[id]); ?>" class="deleteBtn am-btn am-btn-default am-btn-xs am-text-danger am-round"  title="删除"><span class="am-icon-trash-o"></span></a>
                      </div>
                    </div></td>
                </tr><?php endforeach; endif; ?>
          <script>
            //修改按钮ajax
            $('.modifyBtn').on('click', function(){
              var name = prompt('请输入修改的名字');

              if (name == null  ) {
                return false;
              }
              var id = $(this).attr('data-id');
                $.ajax({
                  url:'/Project/project/index.php/HMadmin/Type/modifyTypeName/id/' + id + '/name/' + name,
                  success:function(data) {
                    if ( data == 1 ) {
                       location.reload();
                    }
                  }
                });
            });
            //全选
            $('#checkBox').on('click', function() {
                 var bool =  $('#checkBox').prop('checked');
                 $('input[type="checkbox"]').prop('checked', bool) ;
            });
          </script>
          
          </tbody>
        </table>
        <div class="am-btn-group am-btn-group-xs">
          <input type="submit"  class="am-btn am-btn-default" value="删除">
        </div>
       <!--  <ul class="am-pagination am-fr">
          <li class="am-disabled"><a href="#">«</a></li>
          <li class="am-active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul> -->
        <hr />
        <p>
        备注：操作图标含义
         <a class="am-text-success am-icon-file" title="添加子栏目"> 添加子栏目</a> 
         <a class="am-icon-pencil-square-o am-text-secondary" title="修改"> 修改栏目</a> 
         <a class="am-icon-trash-o am-text-danger" title="删除"> 删除栏目</a>
         

        
        
        
        
        </p>
      </form>

     
     





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