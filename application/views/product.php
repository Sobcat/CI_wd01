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
		
	<!-- 产品展示 -->
	<div class="common-width product sub-page">
			<h1 class="">产品展示</h1>
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
	
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>