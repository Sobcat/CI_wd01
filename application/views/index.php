<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->lang->load('home', $_SESSION['language']);
$this->lang->load('product', $_SESSION['language']);
$this->lang->load('message', $_SESSION['language']);
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
					<h1 class=""><?php echo $this->lang->line('nav')['about'];?></h1>
					<span  class="">
						<a href="/pinrui/index.php/index/about"><?php echo $this->lang->line('more');?></a>
					</span>
				</div>
				<div class="a-text">
				<p>
				<?php echo $this->lang->line('home_about1');?>
				</p>
				<p class="disnone"><?php echo $this->lang->line('home_about2');?></p>
				</div>
			</div>
			<div class="about-img">
				<img src="/pinrui/assets/images/home_about.jpg" alt="img">
				<span></span>
			</div>
		</div>
			<div class="a-phone">
				<div><span></span> <strong><?php echo $this->lang->line('phone');?></strong><strong>0757-81826024</strong> <span></span></div>
			</div>
	</div>
	<!-- 简介 end-->
	<!-- 产品展示 -->
	<div class="common-width product">
		<div class="title clearfix">
					<h1 class=""><?php echo $this->lang->line('nav')['product'];?></h1>
					<span  class="">
						<a href="/pinrui/index.php/index/product"><?php echo $this->lang->line('more');?></a>
					</span>
			</div>
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
	<!-- 在线留言 -->
	<div class="common-width online-message">
		<div class="title clearfix">
					<h1 class=""><?php echo $this->lang->line('nav')['message'];?></h1>
		</div>
		<p><?php echo $this->lang->line('mes_derection');?></p>
		<div class="clearfix">
			<form action="" class="">
				<h3><?php echo $this->lang->line('mes_title');?></h3>
				<div><input type="text" name='mes-title'></div>
				<h3><?php echo $this->lang->line('mes_phone');?><strong>*</strong></h3>
				<div><input type="text" name='mes-phone'></div>
				<h3><?php echo $this->lang->line('mes_message');?></h3>
				<div><textarea name="mes-text" id=""  style="resize:none;"></textarea></div>
				<div><button><?php echo $this->lang->line('mes_submit');?></button></div>
			</form>
			<div class="om-img-container">
				<img src="/pinrui/assets/images/b1.jpg" alt="">
				<img src="/pinrui/assets/images/b2.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- 在线留言 end -->
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>