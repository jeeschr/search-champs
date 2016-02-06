<?php
  // For use with Sagextras (https://github.com/storm2k/sagextras)
?>

<!-- <header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header> -->





 <!-- Fixed navbar -->
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
<!--           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="/">
             <img src="<?= get_template_directory_uri(); ?>/dist/images/search-champs-logo.png" alt="Search Champions">
          </a>
        </div>
        <!-- <div id="navbar" class="navbar-collapse collapse"> -->
          <!-- <ul class="nav navbar-nav"> -->
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <!-- <li><a href="#about">About</a></li> -->
            <!-- <li><a href="#contact">Contact</a></li> -->
          <!-- </ul> -->
        <!-- </div>/.nav-collapse  -->
      </div>
    </nav>
<div id="wrapper">