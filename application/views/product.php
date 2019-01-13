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
				<li><a href="/pinrui/index/product_detail/1"><img src="/pinrui/assets/images/pro/001.png" alt=""><span>带式冷床</span></a></li>
				<li><a href="/pinrui/index/product_detail/2"><img src="/pinrui/assets/images/pro/002.png" alt=""><span>平移式冷床</span></a></li>
				<li><a href="/pinrui/index/product_detail/3"><img src="/pinrui/assets/images/pro/003.png" alt=""><span>非交接式牵引机</span></a></li>
				<li><a href="/pinrui/index/product_detail/4"><img src="/pinrui/assets/images/pro/004.png" alt=""><span>交接式牵引机</span></a></li>
			</ul>
			<ul class="product-list clearfix product-list-02">
				<li><a href="/pinrui/index/product_detail/5"><img src="/pinrui/assets/images/pro/005.png" alt=""><span>小型牵引机</span></a></li>
				<li><a href="/pinrui/index/product_detail/6"><img src="/pinrui/assets/images/pro/006.png" alt=""><span>调直机</span></a></li>
				<li><a href="/pinrui/index/product_detail/7"><img src="/pinrui/assets/images/pro/007.png" alt=""><span>冷却系统</span></a></li>
				<li><a href="/pinrui/index/product_detail/8"><img src="/pinrui/assets/images/pro/008.png" alt=""><span>成品锯/定尺台</span></a></li>
			</ul>
	</div>
	<!-- 产品展示 end-->
	
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>