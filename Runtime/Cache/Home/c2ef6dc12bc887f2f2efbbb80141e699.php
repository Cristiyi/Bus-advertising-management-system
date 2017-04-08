<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta author="zrong.me 曾荣">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (C("CSS_URL")); ?>/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">公交广告预约</h1>
		<h2 class="sub-title">热爱生活——广告你我他</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="<?php echo U('login');?>" class="active">登录</a>
				<a href="<?php echo U('register');?>">注册</a>
				<div class="slide-bar"></div>				
			</div>
		</div>

		<div class="login form">
			<form action="/zhangjiakou/bus/index.php/Home/User/login.html" method="post" class="group">
				<div class="group-ipt email">
					<input type="text" name="username" id="email" class="ipt" placeholder="用户名" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="userpassword" id="password" class="ipt" placeholder="输入您的登录密码" required>
				</div>
				<!-- <div class="group-ipt verify">
					<input type="text" name="verify" id="verify" class="ipt" placeholder="输入验证码" required>
					<img src="http://zrong.me/home/index/imgcode?id=" class="imgcode">
				</div> -->
				<div class="button">
					<button type="submit" class="login-btn register-btn" id="button">登录</button>
				</div>
			</form>
		</div>

		

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="#">忘记密码？</a>
			</label>
		</div>
	</div>
</div>

<div class="footer">
	<p>广告之家</p>
	<p>Designed By DFF & <a href="zrong.me">mycodes.net</a> 2016</p>
</div>

<script src='<?php echo (C("JS_URL")); ?>/particles.js' type="text/javascript"></script>
<script src='<?php echo (C("JS_URL")); ?>/background.js' type="text/javascript"></script>
<script src='<?php echo (C("JS_URL")); ?>/jquery.min.js' type="text/javascript"></script>
<script src='<?php echo (C("JS_URL")); ?>/layer/layer.js' type="text/javascript"></script>
<script src='<?php echo (C("JS_URL")); ?>/index.js' type="text/javascript"></script>
<script>
	$('.imgcode').hover(function(){
		layer.tips("看不清？点击更换", '.verify', {
        		time: 6000,
        		tips: [2, "#3c3c3c"]
    		})
	},function(){
		layer.closeAll('tips');
	}).click(function(){
		$(this).attr('src','http://zrong.me/home/index/imgcode?id=' + Math.random());
	});
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	});
</script>
</body>
</html>