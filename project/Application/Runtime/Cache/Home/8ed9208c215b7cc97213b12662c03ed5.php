<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh" class="js history rgba no-touchevents lastchild nthchild oninput backgroundsize borderradius flexbox flexboxlegacy csstransforms csstransitions grunticon ng-scope" ng-app="hmApp">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
        </style>

            <script src="/xxoooo/Project/project/Public/Backstage/js/jquery.min.js"></script>

            <link rel="stylesheet" href="/xxoooo/Project/project/Public/show/icons.data.svg.css" media="all">
            <link rel="stylesheet" href="/xxoooo/Project/project/Public/show/shared.min.css" type="text/css">
            <link rel="stylesheet" href="/xxoooo/Project/project/Public/show/general.min.css" type="text/css">
            
            <link rel="stylesheet" href="/xxoooo/Project/project/Public/show/checkout.min.css" type="text/css">

            <link rel="stylesheet" href="/xxoooo/Project/project/Public/show/myhm.min.css" type="text/css">

            <link rel="shortcut icon" type="image/x-icon" media="all" href="/xxoooo/Project/project/Public/show/favicon.ico">
            <link href="/xxoooo/Project/project/Public/show/icons.data.svg.css" media="screen" rel="stylesheet" type="text/css">

            <!-- to include grunticon -->
    	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <meta name="viewport" content="width=1000px">

            <meta name="keywords">
            <meta name="description">
            <meta property="og:title" content="时尚服饰，一流品质，合理价位—— H&amp;M CN | H&amp;M CN">
            <meta property="og:description">


        	<meta property="og:site_name" content="H&amp;M">
        	<meta property="og:type" content="website">

    	    <meta property="fb:app_id" content="1433700643510498">


       
        <title>时尚服饰，一流品质，合理价位—— H&amp;M CN | H&amp;M CN</title>
       
