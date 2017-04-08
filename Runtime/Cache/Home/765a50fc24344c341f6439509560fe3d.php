<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?php echo (C("CSS_URL")); ?>/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="<?php echo (C("CSS_URL")); ?>/right.css" rel="stylesheet">
  <link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">
  <link href="<?php echo (C("CSS_URL")); ?>/offcanvas.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?php echo (C("JS_URL")); ?>/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo (C("JS_URL")); ?>/jquery.min.js"></script>
  <script>
    $(document).ready(function(){

    var len = $(".num > li").length;
    var index = 0;  //图片序号
    var adTimer;
    $(".num li").mouseover(function() {
        index = $(".num li").index(this);  //获取鼠标悬浮 li 的index
        showImg(index);
    }).eq(0).mouseover();
    //滑入停止动画，滑出开始动画.
    $('#scrollPics').hover(function() {
        clearInterval(adTimer);
    }, function() {
        adTimer = setInterval(function() {
            showImg(index)
            index++;
            if (index == len) {       //最后一张图片之后，转到第一张
                index = 0;
            }
        }, 3000);
    }).trigger("mouseleave");

    function showImg(index) {
        var adHeight = $("#scrollPics>ul>li:first").height();
        $(".slider").stop(true, false).animate({
            "marginTop": -adHeight * index + "px"    //改变 marginTop 属性的值达到轮播的效果
        }, 1000);
        $(".num li").removeClass("numon")
            .eq(index).addClass("numon");
    }
})

  </script>

  <style>

  body{
    background-color: #CCCCFF;
  }



  </style>
</head>
<body>
          <h2>张家口公交广告预约网</h2>


    <div id="scrollPics">
    <ul class="slider">
        <li><img src="<?php echo (C("IMG_URL")); ?>/lunbo1.png"/></li>
        <li><img src="<?php echo (C("IMG_URL")); ?>/lunbo2.jpg"/></li>
        <li><img src="<?php echo (C("IMG_URL")); ?>/lunbo3.jpg"/></li>
        <li><img src="<?php echo (C("IMG_URL")); ?>/lunbo4.jpg"/></li>
    </ul>
    <ul class="num">
        <li class="numon">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
</div>

          <div class="ind_news fixed">
             <div class="image">
                  <a href="" target="_blank"><img src="<?php echo (C("IMG_URL")); ?>/index.jpg" width="553" height="610" alt=""></a>
             </div>
             <div class="cont">
                  <div class="innerindex">
                       <!-- <div class="city_info fixed">
                            <div class="city_time">
                                 <p class="today"><i>今天是</i><span class="data"></span>  <span class="week"></span></p>
                                                                <p class="limit limit_num"><span class="limit_num"></span>&nbsp;&nbsp;&nbsp;&nbsp;欢迎您乘坐公交车</p>
                            </div>
                            <div class="temper">
                                晴/多云 15&#8451; ~ 4&#8451;
                            </div>
                       </div> -->
                       <ul class="news_tab fixed">
                         <li class="on"> 乘车通告</li>
                         <li>企业新闻</li>
                       </ul>
  <div class="news_cont">
  <div class="item"><div class="item_cont"><ul class="list"><li><p class="title"><a href="" target="_blank">近20万人 清明小长假第一天张家口公交乘客数量创纪录 </a></p><div class="text">清明小长假第一天，去中山公园赏花，到山上景点玩一玩，逛一逛商圈，成了很多市民和游客出行的选择。公交三路自去年12月18日全线开通以来,运行100多天,日均客流量为14万人次，而2017年4月2日截至18点，客流达到了197153人次，创下了开通以来的客流最高峰，超过了此前全天最高峰17.5万人次。</div></li><li>
    <p class="title"><a href="" target="_blank">广告广告广告广告2</a></p><div class="text">广告广告广告广告2广告广告广告广告2广告广告广告广告2广告广告广告广告2广告广告广告2广告广告广告广告2广告广告广告2广告广告广告广告2广告广告广告2广告广告广告广告2</div></li><li>
    <p class="title"><a href="" target="_blank"></a></p><div class="text"></div></li></ul>
    <!-- <ul class="list"><li><p class="title"><a href="" target="_blank">广告广告广告广告3</a></p><div class="text">广告广告广告广告3</div></li><li>
    <p class="title"><a href="" target="_blank">广告广告广告广告4</a></p><div class="text">广告广告广告广告4</div></li><li>
    <p class="title"><a href="" target="_blank"></a></p><div class="text">
  </div></li></ul></div> -->
 </div>

</body>
</html>