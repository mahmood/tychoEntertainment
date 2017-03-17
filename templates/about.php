<?php 
    $settings = $GLOBALS['settings'];
    $title = $settings['about_title'];
    $about = $settings['about'];
?>
<section id="about">
  <div class="container is-fluid">
    <h2 class="title"><?= $title ?></h2>
    <div class="a-man-has-arrow is-hidden-mobile"><i class="icon-logo-orange"></i></div>
    <div class="columns">
      <div class="column is-half">
        <div class="about__item">
          <?= nl2br($about); ?>
          <div class="about__item__button btn"><i class="icon-circle-plus"></i><a data-popup-open="reqPopup">Request Services</a></div>
        </div>
      </div>
    </div>
  </div>
</section>