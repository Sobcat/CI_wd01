<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->lang->load('product', $_SESSION['language']);
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
			<h1 class=""><?php echo $this->lang->line('nav')['product'];?></h1>
			<ul class="product-list clearfix product-list-01">
				<li><a href="/pinrui/index.php/index/product_detail/1"><img src="/pinrui/assets/images/pro/001.png" alt=""><span><?php echo $this->lang->line('pro1');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/2"><img src="/pinrui/assets/images/pro/002.png" alt=""><span><?php echo $this->lang->line('pro2');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/3"><img src="/pinrui/assets/images/pro/003.png" alt=""><span><?php echo $this->lang->line('pro3');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/4"><img src="/pinrui/assets/images/pro/004.png" alt=""><span><?php echo $this->lang->line('pro4');?></span></a></li>
			</ul>
			<ul class="product-list clearfix product-list-02">
				<li><a href="/pinrui/index.php/index/product_detail/5"><img src="/pinrui/assets/images/pro/005.png" alt=""><span><?php echo $this->lang->line('pro5');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/6"><img src="/pinrui/assets/images/pro/006.png" alt=""><span><?php echo $this->lang->line('pro6');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/7"><img src="/pinrui/assets/images/pro/007.png" alt=""><span><?php echo $this->lang->line('pro7');?></span></a></li>
				<li><a href="/pinrui/index.php/index/product_detail/8"><img src="/pinrui/assets/images/pro/008.png" alt=""><span><?php echo $this->lang->line('pro8');?></span></a></li>
			</ul>
	</div>
	<!-- 产品展示 end-->
	
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>