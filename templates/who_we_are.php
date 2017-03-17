<?php 
    $settings = $GLOBALS['settings'];
    $one = ['title'=> $settings['who-1-title'], 'description'=> $settings['who-1-des']];
    $two = ['title'=> $settings['who-2-title'], 'description'=> $settings['who-2-des']];
    $three = ['title'=> $settings['who-3-title'], 'description'=> $settings['who-3-des']];
?>
<section id="who-we-are">
  <div class="container">
    <h2 class="who-we-are__title title">Who We Are</h2>
    <div class="a-man-has-arrow is-hidden-mobile"><i class="icon-logo-orange"></i></div>
    <div class="columns">
      <div class="column is-half">
        <div class="who-we-are__items">
          <div class="who-we-are__items__item">
            <h2 class="title"><?= $one['title'] ?></h2>
            <p><?= $one['description'] ?></p>
          </div>
          <div class="who-we-are__items__item">
            <h2 class="title"><?= $two['title'] ?></h2>
            <p><?= $two['description'] ?></p>
          </div>
          <div class="who-we-are__items__item">
            <h2 class="title"><?= $three['title'] ?></h2>
            <p><?= $three['description'] ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="who-we-are__items__request column is-8 is-offset-4 has-text-centered">
        <h2 class="title">You focus on entertaining and we will take care of all the details.</h2>
        <div class="who-we-are__items__request__button btn"><i class="icon-circle-plus"></i><a data-popup-open="reqPopup">Request Services</a></div>
      </div>
    </div>
  </div>
</section>