</head>


    <body ng-controller="HmAppController" style="" class="ng-scope not-signed-in">

    <div class="parbase generatorScriptTouchpoint touchpoint"> </div>


        <header class="header-global"><!-- Header -->

            <!--AEMPUBPRDAP10-->

                    <div class="warehousemessage"></div>

                    <div class="wrapper" ng-init="hmClubEnabled=false; offersSpace=&#39;&#39;; hmClubServiceCacheDuration=0; hmRedirectPath=&#39;&#39;">
                        <a  href="/xxoooo/Project/project/index.php/Home/Index/index" title="HM.com" class="logotype" style='background-image: url("/xxoooo/Project/project/Public/show/sprites.png");'>
                        </a>
                    <div class="parbase topnav">

                    <nav class="primary-menu"><!-- Primary menu -->

                        <ul>
                            <?php if(is_array($OneList)): foreach($OneList as $key=>$vo): ?><li class="">
                                    <a id="nav-one" href="/xxoooo/Project/project/index.php/Home/Index/goods/pid/<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="lists"><?php echo ($vo["name"]); ?></a>

                                        <div id="nav-one-div" class="primary-menu-sub-menu" style="display: none;">
                                            <div class="appends primary-menu-sub-menu-inner">

                                                <!-- <div class="menucolumn"> -->
                                                    <!-- <div class="primary-menu-categories"> -->
                                                            <!-- <div class="parbase navgroup section menucategory"> -->
                                                                <!-- <div class="primary-menu-category "> -->

                                                                <!-- </div> -->
                                                            <!-- </div> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->




                                            </div>
                                        </div><!-- primary-menu-sub-menu topnav 1 -->
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </nav><!-- /Primary Menu -->



                    </div>


             <nav class="services-menu"><!-- Services menu -->

                <div class="linklist parbase linklist1">
                    	<ul class="list">


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service.html">客户服务</a></li>


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/newsletter.html">订阅时尚资讯 </a></li>


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/download-app.html">下载 APP</a></li>

                    	</ul>
                </div>

                <div class="linklist parbase linklist2">

                    	<ul class="list">

                    		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/shopping-at-hm/store-locator.html">H&amp;M门店信息</a></li>

                    	</ul>
                 </div>


            </nav>
            <!-- /Services menu -->
            <nav class="session-menu"><!-- Session menu -->

                <div class="session-menu-top-row">

                        <a href="http://www2.hm.com/zh_cn/favourites" class="js-favorite-entry-point favorite-entry-point is-favorite icon-favorites-dark icon">
                            收藏
                        </a>

                    <span class="parbase minicart">
                        <div class="shopping-bag rollover-popdown is-loaded" data-cart="/zh_cn/minicart/view">
                            <a id="overcar" href="/xxoooo/Project/project/index.php/Home/cart/index" class="goto-shopping-bag rollover-toggle">
                               购物袋
                               (<span class="shoppingbag-item-count">
                                   <?php if($data = 'empty'): ?>0
                                   <?php else: echo ($data["num"]); endif; ?>
                               </span>)
                           </a>
                           <div id="showcart"class="shopping-bag-rollover row popdown">
                        		<div class="grid col-4">
                        			<div class="shopping-bag-rollover-scroll-up disabled">
                        				<div class="navigation-arrow-up"></div>
                        			</div>
                        			 <div class="shopping-bag-rollover-items-wrapper ">
                                            <!-- 购物车为空时候 -->
                                            <?php if($data = 'empty' ): ?><div  class="cart_modal_popup empty-popup-cart">
                            						<dl class="clearfix">
                            							<dd><h2>您的购物袋是空的</h2></dd>
                            						</dl>
                            					</div>

                            				    <div class="shopping-bag-rollover-summary">
                            						<dl class="clearfix">
                            							<dt>订单价值：</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            						<dl class="shopping-bag-rollover-order-total">
                            							<dt>总价:</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            					</div>
                                            <?php else: ?>
                                                <div class="grid col-4">
                                                    <div class="shopping-bag-rollover-scroll-up disabled">
                                                        <div class="navigation-arrow-up"></div>
                                                    </div>
                                                    <div class="shopping-bag-rollover-items-wrapper ">
                                                        <ul class="shopping-bag-rollover-items" style="top: 0px;">
                                                                <?php if(is_array($data['cartList'])): foreach($data['cartList'] as $key=>$ov): ?><li class="shopping-bag-rollover-item clearfix clickable-container has-link ">
                                                                            <a href="">
                                                                                <img alt="Straight Regular Jeans" class="shopping-bag-rollover-item-image" height="126" width="84" src="<?php echo ($ov["pic"]); ?>" title="<?php echo ($ov["name"]); ?>">
                                                                                    </a>

                                                                            <div class="shopping-bag-item-product">

                                                                                <h3 class="product-item-headline"><?php echo ($ov["name"]); ?></h3>
                                                                                <div id="redWhitePrices_0506590001001" class="product-item-price ">
                                        <span id="main_price" class="main_price_0506590001001">
                                                            ¥<?php echo ($ov["price"]); ?></span>
                                                    <small id="white_price_0506590001001"></small>
                                                </div>
                                        <dl class="clearfix">
                                                                                    <dt>数量：</dt>
                                                                                    <dd><?php echo ($ov["gnum"]); ?></dd>
                                                                                    <dt>颜色：</dt>
                                                                                    <dd><?php echo ($ov["color"]); ?></dd>
                                                                                    <dt>尺码：</dt>
                                                                                    <dd><?php echo ($ov["size"]); ?></dd>
                                                                                </dl>
                                                                            </div>
                                                                            <div class="shopping-bag-item-total-price product-item-price">
                                                                                总价:&nbsp;
                                                                                ¥<?php echo ($ov["price * $ov"]["gnum"]); ?></div>
                                                                        </li><?php endforeach; endif; ?>
                                                                    </ul>
                                                            </div>
                                                            <div class="shopping-bag-rollover-scroll-down">
                                                                <div class="navigation-arrow-down"></div>
                                                            </div>
                                                            <div class="shopping-bag-rollover-summary">
                                                                <dl class="clearfix">
                                                                    <dt>订单价值：</dt>
                                                                    <dd>¥<?php echo ($ov["totalPirce"]); ?></dd>
                                                                </dl>
                                                                <dl class="shopping-bag-rollover-order-total">
                                                                    <dt>总价:</dt>
                                                                    <dd>¥<?php echo ($ov["totalPirce"]); ?></dd>
                                                                </dl>

                                                                <a href="/zh_cn/checkout" class="button button-big">
                                                                结账</a>
                                                                <a href="/xxoooo/Project/project/index.php/Home/Cart/index" class="button button-big button-secondary">
                                                                    购物袋</a>
                                                                <div ng-if="''">
                                                                 <p class="text"></p>
                                                              </div>
                                                            </div>
                                                        </div><?php endif; ?>
                        			</div>
                        	   </div>
                            </div>
                        </div>
                    </span>

                </div>
                <div class="signin rollover-popdown">
                    <div class="parbase account">

                        <div class="signin rollover-popdown" >
                            <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-signed-in" style="display:block">
                            <?php else: ?>
                            <div class="signin-signed-in"><?php endif; ?>

                                <span class="greeting-text"> 您好, <a class="goto-signed-in" href="/xxoooo/Project/project/index.php/Home/User/person" rel="noreferrer"><?php echo ($_SESSION[userInfo][email]); ?> </a> </span>


                                <a class="goto-my-hm" href="/xxoooo/Project/project/index.php/Home/User/person" rel="noreferrer">我的H&amp;M</a>

                                <a class="goto-sign-in" href="/xxoooo/Project/project/index.php/Home/User/logout">退出</a>
                        </div>

                              <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-not-signed-in" style="display:none;">
                                <?php else: ?>
                                <div class="signin-not-signed-in"><?php endif; ?>

                                <a class="goto-my-hm" href="/xxoooo/Project/project/index.php/Home/User/signIn" rel="noreferrer">我的H&amp;M</a>

                                <a href="javascript:;" id="homelogin" class="goto-sign-in rollover-toggle">登录/加入</a>
                                <div class="signin-rollover popdown row" id="bigdiv">
                                    <div class="inner">
                                      <div class="signin-rollover-login" id="showlogin">
                                          <form id="loginForm"class="responsive form-section ng-pristine ng-valid" action="/xxoooo/Project/project/index.php/Home/User/login" method="POST">
                                                <h3>登录</h3>

                                                <div class="input-group">
                                                    <label for="txt-signin-rollover-email">用户名:</label>
                                                    <input name="username" type="email"  id="txt-signin-rollover-email">
                                                </div>
                                                <div class="input-group">
                                                    <label for="txt-signin-rollover-password">密码:</label>
                                                    <input name="password" type="password" id="txt-signin-rollover-password">
                                                </div>


                                                <div class="input-group">
                                                    <input type="submit" class="button-big" value="登录">
                                                    <p>
                                                        <a href="/xxoooo/Project/project/index.php/Home/User/forgetPassword" class="underline">忘了密码？</a>
                                                    </p>
                                                </div>
                                                <div class="input-group join">

                                                    	<input type="button" id="showAdd" class="large fluid secondary button" value="加入我们">
                                                </div>
                                            </form>
                                      </div>
                                      <div class="signin-rollover-join" id="showadd">
                                        	<section class="responsive create-account popdown-form">

                        	                    <form id="registerForm" action="/xxoooo/Project/project/index.php/Home/User/register" method="POST" class="responsive form-section ng-pristine ng-valid">
                        	                        <fieldset class="form-part">
                        		                        <legend class="heading">创建H&amp;M账户 </legend>
                        		                        <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-email">电子邮件:</label>
                        				                    <input type="email" class="email-input" name="useremail" id="txt-signin-rollover-join-email">
                        					            </div>
                        		                        <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-password">密码:</label>
                        					                <input type="password" name="userpass" id="txt-signin-rollover-join-password" class="password-input">
                        					            </div>
                        					            <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-password-confirm">确认密码:</label>
                        					                <input type="password" id="txt-signin-rollover-join-password-confirm" name="checkPwd" class="password-input" >
                        					            </div>
                        				            </fieldset>

                        	                        <fieldset class="form-part">
                        		                        <ul class="input-list">


                                                            <li class="inputwrapper">
                        					                    <input type="checkbox" class="checkbox-input" id="chb-signin-rollover-join-terms" name="termsAndConditions" >
                                                        		<label class="checkbox-label" for="chb-signin-rollover-join-terms">
                                                        			<span id="privacy-policy">是的，我同意<a class="underline overlay-trigger" href="http://www2.hm.com/zh_cn/customer-service/privacy-link.html"> 隐私政策</a></span>

                                                        		</label>
                        					                </li>
                        					            </ul>
                        					            <div class="button-group">
                        					                <button type="submit" class="button large" data-validation-text="该表格不能提交。请检查您的信息">加入我们</button>
                        					                <button type="button" class="big secondary button large" id="showLogin">返回到登录</button>
                        					            </div>
                        	                        </fieldset>
                        	                    </form>
                                            </section>
                                      </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="country-info">
                    <div class="countrylanguage parbase">

                        <div class="country-info">

                            <a class="country-name overlay-trigger " data-layout="confirm" data-modal-scrollup="false" href="javascript:;">Change Country</a> |  ¥

                        </div>
                    </div>
                </div>

            </nav>
                    <!-- /Session menu -->
                <div class="autosuggestsearch parbase">
                    <div id="search-field" class="ui-widget">

                        <form method="get" action="/xxoooo/Project/project/index.php/Home/Order/searchGoods" class="ng-pristine ng-valid">
                        		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        		<input id="main-search" type="text"  name="keyword" placeholder="搜索产品" minlength="1" maxlength="200" value=""  class="ui-autocomplete-input" autocorrect="off" spellcheck="false" autocomplete="off">
                                
                        </form>
                        <span class="magnify" style="background-image: url('/xxoooo/Project/project/Public/show/sprites.png');"></span>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;">

                        </ul>
                    </div>

                </div>


                        <span class="js-cookie-message-url"></span>

                    </div>
        </header><!-- /Header -->
