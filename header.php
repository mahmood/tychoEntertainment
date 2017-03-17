<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <title>TychoEnt</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Say Hello :/">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  </head>
  <body>
    <header class="hero">
      <div class="bg__overlay"></div>
      <div class="container is-fluid">
        <div class="columns services-call">
          <div class="column has-text-right">
            <p>For Concierge Services Call</p><span>818.840.9404</span>
          </div>
        </div>
        <div class="columns header__hero hero-head is-hidden-touch">
          <div class="column is-4">
            <div class="header__logo"></div>
          </div>
          <div class="column header__nav">
            <ul class="is-pulled-right">
              <li><a href="#">Services</a></li>
              <li><a href="#">Staffing</a></li>
              <li><a href="#">About</a></li>
              <li class="requestNav btn"><i class="icon-circle-plus"></i><a href="#" data-popup-open="reqPopup">Request services</a></li>
            </ul>
          </div>
        </div>
        <div class="columns sticky__header is-hidden-desktop">
          <div class="column is-4">
            <div class="sticky__header__logo"></div>
          </div>
          <div class="column">
            <div class="is-pulled-right">
              <button class="hamburger hamburger--spin" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
            </div>
          </div>
          <div class="toggleNav__trigger has-text-centered">
            <ul>
              <li><a href="#">Services</a></li>
              <li><a href="#">Staffing</a></li>
              <li><a href="#">About</a></li>
              <li class="requestNav btn"><i class="icon-circle-plus"></i><a href="#" data-popup-open="reqPopup">Request services</a></li>
            </ul>
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
            <h1 class="title header__motto">We are LA’s premier provider of entertainment & event services</h1>
            <div class="columns has-text-centered">
              <div class="column is-8 is-offset-2">
                <ul>
                  <li>Corporate</li>
                  <li>Stadium</li>
                  <li>Restaurant</li>
                  <li>Entertainment</li>
                  <li>Movie Premier</li>
                  <li>Charity & fundraisers</li>
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