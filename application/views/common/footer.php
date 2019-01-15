<footer>
  <div class="common-width">
    <div class="clearfix">
      <div class="f-summary fl">
        <div class="header-logo"><a href="/"><img src="/pinrui//assets/images/logo.png" alt=""></a><span><?php echo $this->lang->line('footer_web_name');?></span></div>
          <p style="padding:80px 0 0 0;"><?php echo $this->lang->line('footer_derection');?></p>
        </div>
      <div class="search fr">
        <h1><?php echo $this->lang->line('phone');?>0757-81826024</h1>
        <div>
          <input type="text" name="keywords" value="<?php echo $this->lang->line('search_tip');?>"><span><?php echo $this->lang->line('search');?></span>
        </div>
      </div>
    </div>
    
  </div>
  <div class="copyright">
      <p>Copyright © 2018 <?php echo $this->lang->line('footer_web_name');?>  <?php echo $this->lang->line('copyright');?></p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    autoplay: {
      delay: 3000,//1秒切换一次
    },
    // 如果需要分页器
    pagination: {
      el: '.swiper-pagination',
    },
    
    // 如果需要前进后退按钮
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // 如果需要滚动条
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
</script>