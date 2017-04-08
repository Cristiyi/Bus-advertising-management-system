<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo (C("CSS_URL")); ?>/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (C("JS_URL")); ?>/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
    .container-fluid {
      width: 500px;
      position: fixed;
      top: 0px;
      bottom: 0;
      z-index: 1000;
      display: block;
    /*padding: 20px;*/
    /*overflow-x: hidden;
    overflow-y: auto;*/
    /* Scrollable contents if viewport is shorter than content. */
      background-color: #f5f5f5;
      border-right: 1px solid #eee;
  }

    </style>
  </head>

  <body>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <!-- <ul class="nav nav-sidebar">
            <li class="active"><a href="#">车身广告 <span class="sr-only"></span></a></li>
            <li><a href="#">车内广告</a></li>
            <li><a href="#">站牌广告</a></li>
            <!-- <li><a href="#">Export</a></li> -->
          <!-- </ul> -->
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo U('right');?>" target="right">首页<span class="sr-only"></span></a></li>
            <li class="active"><a href="<?php echo U('Cheshen/showlist');?>" target="right">车身广告<span class="sr-only"></span></a></li>
            <li><a href="<?php echo U('Chenei/showlist');?>" target="right">车内广告<span class="sr-only"></span></a></li>
            <li><a href="<?php echo U('Zhanpai/showlist');?>" target="right">站牌广告<span class="sr-only"></span></a></li>
          </ul>
         
        </div>
      </div>
    </div>
        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo (C("JS_URL")); ?>/jquery.min.js"></script>
    <script src="<?php echo (C("JS_URL")); ?>/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo (C("JS_URL")); ?>/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo (C("JS_URL")); ?>/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>