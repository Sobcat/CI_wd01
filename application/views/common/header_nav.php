<?php
$this->lang->load('base', $_SESSION['language']);
$nav = $this->lang->line('nav');
?>
<header>
  <div class="header-contect common-width clearfix">
    <div class="header-logo"><a href="/"><img src="/pinrui/assets/images/logo.png" alt=""></a><span><?php echo $this->lang->line('web_name');?></span></div>
    <nav id="header-menu" class="header-menu">
      <ul>
        <li><a href="/pinrui/"><?php echo $nav['home'];?></a></li>
        <li><a href="/pinrui/index.php/index/about"><?php echo $nav['about'];?></a></li>
        <li><a href="/pinrui/index.php/index/product"><?php echo $nav['product'];?></a></li>
        <li><a href="/pinrui/index.php/index/message"><?php echo $nav['message'];?></a></li>
        <li><a href="/pinrui/index.php/index/contact"><?php echo $nav['contact'];?></a></li>
        <li><a href="/pinrui/index.php/index/index/<?php echo $_SESSION['language']=='chinese'?'en':'cn';?>"><?php echo $_SESSION['language']=='chinese'?'English':'中文';?></a></li>
        <li id="menu-close" class="mini-menu-close"><a href="javascript:void(0);"><?php echo $nav['back'];?></a></li>
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