<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<meta name="keywords" content="道闸广告,武汉道闸广告,恒盛文广,广告道闸" />
<meta name="description" content="道闸广告,武汉道闸广告,恒盛文广,广告道闸" />
<title>恒盛文广</title>
<link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">
<link href="<?php echo (C("CSS_URL")); ?>/mypage.css" rel="stylesheet">
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
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/shortcode.js"></script>
<link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">
<style>
        html, body
        {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        body {
          background:url(<?php echo (C("IMG_URL")); ?>/bus_safe.jpg) repeat;

        }
        .form-horizontal .control-group
        {
            margin-bottom: 16px;
        }
        .wrap
        {
        	float: left;
            height: 100%;
            display: -webkit-box;
            -webkit-box-align: center;
            -webkit-box-pack: center;
            overflow: auto;

        }
        .main
        {
            width: 800px;
        }

		/*.main input {
			border-radius: 6px;
		}*/

        .info
        {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 40px;
            color: #333;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
        }
</style>
</head>
<body>
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
    <div class="wrap">
        <form class="main form-horizontal" action="/zhangjiakou/bus/index.php/Home/Order/tianjia/id/13/type/%E8%BD%A6%E5%86%85%E5%B9%BF%E5%91%8A/location/zx1111/price/90000.html" method="post">
        <fieldset>
            <legend>广告预约</legend>
            <div class="control-group">
                <div class="controls">
                    <input id="pwd" name="orderuname" type="hidden" class="input-xlarge"
                        required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">
                    姓名</label>
                <div class="controls">
                    <input id="pwd" name="orderufname" type="text" type="text" placeholder="请填写姓名" class="input-xlarge"
                        required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">
                    电话</label>
                <div class="controls">
                    <input id="pwd1" name="orderuphone" type="text" placeholder="请填写固定电话" class="input-xlarge"
                        required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">
                    公司名称</label>
                <div class="controls">
                    <input name="ordercname" type="text" placeholder="请填写公司名称" class="input-xlarge" required>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">
                    邮箱</label>
                <div class="controls">
                    <input name="orderuemail" type="email" placeholder="请填写邮箱" class="input-xlarge" required pattern="^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$"
                        title="邮箱正确格式：xxx@xxx.xxx">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">
                    广告内容</label>
                <div class="controls">
                    <textarea name="orderdes" placeholder="请填写广告大体内容" rows="5" cols="22"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">
                    移动电话</label>
                <div class="controls">
                    <input name="orderumphone" type="text" placeholder="请填写手机号" class="input-xlarge" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input name="orderprice" type="hidden" class="input-xlarge" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input name="orderuname" type="hidden" class="input-xlarge" required>
                </div>
            </div>
             <div class="control-group">
                <div class="controls">
                    <input name="orderprice" type="hidden" class="input-xlarge" required>
                </div>
            </div>
            <div class="control-group">
                <!-- <label class="control-label">
                   	广告位类别</label> -->
                <div class="controls">
                    <input name="ordertype" type="hidden" class="input-xlarge" required>
                </div>
            </div>
            <div class="control-group">
                <!-- <label class="control-label">
                   	广告位编号</label> -->
                <div class="controls">
                    <input name="placeid" type="hidden" class="input-xlarge" value="" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">
                </label>
                <div class="controls">
                    <button class="btn" type="submit" id="ok">
                        提交</button>
                    <button class="btn" type="reset">
                        重 置</button>
                </div>
            </div>
        </fieldset>
        </form>
    </div>

</body>
</html>