<!-- HeaderLife -->


        
<style>
	#distpicker select{
		background: transparent;
		width: 200px;
		padding: 5px;
		font-size: 16px;
		border: 1px solid #ccc;
		height: 34px;
		margin-bottom: 10px; 
	}

	#distpicker input{
		background: transparent;
		width: 200px;
		padding: 5px;
		font-size: 16px;
		border: 1px solid #ccc;
		height: 34px;
		margin-bottom: 10px; 
	}

	#distpicker button{
		border: 1px solid #ccc;
		color: white;
		background: black;
		width: 200px;
		margin: 0 auto;
	}
</style>
<main role="main" class="">
			<div class="wrapper">    
				<nav class="breadcrumbs">
					<ul>
	<li>
	
	
	
		<a href="/xxoooo/Project/project/index.php/Home/Index/index">HM.COM</a>
	</li>

	<li class="">

			<a href="" onclick="return false;"> 结账</a>
				</li>
	<li class="active">

			<a href="" onclick="return false;"> 结账</a>
				</li>
	</ul>
</nav>
				<header class="checkout-header">
	<h1>结账</h1>
	<ul class="checkout-breadcrumbs items-4 clearfix">
	<li class="item">1. 登录</li>
	<li class="item item-current">2. 发货 &amp; 支付</li>
	<li class="item">3. 确认订单</li>
	<li class="item item-last">4. 非常感谢</li>
	</ul></header>
<div class="responsive status-message  expandable common-expandable is-open notice ng-hide" ng-show="&#39;&#39;">
	<div class="message icon icon-exclamation"></div>
	<button class="close icon-close-white hidden-text">Close</button>
</div>

