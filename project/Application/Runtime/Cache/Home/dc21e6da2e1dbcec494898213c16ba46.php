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


       <title><?php echo ($keyword); ?> | H&M</title>
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

                        <form method="get" action="/Project/project/index.php/Home/Index/searchGoods" class="ng-pristine ng-valid">
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


         


	    

    <img src="/Project/project/Public/Search/user" width="1" height="1" style="position: absolute; left: -999px">
                    
	    <main role="main"><!-- Main -->
  <div id="ajax-loading" style="position:fixed;width:100%;height:50px;top:90%;z-index:999;">
  </div>
	<div class="wrapper">
		<div class="breadcrumb">



	<nav class="breadcrumbs">
		<!-- Breadcrumbs -->
		<ul>
			<li><a href="http://www2.hm.com/zh_cn/index.html">HM.com</a></li>
			
				
					
						<li>Search Results </li>
					
					
				
			
		</ul>
	</nav>
	<!-- /Breadcrumbs -->
</div>

		<div class="search productlisting parbase">











<!--PAGE:searchProductListing -->
<div class="catalogwarning parbase">

</div>

<div class="row">
   
       
       
           
    <?php if($lastCount == 0 ): ?><article class="search-autocorrect  zero-results">
                   <h1>很抱歉，您的搜索无结果 "<?php echo ($keyword); ?>"
                       .
                   </h1>
                   <div class="search-autocorrect-copy">
                       <p>请检查拼写，或用较为笼统的词语再试一次</p>
                   </div>
    </article>




    <?php else: ?>  
   


   <div>
       
                   
       
           
           
               
                   
                   
                       <article class="search-autocorrect">
                           <h1>
                               正在显示有关 "<?php echo ($keyword); ?>" 的结果
                           </h1>
                           
                       </article>
                       <!--/.search-autocorrect-->
                   
               
           
       
   </div>


   <div class="col-12">
       <div class="product-list-title"></div>
       
           <!-- Product filters -->

           <div class="row">
               <div class="product-filters sticky-on-scroll"  style="width:100%" >
                   <div class="row" style="margin-left:185px">
                       <div class="totop">
                           <a href="#" class="toptrigger">返回到顶部</a> <a href="/Project/project/index.php/Home/Index/index" class="filterlogo" style="background-image:url('/Project/project/Public/show/logotype.png');">返回到开始</a>
                       </div>
                       <div class="filteractions clearfix">
                           <ul class="triggers clearfix">
                               
                               <li class="js-clickexpand clickexpand filter" style="border-right:1px solid #d1d1d1" data-expandoptions="{&quot;toggle&quot;:&quot;true&quot;}">
                                <a href="javascript:;" class="trigger js-expandtrigger"><strong>筛选</strong></a>
                                <div class="expandtarget js-expandtarget filters">
                               





                                <div class="row shut">
                                    <div class="cols clearfix">
                                                  <style>
                                                    .borderBlack{
                                                      border: 3px solid black;
                                                    }
                                                  </style>

                                                <div class="col">
                                                    <h4>颜色</h4>
                                                    <ul class="inputlist grid" data-filter-param-name="colorWithNames">
                                                          <?php if(is_array($typeOne)): foreach($typeOne as $key=>$vc): ?><li>
                                                            <label  for="<?php echo ($vc["attrname"]); ?>" class="filter-option choose" ><input  class="choose-input"  type="checkbox" name="color" id="<?php echo ($vc["attrname"]); ?>" data-value="<?php echo ($vc["attrname"]); ?>"><span class="pattern" data-value="<?php echo ($vc["attrname"]); ?>" style="background:<?php echo ($vc["attrname"]); ?>;margin-left:2px"></span>
                                                        
                                                            </label>
                                                        </li><?php endforeach; endif; ?>
                                                   
                                                      
                                                    </ul>
                                                </div>


                                                <div class="col">
                                                    <h4>尺码</h4>
                                                    <ul class="inputlist row-cols">

                                                    <?php if(is_array($typeTwo)): foreach($typeTwo as $key=>$vt): ?><li class="row-col">
                                                            <ul data-filter-param-name="sizes" class="inputlist rows"> 
                                                                <li>
                                                                    <label class="choose" for="<?php echo ($vt["attrname"]); ?>">
                                                                        <input class="choose-input" id="<?php echo ($vt["attrname"]); ?>" type="checkbox" name="size[]" data-value="<?php echo ($vt["attrname"]); ?>">
                                                                                        <div class="detailbox detailbox-value"><span><?php echo ($vt["attrname"]); ?></span></div>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </li><?php endforeach; endif; ?>
                                                    </ul>
                                                </div>
                                                
                                               


                                    </div>
                                </div>

                                <div class="row clearfilters shut">
                                    <button class="button button-secondary js-filters-clear">清除所有</button>
                                    <a class="button js-filters-close close" href="javascript:;">关闭</a>
                                </div>

                                <input type="hidden" name="image" value="model" class="filter-toggle-images-value" data-filter-param-name="image">


                                </form>
                                </div>
                            </li>
                               <li class="js-clickexpand clickexpand sort-by">
                                   <a href="javascript:;" class="trigger js-expandtrigger"><strong>排序方式</strong></a>
                                   <div class="expandtarget js-expandtarget sort">
                                       
