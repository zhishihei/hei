<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/hei.png" type="image/png">
<title>只是黑 - 没情怀不客观非理性商业评论</title>
<style>

	body {
		margin: 0;
		padding: 0;
		line-height: 1.5;
		background: url('img/bg.png') repeat scroll 0% 0% #333;
		color: #FFF;
		text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
	}

	ul {
		list-style: none;
		padding: 0px;
	}

	a {
		color: #7bd;
		outline: medium none;
		text-decoration: none;
	}

	a.hei {
	}

	header {
		width: 100%;
		border-bottom: 1px solid #c00;
		padding: 20px 0;
		margin: 0 0 40px 0;
	}

	.container {
		width: 100%;
		height: 100%;
		max-width: 640px;
		margin: 0 auto;
	}

	.markdown  {
		color: #CCC;
	}

	.markdown h1 {
		border-bottom: 1px solid #555;
	} 

	footer {
		margin: 40px 0px;
		border-top: 1px solid #c00;
		text-align: center;
	}

</style>
</head>

<body>
    <div class="container">
	<header>
		<h1>只是<strong style="color:#000">黑</strong></h1>
		<h2>没情怀不客观非理性商业评论</h2>
	</header>
	<div class="markdown content">
	<?php 

	require 'vendor/autoload.php';

	$Parsedown = new Parsedown();
	
	//echo $Parsedown->text(file_get_contents('doc/chui2.md'));

	echo $Parsedown->text(file_get_contents('doc/chui1.md'));

	?>
	</div>

	<footer>
		<p>投稿联系:  <a href="mailto: feng@zhishihei.com">feng@zhishihei.com</a></p>
		<!--
		<h4>黑名单</h4>
		<ul>
		<li><a class="hei" href="http://weibo.com/laoluoyonghao">罗永浩</a></li>
		<li><a class="hei" href="http://weibo.com/leijun">雷布斯</a></li>
		<li><a class="hei" href="http://weibo.com/techmessager">王自如</a></li>
		</ul>
		-->
	</footer>
	</div>
</body>

</html>