<div class="input-fields-info has-border">请注意：地址栏请用中文填写</div>
<div class="layout ng-scope" ng-controller="CheckoutContextController">	
			<div class="responsive status-message is-open notice ng-hide" ng-show="getContext().voucherRemoved">
				<div class="message icon icon-exclamation">
					The reward has been removed from your shopping bag.</div>
			</div>
	<div class="row">
		<div class="grid col-8">





			<section id="checkoutDeliveryPartDiv" class="box checkout-section checkout-delivery-section responsive" ng-class="{'box-inactive': getContext().closeDeliverySection}">
		<header class="box-headline checkout-delivery-section-header">
			<h1 class="heading">快递</h1>
		</header>
		<div id="checkoutDeliveryPartForm" name="checkoutDeliveryPartForm" class="box-content ng-dirty ng-invalid ng-invalid-required ng-valid-maxlength">
			<fieldset class="delivery-preferences">	
				<legend class="sub-sub-heading">选择您的首选运送方式</legend>
				<p class="text">阅读我们的&nbsp;
				<a href="/zh_cn/customer-service/shipping-and-delivery.html" class="underline overlay-trigger">发货信息</a></p>	
					<!-- ngRepeat: deliveryMode in getContext().deliveryModeList --><fieldset ng-repeat="deliveryMode in getContext().deliveryModeList" id="delivery-address-0" class="delivery-option check-option js-check-option ng-scope checked single-option" ng-class="{'checked' : newDeliveryAddress.deliveryMode == deliveryMode.code,
										  'check-option-disabled' : deliveryMode.paymentNotAvailable,
										  'delivery-option-timeslot-home' : deliveryMode.timeSlotInterval != null &amp;&amp; deliveryMode.timeSlotInterval.length > 0,
										  'single-option' : deliverySingleOption}">		  
						<label for="deliveryMode-0" class="check-option-label delivery-option-label">
							<input type="radio" ng-value="deliveryMode.code" class="js-update-on-change delivery-option-radio js-check-option-input ng-pristine ng-untouched ng-valid" id="deliveryMode-0" ng-model="newDeliveryAddress.deliveryMode" ng-disabled="isDisabledActions() || !deliveryMode.active" ng-change="setDeliveryMode(deliveryMode)" name="13" value="home-delivery-CN">
							<strong class="delivery-option-type check-option-label-text-primary ng-binding">送货上门/备用地址</strong>
							<span class="delivery-option-expedience check-option-label-text-secondary ng-binding">标准 2-7 个工作日</span>	
							<strong ng-hide="( deliveryMode.supportHazmat || (newDeliveryAddress.blackListed &amp;&amp; newDeliveryAddress.deliveryMode == deliveryMode.code) ) || ((deliveryMode.addressBlackListed || !deliveryMode.pssEnable) &amp;&amp; !deliveryMode.paymentNotAvailable)" class="icon-warning check-option-warning ng-hide" title="运送方式如带有此标志，表示您订单中的部分单品将被排除在外。"></strong>					
						</label>	
						<div class="delivery-option-details check-option-details" ng-switch="" on="deliveryMode.type">	
							<div class="responsive status-message is-open thin  ng-hide" data-background-color="middle-grey" ng-show="deliveryMode.onlineServicePackageInfo!=null">
								













<div class="message icon icon-info ng-binding">
	  
</div></div>
							<!-- ngIf: deliveryMode.type == 'address' --><p ng-if-start="deliveryMode.type == 'address'" class="ng-scope"></p>
							





<!-- ngIf: deliveryMode.pssEnable && deliveryMode.fastDelivery && !(deliveryMode.tommorrowHoliday || deliveryMode.warehouseCutoffTimePassed) && !deliveryMode.warehouseLimitReached -->
<!-- ngIf: deliveryMode.pssEnable && deliveryMode.fastDelivery && !(deliveryMode.tommorrowHoliday || deliveryMode.warehouseCutoffTimePassed) && deliveryMode.warehouseLimitReached -->
<!-- ngIf: deliveryMode.pssEnable && deliveryMode.fastDelivery && (deliveryMode.tommorrowHoliday || deliveryMode.warehouseCutoffTimePassed) -->
<p class="ng-binding ng-scope"></p>	
							<!-- ngIf: !deliveryMode.fastDelivery --><p class="text ng-scope" ng-if="!deliveryMode.fastDelivery">您的包裹将被送至居住地址。</p><!-- end ngIf: !deliveryMode.fastDelivery -->	
							<div style="margin-top: 10px;" ng-show="getContext().deliveryModeForced" class="ng-scope ng-hide">The payment method you’ve chosen&nbsp;requires your package to be delivered to&nbsp;your home address. In order to change&nbsp;delivery address, change payment to card.</div>

<fieldset>	
	<legend class="sub-sub-heading">更换地址</legend>
	<p class="text">选择现有地址，或添加新地址。</p>
	<p class="text">您可在<a href="/xxoooo/Project/project/index.php/Home/User/account"> 我的H&amp;M </a>中编辑地址</p>
	<h3>使用现有地址</h3>
	<ul class="choose-delivery-address">
	<?php if($addr == 'empty'): ?><li>暂无地址，请按下方按钮添加</li>
	<?php else: ?>
		<?php if(is_array($$addr)): foreach($$addr as $key=>$ov): ?><li class="item js-check-option check-option delivery-option ng-scope">
				<label for="delivery-address-<?php echo ($ov["id"]); ?>" class="delivery-option-label">
					<input type="radio" name="addrid" id="delivery-address-<?php echo ($ov["id"]); ?>" class="js-update-on-change delivery-option-radio js-check-option-input ng-pristine ng-untouched ng-valid" 
						<?php if($ov["status"] == 1): ?>checked<?php endif; ?>

					 value="<?php echo ($ov["id"]); ?>">
					<span class="vcard read-only-delivery-address">
						<span class="item fn ng-binding" itemprop="name"><?php echo ($ov["recname"]); ?></span>
						<span class="adr ng-binding" ng-bind-html="address.formattedAddress"><?php echo ($ov["addr"]); ?><br><?php echo ($ov["zip"]); ?><br><?php echo ($ov["phone"]); ?></span>
					</span>
				</label>
			</li><?php endforeach; endif; endif; ?>
	
	</ul>
	<button class="button secondary newAddr-btn">新建地址</button>
</fieldset><p ng-if-end="" class="ng-scope"></p><!-- end ngIf: deliveryMode.type == 'address' -->	
						<!-- ngSwitchWhen: places -->				
						 <!-- ngSwitchWhen: timeSlot -->
					</div>	
					













