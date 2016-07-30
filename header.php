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
      <nav id="mobilenav" class="navbar navbar-default">
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
      <div class="logoblock col-xs-12 col-sm-7">
        <a href="<?php $url = home_url('/'); echo $url;?>"><img id="logo" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/Logolight.png" width="120px" height="120px" alt="Logo" /></a>
        <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url;?>">Slick's Auto Shop
          <?php //bloginfo('name'); ?>
        </a></h1>
        <h1 id="smscreentitle">Slick's Auto Shop</h1>
        <!-- <h2 class="sub-title"><?php bloginfo('description'); ?></h2> -->
      </div>

      <div class="addressblock col-sm-2">
          <p class="address address1">
            <span class="addglyph glyphicon glyphicon-map-marker" style="color: #F68657"></span>5555 Circle Loop
          </p>
          <p class="address address2">
            Orlando, FL 55555
          </p>
          <p class="address address3">
            <span class="addglyph glyphicon glyphicon-earphone" style="color:#F68657"></span>555-555-5555
          </p>
      </div>
      <div class="appointment col-sm-3">
        <a href="http://www.totemdesigns.net/WIEfinal/contact/"><button id="appointmentbtn" class="btn btn-default">Make an Appointment</button></a>
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

      <nav id="desktopnav" class="navbar navbar-default">
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
                <div class="navbar-form" style="margin-left: 3em">
                    <?php dynamic_sidebar('front-sidebar-widget'); ?>

                </div>
          </div>
      </nav>
