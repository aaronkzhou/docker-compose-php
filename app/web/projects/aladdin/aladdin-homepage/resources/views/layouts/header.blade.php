<!-- header -->
<header> 
  <!-- Logo -->
  <div class="container">
    <div class="logo"> <a href="/"><img  class="img-responsive" src="images/logo-w.png" alt="" ></a> </div>
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <!-- Navigation -->
    <nav class="navbar">
      <ul class="nav ownmenu">
        <li class="<?php echo basename($_SERVER['PHP_SELF']) ==  'index.php' ? 'active' : null?>"> <a href="/">首页</a> </li>
        <li class="<?php echo basename($_SERVER['PHP_SELF'])  ==  'about.php' ? 'active' : null?>"> <a href="about.php">关于我们</a> </li>
        <li class="<?php echo basename($_SERVER['PHP_SELF'])  ==  'pricing.php' ? 'active' : null?>"> <a href="pricing.php">价格</a> </li>
        <li class="<?php echo basename($_SERVER['PHP_SELF'])  ==  '' ? 'active' : null?>"> <a href="#">立即加入</a> </li>
        <li class="<?php echo basename($_SERVER['PHP_SELF'])  ==  'blog.php' ? 'active' : null?>"> <a href="blog.php">公司动态</a> </li>
        <li class="<?php echo basename($_SERVER['PHP_SELF'])  ==  'contact.php' ? 'active' : null?>"> <a href="contact.php">联系我们</a> </li>
      </ul>
    </nav>
  </div>
</header>