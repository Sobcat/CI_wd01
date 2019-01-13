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
	<!-- 简介 -->
	<div class="common-width about">
		<div class="clearfix">
			<div class="about-main">
				<div class="title clearfix">
					<h1 class="">公司简介</h1>
					<span  class="">
						<a href="">查看更多</a>
					</span>
				</div>
				<div class="a-text">
				<p>
				佛山市南海品锐机械有限公司位于高新技术密集的中国著名建筑铝型材生产基地广东南海，是一家集研发、制造、销售各类铝型材生产线配套机械的专业技术企业。目前公司旗下核心产品为多功能牵引机、滑出台、成品锯等铝型材机械自动化设备，同时公司业务范围延伸至铝型材机械改造及设备安装，为客户提供完善的一站式服务。</p>
				<p class="disnone">公司凭借在铝型材配套机械设备领域多年的专注执着和成熟的技术，形成了以雄厚技术力量、强大机械加工能力、细致的市场服务的核心竞争优势。公司拥有的高技术、稳定的职员队伍奠定了产品的质量优势，拥有完整的管理制度和运作体系推动企业发展；拥有先进的管理模式和优良传统精塑企业文化，以卓越品质、优质服务、满足客户需求是公司持之以恒的经营准则。</p>
				</div>
			</div>
			<div class="about-img">
				<img src="/pinrui/assets/images/home_about.jpg" alt="img">
				<span></span>
			</div>
		</div>
			<div class="a-phone">
				<div><span></span> <strong>全国服务热线：</strong><strong>0757-81826024</strong> <span></span></div>
			</div>
	</div>
	<!-- 简介 end-->
	<!-- 产品展示 -->
	<div class="common-width product">
		<div class="title clearfix">
					<h1 class="">产品展示</h1>
					<span  class="">
						<a href="">查看更多</a>
					</span>
			</div>
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
	<!-- 在线留言 -->
	<div class="common-width online-message">
		<div class="title clearfix">
					<h1 class="">在线留言</h1>
		</div>
		<p>如果对我们的产品有订购需求或者有什么建议，欢迎在线留言，我们真诚为您服务！</p>
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