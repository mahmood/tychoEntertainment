<?php 
    $settings = $GLOBALS['settings'];
    $address = $settings['address'];
    $twitter = $settings['twitter'];
    $linkedin = $settings['linkedin'];
    $pinterest = $settings['pinterest'];
    $facebook = $settings['facebook'];
?>
<footer>
      <div class="container">
        <div class="columns">
          <div class="column">
            <div class="tile is-ancestor">
              <div class="tile is-8 is-vertical is-parent footer__leftSide">
                <div class="tile is-child"><img src="<?php echo get_template_directory_uri() ?>/assets/images/l-o-g-o-red@3x.png" alt=""></div>
                <div class="tile is-child">
                  <p>Copyright <?= date('Y') ?> Tycho Entertainment, part of Tycho Services Inc., <?= $address ?></p>
                </div>
              </div>
              <div class="tile is-parent has-text-right footer__rightSide">
                <div class="tile is-child">
                  <ul>
                    <li><a href="<?= $facebook ?>"><i class="icon-facebook"></i></a></li>
                    <li><a href="<?= $linkedin ?>">
                        <div class="icon-linked-in"></div></a></li>
                    <li><a href="<?= $pinterest ?>">
                        <div class="icon-pinterest"></div></a></li>
                    <li><a href="<?= $twitter ?>">
                        <div class="icon-twitter"></div></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/scripts/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/scripts/main.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/scripts/modernizr-custom.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>