<?php get_header();

get_template_part('templates/trusted');
get_template_part('templates/about');
get_template_part('templates/event_services');
 ?>
<section id="stafing">
  <div class="container has-text-centered stafing__title">
    <h2 class="title">Event Staffing</h2>
    <p>We bring you our expert team of professionals who work to keep your events clean, refreshed, and running smoothly.</p>
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
<section id="who-we-are">
  <div class="container">
    <h2 class="who-we-are__title title">Who We Are</h2>
    <div class="a-man-has-arrow is-hidden-mobile"><i class="icon-logo-orange"></i></div>
    <div class="columns">
      <div class="column is-half">
        <div class="who-we-are__items">
          <div class="who-we-are__items__item">
            <h2 class="title">People</h2>
            <p>We work hard to provide the best people to power your event needs. Tycho Entertainment staffers are trained in
              event management and execution best-practices. We take pride in working behind the scenes to create the experience
              you imagined for you and your guest.</p>
          </div>
          <div class="who-we-are__items__item">
            <h2 class="title">Values</h2>
            <p>We believe in professionalism at every point of contact with our clients. With attention to detail at the cornerstone
              of our practice, we make managing your event frictionless and delightful. “At Your Service” is the philosophy
              of how we do business.</p>
          </div>
          <div class="who-we-are__items__item">
            <h2 class="title">Vision</h2>
            <p>At Tycho Entertainment, we view our clients as partners. Our relationship begins before your event and carries
              on through your next 10. We are committed to excellence and always “at your service.”</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="who-we-are__items__request column is-8 is-offset-4 has-text-centered">
        <h2 class="title">You focus on entertaining and we will take care of all the details.</h2>
        <div class="who-we-are__items__request__button btn"><i class="icon-circle-plus"></i><a href="#">Request Services</a></div>
      </div>
    </div>
  </div>
</section>
<section id="vip">
  <div class="container">
    <div class="columns">
      <div class="column is-12">
        <div class="tile is-ancestor">
          <div class="tile is-3 is-vertical is-parent">
            <div class="tile is-child">
              <div class="vip__button has-text-centered">Vip Accounts</div>
            </div>
          </div>
          <div class="tile is-parent">
            <div class="tile is-child vip__desc">
              <p>High Profile accounts are handled confidentially by private account managers.</p>
              <p>To schedule an assessment <b>call our Consierge Services desk at  818.840.9404</b></p>
              <p><b>Monday - Friday:</b>9am - 5pm.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>