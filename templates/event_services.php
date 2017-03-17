<?php 
    $settings = $GLOBALS['settings'];
    $one = ['title'=> $settings['event-1-title'], 'description'=> $settings['event-1-des']];
    $two = ['title'=> $settings['event-2-title'], 'description'=> $settings['event-2-des']];
    $three = ['title'=> $settings['event-3-title'], 'description'=> $settings['event-3-des']];
?>
<section id="event">
  <div class="container">
    <div class="columns">
      <div class="event__box column is-half is-offset-3">
        <h2 class="title has-text-right">Event Services</h2>
        <div class="event__box__item tile is-ancestor">
          <div class="event__box__item__number tile is-4 is-vertical is-parent">
            <div class="tile is-child has-text-centered">1</div>
          </div>
          <div class="event__box__item__desc tile is-parent">
            <div class="tile is-child">
              <h2 class="title"><?= $one['title']; ?></h2>
              <p><?= $one['description']; ?></p>
            </div>
          </div>
        </div>
        <div class="event__box__item tile is-ancestor">
          <div class="event__box__item__number tile is-4 is-vertical is-parent">
            <div class="tile is-child has-text-centered">2</div>
          </div>
          <div class="event__box__item__desc tile is-parent">
            <div class="tile is-child">
              <h2 class="title"><?= $two['title']; ?></h2>
              <p><?= $two['description']; ?></p>
            </div>
          </div>
        </div>
        <div class="event__box__item tile is-ancestor">
          <div class="event__box__item__number tile is-4 is-vertical is-parent">
            <div class="tile is-child has-text-centered">3</div>
          </div>
          <div class="event__box__item__desc tile is-parent">
            <div class="tile is-child">
              <h2 class="title"><?= $three['title']; ?></h2>
              <p><?= $three['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>