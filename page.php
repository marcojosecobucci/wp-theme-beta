<?php get_header(); ?>
<?php while (have_posts()) {
  // code...
  the_post(); ?>
<!-- ! INTESTAZIONE -->
  <?php get_template_part('includes/top-single') ?>
<!-- ! Corpo -->
    <section id="page">
        <div class="container-fluid">
          <div class="pt-5">
            <!-- ! Breadcrumb  parent child -->
            <?php
              $parentPage = wp_get_post_parent_id(get_the_ID());
              if ($parentPage) {
            ?>
              <p><b>
                Torna a: <a href="<?php echo get_the_permalink($parentPage); ?>"><?php echo get_the_title($parentPage); ?></a>
                <span> / Sei in: <?php the_title(); ?></span>
              </b></p>
            <?php } ?>
          </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                  <hr>
                <div class="card+">
                  <?php the_post_thumbnail('large'); ?>
                  <div class="card-body">
                    <p class="card-text single">
                      <?php the_content(); ?>
                    </p>
                  </div>
                  <!-- ! Paginazione -->
                </div>
                <?php } ?>
                <hr>
              </div>
          <!-- ! Navigazion Parent/Children -->
                <div class="col-sm-12 col-md-4 col-lg-4 mt-5">
                  <?php get_search_form(); ?>

          <?php
          $singlePage = get_pages(array(
            'child_of' => get_the_ID()
          ));
           if ($parentPage || $singlePage) { ?>
             <div class="card widget my-5 border-primary">
              <div class="card-body">
              <h4 class="card-header"><a href="<?php echo get_permalink($parentPage); ?>"><?php echo get_the_title($parentPage); ?></a></h4>
              <p class="card-text">
                <ul class="list-group list-group-flush">
                  <?php
                  if ($parentPage) {
                    $findChildren = $parentPage;
                  } else {
                    $findChildren = get_the_ID();
                  }
                    wp_list_pages(array(
                      'title_li' => NULL,
                      'child_of' => $findChildren,
                      'sort_column' => 'menu_order'
                  )); ?>
                </ul>
              </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- FOOTER -->
<?php get_footer(); ?>
