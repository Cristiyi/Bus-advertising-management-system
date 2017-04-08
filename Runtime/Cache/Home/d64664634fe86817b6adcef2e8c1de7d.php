<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <title>Document</title> -->
	<link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo (C("CSS_URL")); ?>/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (C("JS_URL")); ?>/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">公交广告预约</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php if($_SESSION['userid']!= null): ?><li><a href="#"><?php echo (session('username')); ?></a></li>
            <li><a href="<?php echo U('Order/showlist');?>" target="_blank">我的订单</a></li>
            <li><a href="<?php echo U('User/logout');?>">注销</a></li>
          <?php else: ?>
            <li><a href="<?php echo U('User/login');?>" target="_blank">登录</a></li>
            <li><a href="<?php echo U('User/register');?>" target="_blank">注册</a></li><?php endif; ?>
            
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
</body>
</html>