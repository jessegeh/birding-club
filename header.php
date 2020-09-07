<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header class="header">
      <div class="header__container">
        <h1 class="header__logo">
          <a href="<?php echo site_url() ?>"><strong>Fictional</strong> Birding Club</a>
        </h1>
        <div class="mobile-nav hidden-on-desk">
          <span class="js-search-trigger header__search-trigger "><i class="fa fa-search" aria-hidden="true"></i></span>
          <span class="js-search-trigger header__search-trigger "><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
          
        <div class="header__menu-group">
          <nav class="main-navigation">
            <ul>
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Learn</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="dropdown-menu">
            <div class="dropdown">
              <p><a href="#" class="dropbtn">My Profile</a></p>
              <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Sign Up</a>
              </div>
            </div>
          </div>
          <div class="searchbox">
            <input  style="font-family: FontAwesome;" placeholder='&#xf002' />
          </div>
        </div>
      </div>
    </header>