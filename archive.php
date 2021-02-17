<?php get_header(); ?>
<?php get_template_part('includes/top-archive') ?>
<!-- INIZIO BLOG -->
    <section id="blog">
        <div class="container-fluid">
            <div class="row">
              <!-- ! Inzio degli articoli Blog -->
              <div class="col-sm-12 col-md-8 col-lg-8">
                <?php while (have_posts()) {
                  // code...
                the_post(); ?>
                <div class="meta-data  my-4">
                  <h3 class="bg-primary mt-5"><a href="<?php permalink_link() ?>"><?php the_title(); ?></a></h3>
                  <p class="meta-text pl-4">
                    <i class="fas fa-user"></i>  <span><b>Articolo creato da:</b> <i><?php the_author_posts_link(); ?></i></span>
                    <i class="fas fa-clock"></i></i> <span><b>il: </b><i><?php the_time('d F Y'); ?></i></span>
                  </p>
                  <p class="meta-text pl-4 inline-category">
                    <i class="fas fa-tags"></i> <span><i><?php the_tags('<b>tag: </b>', ' | ', ' # '); ?></i></span>
                    <i class="fas fa-archive"></i><span><b>categorie:</b><i><?php echo get_the_category_list(); ?></i></span>
                  </p>
                </div>
                <div class="media">
                  <div class="media-body m-4">
                    <?php the_post_thumbnail('thumbnail'); the_excerpt(); ?>
                    <span class="btn btn-primary btn-sm"><a href="<?php permalink_link(); ?>">Leggi tutto...</a></span>
                  </div>
                </div>
                <?php } ?>
                <!-- ! Paginazione -->
                <nav>
                  <ul class="pagination pagination-lg d-flex justify-content-center my-5">
                    <li class="page-item bold">
                      <?php echo paginate_links(array(
                        'prev_text' => __('<i class="fas fa-chevron-circle-left"></i>'),
                        'next_text' => __('<i class="fas fa-chevron-circle-right"></i>')
                      )); ?>
                    </li>
                  </ul>
                </nav>
              </div>
              <hr>
              <!-- ! Inizio Sidebar -->
                <div class="col-sm-12 col-md-4 col-lg-4 mt-5">

            <div class="card widget my-5">
              <?php
                if (is_active_sidebar('sidebar-blog')): dynamic_sidebar('sidebar-blog');
                endif;
               ?>
            </div>
  </div>
  </div>
</div>
</section>

<?php get_footer(); ?>
