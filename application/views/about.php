<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="">
<head>
	<?php $this->load->view('common/head');?>

	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title></title>
	
</head>
<body>
	<!-- 导航菜单 -->
	<?php $this->load->view('common/header_nav');?>
	<!-- 导航菜单 end -->
	<!-- banner -->
	<?php $this->load->view('common/banner');?>
	<!-- banner end -->
	<!-- 简介 -->
	<div class="common-width sub-page sp-about">
		<h1 class="">公司简介</h1>
		<div class="clearfix" style="position: relative;">
			<div class="a-img">
				<img src="/assets/images/home_about.jpg" alt="img">
				<img src="/assets/images/gsnxx.png" alt="img">
			</div>
			<div class="a-phone">
				<strong>全国服务热线：</strong><strong>400-000-0000</strong>
			</div>
		</div>
		<div class="a-text">
				<p>
			内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>	
		</div>
	</div>
	<!-- 简介 end-->
	<!-- 产品展示 -->
	<div class="common-width a-product">
			<ul class="product-list clearfix product-list-01">
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
				<li><img src="/assets/images/kl.jpg" alt=""><span>名字</span></li>
			</ul>
	</div>
	<!-- 产品展示 end-->
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>