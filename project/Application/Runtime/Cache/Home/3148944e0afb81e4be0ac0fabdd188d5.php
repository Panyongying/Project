<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh" class="js history rgba no-touchevents lastchild nthchild oninput backgroundsize borderradius flexbox flexboxlegacy csstransforms csstransitions grunticon ng-scope" ng-app="hmApp">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
        </style>

            <script src="/Project/project/Public/Backstage/js/jquery.min.js"></script>

            <link rel="stylesheet" href="/Project/project/Public/show/icons.data.svg.css" media="all">
            <link rel="stylesheet" href="/Project/project/Public/show/shared.min.css" type="text/css">
            <link rel="stylesheet" href="/Project/project/Public/show/general.min.css" type="text/css">
            
            <link rel="stylesheet" href="/Project/project/Public/show/checkout.min.css" type="text/css">

            <link rel="stylesheet" href="/Project/project/Public/show/myhm.min.css" type="text/css">

            <link rel="shortcut icon" type="image/x-icon" media="all" href="/Project/project/Public/show/favicon.ico">
            <link href="/Project/project/Public/show/icons.data.svg.css" media="screen" rel="stylesheet" type="text/css">

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


       <title>Address Book | H&amp;M China</title>
</head>


    <body ng-controller="HmAppController" style="" class="ng-scope not-signed-in">

    <div class="parbase generatorScriptTouchpoint touchpoint"> </div>


        <header class="header-global"><!-- Header -->

            <!--AEMPUBPRDAP10-->

                    <div class="warehousemessage"></div>

                    <div class="wrapper" ng-init="hmClubEnabled=false; offersSpace=&#39;&#39;; hmClubServiceCacheDuration=0; hmRedirectPath=&#39;&#39;">
                        <a  href="/Project/project/index.php/Home/Index/index" title="HM.com" class="logotype" style='background-image: url("/Project/project/Public/show/sprites.png");'>
                        </a>
                    <div class="parbase topnav">

                    <nav class="primary-menu"><!-- Primary menu -->

                        <ul>
                            <?php if(is_array($OneList)): foreach($OneList as $key=>$vo): ?><li class="">
                                    <a id="nav-one" href="/Project/project/index.php/Home/Index/goods/pid/<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="lists"><?php echo ($vo["name"]); ?></a>

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
                            <a id="overcar" href="/Project/project/index.php/Home/cart/index" class="goto-shopping-bag rollover-toggle">
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
                                                                <a href="/Project/project/index.php/Home/Cart/index" class="button button-big button-secondary">
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

                                <span class="greeting-text"> 您好, <a class="goto-signed-in" href="/Project/project/index.php/Home/User/person" rel="noreferrer"><?php echo ($_SESSION[userInfo][email]); ?> </a> </span>


                                <a class="goto-my-hm" href="/Project/project/index.php/Home/User/person" rel="noreferrer">我的H&amp;M</a>

                                <a class="goto-sign-in" href="/Project/project/index.php/Home/User/logout">退出</a>
                        </div>

                              <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-not-signed-in" style="display:none;">
                                <?php else: ?>
                                <div class="signin-not-signed-in"><?php endif; ?>

                                <a class="goto-my-hm" href="/Project/project/index.php/Home/User/signIn" rel="noreferrer">我的H&amp;M</a>

                                <a href="javascript:;" id="homelogin" class="goto-sign-in rollover-toggle">登录/加入</a>
                                <div class="signin-rollover popdown row" id="bigdiv">
                                    <div class="inner">
                                      <div class="signin-rollover-login" id="showlogin">
                                          <form id="loginForm"class="responsive form-section ng-pristine ng-valid" action="/Project/project/index.php/Home/User/login" method="POST">
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
                                                        <a href="/Project/project/index.php/Home/User/forgetPassword" class="underline">忘了密码？</a>
                                                    </p>
                                                </div>
                                                <div class="input-group join">

                                                    	<input type="button" id="showAdd" class="large fluid secondary button" value="加入我们">
                                                </div>
                                            </form>
                                      </div>
                                      <div class="signin-rollover-join" id="showadd">
                                        	<section class="responsive create-account popdown-form">

                        	                    <form id="registerForm" action="/Project/project/index.php/Home/User/register" method="POST" class="responsive form-section ng-pristine ng-valid">
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

                        <form method="get" action="/Project/project/index.php/Home/User/searchGoods" class="ng-pristine ng-valid">
                        		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        		<input id="main-search" type="text"  name="keyword" placeholder="搜索产品" minlength="1" maxlength="200" value=""  class="ui-autocomplete-input" autocorrect="off" spellcheck="false" autocomplete="off">
                                
                        </form>
                        <span class="magnify" style="background-image: url('/Project/project/Public/show/sprites.png');"></span>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;">

                        </ul>
                    </div>

                </div>


                        <span class="js-cookie-message-url"></span>

                    </div>
        </header><!-- /Header -->