<!-- ngIf: ((!getContext().deliveryAddress.supportHazmat && !(deliveryMode.code).indexOf('pickup-in-place') > -1) || !deliveryMode.supportHazmat) && !deliveryMode.addressBlackListed && !openChangeAddress && getContext().hasHazmat -->
<!-- ngIf: !deliveryMode.supportCOD -->				
<!-- ngIf: deliveryMode.addressBlackListed && !deliveryMode.paymentNotAvailable -->
<!-- ngIf: deliveryMode.paymentNotAvailable -->
<!-- ngIf: !deliveryMode.pssEnable && !deliveryMode.pssNoResponse -->
<!-- ngIf: deliveryMode.pssNoResponse -->	</fieldset><!-- end ngRepeat: deliveryMode in getContext().deliveryModeList -->
			</fieldset>
			<fieldset class="delivery-telephone" style="margin-bottom: 0px">
	<span ng-hide="!getContext().deliveryMode.phoneNumberMandatory" class="">
		<h3>发货通知</h3>
				承运人需要了解该信息，以便就送货事宜联系您。</span>			
</fieldset>
</div>


</section>

<div class="checkout-place-order-section">
	<div id="placeOrderFormId" class="ng-pristine ng-valid">
	
		<input id="placeorderbutton" class="button-big place-order-button" value="立即支付" data-not-added-text="" data-validation-text="付款未完成。请再次检查您的信息。" type="submit">
		
		<div class="checkout-encryption-info">所有的数据将被编码</div>
		<p class="fine-print">请您付款以便完成购物流程。</p>

		<!-- CR 18208 Add Loader End for other markets-->
				<div id="desktopPaymentConfirmationLoader" class="payment-loader js-payment-loader" aria-hidden="true" style="display: none;">
				<div class="payment-loader-wrapper">
					<div class="payment-loader-container">
						<span class="loader"></span>
						<h2 class="title"> 我们正在处理您的付款</h2>
						<p class="text"> 这可能会花费一点时间，请耐心等候。请勿关闭窗口或点击后退键</p>
					</div>
				</div>
				</div>
		  <!-- CR 18208 Add Loader Key End desktop-->

	</div>
</div>
</div>





<div class="grid col-4">
	<div class="box checkout-order" id="checkoutOrderPartDiv">
		<h2 class="box-headline">
			您的订单</h2>
		<ul class="checkout-order-items">
		<?php if(is_array($$data["cartList"])): foreach($$data["cartList"] as $key=>$ov): ?><li class="checkout-order-item ng-scope" id="<?php echo ($ov["gid"]); ?>">
	<img alt="<?php echo ($ov["name"]); ?>" title="<?php echo ($ov["name"]); ?>" class="checkout-order-item-image" src="<?php echo ($ov["pic"]); ?>">

<div class="checkout-order-item-product-info">
		<div class="product-item-headline ng-binding"><?php echo ($ov["name"]); ?></div>
		<div class="product-item-price" ng-class="{&#39;product-item-price-discount&#39;: entry.strikedPrice}">
<span ng-if="!entry.strikedPrice" class="ng-scope">
				<span id="main_price_0401021001" class="main_price ng-binding">
					¥<?php echo ($ov["price"]); ?>
				</span>
				<small id="white_price_0401021001"></small>
			</span><!-- end ngIf: !entry.strikedPrice -->
		</div> 
		
	<dl class="checkout-order-item-product-details">
		<dt>数量：</dt>
		<dd class="ng-binding"><?php echo ($ov["gnum"]); ?></dd>
		<dt>颜色：</dt>
		<dd class="ng-binding"><?php echo ($ov["color"]); ?></dd>
		<dt>尺码：</dt>
		<dd class="ng-binding"><?php echo ($ov["size"]); ?></dd>
	</dl>
	
	<div class="shopping-bag-item-total-price product-item-price">
		总价：&nbsp;
		
<span ng-if="entry.totalPrice !== 0" class="ng-binding ng-scope">
			¥<?php echo ($ov["gnum * $ov"]["price"]); ?>
		</span>
		
	</div>
</div>
</li><?php endforeach; endif; ?>
		</ul>
		<div class="box-content">
			<table class="order-total">
	<tbody>
		<tr>
			<th scope="row">订单价值：</th>
			<td><span id="newPriceSubtotal" class="ng-binding">¥<?php echo ($ov["totalPrice"]); ?></span></td>
		</tr>		
	</tbody>
	<tfoot>
		<tr>
			<th scope="row">总价:</th>
			<td id="total_price_of_basket" class="ng-binding">
				¥<?php echo ($ov["totalPrice"]); ?>
		    	</td>
		   </tr>
		 </tfoot>
</table>
			<p class="fine-print">
					您可以取消订单，前提是您希望退回的商品在不迟于您收到订单商品后的30天内送达给我们。您可在此找到退换货政策全文&nbsp;
					<a class="overlay-trigger underline" href="https://www2.hm.com/zh_cn/customer-service/return-link.html" onclick="returnRefundTealiumCheckout();">退货和退款</a>
				</p>
			</div>
		<script type="text/javascript">
				 function returnRefundTealiumCheckout(){				
						 if(typeof(utag) !== 'undefined'){ 			
							utagTrackEventPayment("view_return_refund_info_giftcard", "View info about return and refund  policies" , "Gift card" , "");
							} 
					  } 
		</script>
	</div>
	



    
    
<!-- Only Content -->
<!--AEMPUBPRDAP14-->
<div class="parsys main"><section class="legaltext parbase section">
<h1 class="sub-sub-heading">退货和退款</h1>
<p class="text">如果要退货，请自行安排快递并承担快递费用。<a href="https://www2.hm.com/zh_cn/customer-service/return-link.html" class="underline overlay-trigger" adhocenable="false">在此处</a>了解更多有关退货和退款的信息。<br>
您的发票将会在您提出要求后，为您提供。在&nbsp;<a href="https://www2.hm.com/zh_cn/customer-service/fapiao.html" class="underline overlay-trigger" adhocenable="false">这里</a>&nbsp;了解更多有关发票的信息<a adhocenable="false" href="https://www2.hm.com/zh_cn/customer-service/return-link.html#main_reference_7bd8" class="underline overlay-trigger" target="_blank"></a></p>	</section>

