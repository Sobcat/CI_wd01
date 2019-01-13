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
	<!-- 在线留言 -->
	<div class="common-width online-message sub-page">
		<h1 class="">在线留言</h1>
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
				<div class="fl"> 
					<p>如果对我们的产品有订购需求或者有什么建议，欢迎在线留言，我们真诚为您服务！</p>
					<h1>欢迎留言</h1>
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