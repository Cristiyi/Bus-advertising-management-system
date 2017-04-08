<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
    <title id="title">提交订单</title>
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