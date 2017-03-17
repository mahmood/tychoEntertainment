<?php 
    $settings = $GLOBALS['settings'];
    $customer_name = $settings['customer_name'];
    $customer_comment = $settings['customer_comment'];
?>
<section id="trusted">
  <div class="container has-text-centered">
    <h2 class="title">Trusted by the top names in Hollywood</h2>
    <div class="columns">
      <div class="column is-half is-offset-3">
        <div class="trusted__item">
          <div class="trusted__item__desc">
            <p><?= $customer_comment ?></p>
          </div>
          <div class="name-of-event"><?= $customer_name ?></div>
        </div>
      </div>
    </div>
  </div>
</section>