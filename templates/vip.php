<?php 
    $settings = $GLOBALS['settings'];
    $tel = $settings['tel'];
?>
<section id="vip">
  <div class="container">
    <div class="columns">
      <div class="column is-12">
        <div class="tile is-ancestor">
          <div class="tile is-3 is-vertical is-parent">
            <div class="tile is-child">
              <div class="vip__button has-text-centered">VIP Accounts</div>
            </div>
          </div>
          <div class="tile is-parent">
            <div class="tile is-child vip__desc">
              <p>High Profile accounts are handled confidentially by private account managers.</p>
              <p>To schedule an assessment <b>call our Consierge Services desk at  <?= $tel ?></b></p>
              <p><b>Monday - Friday:</b>9am - 5pm.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>