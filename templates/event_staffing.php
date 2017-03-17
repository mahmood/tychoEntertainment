<?php 
    $settings = $GLOBALS['settings'];
    $description = $settings['event-stafing-des'];
?>
<section id="stafing">
  <div class="container has-text-centered stafing__title">
    <h2 class="title">Event Staffing</h2>
    <p><?= $description ?></p>
  </div>
  <div class="container is-fluid stafing__items">
    <div class="stafing__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/hosting@2x.jpg">
      <h2 class="title">Hosting</h2>
    </div>
    <div class="stafing__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/cleanup@2x.jpg">
      <h2 class="title">Cleanup</h2>
    </div>
    <div class="stafing__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/security@2x.jpg">
      <h2 class="title">Security</h2>
    </div>
    <div class="stafing__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/servers@2x.jpg">
      <h2 class="title">Servers</h2>
    </div>
    <div class="stafing__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/bartenders@2x.jpg">
      <h2 class="title">Bartenders</h2>
    </div>
  </div>
</section>