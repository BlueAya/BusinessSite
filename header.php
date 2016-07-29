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
    <header class="row">
      <div class="col-xs-12">
        <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url;?>">
          <?php bloginfo('name'); ?>
        </a></h1>
        <h2 class="sub-title"><?php bloginfo('description'); ?></h2>
      </div>

    </header>
    <div id="nav" class="container-fluid">
      <div class="col-lg-12">
        <?php
            wp_nav_menu(array(
              'sort_column' => 'menu_order',
              'container_class' => 'blank-menu-header'
            ));
        ?>
      </div>
    </div>
