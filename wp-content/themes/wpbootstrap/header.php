<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>
    <section>
    <nav id="bootstrap-override" class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1, #bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Optional website name / brand / logo -->
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                  <?php bloginfo('name'); ?>
              </a>
            </div><!--/.navbar-header-->
            <div>
            <?php
                    // WP Bootstrap Navwalker
                    // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                         'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse pull-left',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
            ?>
            </div>
            <div>
            <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondary',
                        'theme_location'    => 'secondary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse pull-right',
                        'container_id'      => 'bs-example-navbar-collapse-2',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
            ?>
          </div>
        </div><!--/.container-fluid -->
    </nav><!--/.navbar-->﻿
  </section>
    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>
