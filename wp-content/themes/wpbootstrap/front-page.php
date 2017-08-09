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
    <style>
      .showcase {
        height: 600px;
        padding: 180px 20px;
        text-align: center;
        border-bottom: #ccc 1px solid;
        margin-bottom: 30px;
        color: #fff;
      }
      .showcase{
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        background-size: cover;
      }
      .showcase h1{
        font-size: 55px;
        padding-bottom: 20px;
        color: #fff;
      }
      .showcase p{
        font-size: 20px;
        margin-bottom: 50px;
      }

      /*Start of Transparent Head Bar*/
      .navbar.navbar-default{
        background-color: transparent;
        margin-top: -180px;
        border-color: transparent;
      }
      /*Do not set font-size larger than 16px, header bar will break*/
      .container-fluid{
        font-size: 16px;
        font-weight: bold;
        padding-left: 15px;
      }
      /*End of Transparent Head Bar*/

      /*Start of color of text for Head Bar*/
      .navbar-default .navbar-nav li a {
        color: white !important;
      }
      /*End of color of text for Head Bar*/

      /*Start Active Button Border*/
      .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        width: 100%;
        background-color: #000;
      }
      /*End Active Button Border*/

      /*Start Hover Button Border*/
      .navbar-default .navbar-nav .active a:hover {
        background-color: transparent;
        color: white !important;
      }
      /*End Hover Button Border*/

      /*Start Menu Header*/
      li > a {
        position: relative;
        color: #000;
        text-decoration: none;
      }
      li > a:hover {
        color: #000;
      }
      li > a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #000;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
      }
      li > a:hover:before {
        visibility: visible;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
      }
      /*End Menu Header */

      /*Start Brand Name Header*/
      .navbar-default .navbar-brand{
        color: white !important;
      }
       div > a {
        position: relative;
        color: #000;
        text-decoration: none;
      }
      div > a:hover {
        color: #000;
      }
      div > a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #000;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
      }
      div > a:hover:before {
        visibility: visible;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
      }
      /*End Brand Name Header*/

      /*Start of Mobile Meunu Drop Down Bar*/
      .navbar-default .navbar-toggle .icon-bar{
        background-color: white;
      }
      /*End of Mobile Meunu Drop Down Bar*/
    </style>
  </head>
  <body>

  <section class="showcase">
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


    <div class="container">
      <h1><?php echo get_theme_mod('showcase_heading', 'Custom Boostrap Wordpess Theme'); ?></h1>
      <p><?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
      <!-- <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-lg btn-primary"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a> -->
    </div>
  </section>

  <section class="boxes">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <?php if(is_active_sidebar('box1')) : ?>
              <?php dynamic_sidebar('box1'); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if(is_active_sidebar('box2')) : ?>
              <?php dynamic_sidebar('box2'); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if(is_active_sidebar('box3')) : ?>
              <?php dynamic_sidebar('box3'); ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <footer class="blog-footer">
    <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
  <?php wp_footer(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
  </html>