</div>

<!-- /Only Content -->

</div>
</div>

<div aria-hidden="true" id="generic-error-popup" class="hidden modal-content">
	<div class="modal-text">
		<h1 class="heading">出错了</h1>
		<p style="text-align:center">该表格不能提交。请检查您的信息</p>
		<div class="sticky button-group">
			<button ng-click="closePopup()" class="modalclose button">确定</button>
		</div>
	</div>
</div>






<div id="voucher-modal" class="hidden modal-content">
	<div class="modal-text">
		<h1 class="heading">H&amp;M CLUB REWARDS</h1>
		<div class="info-message">
			<span class="icon icon-info"></span>
			<p class="text">Please note that discount codes will not be applied if a voucher is added.</p>
		</div>
		<p class="club-points">H&amp;M Club Points: <strong class="points ng-binding"></strong></p>
		<p class="club-points-text">You can spend your points on one of the following vouchers</p>
		<p class="sub-sub-heading">H&amp;M CLUB REWARDS</p>	
		<div class="selectables-overflow voucher-list">
			<ul class="selectable-items">
				<!-- ngRepeat: onlineVoucher in getContext().onlineVoucherList -->
				<li ng-hide="getContext().onlineVoucherList.length"> 
					<p class="text">There are currently no rewards to display.</p> 
				</li>
				<li ng-show="getContext().onlineVoucherList.length &amp;&amp; !getContext().onlineVoucherAvalaible" class="ng-hide"> 
					<p class="text">At the moment, you do not have enough Club Points to use on Rewards. Don’t worry though! The more you shop, the more points you get. Explore all the H&amp;M Club Rewards on the H&amp;M Club Page.</p> 
				</li>
			</ul>
		</div>
	</div>

</div>

<div class="hidden modal-content" id="voucher-error-popup">
	<div class="modal-text">
		<div class="shopping-bag-message">
			<h1 class="heading ng-binding"></h1>
			<p ng-bind-html="getContext().popupMessage" class="ng-binding"></p>
		</div>	
	</div>
</div>

<input id="cybersourceStatus" type="hidden" value="">
<input id="cybersourceReasonCode" type="hidden" value="">
<input id="cart-not-modified" class="hidden" value="true">
<style>
      .checkout-address-text{
            word-wrap: break-word;
      };
</style></div>
		</main>
<div id="zzc" style="display: none;width: 100%;height: 100%;position: fixed;top: 0px;left: 0px;z-index: 9999;background: rgba(0,0,0,0.5);">
	<div style="margin-top: 100px;">
		<div style="width: 239px;background: white;border: 2px solid black;padding: 20px;position: absolute;left: 50%;margin-left: -120px;">
			<h2>添加地址</h2>
			<div id="distpicker" style="font-size: 16px">
				<div>
					省份:<select data-am-selected name="province"></select>
				</div>
				<div>
					城市:<select data-am-selected name="town"></select>
				</div>
				<div>
					区　:<select data-am-selected name="district"></select>
				</div>
				<div>
					地址:<input type="text" name="addr" placeholder="请输入地址">
				</div>
				<div>
					姓名:<input type="text" name="recname" placeholder="请输入收件人">
				</div>
				<div>
					电话:<input type="text" name="phone" placeholder="请输入电话号码">
				</div>
				<div>
					邮编:<input type="text" name="code" placeholder="请输入邮编">
				</div>
				<div style="width: 200px;margin: 0 auto">
					<button id="ad-btn">添加</button>
					<span style="color: red"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/xxoooo/Project/project/Public/Backstage/js/distpicker.data.js"></script>
<script src="/xxoooo/Project/project/Public/Backstage/js/distpicker.js"></script>
<script src="/xxoooo/Project/project/Public/Backstage/js/main.js"></script>
<script>
	$("#distpicker").distpicker({
  		autoSelect: false
	});

	$(".newAddr-btn").click(function () {
		$("#zzc").css('display', 'block');

		return false;
	});

	$("#zzc div div").click(function (event) {
		event.stopPropagation();
	});

	$("#zzc").click(function () {
		$('#zzc').css('display', 'none');
		$('#ad-btn').siblings().remove();
	});

	$('#ad-btn').click(function () {
		var that = $(this);

		var flag = true;

		var district = $("select[name='district']");
		var province = $("select[name='province']");

		if (province.val() == '') {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请选择省份</span>');
			flag = false;
		}

		var town = $("select[name='town']");

		if (town.val() == '') {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请选择城市</span>');
			flag = false;
		}

		var addr = $("input[name='addr']");

		if (addr.val() == '') {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请填写你的地址</span>');
			flag = false;
		}

		if (addr.val().length > 50) {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">地址太长了~(>_<)~</span>');
			flag = false;
		}

		var recname = $("input[name='recname']")

		if (recname.val().length > 20) {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">名字太长了~(>_<)~</span>');
			flag = false;
		}

		if (recname.val() == '') {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请填写你的姓名</span>');
			flag = false;
		}

		var phone = $("input[name='phone']");

		var reg = /^1[34578]\d{9}$/;
		if (!reg.test(phone.val())) {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请填写正确的电话号码</span>');
			flag = false;
		}

		var code = $("input[name='code']")

		var reg = /^\d{6}$/;
		if (!reg.test(code.val())) {
			$(this).siblings().remove();
			$(this).after('<span style="color: red">请填写正确的邮编</span>');
			flag = false;
		}

		if (flag) {
			$(this).attr('disabled', true);
			$(this).css("background", '#ccc');

			$.post(
				'/xxoooo/Project/project/index.php/Home/order/addAddress',
				{
					recname:recname.val(),
					province:province.val(),
					town:town.val(),
					district:district.val(),
					addr:addr.val(),
					phone:phone.val(),
					code:code.val()
				},
				function (data) {
					if (res == 2) {
						that.attr('disabled', false);
						that.css('background', 'black');
						that.siblings().remove();
						that.after('<span style="color: red">系统繁忙，请稍后再试</span>');
					} else {
						that.attr('disabled', false);
						that.css('background', 'black');
						that.siblings().remove();
						$('#zzc').css('display', 'none');
						$('.choose-delivery-address').child().remove();
						$('.choose-delivery-address').append(data);
					}
				},
				'json'
			);
		}
	});

	// 确认付款操作
	$('#placeorderbutton').click(function () {
		if ($('input[name="addrid"]').val() == undefined) {
			$(this).prev().remove();
			$(this).before('<span class="input-info invalid button-validation-message">请检查您的地址信息。</span>');

			return false;
		}

		$(this).prev().remove();

		$('#desktopPaymentConfirmationLoader').css('display', 'block');

		$.post(
			'/xxoooo/Project/project/index.php/Home/Order/queryOrder',
			{
				addrid:$('input[name="addrid"]').val()
			},
			function (data) {
				if (data == 2) {
					$('#desktopPaymentConfirmationLoader').child().child().child().remove();
					$('#desktopPaymentConfirmationLoader').child().child().append('<p class="text"> 系统繁忙，请刷新页面重新提交</p>');
				}
			},
			'json'
		);
	});
