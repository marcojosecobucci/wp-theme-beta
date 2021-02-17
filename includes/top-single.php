<!-- INTESTAZIONE -->
    <header id="home"  style="background: url(<?php echo get_theme_file_uri('/images/img.jpg')?>) no-repeat; background-size: cover;">
      <div class="home-block top-blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 d-none d-lg-block">
                      <!-- <h1 class="text-white animated bounce"><i><?php the_title(); ?></i></h1>
                      <h3><i class="author-in-top"><?php the_author_posts_link();?></i></h3> -->
                      <div id="titolo-card" class="card" style="width:auto;">
                        <div class="card-body">
                          <h1 class="card-title text-white animated bounce"><?php the_title(); ?></h1>
                          <a class="card-link text-white">postato da: <?php the_author_posts_link(); ?> <span class="text-white"> - </span> </a>
                          <a href="<?php echo site_url('/blog'); ?>" class="card-link"><i class="fas fa-home"></i> Blog Home</a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </header>
