<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="robots" content="index, follow" />
	<meta name="format-detection" content="telephone=no" />

	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title></title>

	<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/assets/css/style.css">
	
</head>
<body>
	<!-- 导航菜单 -->
	<?php $this->load->view('common/header_nav');?>
	<!-- 导航菜单 end -->
	<!-- banner -->
	<div class="banner">
		<div class="banner-content common-width">
			<div class="banner-block-mian">
				<div class="bbm-text">
					<span>内容内容</span>
					<span>内容内容</span>
					<p>内容内容内容内容内容内容内容内容</p>
				</div>
			</div>
			<div class="banner-block-min01"></div>
			<div class="banner-block-min02"></div>
			<div class="banner-block-min03"></div>
			<div class="banner-block-min04"></div>
		</div>
	</div>
	<!-- banner end -->
	<!-- 简介 -->
	<div class="common-width about">
		<div class="clearfix">
			<div class="about-main">
				<div class="title clearfix">
					<h1 class="">公司简介</h1>
					<span  class="">
						<a href="">MORE</a>
					</span>
				</div>
				<div class="a-text">
					内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
				</div>
			</div>
			<div class="about-img">
				<img src="/assets/images/home_about.jpg" alt="img">
				<span></span>
			</div>
		</div>
			<div class="a-phone">
				<div><span></span> <strong>全国服务热线：</strong><strong>400-000-0000</strong> <span></span></div>
			</div>
	</div>
	<!-- 简介 end-->
	<!-- 产品展示 -->
	<div class="common-width product">
		<div class="title clearfix">
					<h1 class="">产品展示</h1>
					<span  class="">
						<a href="">MORE</a>
					</span>
			</div>
			<ul class="product-list clearfix product-list-01">
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
			</ul>
			<ul class="product-list clearfix product-list-02">
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
			</ul>
	</div>
	<!-- 产品展示 end-->
	<!-- 在线留言 -->
	<div class="common-width online-message">
		<div class="title clearfix">
					<h1 class="">在线留言</h1>
					<span  class="">
						<a href="">MORE</a>
					</span>
		</div>
		<p>如果对我们的产品有订购需求或者有什么建议，欢迎在线留言，我们真诚为您服务！</p>
		<div class="clearfix">
			<form action="" class="">
				<h3>标题</h3>
				<div><input type="text" name='mes-title'></div>
				<h3>手机<strong>*</strong></h3>
				<div><input type="text" name='mes-phone'></div>
				<h3>内容</h3>
				<div><textarea name="mes-text" id=""  style="resize:none;"></textarea></div>
				<div><button>提交</button></div>
			</form>
			<div class="om-img-container">
				<img src="/assets/images/lyt1.jpg" alt="">
				<img src="/assets/images/lyt1.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- 在线留言 end -->
</body>
</html>