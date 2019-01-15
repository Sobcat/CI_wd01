<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
	<!-- 在线留言 -->
	<div class="common-width online-message sub-page">
		<h1 class=""><?php echo $this->lang->line('nav')['message'];?></h1>
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
				<div class="fl"> 
					<p><?php echo $this->lang->line('mes_derection');?></p>
					<h1><?php echo $this->lang->line('mes_welcome');?></h1>
				</div>
				<img src="/pinrui/assets/images/b1.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- 在线留言 end -->
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>