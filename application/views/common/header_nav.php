<header>
  <div class="header-contect common-width clearfix">
    <div class="header-logo"><a href="/"><img src="../../../assets/images/logo.png" alt=""></a><span>佛山品锐机械</span></div>
    <nav id="header-menu" class="header-menu">
      <ul>
        <li><a href="/">网站首页</a></li>
        <li><a href="/index/about">公司简介</a></li>
        <li><a href="/index/product">产品中心</a></li>
        <li><a href="/index/message">在线留言</a></li>
        <li><a href="/index/contact">联系我们</a></li>
        <li id="menu-close" class="mini-menu-close"><a href="javascript:void(0);">返回</a></li>
      </ul>
    </nav>
    <div class="mini-icon-container">
      <div id="menu-open" class="mini-icon">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div id="menu-mask"></div>
  </div>
</header>
<script>
		var menuOpen = document.getElementById('menu-open');
    var miniMenu = document.getElementById('header-menu');
    var menuClose = document.getElementById('menu-close');
    var menuMask = document.getElementById('menu-mask');
    menuOpen.onclick=function(){
      miniMenu.style.right = 0;
      menuMask.style.display= 'block';
    }
    menuClose.onclick=function(){
      miniMenu.style.right = '-60%';
      menuMask.style.display= 'none';
    }
</script>