<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->lang->load('about', $_SESSION['language']);
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
	<div class="common-width sub-page sp-about clearfix">
		<h1 class=""><?php echo $this->lang->line('nav')['about'];?></h1>
		<div class="clearfix" style="position: absolute;width:100%;">
			<div class="a-img">
				<img src="/pinrui//assets/images/home_about.jpg" alt="img">
				<img src="/pinrui//assets/images/gsnxx.png" alt="img">
			</div>
			<div class="a-phone">
				<strong><?php echo $this->lang->line('phone');?></strong><strong>0757-81826024</strong>
			</div>
		</div>
		<div class="a-text">
				<p><?php echo $this->lang->line('about_p1');?>
				</p>	
				<p><?php echo $this->lang->line('about_p2');?>
				</p>
				<p><?php echo $this->lang->line('about_p3');?>
				</p>
				<?php echo $this->lang->line('about_p4');?>
		</div>
	</div>
	<!-- 简介 end-->

	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>