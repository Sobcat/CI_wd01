<?php
$banner = $this->lang->line('banner');
?>
<div class="banner">
		<div class="banner-content common-width">
			<div class="banner-block-mian">
				<div class="bbm-text">
					<span><?php echo $banner['title1'];?></span>
					<span><?php echo $banner['title2'];?></span>
					<p><?php echo $banner['text'];?></p>
				</div>
			</div>
			<div class="banner-block-min01"></div>
			<div class="banner-block-min02"></div>
			<div class="banner-block-min03"></div>
			<div class="banner-block-min04"></div>
		</div>
		<!-- swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide ban1"><img src="/pinrui/assets/images/ban1.jpg" alt=""></div>
				<div class="swiper-slide ban2"><img src="/pinrui/assets/images/ban2.jpg" alt=""></div>
				<div class="swiper-slide ban3"><img src="/pinrui/assets/images/ban3.jpg" alt=""></div>
			</div>
			<!-- 如果需要分页器 -->
			<div class="swiper-pagination"></div>
			
			<!-- 如果需要导航按钮 -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
			
			<!-- 如果需要滚动条 -->
			<div class="swiper-scrollbar"></div>
		</div>
	</div>