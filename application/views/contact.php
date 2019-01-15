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
	<div class="common-width sub-page">
		<h1 class=""><?php echo $this->lang->line('nav')['contact'];?></h1>
		<div class="contact-title">
			<h1><?php echo $this->lang->line('phone');?>0757-81826024</h1>
			<div class="contact-text" style="font-family: 微软雅黑; font-size: 16px; line-height: 312%; color: rgb(62, 61, 	61);">
				<span><?php echo $this->lang->line('tel');?>：0757-81826024 / 0757-81826034 </span><span><?php echo $this->lang->line('fax');?>：0757-81792989</span><span></span><div class="ye"></div>
				<span><?php echo $this->lang->line('email');?>：PINRUIJIXIE@163.com</span><span><?php echo $this->lang->line('add');?><?php echo $this->lang->line('addr');?></span>
			</div>
		</div>
		<div class="map">
            <div id="allmap">
            </div>
        </div>
	</div>
	<!-- 页脚 -->
	<?php $this->load->view('common/footer');?>
	<!-- 页脚 end -->
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>
    <script>
			$(function() {
				ShowMap('113.078959,23.060835', "<?php echo $this->lang->line('web_name');?>", "<?php echo $this->lang->line('addr');?>", '', '', '10');
			})

			function getInfo(id) {
				$.ajax({
					type: "POST",
					url: "WebUserControl/Contact/GetInfo.ashx",
					cache: true,
					async: true,
					data: {
						ID: id
					},
					success: function(data) {
						data = eval(data);
						var length = data.length;
						if(length > 0) {
							ShowMap(data[0]["Image"], data[0]["NewsTitle"], data[0]["Address"], data[0]["Phone"], data[0]["NewsTags"], data[0]["NewsNum"]);
						}
					}
				});
			}

			function ShowMap(zuobiao, name, addrsee, phone, chuanzhen, zoom) {
				var arrzuobiao = zuobiao.split(',');
				var map = new BMap.Map("allmap");
				map.centerAndZoom(new BMap.Point(arrzuobiao[0], arrzuobiao[1]), zoom);
				map.addControl(new BMap.NavigationControl());
				var marker = new BMap.Marker(new BMap.Point(arrzuobiao[0], arrzuobiao[1]));
				map.addOverlay(marker);
				var infoWindow = new BMap.InfoWindow('<p style="color: #bf0008;font-size:16px;">' + name +  '</p><p style="font-size:14px;">' + addrsee + '</p>');
				marker.addEventListener("click", function() {
					this.openInfoWindow(infoWindow);
				});
				marker.openInfoWindow(infoWindow);
			}
    </script>
</body>
</html>