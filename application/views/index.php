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
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
			</ul>
			<ul class="product-list clearfix product-list-02">
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
				<li><a href=""><img src="/assets/images/kl.jpg" alt=""><span>名字</span></a></li>
			</ul>
	</div>
	<!-- 产品展示 end-->
	<!-- 在线留言 -->
	<div class="common-width online-message">
		<div class="title clearfix">
					<h1 class="">在线留言</h1>
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
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>