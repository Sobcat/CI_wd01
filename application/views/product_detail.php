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
			<div class="product-detail">
				<div class="product-detail-left">
					<!-- 产品图片 -->
					<div class="img-min">
						<!-- 小图 -->
						<img src="" alt="">
						<span id="mousebg"></span>
					</div>
					<!-- 放大图 -->
					<div class="img-max">
						<img src="" alt="" id="img-max-img">
					</div>
				</div>
				<div class="product-detail-right">

				</div>
			</div>
			

	</div>
	<!-- 产品展示 end-->
	
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script>
		// 图片放大效果
		var imgMin = 	document.getElementsByClassName('img-min');
		
	</script>

</body>
</html>