<ul class="menu toggleCurrent">
    <li class="menu-sub-item"><label class="menu-link" >默认排序<input type="radio" style="display:none" name="choose-radio" data-value="default" ></label></li>
    <li class="menu-sub-item"><label class="menu-link" >模糊搜索<input type="radio" style="display:none" name="choose-radio" data-value="stock" ></label></li>
    <li class="menu-sub-item"><label class="menu-link" >最低价格<input type="radio" style="display:none" name="choose-radio" data-value="ascPrice" ></label></li>
    <li class="menu-sub-item"><label class="menu-link" >最高价格<input type="radio" style="display:none" name="choose-radio" data-value="descPrice" ></label></li>
</ul>
                                   </div>
                                   
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
               <!-- /Product filters -->                    
           </div>
               
<div class="filters-applied hidden">
   <strong>应用筛选器:</strong>
   <p class="text">
       <span class="name-of-filters-applied"></span>
       <a href="javascript:;" class="link">清除所有</a>
   </p>
</div>                        
           <div class="row">
               <div class="model-and-product-switch">
                   <div class="grid col-12">
                       <div class="grid col-6">
                           <ul>
                               <li class="right">
                               
                               <span class="filterinfo pagination-count ">
                               <strong>
                               正在显示：<span class="show-count"></span>条
                               共 <span class="total-count"><?php echo ($lastCount); ?></span> 商品
                               </strong>
                               </span>
                               
                                <span class="filterinfo filtered-count hidden">
                                
                               </span>
                                              
                               </li>               
                           </ul>
                       </div>
                       
                   </div>
               </div>
           </div>
       
   </div>