<!-- HeaderLife -->


         
	
                                  
<main role="main" class="responsive my-hm">

<!-- 	// <script src="/Project/project/Public/address/distpicker.data.js"></script>
	// <script src="/Project/project/Public/address/distpicker.js"></script>
	// <script src="/Project/project/Public/address/main.js"></script> -->

	<div class="wrapper">    
		<nav class="breadcrumbs">
			<ul>
				<li>
					
					<a href="/zh_cn/">HM.COM</a>
				</li>

				<li class="">

					<a href="/zh_cn/my-account"> 您的账户</a>
				</li>
				<li class="active">

					<a href="#" onclick="return false;"> 地址簿</a>
				</li>
			</ul>
		</nav>
			
		<nav class="section navigation menu " role="navigation">
			<ul role="menu">
				<li class="item" role="presentation" tabindex="0">
					<a href="/Project/project/index.php/Home/User/person" role="menuitem">概览</a>				
				</li>
				<li class="item" role="presentation" tabindex="-1">
					<a href="/Project/project/index.php/Home/User/account" role="menuitem">个人信息</a>
							
				</li>	
				<li class="item" role="presentation" tabindex="-1">
					<a href="/zh_cn/my-account/orders" role="menuitem">订单</a>
							
				</li>
				<li class="current item" role="presentation" tabindex="-1">
					<a href="/zh_cn/my-account/address-book" role="menuitem">地址簿</a>
							
				</li>
				<li class="item" role="presentation" tabindex="-1">
					<a href="/zh_cn/my-account/payment-details" role="menuitem">银行卡信息</a>
							
				</li>
			</ul>
		</nav>
		<div class="layout layout-eight" >
			<div class="hidden modal-content" id="address-validation-popup" ng-show="getContext().showPopup && getContext().popupType =='ADDRESSES'" ng-cloak>
				<div class="modal-text">
				<div class="address-validation">
				<h1 class="heading">{{getContext().popupHeader}}416165165</h1>
				<p ng-bind-html="getContext().popupMessage"></p>
				<form>
					<div class="address-validation-addresses">
						<div class="address-validation-un-validated">
							<h3>您已输入：</h3>
							<div class="address-validation-address">
								<input type="radio" name="validation-address" value="-1" id="un-validated-address" ng-model="addresses[addressInEdit].selectedAddress">
								<label for="un-validated-address">
								<span ng-bind-html="addresses[addressInEdit].formattedAddress"></span>
								<br/>
								  <a class="address-validation-edit modalclose underline" ng-show="verifiedAddresses.length>0" ng-click="getContext().showPopup = false; addresses[addressInEdit].selectedAddress=-1" >编辑</a>
								</label>
							</div>
						</div>
						<div class="address-validation-suggestions" ng-show="verifiedAddresses.length>0">
							<h3>您是否指：</h3>
							<div class="address-validation-address-list " ng-class="{'scrollable' : verifiedAddresses.length>4}" >
								<div class="address-validation-address" ng-repeat="address in verifiedAddresses">
									<input type="radio" name="validation-address" value="{<?php echo ($index); ?>}" id="validated-address-{<?php echo ($index); ?>}" ng-model="addresses[addressInEdit].selectedAddress">
									<label for="validated-address-{<?php echo ($index); ?>}" ng-bind-html="address.formattedAddress">
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="buttons clearfix">
						<button ng-click="getContext().showPopup = false" class="modalclose button button-secondary" ng-show="getContext().popupType=='ADDRESSES' && !verifiedAddresses.length>0"/>编辑</button>
						<button ng-click="submitClosePopup()" class="modalclose button"/>确定</button>
					</div>
				</form>			
			</div>
		</div>
	</div>

	<div aria-hidden="true" id="remove-address-popup" class="hidden modal-content">
		<div class="modal-text"  style="text-align:center">
		<h1 class="heading">删除地址</h1>
		<p class="text">您确实想删除这个地址吗？</p>
		<div class="buttons clearfix">
			<button ng-click="closePopup()" class="modalclose button secondary">取消</button>
			<button ng-click="removeAddress()" class="modalclose button primary">确定</button>
		</div>
		</div>
	</div>


	<header class="page-header">
		<h1>地址簿</h1>
		<p>您可在结帐页添加新地址。</p><br />
	</header>
		<?php if(empty($list) != true ): if(is_array($list)): foreach($list as $k=>$v): ?><div class="form-group"  >		
				<div ng-show="visibility.delivery2">
					<div class="default-fieldset" >
						<label for="default_00" class="preceding-label">
							默认
						</label>
						<input type="radio" value="delivery2" id="default_02" name="use-as-default" class="radio-input" >
					</div>
					<form  id="delivery2AddressForm" name="delivery2AddressForm" class="form-section new-form delivery2Form" >
					    <fieldset class="form-part">
							<legend class="heading"> 邮递地址:&nbsp;<?php echo ($k+1); ?></legend>
							

							<div class="inputwrapper">
								<label class="label" for="checkout.firstName"> 名 </label>
							
									<span class="static" style="color:#555"> 11232</span>		
							</div>


							<div class="inputwrapper" >
								<label class="label" for="checkout.lastName"> 姓 </label>
				

								<span class="static" style="color:#555"> 212</span>
					
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.province"> 省份 </label>
								
								<span class="static" style="color:#555">2121</span>
								
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.town"> 城市 </label>
								

								<span class="static" style="color:#555">54545 </span>        				
							</div>


							<div class="inputwrapper">
								<label class="label" for="checkout.district"> 区 </label>
								

								 
								<span class="static"style="color:#555" >545454 </span>

							</div>


		
							<div class="inputwrapper" >
								<label class="label" for="checkout.line1"> 地址栏 </label>
								
								
								<span class="static" style="color:#555"> 54545 </span>
									
								
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.line2">电话 </label>
								
								
								<span class="static" style="color:#555"> 54545</span>				
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.postalCode"> 邮政编码 </label>
									
								
								<span class="static" style="color:#555" > <?php echo ($v[zip]); ?> </span>
										
							</div>
	 						
							<div class="inputwrapper" >

								<label class="label" for="address-book.country"> 国家</label>			
								
								<span class="static" style="color:#555"> 中国 </span>

							</div>
						</fieldset>
						<div class="button-group">
							<button class="button" type="button" >修改地址</button> 
							<a class="secondary button hideInfo" href="#remove-address" > 删除地址</a> 
							<button class="secondary button hideInfo" type="button" > 取消</button> 
							<button class="button save-form hideInfo" type="button" > 保存信息</button>
						</div>
					</form>
				</div>
			</div><?php endforeach; endif; endif; ?>

			<div class="form-group"  data-toggle="distpicker">		
				<div ng-show="visibility.delivery2">
					<div class="default-fieldset" id="default">
						<label for="default_00" class="preceding-label">
							默认
						</label>
						<input type="radio" value="delivery2" id="default_02" name="use-as-default" class="radio-input" >
					</div>
					<form  id="delivery2AddressForm" name="delivery2AddressForm" class="form-section new-form delivery2Form" >
					    <fieldset class="form-part" id="field" >
							<legend class="heading"> 邮递地址:&nbsp;</legend>
							

							<div class="inputwrapper">
								<label class="label" for="checkout.firstName"> *名 </label>
							
								<input 
									required
									type="text"
									id="delivery2-firstName" 
									name="firstName" 
									maxlength="40"  
									class="text-input field firstName " 
									autocomplete="given-name"	
									/>
								<div class="input-info">   </div>
									<span class="static" > </span>		
							</div>


							<div class="inputwrapper" >
								<label class="label" for="checkout.lastName"> *姓 </label>
				

								<input 
									required
									type="text"
									id="delivery2-lastName" 
									name="lastName" 
									maxlength="150"  
									class="text-input field lastName " 
									autocomplete="family-name"	
									/>
								<div class="input-info">  </div>
								<span class="static"> </span>
					
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.province"> *省份 </label>
								<div class="select-primary delivery2provincecontainer ">

								    <select 
								    	class=""
										required
										name="province" 
										data-province"---- 选择省 ----"
										id="province"
										>

								        	<option  value=''> 选择省份 </option>
								    </select>
								</div>
								<div class="input-info">   </div>
								<span class="static"></span>
								
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.town"> *城市 </label>
								

								<div class="select-primary delivery2towncontainer">

								    <select 
								    	class="" 
								    	data-city="---- 选择市 ----" 
										required
										name="town" 	
										id="delivery2-town" 

									>
								        	<option value=''> 选择城市 </option>
								    </select>
								</div>
								<div class="input-info" >   </div>
								<span class="static"> </span>        				
							</div>


							<div class="inputwrapper">
								<label class="label" for="checkout.district"> *区 </label>
								<div class="select-primary delivery2districtcontainer" >

								    <select 
								    	data-district="---- 选择区 ----"
								    	class=""	
										required
										name="district" 		
										id="delivery2-district" 
										>
								        	<option value=''> 选择地区 </option>
								    </select>
								</div>
								<div class="input-info" > 如果在下拉式列表中找不到您所在的区，请选择“其他区”，并在地址1中输入您所在的区 </div>
								<span class="static" > </span>

							</div>


		
							<div class="inputwrapper" >
								<label class="label" for="checkout.line1"> *地址栏 </label>
								
								<div class="input-field-info" >
									
									<span class="input-field-info-description hidden"> 此字段内需要填写中文字符 </span>
								</div>

								<input 
									required
									type="text"
									id="delivery2-line1" 
									name="line1" 
									maxlength="40"  
									class="text-input field line1 " 
									autocomplete="address-line1"
																		
									/>
								<div class="input-info" > 街道，门牌号,公寓，座，单元，楼层等 </div>
								<span class="static" >  </span>
									
								
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.line2">*电话 </label>
								
								<div class="input-field-info"  >	
									<span class="input-field-info-description hidden"> 此字段内需要填写数字</span>
								</div>

								<input 	
									type="number"
									id="delivery-phone" 
									name="line2" 
									class="text-input field line2 " 
									autocomplete="address-line2"
									oninput="if(value.length>11)value=value.slice(0,11)" 				
																		
									/>
								<div class="input-info" >*收件人电话 </div>
								<span class="static"> </span>				
							</div>

							<div class="inputwrapper">
								<label class="label" for="checkout.postalCode"> *邮政编码 </label>
									
								<div class="input-field-info">	
									<span class="input-field-info-description hidden"> 此字段内需要填写数字 </span>
								</div>

								<input 	
									required
									type="number"
									id="delivery2-postalCode" 
									name="postalCode" 
									oninput="if(value.length>6)value=value.slice(0,6)"  
									class="text-input field postalCode to-hankaku" 
									autocomplete="postal-code"
								
										
									/>
								<div class="input-info" > 输入邮编 例如 518053 </div>
								<span class="static" >  </span>
										
							</div>
	 						
							<div class="inputwrapper" >

								<label class="label" for="address-book.country"> 国家</label>			
								<input class="text-input field" readonly value="中国"/>
								<spanclass="static"></span>

							</div>
						</fieldset>


						<div class="button-group">
							<button class="button" id="addInfo" type="button" >添加新地址</button> 
							<a class="secondary button hideInfo" href="#remove-address" id="deleteInfo"> 删除地址</a> 
							<button class="secondary button hideInfo" type="button" id="cancelInfo"> 取消</button> 
							<button class="button save-form hideInfo" type="button" id="saveInfo"> 保存信息</button>
						</div>
					</form>
				</div>
			</div>

			
		


		</div> 
	</div>

	<script>
		$('#field').hide();
		$('#default').hide();
		$('.hideInfo').hide();

		$('#addInfo').click(function () {

			$(this).hide();

			$('#field').show();

			$('#cancelInfo').show();

			$('#saveInfo').show();

		});

		$('#cancelInfo').click(function () {

			$('#addInfo').show();

			$('.hideInfo').hide();

			$('#field').hide();

		});
		//添加地址
		$('#saveInfo').click(function () {

			that = $(this);

			if ($('#delivery2-firstName').val() == '' || $('#delivery2-lastName').val() == '') {

				that.next('span').remove();

				that.after("<span style='color:red'>请填写姓或者名!");

				return false;
			}

			if ( $('#province').val() == '') {

				that.next('span').remove();

				that.after("<span style='color:red'>请选择所在省份!");

				return false;

			}
			if ( $('#delivery2-town').val() == '') {

				that.next('span').remove();

				that.after("<span style='color:red'>请选择所在的市区!");

				return false;

			}



			if ( $('#delivery2-line1').val() == '') {

				that.next('span').remove();

				that.after("<span style='color:red'>请填写你所在的地址!");

				return false;
			}


			var	res = RegCheck($('#delivery-phone').val(),/^1(3|4|5|7|8)\d{9}$/);

			if (res == null) {

				$(this).next('span').remove();

				$(this).after('<span style="color:red">电话号码有误</span>');

				return false;
			}


			var	res = RegCheck($('#delivery2-postalCode').val(),/^[1-9]\d{5}$/);

			if (res == null) {

				$(this).next('span').remove();

				$(this).after('<span style="color:red">邮政编码有误</span>');

				return false;
			}


			that.next('span').remove();

			$.post('/Project/project/index.php/Home/User/addAddress', {
				'firstName':$('#delivery2-firstName').val(),
				'lastName':$('#delivery2-lastName').val(),
				'province':$('#province').val(),
				'town': $('#delivery2-town').val(),
				'district':$('#delivery2-district').val(),
				'addr':$('#delivery2-line1').val(),
				'phone':$('#delivery-phone').val(),
				'code':$('#delivery2-postalCode').val(),

			}, function (data){

				if (data == 1){

					show_msg('添加成功');

				} else {

					show_msg('添加失败');
				}

			}, 'json' );

		});


		function show_msg(msg){	

			 $('body').append('<div class="sub_err" style="position:absolute;top:60px;left:0;width:500px;z-index:999999;"></div>');

				var htmltop='<div class="bac" style="padding:8px 0px;border:1px solid #090;width:100%;margin:0 auto;background-color:white;color:#0d0d0d;border:2px black solid;text-align:center;font-size:16px;">';

				var htmlfoot = '</div>';

				$('.sub_err').html(htmltop+msg+htmlfoot); 

				var left=($(document).width()-500)/2;

				$('.sub_err').css({'left':left+'px'});

				var scroll_height=$(document).scrollTop();

				 $('.sub_err').animate({'top': scroll_height+120},100);

				 msgdsq=setTimeout(function(){	

					$('.sub_err').animate({'top': scroll_height+80},100);

					setTimeout(function(){	

				 	 $('.sub_err').remove();	

			   		},100);	 
			   
				}, "1200");  
		}

		//进行正则判断
        function RegCheck(str, pattern){

            var res = str.match(pattern);

            return res;
        }


	</script>
