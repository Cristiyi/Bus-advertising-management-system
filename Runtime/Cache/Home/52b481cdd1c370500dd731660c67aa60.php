<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>广告预约</title>
  <link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?php echo (C("CSS_URL")); ?>/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">

  <link href="<?php echo (C("CSS_URL")); ?>/mypage.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?php echo (C("JS_URL")); ?>/ie-emulation-modes-warning.js"></script>
  <style>

  body{
    background-color: #fff7fa;
  }

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

  .img1{
    position:fixed;
    left:60%;
    top:100px;
    /*right:300px;*/
  }

  .img2{
    position:fixed;
    left:60%;
    top:400px;
    /*right:300px;*/
  }


  .list-group {
    margin-left: 20px
  }

  .img {
    position: fixed;
    top:0;
  }

  </style>
</head>
<body>

  <h3 class="list-group">车内广告</h3>
   <div class="img1"><img class="media-object" width="500" height="300" alt="" src="<?php echo (C("IMG_URL")); ?>/chenei2.jpg"></div>
   <div class="img2"><img class="media-object" width="500" height="300" alt="" src="<?php echo (C("IMG_URL")); ?>/chenei1.jpg"></div>
  <div class="list-group">

    <span class="badge"></span>
    <div class="media">
      <div class="media-left">
        <!-- <img class="media-object" alt="" height="128" src="<?php echo (C("IMG_URL")); ?>/8921825_114333051346_2.jpg"> -->
      </div>
      <div class="" width="500">

        <?php if(is_array($info)): foreach($info as $key=>$v): ?><a class="orderlist" style="text-decoration:none;width=500px;border:1px;">
        <h4><?php echo ($v["description"]); ?></h4>
        <p>
          价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：<span><?php echo ($v["price"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
        <p>
         位&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;置：
          <span><?php echo ($v["location"]); ?></span>
        </p>
        <p>
          状 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：
          <span >
            <?php echo ($v["status"]); ?>
            <!-- <span ng-if="!$last">、</span> -->
          </span>
        </p>
        <!-- <a href="<?php echo U('Order/tianjia?id='.$v[placeid]&&'type='.$v[catename]);?>" target="_blank" class="order">预约</a> -->
        <a href="<?php echo U('Order/tianjia',array('id'=>$v[placeid],'type'=>$v[catename],'location'=>$v[location],'price'=>$v[price]));?>" target="_blank" class="order">预约</a><?php endforeach; endif; ?>
        </a>
      </div>

    </div>


</div>
<!-- <div>
  <p>总共：{{totalCount}}条记录，第{{currentPage}}/{{totalPages}}页</p>
  <nav>
    <ul class="pager">
      <li ><a>« 上一页</a></li>
      <li ><a>下一页 »</a></li>
    </ul>
  </nav>
</div> -->
<div class="pages">
    <?php echo ($page); ?>
</div>
<!-- <div class="mask" ng-show="loading">
  <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div> -->

</body>
</html>