</div>
      	
		<div class="product-items-wrapper">
    


      <?php if(is_array($res)): foreach($res as $key=>$v): ?><section class="product-items productlist-row">

        <!-- Product items -->
        <div class="product-items-content">
          <div class="row">
            
            
              
              
							
							<!-- Product item -->
							<div class="grid col-3">
								
								<article class="product-item club-price-item" data-articlecode="0453424002" onclick="setVCParameter(&#39;SEARCH&#39;,&#39;0453424002&#39;); setNotificationTicket(&#39;Oy9zZWFyY2gvc2VhcmNoLWhpdHMtd2l0aC1jb3VudC9zZWFyY2gtaGl0czsjO3Byb2R1Y3Rfa2V5OzA0NTM0MjRfZ3JvdXBfMDAyX3poX2NuOzA0NTM0MjQwMDJfemhfY247OyM7NTc7&#39;,&#39;0453424002&#39;); setOsaParameters(utag_data.category_id,&#39;SMALL&#39;,&#39;0453424002&#39;);">
									<!-- Product item -->
									
										
										
											<a href="<?php echo ($v->id); ?>" title="<?php echo ($v->name); ?>" class="product-item-link"> <img width="222" height="333" src="" class="goodsId" data-id="<?php echo ($v->id); ?>" class="product-item-image" alt="<?php echo ($v->name); ?> " data-alttext="<?php echo ($v->name); ?> 模特款型" title="<?php echo ($v->name); ?> ">
												
												
													<button type="button" data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0453424002|<?php echo ($v->name); ?>|SEARCH" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button> 
												
													
												
													
													
															 
														
													<!-- <div class="marker ">
														<img class="marker-image" data-legal-text="优惠适用于hm.com,截至2017年4月18日17:00 " alt="优惠适用于hm.com,截至2017年4月18日17:00 " src="/Project/project/Public/Search/off-10-black-ZH-CN.png" title="优惠适用于hm.com,截至2017年4月18日17:00 ">
													</div> -->

												 
													
												

											</a>
										
											
											

											<div class="product-item-details">
												
													
												
												<h3 class="product-item-heading">
													
														
														
															<a href=""><?php echo ($v->name); ?></a>
														
															
												</h3>
												
													
														
														
															<strong class="price">
																¥ <?php echo ($v->price); ?> </strong>
														
													

												
												
												
												
											</div>
										</article>
									</div>
							<!-- /Product item --><?php endforeach; endif; endif; ?>
							
							
							
			
			
			
			<a href="http://www2.hm.com/zh_cn/search-results.html?q=%E8%BF%9E%E8%A1%A3%E8%A3%99&amp;sort=stock&amp;offset=0&amp;page-size=80#" class="hidden listing-total-count" data-total-count="1066"></a>
		</div>

    <!-- 滚动条显示顶部栏 -->
      <script>
        $(document).on('scroll', function() {
          // sticky
          var scrollHeight = $(this).scrollTop();
          if (scrollHeight > 200) {
            $('.sticky-on-scroll').addClass('sticky');
          } else {
            $('.sticky-on-scroll').removeClass('sticky');
          }
          
        });
      </script> 


    <script>
        //显示的商品数量
        showNum = $('.product-item').length;

        $('.show-count').text(showNum);

        var ajaxing = false;

        

      $(window).on('scroll', function () {

      //先获取浏览器的可见高度
      var browserHeight = $(this).height();

      //获取到整个文档的高度
      var documentHeight = $(document).height();

      //获取到滚动条距离顶部的距离
      var scrollTop = $(window).scrollTop();


      if (showNum >= $('.total-count').text()) {
          return false;
      }

      if ( scrollTop + browserHeight  >= documentHeight - 300) {
        postData.showNum = showNum;
        var data3 = JSON.stringify(postData);

        $.ajax({
          url:'/Project/project/index.php/Home/Index/getGoods?data=' + data3,
          beforeSend:function(){
            if (ajaxing) {
              return false;
            }
            ajaxing = true;
            $('#ajax-loading').append('<img id="ajax-pic" style="margin-left:46%" src="/Project/project/Public/show/ajax-loader.gif" alt="">');
          },
          success:function(data) {
            ajaxing = false;
                      var data = JSON.parse(data);
                      $('#ajax-pic').remove()
                      if (data == '') {
                        alert('已显示全部商品');
                        
                      } else {
                        var items = '';
                        for (i in data) {
                          items += '<section class="product-items productlist-row"><div class="product-items-content"><div class="row"><!-- Product item --><div class="grid col-3"><article class="product-item club-price-item" data-articlecode="0453424002" onclick="setVCParameter(&#39;SEARCH&#39;,&#39;0453424002&#39;); setNotificationTicket(&#39;Oy9zZWFyY2gvc2VhcmNoLWhpdHMtd2l0aC1jb3VudC9zZWFyY2gtaGl0czsjO3Byb2R1Y3Rfa2V5OzA0NTM0MjRfZ3JvdXBfMDAyX3poX2NuOzA0NTM0MjQwMDJfemhfY247OyM7NTc7&#39;,&#39;0453424002&#39;); setOsaParameters(utag_data.category_id,&#39;SMALL&#39;,&#39;0453424002&#39;);"><!-- Product item --><a href="' + data[i].id + '" title="' +  data[i].name + '" class="product-item-link"> <img width="222" height="333" src="" class="goodsId" data-id="' + data[i].id + '" class="product-item-image" alt="' + data[i].name + ' " data-alttext="' + data[i].name + ' 模特款型" title="' + data[i].name + ' "><button type="button" data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0453424002|' + data[i].name + '|SEARCH" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button><!-- <div class="marker "><img class="marker-image" data-legal-text="优惠适用于hm.com,截至2017年4月18日17:00 " alt="优惠适用于hm.com,截至2017年4月18日17:00 " src="/Project/project/Public/Search/off-10-black-ZH-CN.png" title="优惠适用于hm.com,截至2017年4月18日17:00 "></div> --></a><div class="product-item-details"><h3 class="product-item-heading"><a href="">' + data[i].name + '</a></h3><strong class="price">¥' + data[i].price + ' </strong></div></article></div>';
                        }
                          $('.product-items-wrapper').append(items);
                          $('.total-count').html(data[0].lastCount);

                          showNum = $('.product-item').length;

                          $('.show-count').text(showNum);
                        
                      }
                                  //ajax获取图片
                        $('.goodsId').each(function(i) {
                          var id = $(this).attr('data-id');
                          var that = $(this);
                          $.ajax({
                            url:'/Project/project/index.php/Home/Index/ajaxGetGoodsPic/id/' + id,
                            beforeSend:function(){
                              that.attr('src', '/Project/project/Public/show/ajax-loader.gif');
                            },
                            success:function(data){

                              that.attr('src', '/Project/project/Public/'+data);
                            },
                          })
                        });
                    }
        });

      }

    });
    </script>
		
	


