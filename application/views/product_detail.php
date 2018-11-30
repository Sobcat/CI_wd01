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
						<img src="/assets/images/lyt1.jpg" alt="">
						<span id="mousebg"></span>
					</div>
					<!-- 放大图 -->
					<div class="img-max">
						<img src="/assets/images/lyt1.jpg" alt="" id="img-max-img">
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
		var imgMax = document.getElementsByClassName('img-max');
		var mouseBg = document.getElementById('mouseBg');
		imgMin.onmouseover = function(){
			// 鼠标进入
			imgMax.style.display = 'block';
			mouseBg.style.display = 'block';
		};
		imgMin.onmouseout = function(){
			// 鼠标进入
			imgMax.style.display = 'none';
			mouseBg.style.display = 'none';
		};
		var _event = event || window.event;
		 var mouseX = _event.clientX - img1.offsetLeft; 
		//计算鼠标相对与小图的位置 
		var mouseY = _event.clientY  - img1.offsetTop; 
		//特殊情况处理，分别靠近四条边的时候 
		if(mouseX<mousebg.offsetWidth/2){ 
			mouseX = mousebg.offsetWidth/2; 
		} 
		if(mouseX>img1.offsetWidth-mousebg.offsetWidth/2){ 
			mouseX = img1.offsetWidth-mousebg.offsetWidth/2; 
		} 
		if(mouseY<mousebg.offsetHeight/2){ 
			mouseY = mousebg.offsetHeight/2; 
		} 
		if(mouseY>img1.offsetHeight-mousebg.offsetHeight/2){ 
			mouseY = img1.offsetHeight-mousebg.offsetHeight/2; 
		} 
		 //计算大图的显示范围 
		img2_img.style.left = -mul*mouseX+img2.offsetWidth/2+"px"; 
		img2_img.style.top = -mul*mouseY+img2.offsetHeight/2+"px"; 
		//使鼠标在白块的中间 
		mousebg.style.left = mouseX-mousebg.offsetWidth/2+"px"; 
		mousebg.style.top = mouseY-mousebg.offsetHeight/2+"px"; 
	</script>

</body>
</html>