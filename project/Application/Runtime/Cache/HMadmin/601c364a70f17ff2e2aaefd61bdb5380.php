<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>商品管理</title>

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
        <li>未激活会员</li>
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
        <li><a href="/Project/project/index.php/HMadmin/XunSearch/index">迅搜</a></li>
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
      <ul class="am-icon-flag on"> 栏目名称</ul>

      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="/Project/project/index.php/HMadmin/Goods/Index">商品列表</a></dl>

      <dl>
        <a href="/Project/project/index.php/HMadmin/Goods/addGood"><button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> 添加产品</button></a>
      </dl>


    </div>

	<div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
  <ul>
    <li>
      <div class="am-btn-group am-btn-group-xs">
        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">产品分类</option>
          <option value="o">下架</option>
        </select>
      </div>
    </li>
    <li>
      <div class="am-btn-group am-btn-group-xs">
      <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
        <option value="b">产品分类</option>
        <option value="o">下架</option>
      </select>
      </div>
    </li>
    <li style="margin-right: 0;">
    	<span class="tubiao am-icon-calendar"></span>
      <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}"  readonly/>
    </li>
       <li style="margin-left: -4px;">
    	<span class="tubiao am-icon-calendar"></span>
      <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}"  readonly/>
    </li>

        <li style="margin-left: -10px;">
      <div class="am-btn-group am-btn-group-xs">
      <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
        <option value="b">产品分类</option>
        <option value="o">下架</option>
      </select>
      </div>
    </li>
    <li><input type="text" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索" /></li>
    <li><button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">搜索</button></li>
  </ul>
</div>


    <form class="am-form am-g" action="/Project/project/index.php/HMadmin/Goods/deleteAll" method="post">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-check"><input type="checkbox" name="checkboss" /></th>
                <th class="table-title">序号</th>
                <th class="table-title">商品名</th>
                <th class="table-title">价格</th>
                <th class="table-type">一级</th>
                <th class="table-type">描述</th>
                <th class="table-type">详情</th>
                <th class="table-type">状态</th>
                <th class="table-type">此商品图片详情</th>
                <th class="table-type">点击量</th>
                <th class="table-type">销售量</th>
                <th class="table-title">修改时间</th>
              <!--   <th class="table-author am-hide-sm-only">上架/下架 <i class="am-icon-check am-text-warning"></i> <i class="am-icon-close am-text-primary"></i></th>
                <th class="table-date am-hide-sm-only">修改日期</th> -->
                <th width="163px" class="table-set">操作</th>
              </tr>
            </thead>
            <tbody>
            <?php if(is_array($goodsList)): foreach($goodsList as $k=>$vo): ?><tr>
                <td><input type="checkbox" name="checkson[]" value="<?php echo ($vo["id"]); ?>" /></td>
                <!-- <td><input type="text" class="am-form-field am-radius am-input-sm"/></td> -->
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["price"]); ?></td>
                <td><?php echo ($vo["tid"]); ?></td>
                <!-- <td class="am-hide-sm-only"><i class="am-icon-check am-text-warning"></i></td> -->
                <td class="am-hide-sm-only"><?php echo ($vo["des"]); ?></td>
                <td class="am-hide-sm-only"><?php echo ($vo['detail'][0]["detail"]); ?></td>
                <td><?php echo ($vo["status"]); ?></td>
                <td><a href="/Project/project/index.php/HMadmin/Goods/goodsDetail/id/<?php echo ($vo["id"]); ?>">详情图</a></td>
                <td><?php echo ($vo["viewtimes"]); ?></td>
                <td><?php echo ($vo["saled"]); ?></td>
                <td><?php echo ($vo["addtime"]); ?></td>

                <td><div class="am-btn-toolbar" data-num="<?php echo ($k); ?>">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="/Project/project/index.php/HMadmin/Goods/goodsEdit/id/<?php echo ($vo["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round"><span class="am-icon-pencil-square-o"></span></a>
                      <!-- <button class="am-btn am-btn-default am-btn-xs am-text-warning  am-round"><span class="am-icon-copy"></span></button> -->
                      <a href="javascript:;" class="del am-btn am-btn-default am-btn-xs am-text-danger am-round"  data-id="<?php echo ($vo["id"]); ?>"><span class="am-icon-trash-o"></span></a>
                    </div>
                  </div></td>


              </tr><?php endforeach; endif; ?>


            </tbody>
          </table>

                 <div class="am-btn-group am-btn-group-xs">


              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus" style="color:lime"><a href="/Project/project/index.php/HMadmin/Goods/addGood" style="color:lime"> 新增</a></span></button>
              <button type="submit" class="delAll am-btn am-btn-default"><span class="am-icon-trash-o" style="color:red"> 批量删除</span></button>
            </div>

          <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>

            <script>
            // ajax删除
              var url = '/Project/project/index.php/HMadmin/Goods/ajaxDelete';

              $('.del').on('click', function () {

                console.log($('.del'));

                var that = $(this);

                // console.log($(this).attr('data-id'));

                $.get(url, {'id':$(this).attr('data-id')}, function (data) {

                  // console.log(data);
                  if (data == 1) {

                    that.parent().parent().parent().parent().remove();

                  }

                }, 'json');

              });

              //反选
              $('input[name="checkboss"]').on('click', function() {

                var inputs = $('input[name="checkson[]"]');

                var checked = false;

                var ids = '';

                for (var i=0; i<inputs.length; i++) {

                  inputs[i].checked = !inputs[i].checked;
                }

              });

              //delAll
              $('.delAll').click(function() {

                if (confirm('are you sure ?')) {
                  return true;

                } else {

                  return false;
                }
              });

            </script>


          <hr />
          <p>注：<span class="am-icon-pencil-square-o">编辑</span>&nbsp; <span class="am-icon-trash-o">删除</span></p>
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