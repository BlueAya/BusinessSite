<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!-- Links to our Style.css file -->
  <link rel="stylesheet" type="text/css" href="
    <?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
  <div class="container-fluid"> <!-- Begin Container -->
    <header class="container-fluid">
      <div class="col-xs-12">
        <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url;?>">Slick's Auto Shop
          <?php //bloginfo('name'); ?>
        </a></h1>
        <!-- <h2 class="sub-title"><?php bloginfo('description'); ?></h2> -->
      </div>

    </header>
    <!-- <div id="nav" class="container-fluid"> -->
      <!-- <nav class="navbar navbar-default"> -->
        <?php
            //wp_nav_menu(array(
              //'sort_column' => 'menu_order',
              //'container_class' => 'blank-menu-header'
            //));
        ?>
      <!-- </nav> -->

    <!-- </div> -->

      <nav class="navbar navbar-default">
          <div class="container-fluid">
                <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!-- <a class="navbar-brand" href="#">Slick's Auto Shop</a> -->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav">
                        <?php
                            wp_nav_menu(array(
                              'sort_column' => 'menu_order',
                              'container_class' => 'blank-menu-header'
                            ));
                        ?>
                            <?php //dynamic_sidebar('front-sidebar-widget'); ?>
                      </ul>
                </div>
          </div>
      </nav>