<a class="load-more-link button infinite-scroll" data-offset-query-param="offset" data-searchterm-query-param="q" data-page-size-query-param="page-size" data-count-selector=".product-item" data-target-selector=".product-items-wrapper" data-per-page="40" data-per-page-query-param="per_page" data-page-query-param="page" data-load-more-url="/zh_cn/search-results/_jcr_content/search.display.html?q=连衣裙" data-is-product-list="true" href="http://www2.hm.com/zh_cn/search-results/_jcr_content/search.display.html">加载更多产品</a>
<div class="clearfix"></div>


   <script>

            var num = 1;

            var nums = 1;

            $('.filter').on('click', function(event) {

                var that = $(this);


                if (num == 1) {

                    that.addClass('isOpen');

                    $('.sort-by').removeClass('isOpen');

                    nums = 1;
                } else {

                    that.removeClass('isOpen');

                    num = 0;
                }

                num += 1;

                event.stopPropagation();
            });

            $('.close').click(function() {

                $('.filter').removeClass('isOpen');

                num = 1;
            });

            //阻止冒泡
            $('.shut').click(function(event) {

                event.stopPropagation();
            });


            $(document).click(function(event) {

                $('.filter').removeClass('isOpen');
                $('.sort-by').removeClass('isOpen');

                num = 1;
                nums = 1;
                event.stopPropagation();
            });

            //阻止a跳转
            $('.favorite').on('click', function() {

                $(this).parent().one('click', function() {
                    return false;
                });

            });


            $('.sort-by').on('click', function(event) {

                var that = $(this);

                that.addClass('isOpen');

                if (nums == 1) {

                    that.addClass('isOpen');

                    $('.filter').removeClass('isOpen');
                    num = 1;
                } else {

                    that.removeClass('isOpen');

                    nums = 0;
                }

                nums += 1;

                event.stopPropagation();
            });



        </script>

         <!-- 筛选数据处理 -->
        <script>
            var postData = {
              'attr':[],
              'keyword':'<?php echo ($keyword); ?>',
              'orderBy':'',
              'showNum':showNum,
            };



            $('input[name="color"]').on('click', function() {
                if ($(this).prop('checked')) {
                  $(this).next().addClass('borderBlack');
                } else {
                  $(this).next().removeClass('borderBlack');
                }
            });

          
          
        </script>

          <script>

          //ajax筛选
              $('.choose-input').on('click', function() {
                  //处理传输数据
                  if ($(this).prop('checked')) {
                    postData.attr.push($(this).attr('data-value'));
                  } else {
                    for (i in postData.attr){
                      if (postData.attr[i] == $(this).attr('data-value')) {
                        postData.attr.splice(i, 1);
                      }
                    }
                  }

                  var data1 = JSON.stringify(postData);
                  //ajax
                  $.ajax({
                    type:'post',
                    url:'/Project/project/index.php/Home/Index/getGoods',
                    data:'data=' + data1,
                    beforeSend:function(){
                      $('#ajax-loading').append('<img id="ajax-pic" style="margin-left:46%" src="/Project/project/Public/show/ajax-loader.gif" alt="">');
                    },
                    success:function(data) {
                      var data = JSON.parse(data);
                      $('#ajax-pic').remove()
                      if (data == '') {
                        $('.product-items').remove();
                        $('.total-count').html('0');
                        $('.show-count').html('0');

                          $('.product-items').append('<article class="search-autocorrect  zero-results"><h1>很抱歉，您的搜索无结果.</h1></article>');
                      } else {

                        $('.product-items').remove();
                        var items = '';
                        for (i in data) {
                          items += '<section class="product-items productlist-row"><div class="product-items-content"><div class="row"><!-- Product item --><div class="grid col-3"><article class="product-item club-price-item" data-articlecode="0453424002" onclick="setVCParameter(&#39;SEARCH&#39;,&#39;0453424002&#39;); setNotificationTicket(&#39;Oy9zZWFyY2gvc2VhcmNoLWhpdHMtd2l0aC1jb3VudC9zZWFyY2gtaGl0czsjO3Byb2R1Y3Rfa2V5OzA0NTM0MjRfZ3JvdXBfMDAyX3poX2NuOzA0NTM0MjQwMDJfemhfY247OyM7NTc7&#39;,&#39;0453424002&#39;); setOsaParameters(utag_data.category_id,&#39;SMALL&#39;,&#39;0453424002&#39;);"><!-- Product item --><a href="' + data[i].id + '" title="' +  data[i].name + '" class="product-item-link"> <img width="222" height="333" src="" class="goodsId" data-id="' + data[i].id + '" class="product-item-image" alt="' + data[i].name + ' " data-alttext="' + data[i].name + ' 模特款型" title="' + data[i].name + ' "><button type="button" data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0453424002|' + data[i].name + '|SEARCH" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button><!-- <div class="marker "><img class="marker-image" data-legal-text="优惠适用于hm.com,截至2017年4月18日17:00 " alt="优惠适用于hm.com,截至2017年4月18日17:00 " src="/Project/project/Public/Search/off-10-black-ZH-CN.png" title="优惠适用于hm.com,截至2017年4月18日17:00 "></div> --></a><div class="product-item-details"><h3 class="product-item-heading"><a href="">' + data[i].name + '</a></h3><strong class="price">¥' + data[i].price + ' </strong></div></article></div>';
                        }
                          $('.product-items-wrapper').append(items);
                          $('.total-count').html(data[0].lastCount);

                          showNum = $('.product-item').length;

                          $('.show-count').text(showNum);
                        
                      }
                                //ajax获取图片
                      $('.goodsId').each(function(i) {
                        var id = $(this).attr('data-id');
                        var that = $(this);
                        $.ajax({
                          url:'/Project/project/index.php/Home/Index/ajaxGetGoodsPic/id/' + id,
                          beforeSend:function(){
                              that.attr('src', '/Project/project/Public/show/ajax-loader.gif');
                          },
                          success:function(data){

                            that.attr('src', '/Project/project/Public/'+data);
                          },
                        })
                      });
                    }
                  });


              });

          </script>

          <script>
         //排序选项点击事件
            $('.menu-link').on('click', function() {
              var that = $(this);
              $('.sort-by strong').text(that.text());
              
              
            });
            //排序ajax
            $('input[name="choose-radio"]').on('click', function() {

              if ($(this).prop('checked')) {
                postData.orderBy = $(this).attr('data-value');
                
                  var data2 = JSON.stringify(postData);
                              //ajax
                              $.ajax({
                                type:'post',
                                url:'/Project/project/index.php/Home/Index/getGoods',
                                data:'data=' + data2,
                                beforeSend:function(){
                                  $('#ajax-loading').append('<img id="ajax-pic" style="margin-left:46%" src="/Project/project/Public/show/ajax-loader.gif" alt="">');
                                },
                                success:function(data) {
                                  var data = JSON.parse(data);
                                  $('#ajax-pic').remove()
                                  if (data == '') {
                                    $('.product-items').remove();
                                    $('.total-count').html('0');
                                    $('.show-count').html('0');
                                    $('.product-items').append('<article class="search-autocorrect  zero-results"><h1>很抱歉，您的搜索无结果.</h1></article>');
                                  } else {

                                    $('.product-items').remove();
                                    var items = '';
                                    for (i in data) {
                                      items += '<section class="product-items productlist-row"><div class="product-items-content"><div class="row"><!-- Product item --><div class="grid col-3"><article class="product-item club-price-item" data-articlecode="0453424002" onclick="setVCParameter(&#39;SEARCH&#39;,&#39;0453424002&#39;); setNotificationTicket(&#39;Oy9zZWFyY2gvc2VhcmNoLWhpdHMtd2l0aC1jb3VudC9zZWFyY2gtaGl0czsjO3Byb2R1Y3Rfa2V5OzA0NTM0MjRfZ3JvdXBfMDAyX3poX2NuOzA0NTM0MjQwMDJfemhfY247OyM7NTc7&#39;,&#39;0453424002&#39;); setOsaParameters(utag_data.category_id,&#39;SMALL&#39;,&#39;0453424002&#39;);"><!-- Product item --><a href="' + data[i].id + '" title="' +  data[i].name + '" class="product-item-link"> <img width="222" height="333" src="" class="goodsId" data-id="' + data[i].id + '" class="product-item-image" alt="' + data[i].name + ' " data-alttext="' + data[i].name + ' 模特款型" title="' + data[i].name + ' "><button type="button" data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0453424002|' + data[i].name + '|SEARCH" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button><!-- <div class="marker "><img class="marker-image" data-legal-text="优惠适用于hm.com,截至2017年4月18日17:00 " alt="优惠适用于hm.com,截至2017年4月18日17:00 " src="/Project/project/Public/Search/off-10-black-ZH-CN.png" title="优惠适用于hm.com,截至2017年4月18日17:00 "></div> --></a><div class="product-item-details"><h3 class="product-item-heading"><a href="">' + data[i].name + '</a></h3><strong class="price">¥' + data[i].price + '</strong></div></article></div>';
                                    }
                                      $('.product-items-wrapper').append(items);
                                      $('.total-count').html(data[0].lastCount);
                                      showNum = $('.product-item').length;

                                      $('.show-count').text(showNum);
                                    
                                  }
                                      //ajax获取图片
                                      $('.goodsId').each(function(i) {
                                        var id = $(this).attr('data-id');
                                        var that = $(this);
                                        $.ajax({
                                          url:'/Project/project/index.php/Home/Index/ajaxGetGoodsPic/id/' + id,
                                          beforeSend:function(){
                                            that.attr('src', '/Project/project/Public/show/ajax-loader.gif');
                                          },
                                          success:function(data){

                                            that.attr('src', '/Project/project/Public/'+data);
                                          },
                                        })
                                      });
                                }
                              });
              }

            });




         </script>

         <script>
            //ajax获取图片
            $('.goodsId').each(function(i) {
              var id = $(this).attr('data-id');
              var that = $(this);
              $.ajax({
                url:'/Project/project/index.php/Home/Index/ajaxGetGoodsPic/id/' + id,
                beforeSend:function(){
                  that.attr('src', '/Project/project/Public/show/ajax-loader.gif');
                },
                success:function(data){

                  that.attr('src', '/Project/project/Public/'+data);
                },
              });
            });
         </script>
</div>

		<div class="parsys main">
</div>

	</div>
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

                var url = '/Project/project/index.php/Home/Index/base';

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