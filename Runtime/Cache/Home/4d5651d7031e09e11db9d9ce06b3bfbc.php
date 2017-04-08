<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<meta name="keywords" content="道闸广告,武汉道闸广告,恒盛文广,广告道闸" />
<meta name="description" content="道闸广告,武汉道闸广告,恒盛文广,广告道闸" />
<title>恒盛文广</title>
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/tipTip.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/short-code.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/css3.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/style.css">
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/TitilliumText.font.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/scripts.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/custom.js"></script>
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/shortcode.js"></script><!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo (C("IMG_URL")); ?>/ie7.css"><![endif]-->
<style type="text/css">
<!--
.STYLE5 {
	font-size: 30px;
	color: #333333;
	margin: 10 0 10 0;
}
.STYLE6 {color: #FF0000}
.STYLE8 {font-size: 30px; color: #333333; margin: 10 0 10 0; font-weight: bold; }
.STYLE9 {font-size: 24px}
.STYLE10 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body class="home"><!--Header-->
<div class="full-width-wrapper" id="header">
  <div class="full-width-wrapper" id="abstract-bg"><!--Banner-->
    <div class="fixed-width-wrapper" id="banner">
      <a href="index.html" title="" class="logo"><img src="<?php echo (C("IMG_URL")); ?>/logo2.png" alt="Maxx - The Modern HTML template"></a>
     <!--/Banner--> <!--<ul class="social-network">
	    <li><a href="#" title="Facebook"><img src="<?php echo (C("IMG_URL")); ?>/icons/facebook.png" alt=""></a></li>
		<li><a href="#" title="Twitter"><img src="<?php echo (C("IMG_URL")); ?>/icons/twitter.png" alt=""></a></li>
		<li><a href="#" title="Delicious"><img src="<?php echo (C("IMG_URL")); ?>/icons/delicious.png" alt=""></a></li>
	  </ul>-->
	</div><!--/Banner--><!--Navigation + Search-->
	<div class="fixed-width-wrapper border-radius-5px" id="navigation-bar">
		<div id="g-navigation"><ul class="simple-drop-down-menu">
          <li class="home-page current border-radius-left-5px"><a href="<?php echo U('Index/index');?>">首页</a></li>
          <li><a href="<?php echo U('About/about');?>" title="">公司简介</a></li>
          <li><a href="<?php echo U('Chenei/showlist');?>" title="">广告预约</a>
            <ul>
               <li><a href="<?php echo U('Chenei/showlist');?>" title="">车内广告</a></li>
               <li><a href="<?php echo U('Cheshen/showlist');?>" title="">车身广告</a></li>
                <li><a href="<?php echo U('Zhanpai/showlist');?>" title="">站牌广告</a></li>
            </ul>
          </li>
          <li><a href="<?php echo U('Youshi/youshi');?>" title="">媒体优势</a></li>
          <li><a href="<?php echo U('Blog/blog');?>" title="">媒体资源</a></li>
          <li><a href="<?php echo U('Poli/poli');?>" title="">营销政策</a></li>
          <li><a href="<?php echo U('Contact/contact');?>" title="">联系我们</a></li>
          <?php if(empty($_SESSION['userid'])) { ?>
            <li class="denglu"><a href="<?php echo U('User/login');?>" title="">登录</a></li>
            <li class=""><a href="<?php echo U('User/register');?>" title="">注册</a></li>
          <?php } else { ?>
            <li class="myname"><a href=""><?php echo (session('username')); ?></a></li>
            <li class=""><a href="<?php echo U('Order/showlist');?>" title="">我的订单</a></li>
            <li class=""><a href="<?php echo U('User/logout');?>" title="">注销</a></li>
        <?php  } ?>
            </div>

      </div>
    </div><!--/Navigation + Search-->
  </div>
<!--/中部开始-->
<div class="mid">
  <div class="danei mid">
  <div class="midimage"><img src="<?php echo (C("IMG_URL")); ?>/lou.png" width="980" height="300" />  </div>
    <div class="con_left">
      <ul>
        <li><a href="http://www.szdzgg.com/?about/GongSiJianJie.html" style="font-weight:bold;">公司简介</a></li>

      </ul>
    </div>
    <div class="con_right">
      <div class="right_title">公司简介</div>
      <div class="right_con">
        <p> <span style="font-size:14px;">武汉恒盛文广文化传媒有限公司系恒生创投集团旗下专业从事广告设计、制作、发布、媒体开发、企业策划、活动策划等业务的传媒公司，集团业务主要包括：医院管理投资、月子会所管理投资、互联网媒体开发及代理、景观园林设计、装饰设计施工、企业管理投资咨询等。 
</span><br />
            <br />
            <span style="font-size:14px;">公司由国内投资管理、媒体运营、广告销售等领域资深人士联合上海、天津、成都、杭州、长沙、重庆、武汉、深圳、温州等中国十几个城市停车场媒体运营商共同发起投资组建，是中国目前规模最大、最专业的停车场媒体运营商；同时已启动深圳、杭州、成都、武汉、天津、重庆、郑州、沈阳、长沙、温州等十个区域运营中心，并对包括北京、上海、广州、无锡、苏州、宁波等在内的十六个区域停车场近20000块媒体资源进行了有效整合，真正实现了全国停车场媒体资源的联网发布</span><span style="font-size:14px;">、佛山、杭州、济南、郑州、西安、太原、沈阳、南京等。</span><br />
            <br />
            <span style="font-size:14px;">我公司现有员工200余人，由高素质的人才构建的公司核心技术团队，推动公司顺利通过了国家级媒体企业的认定</span><span style="font-size:14px;">。</span><br />
            <br />
            <span style="font-size:14px;">企业使命：以创新科技缔造安全、智能、高效的道闸广告媒体。</span><br />
            <span style="font-size:14px;">核心价值观：持续创新、精益求精、务实进取、发展道闸广告媒体事业，创造美好明天！</span> </p>
      </div>
    </div>
  </div>
</div>







<!--/中部结束-->










   <!--尾部图片-><!--Slider-->
<div class="full-width-wrapper" id="footer-extra-wrapper"><div class="fixed-width-wrapper"><div id="copyright"><a href="#" class="logo float-left" title=""><img src="<?php echo (C("IMG_URL")); ?>/logo-foot1.png" alt=""></a><ul><li>(c) 2011 Allright reservred </li><li><a href="#" title="">Privacy Policy</a></li><li><a href="#" title="">Terms and Conditions</a></li></ul><a href="#" class="back-to-top sprite" title="Back to top">Back to top</a></div></div></div>
	<!--/尾结束-->
</body></html>