<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
    <header class="header">
      <div class="header__container">
        <h1 class="header__logo">
          <a href="#"><strong>Fictional</strong> Birding Club</a>
        </h1>
        <span class="js-search-trigger header__search-trigger hidden-on-desk "><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="header__menu-trigger fa fa-bars hidden-on-desk " aria-hidden="true"></i>
        <div class="header__menu-group">
          <nav class="main-navigation">
            <ul>
              <li><a href="#">About Us</a></li>
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