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
	<div class="common-width sub-page sp-about">
		<h1 class="">公司简介</h1>
		<div class="clearfix" style="position: relative;">
			<div class="a-img">
				<img src="/pinrui//assets/images/home_about.jpg" alt="img">
				<img src="/pinrui//assets/images/gsnxx.png" alt="img">
			</div>
			<div class="a-phone">
				<strong>全国服务热线：</strong><strong>0757-81826024</strong>
			</div>
		</div>
		<div class="a-text">
				<p>
				佛山市南海品锐机械有限公司位于高新技术密集的中国著名建筑铝型材生产基地广东南海，是一家集研发、制造、销售各类铝型材生产线配套机械的专业技术企业。目前公司旗下核心产品为多功能牵引机、滑出台、成品锯等铝型材机械自动化设备，同时公司业务范围延伸至铝型材机械改造及设备安装，为客户提供完善的一站式服务。</p>	
				<p>
				公司凭借在铝型材配套机械设备领域多年的专注执着和成熟的技术，形成了以雄厚技术力量、强大机械加工能力、细致的市场服务的核心竞争优势。公司拥有的高技术、稳定的职员队伍奠定了产品的质量优势，拥有完整的管理制度和运作体系推动企业发展；拥有先进的管理模式和优良传统精塑企业文化，以卓越品质、优质服务、满足客户需求是公司持之以恒的经营准则。</p>
				<p>公司一直竭诚为广大客户提供优质服务，依托灵活、经验丰富的管理团队及紧的营运架构，使公司有能力预见和迅速应对客户的需求。公司具备完善的技术支持能力，完善的品质系统。长期以来，公司产品销售遍及全国，深受铝型材制造厂家的信赖与高度认可。品锐机械将持续致力于为客户提供技术领先的铝型材配机械设备，为成为行业的领导品牌而不懈努力！
				</p>
				<p>经营范围:</p>
				<p>自动牵引机（三头两轨式、双头交接式、小型双牵引机）</p>
				<p>自动滑出台（皮带式、平稳式、同步皮带式）</p>
				<p>在线淬火系统</p>
				<p>成品锯</p>
				<p>铝材调直机</p>
		</div>
	</div>
	<!-- 简介 end-->

	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
</body>
</html>