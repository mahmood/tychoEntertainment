<?php
    $settings = $GLOBALS['settings'];
    $tel = $settings['tel'];
    $motto = $settings['motto'];
    $services = $settings['services'];
 ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
    elseif (is_single() ) { single_post_title(); }
    elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }
    else { wp_title('',true); } ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Say Hello :/">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="hero">
      <div class="bg__overlay"></div>
      <div class="container is-fluid">
        <div class="columns services-call">
          <div class="column has-text-right">
            <p>For Concierge Services Call</p><span><?php echo $tel; ?></span>
          </div>
        </div>
        <div class="columns header__hero hero-head is-hidden-touch">
          <div class="column is-4">
            <div class="header__logo"></div>
          </div>
          <div class="column header__nav">
              <div class="is-pulled-right">
                  <div class="requestNav btn__menu">
                        <i class="icon-circle-plus"></i>
                        <a href="#" data-popup-open="reqPopup">Request services</a>
                    </div>
              </div>
              <div class="is-pulled-right">
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
              </div>
          </div>
        </div>
        <div class="columns sticky__header is-hidden-desktop">
          <div class="column">
            <div class="sticky__header__logo"><i class="icon-logo-white-faded"></i></div>
            <button class="hamburger hamburger--spin" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
          </div>
          <div class="toggleNav__trigger has-text-centered">
            <div class="">
                  <div class="requestNav btn__menu">
                        <i class="icon-circle-plus"></i>
                        <a href="#" data-popup-open="reqPopup">Request services</a>
                    </div>
              </div>
              <div class="">
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
              </div>
          </div>
        </div>
        <div class="popup" data-popup="reqPopup">
          <div class="popup-inner">
            <div class="container">
              <div class="columns">
                <div class="popup-inner__box column is-half is-offset-3 has-text-centered">
                  <h2 class="title">Request New Services</h2>
                  <p>Fill out your details below and one of our specialists will get back to you in 1-3 business days.</p>
                  <div class="popup-inner__box__form">
                    <form id="reqServices">
                      <p class="control">
                        <input class="input" type="text" placeholder="Your Name">
                      </p>
                      <p class="control">
                        <input class="input" type="text" placeholder="Organization Name">
                      </p>
                      <p class="control">
                        <input class="input" type="email" placeholder="Email Address">
                      </p>
                      <p class="control">
                        <input class="input" type="text" placeholder="Phone Number">
                      </p>
                      <p class="control">
                        <input class="input" type="text" placeholder="Event location?">
                      </p>
                      <p class="control">
                        <input class="input" type="text" placeholder="Number of guests?">
                      </p>
                      <p class="control">
                        <input class="button" type="submit" value="Submit New Event Services Request">
                      </p>
                    </form>
                  </div>
                </div>
                <div class="popup-inner__success">
                  <div class="popup-inner__success__white has-text-centered">
                    <div class="control">
                      <h2 class="title">Received!</h2>
                      <p>One of our specialists will get back to you in 1-3 business days.</p>
                    </div>
                  </div>
                  <div class="popup-inner__success__black has-text-centered">
                    <div class="control">
                      <h2 class="title">Need VIP Attention?</h2>
                      <p>High Profile accounts are handled confidentially by private account managers.</p>
                      <p>To schedule an assessment call our Consierge Services desk at 818.840.9404 Monday - Friday: 9am - 5pm.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><a class="popup-close" data-popup-close="reqPopup" href="#"></a>
          </div>
        </div>
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title header__motto"><?php echo $motto; ?></h1>
            <div class="columns has-text-centered">
              <div class="column is-8 is-offset-2">
                  <ul>
                  <?php foreach($services as $service){ ?>
                    <li><?= $service ?></li>                        
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-foot">
          <div class="columns has-text-centered">
            <div class="column">
              <h4 class="title">Learn More</h4><i class="icon-more"></i>
            </div>
          </div>
        </div>
      </div>
    </header>