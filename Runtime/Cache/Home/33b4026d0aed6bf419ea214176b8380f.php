<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
    <title id="title">bootstrap风格的html5表单验证示例</title>
    <link href="<?php echo (C("CSS_URL")); ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (C("CSS_URL")); ?>/dashboard.css" rel="stylesheet">
    <link href="<?php echo (C("CSS_URL")); ?>/mypage.css" rel="stylesheet">
    <style>
    body {
      background:url(<?php echo (C("IMG_URL")); ?>/bus_safe.jpg) repeat;
    }
    </style>
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

  <table class="table table-striped">
  <caption>我的订单</caption>
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

<div class="pages">
    <?php echo ($page); ?>
</div>

</body>
</html>