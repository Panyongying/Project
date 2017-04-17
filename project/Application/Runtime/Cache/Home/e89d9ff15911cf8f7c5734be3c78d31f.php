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


       <title>H&M.Personal</title>
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
	<div class="wrapper">    


		<nav class="breadcrumbs">
			<ul>
				<li>
				
					<a href="/Project/project/index.php/Home/Index/index">HM.COM</a>
				</li>

				<li class="">

				<a href="javascript:;"> 您的账户</a>
							</li>
				<li class="active">

					<a href="#" onclick="return false;"> 个人信息</a>
				</li>
			</ul>
		</nav>
				
		<nav class="section navigation menu " role="navigation">
			<ul role="menu">
				<li class="item" role="presentation" tabindex="0">
						<a href="/Project/project/index.php/Home/User/person" role="menuitem">
							概览</a>
					</li>
				<li class="current item" role="presentation" tabindex="-1">
						<a href="" role="menuitem">
							个人信息</a>
					</li>
				<li class="item" role="presentation" tabindex="-1">
						<a href="/zh_cn/my-account/orders" role="menuitem">
							订单</a>
					</li>
				<li class="item" role="presentation" tabindex="-1">
						<a href="/Project/project/index.php/Home/User/addAddress" role="menuitem">
							地址簿</a>
					</li>
				<li class="item" role="presentation" tabindex="-1">
						<a href="/zh_cn/my-account/payment-details" role="menuitem">
							银行卡信息</a>
					</li>
			</ul>
		</nav>
	<div class="layout layout-eight"id="profileDIV">

	    
	    <form class="form-section agile-form" id="profile">
	        <fieldset class="form-part">
	            <legend class="heading">个人信息</legend>
	                
                <div class="inputwrapper">
                    <label class="label" for="myhm-email">电子邮箱</label>
                    <input class="text-input field" 
                    	type="email" 
                    	name="email"          
                       	value="<?php echo ($list['email']); ?>"  
                        autocomplete="email" 
                        readonly 

                        />
                        <span class="static"> <?php echo ($list['email']); ?> </span>                    
                </div>
				
					<div class="inputwrapper">
						<label class="label" for="checkout.title"> 性别 </label>
						<div class="select-primary input-info">
						<select 		
							id="profile-title" 
							name="sex" 
							class="select field" 
						>
							<option value='2'> 请选择 </option>						
							<option value="0">小姐</option>
							<option value="1">先生</option>
							<option value="2">保密</option>
						</select>
						</div>
						<div class="input-info"> </div>
						<span class="static" id="account_sex"><?php echo ($list[sex]); ?></span>		
					
					</div>

					<div class="inputwrapper">
						<label class="label" for="checkout.lastName"> 称呼 </label>				
							<input 
							type="text"
							required
							id="profile-lastName" 
							name="nickname" 
							maxlength="150"  
							class="text-input field lastName " 
							autocomplete="family-name"
							value = "<?php echo ($list[nickname]); ?>"
							/>
							<span id="account_nickname"class="static"><?php echo ($list[nickname]); ?> </span>	
						<div class="input-info">  </div>				
					</div>


					<div class="inputwrapper select-date">
						<label class="label" for="myhm-dob"> 出生日期 </label>
						<div class="merged-inputs text-input" >
						
				
							<input type="tel"
								autocomplete="bday-year"
								pattern="[0-9]*" 
								inputmode="numeric" 
								id="myhm-dob-year" 
								name="birthyear"
								value="<?php echo ($list[birthyear]); ?>"
								class="input-year text-input dateOfBirth"
								placeholder="----" size="4" maxlength="4" />

									<span class="divider filled">年</span>

								
						
							
							<input type="tel"
								autocomplete="bday-month"
								pattern="[0-9]*" 
								inputmode="numeric" 
								id="myhm-dob-month" 
								name="birthmonth"
								value="<?php echo ($list[birthmonth]); ?>"
								class="input-month text-input dateOfBirth"
								placeholder="--" size="2" maxlength="2"
			
								/>
								
								<span class="divider filled">月</span>
								
						
							
							<input type="tel"
								autocomplete="bday-day"
								pattern="[0-9]*" 
								value="<?php echo ($list[birthday]); ?>"
								inputmode="numeric" 
								id="myhm-dob-day" 
								name="birthday"
								class="input-day text-input dateOfBirth"
								placeholder="--" size="2" maxlength="2" />
								
								<span class="divider filled">日</span>
								
						
						</div>
				
						<div class="input-info " >YYYY年MM月DD日  </div>
						<span class="static" id="account_birthday"> <?php echo ($list[birthyear]); ?>年<?php echo ($list[birthmonth]); ?>月<?php echo ($list[birthday]); ?>日 </span>
					</div>
					<div class="inputwrapper" >
						<label class="label" for="myhm-user-phone">电话号码</label>
						<div class="phone-group">
							<div class="phone-wrap">
								<label for="user-country-code-number" class="visuallyhidden"></label>
								<input type="tel"  
										id="code"
										placeholder='例如 +86'
										class="number-input field country-code-number prefix to-hankaku text-input" maxlength="150"		
										      
										    />
							</div>
								<div class="phone-wrap">
								    <input type="number"  oninput="if(value.length>11)value=value.slice(0,11)" class="text-input to-hankaku number-input field cellPhone" id="myhm-user-phone" name="phone" value="<?php echo ($list[phone]); ?>" />	
								            
								            	   
								            					 
								        <span id="account_phone" class="static"><?php echo ($list[phone]); ?></span>				              
								</div>
								
						</div>
						<span class="static">	</span>
						<span class="input-info invalid server-field-validation-message field-validation-message"></span>
					</div>
					<div class="inputwrapper">
	                <label class="label"  for="myhm-country">国家</label>
	                <span class="ng-binding" id="myhm-country">中国</span>
	            	</div>
	           </fieldset>
	        
	        <!-- STAFF CARD PART BEGIN-->
	        <fieldset class="form-part">
				<legend class="heading">员工卡信息</legend>
				<p>如果您拥有 H&M 员工卡，请在此处输入该卡号。</p>
				<div class="inputwrapper">
				    <label class="label " for="staff-number">员工卡号</label>
				      		<input
								type="text"
								class="number-input  field text-input"
								value=""
				               
				                id="myhm-staff-number"
								maxlength="25"
							/>
						
							<span class="static"></span>
				</div>
				</fieldset>

    		<fieldset class="form-part" data-change-text="Your subscription settings has been updated">
					<legend class="heading">订阅</legend>

		            <div class="inputwrapper list-group optional hidden-field" ng-class="{'hidden-field' : isEditprofile}">
						<input type="hidden" ng-model="profile.hmCatalogueSubscription" value="" init-from-form="" class="ng-pristine ng-untouched ng-valid">
			            <label class="label" for="chb-catalogue" id="chb-newsletter-label">营销型印刷品</label>
			            <ul class="input-list   ">
							<li class="item">
								<input class="checkbox-input disabled-input ng-pristine ng-untouched ng-valid" type="checkbox" checked="checked" name="catalogue" id="chb-catalogue" ng-model="profile.hmCatalogueSubscription" ng-disabled="!isEditprofile">
								<span class="no-edit show-if-checked ng-hide" ng-show="profile.hmCatalogueSubscription &amp;&amp; !isEditprofile"> 已订阅</span>
			                    <span class="no-edit show-if-unchecked ng-hide" ng-show="!profile.hmCatalogueSubscription &amp;&amp; !isEditprofile"> 未订阅</span>
			                    <label for="chb-catalogue" id="chb-newsletter-label" class="checkbox-label">
									我有兴趣接收 H&amp;M 营销型印刷品。</label>
							</li>  
			            </ul> 
			            </div>
			</fieldset>
            <!-- PASSWORD PART END -->
            
            <!-- BUTTON PART BEGIN -->
	        <div class="button-group">
				<p class="privacy-agreement">
					点击“保存信息”我接受<a href="/zh_cn/customer-service/privacy-link.html" class="link overlay-trigger">
						隐私政策</a>
					<span class="input-info invalid server-field-validation-message"></span>
				</p>
	            <button id ="editInfo"type="button" class="secondary button">编辑</button>
	            <button id="cancelEdit"type="button" class="secondary button text-input"> 取消</button>
	            <button type="button" class="button save-form text-input"  style="color:white" id="saveProfileDetails" > 保存信息</button>
				
                <a href="/Project/project/index.php/Home/User/updatePassword" class="button change-password">更改密码</a>
				
				<div id="globalMessages"></div>


	        </div>
	    </form>
	  
		</div>
	</div>

	<script>

		$('.text-input').hide();
		$('.static').show();
		$('.input-info').hide();
	
		$('#editInfo').click(function () {

			$('.text-input').show();
			$('.static').hide();
			$('.input-info').show();

		});

		$('#cancelEdit').click(function () {

			$('.text-input').hide();
			$('.static').show();
			$('.input-info').hide();
		});

		//AJAX修改或者添加个人详情

		$('#saveProfileDetails').click(function () {


			window.scrollTo(0,200);
					

			var that = $(this);

			var	res = RegCheck($('#myhm-user-phone').val(),/^1(3|4|5|7|8)\d{9}$/);

			if (res == null) {

				$(this).next('span').remove();

				$(this).after('<span style="color:red">号码有误</span>');

				return false;
			}

			var res = RegCheck($('#myhm-dob-year').val(),/^(19|20)\d{2}$/);

			if (res == null) {

				$(this).next('span').remove();


				$(this).after('<span style="color:red">你生日的年份输入错误</span>');

				return false;
			}

			var res = RegCheck($('#myhm-dob-month').val(),/^0[1-9]|1[0-2]$/);

			if (res == null) {

				$(this).next('span').remove();

				$(this).after('<span style="color:red">你生日的月份输入错误</span>');

				return false;
			}

			var res = RegCheck($('#myhm-dob-day').val(),/^0[1-9]|[1-2][0-9]|3[0-1]$/);

			if (res == null) {

				$(this).next('span').remove();

				$(this).after('<span style="color:red">你生日的日份输入错误</span>');

				return false;
			}

			 //进行正则判断
            function RegCheck(str, pattern){

                var res = str.match(pattern);

                 return res;
            }


			$.post('/Project/project/index.php/Home/User/account', {
				'id':<?php echo ($list['id']); ?>,
				'sex':$('#profile-title').val(),
				'nickname':$('#profile-lastName').val(),
				'birthyear':$('#myhm-dob-year').val(),
				'birthmonth':$('#myhm-dob-month').val(),
				'birthday':$('#myhm-dob-day').val(),
				'phone':$('#myhm-user-phone').val(),

			}, function (data) {

				if (data >= 1){

					$('#account_nickname').html($('#profile-lastName').val());

					$('#account_phone').html($('#myhm-user-phone').val());

					$('#account_birthday').html($('#myhm-dob-year').val()+'年'+$('#myhm-dob-month').val()+'月'+$('#myhm-dob-day').val()+'日');

					var sex = new Array();

					sex[0] = '小姐';

					sex[1] = '先生';

					sex[2] = '保密';

					$('#account_sex').html(sex[$('#profile-title').val() ]);

					that.next('span').remove();

					

					show_msg('修改成功');
	

				}else {

					show_msg('修改失败');
				}


			}, 'json');

			$('.text-input').hide();
			$('.static').show();
			$('.input-info').hide();


		});

		function show_msg(msg){	

		 $('body').append('<div class="sub_err" style="position:absolute;top:60px;left:0;width:500px;z-index:999999;"></div>');

			var htmltop='<div class="bac" style="padding:8px 0px;border:1px solid #090;width:100%;margin:0 auto;background-color:white;color:#0d0d0d;border:2px black solid;text-align:center;font-size:16px;">';

			var htmlfoot = '</div>';

			$('.sub_err').html(htmltop+msg+htmlfoot); 

			var left=($(document).width()-500)/2;

			$('.sub_err').css({'left':left+'px'});

			var scroll_height=$(document).scrollTop();

			 $('.sub_err').animate({'top': scroll_height+200},150);

			 msgdsq=setTimeout(function(){	

				$('.sub_err').animate({'top': scroll_height+80},100);

				setTimeout(function(){	

			 	 $('.sub_err').remove();	

		   		},100);	 
		   
			}, "1200");  
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