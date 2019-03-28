<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <?php wp_head(); ?>

  <title><?php echo esc_html(bloginfo('name')); ?></title>
</head>

<body <?php body_class(); ?>>
  <nav id="accordion-nav" class="d-none d-lg-block">
    <h5>JUMP TO</h5>
    <div class="accordion-nav">
      <a href="#header" role="button" class="scroller">
        <span class="styler"></span>
        <span class="accordion-title">Top</span>
      </a>
      <a href="#vendors-sponsors" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="vendors-sponsors">
        <span class="styler"></span>
        <span class="accordion-title">Vendors and Sponsors</span>
      </a>
      <a href="#time-location" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="time-location">
        <span class="styler"></span>
        <span class="accordion-title">Time and Location</span>
      </a>
      <a href="#tickets" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="tickets">
        <span class="styler"></span>
        <span class="accordion-title">Tickets</span>
      </a>
      <a href="#sponsorship-information" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="tickets">
        <span class="styler"></span>
        <span class="accordion-title">Sponsorship Information</span>
      </a>
      <a href="#last-year-gallery" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="last-year-gallery">
        <span class="styler"></span>
        <span class="accordion-title">2018 Gallery</span>
      </a>
    </div>
    <div class="social">
      <?php if(get_field('facebook', 'option')): ?>
        <a href="<?php echo esc_url(get_field('facebook', 'option')); ?>" class="facebook" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook</span></a>
      <?php endif; if(get_field('twitter', 'option')): ?>
        <a href="<?php echo esc_url(get_field('twitter', 'option')); ?>" class="twitter" target="_blank"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
      <?php endif; ?>
    </div>
  </nav>
  <header id="header">
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="logos">
        <a href="https://www.businetsinc.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/BusiLogo.svg" class="businets img-fluid" alt="Businets Logo" /></a>
        <a href="https://childressagency.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/CA_Logo.svg" class="childress img-fluid" alt="Childress Agency Logo" /></a>
      </div>
      <div class="hero-caption">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MainLogo.svg" class="img-fluid" alt="Beer and BBQ Logo" />
        <h1>Bringing Leaders Together</h1>
        <h3>Thursday June 27</h3>
      </div>

      <a href="#main-content" id="scroll-down" class="scroller d-none d-sm-block">All the info you need</a>
    </div>
  </header>
