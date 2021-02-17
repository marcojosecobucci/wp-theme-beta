<!-- FOOTER -->
<footer class="pt-4">
    <div class="container">
        <div class="row">
<div class="col-sm-12 col-md-3 col-lg-3 pt-3">
<p><i class="fa fa-chevron-down" aria-hidden="true"></i></p>
<ul class="nav navbar-nav">
<?php
  wp_nav_menu(array(
    'theme_location' => 'footer_left_menu',
    'menu_id' => 'footer_left_menu',
    'menu_class' => 'footer_menu',
    'before' => '<i class="fas fa-terminal"></i>',
    'fallback_cb' => 'footer_left_menu::fallback'
  ));
 ?>
</ul>
</div>

            <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <div class="py-4">
                    <h1 class="h3">WebLab Template - 2017</h1>
                    <p>Creato per te per farne ciò che vuoi!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 pt-3">
                <p><i class="fa fa-chevron-down" aria-hidden="true"></i></p>
            <ul class="nav navbar-nav">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer_right_menu',
              'menu_id' => 'footer_right_menu',
              'menu_class' => 'footer_menu',
              'before' => '<i class="fas fa-terminal"></i>',
              'fallback_cb' => 'footer_right_menu::fallback'
            ));
             ?>
            </ul>
            </div>

        </div>
    </div>
</footer>

<script>
wow = new WOW(
                  {
                  boxClass:     'wow',      // default
                  animateClass: 'animated', // default
                  offset:       210,          // default
                  mobile:       false,       // default
                  live:         true        // default
                }
                )
                wow.init();
</script>
<?php wp_footer(); ?>
</body>
</html>
