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
        <span class="js-search-trigger header__search-trigger hidden-on-desk "><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="header__menu-trigger fa fa-bars hidden-on-desk " aria-hidden="true"></i>
        <div class="header__menu-group">
          <nav class="main-navigation">
            <ul>
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Learn</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="header__util">
          <ul>
            <li><a href="#" class="btn btn--small btn--orange">Login</a></li>
            <li><a href="#" class="btn btn--small btn--dark-orange">Sign Up</a></li>
            <li><a href="#"><span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
          </ul>
          </div>
        </div>
      </div>
    </header>