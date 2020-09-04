<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image"style="background-image: url(<?php echo  get_theme_file_uri('/images/Grackle-by-Phil-Gehlen.jpeg') ?>);"></div>
      <div class="page-banner__content">
        <h1 class="page-banner__headline">Welcome!</h1>
        <h2 class="page-banner__headline--small">We&rsquo;ll take your birding to a whole new level.</h2>
        <h3 class="page-banner__headline--small">Why don&rsquo;t you check out our latest <strong>events</strong>!</h3>
        <a href="#">Read the latest news!</a>
      </div>
    </div>

    <div class="main-content">
      <div class="main-content__one">
        <div class="main-content__inner">
          <h2 class="main-content__inner--headline">Upcoming Events</h2>
          <div class="event">
            <a class="event__date" href="#">
              <span class="event__month">January</span>
              <span class="event__day">1</span>
            </a>
            <div class="event__content">
              <h5 class="event__title"><a href="#">Best day of the year for birders!</a></h5>
              <p class="event__desc">Try and find as many birds as you can! All birds count!</p>
              <a href="#" class="event__btn--gray">
                <strong>
                  Learn more
                </strong>
                </a>
            </div>
          </div>
          <div class="event">
            <a class="event__date t-center" href="#">
              <span class="event__month">Apr</span>
              <span class="event__day">02</span>
            </a>
            <div class="event__content">
              <h5 class="event__title headline"><a href="#">Member Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual member picnic day.</p>
              <a href="#" class="nu gray">Learn more</a>
            </div>
          </div>
          <a href="#" class="event__btn">View All Events</a>
        </div>
      </div>
      <div class="main-content__two">
        <div class="main-content__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event">
            <a class="event__date event__date--beige t-center" href="#">
              <span class="event__month">Jan</span>
              <span class="event__day">20</span>
            </a>
            <div class="event__content">
              <h5 class="event__title headline"><a href="#">We Were Voted Best Birding Club</a></h5>
              <p>For the 2nd year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event">
            <a class="event__date event__date--beige t-center" href="#">
              <span class="event__month">Feb</span>
              <span class="event__day">04</span>
            </a>
            <div class="event__content">
              <h5 class="event__title headline"><a href="#">Birders in the National Spotlight</a></h5>
              <p>Two of our birders have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="event__btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <!-- <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Bald-Eagle-by-Phil-Gehlen.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All members have the chance to join our carpooling program.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Saw-Whet-Owl-by-Phil-Gehlen.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Discount at your local retailer</h2>
                <p class="t-center">Member discounts awarded at several retailers.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div> -->

    <?php get_footer();

?>