</script>





        <footer class="footer-global responsive"><!-- Footer -->


            <div class="layout">


                <a class="button button-chat" target="_blank" href="/xxoooo/Project/project/index.php/Home/CustomService/index">在线客服
                    <span>嗨我们在这里如果您需要任何帮助</span>
                </a>
                <?php if($_SESSION['userInfo']['status'] == 1): ?><a class="button button-chat" style="margin-right:1150px" href="/xxoooo/Project/project/index.php/Home/User/active/email/<?php echo ($_SESSION['userInfo']['email']); ?>">激活邮箱
                    <span>点击此处激活</span>
                </a><?php endif; ?>

                <div class="four modules footer-menu footer-content">

                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">部门</h4>

                	<ul class="list">


                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/ladies.html">女士</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/men.html">男士</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/kids.html">儿童</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/home.html">家居</a></li>

                	</ul>

                </nav>



                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">公司信息</h4>

                	<ul class="list">


                		       <li class="item"><a class="link" href="http://career.hm.com/content/hmcareer/zh_cn.html" target="_blank">在H&amp;M的职业发展</a></li>


                		       <li class="item"><a class="link" href="http://about.hm.com/zh/About.html" target="_blank">关于H&amp;M</a></li>



                		       <li class="item"><a class="link" href="http://about.hm.com/zh_cn.html" target="_blank">我们的职责</a></li>

                		       <li class="item"><a class="link" href="http://about.hm.com/zh/news/newsroom.html" target="_blank">媒体</a></li>


                		<li class="item"><a class="link" href="http://about.hm.com/zh/About/Investor-Relations.html" target="_blank">投资者关系</a></li>


                		<li class="item"><a class="link" href="http://about.hm.com/zh/About/Corporate-Governance.html">Corporate governance</a></li>



                	</ul>

                </nav>



                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">帮助</h4>

                	<ul class="list">


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service.html">客户服务</a></li>


                		       <li class="item"><a class="link" href="https://www2.hm.com/zh_cn/login">我的H&amp;M</a></li>


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/shopping-at-hm/store-locator.html">H&amp;M门店信息</a></li>


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/legal-and-privacy/privacy-link.html">隐私及法律条款</a></li>

                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/contact.html">联系我们</a></li>

                	</ul>

                </nav>


                    <section class="footer-newsletter">


                        <div class="newsletter parbase newslettersignupform">
                        <h4 class="footer-heading">订阅通讯</h4>
                        <p class="text">立即注册，获得85折优惠</p>
                        <a href="/xxoooo/Project/project/index.php/Home/User/signUp" class="button">注册</a></div>


                    </section>
                </div>



                <ul class="footer-social footer-content">


                	<li class="item">
                		<a class="hidden-text icon icon-social-weibo-white" target="_blank" title="微博" href="http://www.weibo.com/hm">微博</a>
                	</li>

                	<li class="item">
                		<a class="hidden-text icon icon-social-youku-white" target="_blank" title="优酷" href="http://tvs.youku.com/hm">优酷</a>
                	</li>



                </ul>


                <div class="footer-copyright footer-content">
                    <p class="text js-footer-truncate">
                		该网站的内容受到版权保护，是属于 H&amp;M Hennes &amp; Mauritz AB的财产。上海市公安局黄浦分局备案3101010011576259
                	</p>
                	<button class="js-footer-more link" data-read-less-label="收起详情" aria-hidden="true">READ MORE</button>



                </div>

                <div class="footer-market-info">

                        <span>
                            <a href="http://www.miibeian.gov.cn/" class="footer-market-info" target="_blank">
                                沪ICP备09046754号
                        	</a>
                    	</span>


                        <span>
                            <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120330101136556" class="footer-cn-business-license" target="_blank">
                                上海工商
                        	</a>
                    	</span>


                </div>

                <a href="javascript:;" class="footer-logotype icon icon-hm-white hidden-text">H&amp;M</a>
            </div>

        </footer><!-- /Footer -->

        <script>

            var datas = [];

            //鼠标进去触发
            $('.lists').on('mouseover', function() {

                var url = '/xxoooo/Project/project/index.php/Home/Order/base';

                var that = $(this);

                that.parent().addClass('open');

                $('.primary-menu-sub-menu').show();

                //给个标志判断是否请求过ajax了,是，就跳过，否就请求
                if ( that.attr('ajax-exists') != 'true' ) {

                    $.post(url, {'pid':that.attr('data-id')}, function(data) {

                        var res = '<ul style="float:left;column-count:5;" class="primary-menu-category">';

                        for (var i=0; i<data.length; i++) {

                            res += '<li style="float:left;margin-left:40px;padding:10px;width:150px" ><a href="/xxoooo/Project/project/index.php/Home/Index/goodsList/tid/'+data[i].id+'/pid/'+that.attr('data-id')+'">'+ data[i].name +'</a></li>';

                        }
                        res += '</ul>';

                        datas[that.attr('data-id')] = res;

                        $('.appends').html(datas[that.attr('data-id')]);

                        that.attr('ajax-exists', 'true');

                    }, 'json');

                } else {

                    $('.appends').html(datas[that.attr('data-id')]);
                }

                //鼠标出来触发
            }).on('mouseout', function() {
                

                $(this).parent().removeClass('open');

                $('.primary-menu-sub-menu').hide();
            });

            $('.primary-menu-sub-menu').on('mouseover', function() {

                $('.primary-menu-sub-menu').show();
            }).on('mouseout', function() {

                $('.primary-menu-sub-menu').hide();
            });











            $('#homelogin').click(function () {


                $('#bigdiv').show();

                $('#showlogin').show();

                if($('#showadd').css('display') == 'block') {

                    $('#showlogin').hide();
                }

            });


            $(document).click(function () {

                $('#bigdiv').hide();

                $('#showlogin').hide();

                $('#showadd').hide();


            });


            $('#showAdd').click(function () {

                $('#showadd').show();

                $('#showlogin').hide();

            });

            $('#showLogin').click(function () {

                $('#showadd').hide();

                $('#showlogin').show();

            });

            var menu = document.getElementById('showlogin');

            var home = document.getElementById('homelogin');

            var add = document.getElementById('showadd');

            menu.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            add.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            home.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            //注册表单验证
            $('#txt-signin-rollover-join-email').blur(function (){

                if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入邮箱账号!</span>');

                } else {

                    $(this).next('span').remove();
                }

            });

            $('#txt-signin-rollover-join-password').blur(function () {

              if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入密码!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>请输入6-12位密码!</span>');


            });

            $('#registerForm').submit( function () {

                var evalue = $('#txt-signin-rollover-join-email').val();

                var pvalue = $('#txt-signin-rollover-join-password').val();

                var chckPwd = $('#txt-signin-rollover-join-password-confirm').val();

                //判断邮箱格式
                var res = RegCheck(evalue,/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/);




                if (res === null) {

                   $('#txt-signin-rollover-join-email').next('span').remove();

                   $('#txt-signin-rollover-join-email').after('<span style="color:red";>*邮箱格式不正确!</span>');

                   return false;

                }


                //判断密码的长度
                if (pvalue.length < 6 || pvalue.length > 12) {

                    $('#txt-signin-rollover-join-password').next('span').remove();

                    $('#txt-signin-rollover-join-password').after('<span style="color:red";>*请输入6-12位密码!</span>');

                    return false;

                }

                // 判断用户有没阅读隐私政策
                if (!$('input[name=termsAndConditions]:checked').val()){

                    alert('请阅读隐私政策');

                    return false;
                }


                //验证密码
                var res = RegCheck(pvalue, /^\w{6,12}$/);

                if (res === null) {

                   $('#txt-signin-rollover-join-password').next('span').remove();

                   $('#txt-signin-rollover-join-password').after('<span style="color:red";>*密码由数字字母下划线组成!</span>');

                   return false;

                }

                //验证密码与确认密码是否一致
                
                if (pvalue != chckPwd) {

                   $('#txt-signin-rollover-join-password').next('span').remove();

                   $('#txt-signin-rollover-join-password').after('<span style="color:red";>*密码与确认密码不相同!</span>');

                   return false;

                }



                //进行正则判断
                function RegCheck(str, pattern){


                    var res = str.match(pattern);

                    return res;
                }

            });

            //登录表单验证

            $('#txt-signin-rollover-email').blur(function () {

                if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入邮箱账号!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>账号为您的邮箱</span>');


            });


            $('#txt-signin-rollover-password').blur(function () {

              if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入密码!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>请输入6-12位密码!</span>');


            });

            $('#loginForm').submit( function () {

                var uvalue = $('#txt-signin-rollover-email').val();

                var passvalue = $('#txt-signin-rollover-password').val();
                //判断账号是否为空
                if (uvalue == ''){

                    $('#txt-signin-rollover-email').next('span').remove();

                    $('#txt-signin-rollover-email').after('<span style="color:red";>*请输入邮箱账号!</span>');

                    return false;
                }
                //判断密码是否为空
                if (passvalue == ''){

                    $('#txt-signin-rollover-password').next('span').remove();

                    $('#txt-signin-rollover-password').after('<span style="color:red";>*请输入密码!</span>');

                    return false;

                }


            });
            //购物车迷你显示

            $('#overcar').mouseover(function () {

               $('#showcart').show();

            });



            $(document).click(function () {

                $('#showcart').hide();

            });

            var showcart = document.getElementById('showcart');
            var overcar = document.getElementById('overcar');

            overcar.onclick = function (e) {

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#overcar标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }


            showcart.onclick = function (e) {

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#showcart标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }




        </script>
    </body>
 </html>