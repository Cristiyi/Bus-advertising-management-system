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
    <style>
    body {
      background:url(<?php echo (C("IMG_URL")); ?>/bus_safe.jpg) repeat;
    }
     .pages{
    position:absolute;
    left:40%;
    bottom:-200px;
    font-size:20px;
    color:red;
  }

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
<h2>我的订单</h2>
  <table class="table table-striped">

  <thead>
    <tr>
      <th>公司名称</th>
      <th>姓名</th>
      <th>电话</th>
      <th>手机</th>
      <th>邮箱</th>
      <th>广告内容</th>
      <th>广告位类别</th>
      <th>广告位位置</th>
      <th>广告位价格</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(is_array($info)): foreach($info as $key=>$v): ?><tr class="active">
      <td><?php echo ($v["ordercname"]); ?></td>
      <td><?php echo ($v["orderufname"]); ?></td>
      <td><?php echo ($v["orderuphone"]); ?></td>
      <td><?php echo ($v["orderumphone"]); ?></td>
      <td><?php echo ($v["orderuemail"]); ?></td>
      <td><?php echo ($v["orderdes"]); ?></td>
      <td><?php echo ($v["ordertype"]); ?></td>
      <td><?php echo ($v["orderlocation"]); ?></td>
      <td><?php echo ($v["orderprice"]); ?></td>
    </tr><?php endforeach; endif; ?>
  </tbody>
</table>

<div class="pages" style="color:red;font-size:50px;">
    <?php echo ($page); ?>
</div>



</body>
</html>