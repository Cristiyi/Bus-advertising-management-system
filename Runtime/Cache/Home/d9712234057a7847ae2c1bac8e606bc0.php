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
<script type="text/javascript" src="<?php echo (C("JS_URL")); ?>/shortcode.js"></script><!--[if IE 7]><link rel="s
tylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/ie7.css"><![endif]-->
<style type="text/css">
.order {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
  color:#fff;
  background-color:#31b0d5;
  border-color:#269abc;
  text-decoration: none;
  }

    .toph4 {
        margin-top:10px;
    }
  .pages{
    position:absolute;
    left:40%;
    bottom:0px;
  }

  .con_right {
    position: relative;
    height: 400px;
  }

  .font20 {
    font-size: 20px;
  }



</style>
</head>
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
    <?php } ?>
      </div>

    </div>
  </div><!--/Navigation + Search-->
  </div>




<!--/中部开始-->
<div class="mid">
  <div class="danei mid">
  <div class="midimage"><img src="<?php echo (C("IMG_URL")); ?>/zhanpai1.jpg" width="980" height="300" /></div>
    <div class="con_left">
      <ul>
        <li><a href="<?php echo U('Chenei/showlist');?>" style="font-weight:bold;">车内广告</a></li>
        <li><a href="<?php echo U('Cheshen/showlist');?>" style="font-weight:bold;">车身广告</a></li>
        <li><a href="<?php echo U('Zhanpai/showlist');?>" style="font-weight:bold;">站牌广告</a></li>
      </ul>
    </div>
  <!--/下部文字部开始-->
    <div class="con_right media media-left">
      <div class="right_title">站牌广告</div>
    <!-- div class="biaozhun_image"><img src="<?php echo (C("IMG_URL")); ?>/chenei2.jpg"  width="500" height="200"/></div> -->
  <!--/中部开始  <div class="tpwz">-->
    <div class="media-body">
    <?php if(is_array($info)): foreach($info as $key=>$v): ?><div class="orderlist" style="text-decoration:none;width=500px;border:1px;">
        <h4 class="toph4 font20"><?php echo ($v["description"]); ?></h4>
        <p class="font20">
          价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：<span class="font20"><?php echo ($v["price"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
        <p class="font20">
         位&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;置：
          <span class="font20"><?php echo ($v["location"]); ?></span>
        </p>
        <p class="font20">
          状 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：
          <span class="font20">
            <?php echo ($v["status"]); ?>
            <!-- <span ng-if="!$last">、</span> -->
          </span>
        </p>
        </div>
        <!-- <a href="<?php echo U('Order/tianjia?id='.$v[placeid]&&'type='.$v[catename]);?>" target="_blank" class="order">预约</a> -->
        <a href="<?php echo U('Order/tianjia',array('id'=>$v[placeid],'type'=>$v[catename],'location'=>$v[location],'price'=>$v[price]));?>" target="_blank" class="order">预约</a><?php endforeach; endif; ?>
   </div>
    <div class="pages">
    <?php echo ($page); ?>
    </div>
     <!--/中部开始  <div class="right_con">  -->


    </div><!--/下部文字部结束-->

  </div>
</div>







<!--/中部结束-->










   <!--尾部图片-><!--Slider-->
<div class="full-width-wrapper" id="footer-extra-wrapper"><div class="fixed-width-wrapper"><div id="copyright"><a href="#" class="logo float-left" title=""><img src="<?php echo (C("IMG_URL")); ?>/logo-foot1.png" alt=""></a><ul><li>(c) 2011 Allright reservred </li><li><a href="#" title="">Privacy Policy</a></li><li><a href="#" title="">Terms and Conditions</a></li></ul><a href="#" class="back-to-top sprite" title="Back to top">Back to top</a></div></div></div>
  <!--/尾结束-->
</body></html>