</main>



        <footer class="footer-global responsive"><!-- Footer -->


            <div class="layout">


                <a class="button button-chat" target="_blank" href="/Project/project/index.php/Home/CustomService/index">在线客服
                    <span>嗨我们在这里如果您需要任何帮助</span>
                </a>
                <?php if($_SESSION['userInfo']['status'] == 1): ?><a class="button button-chat" style="margin-right:1150px" href="/Project/project/index.php/Home/User/active/email/<?php echo ($_SESSION['userInfo']['email']); ?>">激活邮箱
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
                        <a href="/Project/project/index.php/Home/User/signUp" class="button">注册</a></div>


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

                var url = '/Project/project/index.php/Home/User/base';

                var that = $(this);

                that.parent().addClass('open');

                $('.primary-menu-sub-menu').show();

                //给个标志判断是否请求过ajax了,是，就跳过，否就请求
                if ( that.attr('ajax-exists') != 'true' ) {

                    $.post(url, {'pid':that.attr('data-id')}, function(data) {

                        var res = '<ul style="float:left;column-count:5;" class="primary-menu-category">';

                        for (var i=0; i<data.length; i++) {

                            res += '<li style="float:left;margin-left:40px;padding:10px;width:150px" ><a href="/Project/project/index.php/Home/Index/goodsList/tid/'+data[i].id+'/pid/'+that.attr('data-id')+'">'+ data[i].name +'</a></li>';

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