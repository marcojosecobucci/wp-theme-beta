<!-- INTESTAZIONE -->
    <header id="home" style="background: url(<?php echo get_theme_file_uri('/images/img-back.jpg')?>) no-repeat;">
      <div class="home-block top-blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 d-none d-lg-block">
                      <h2 class="text-white animated bounce">
                        <?php
                        //  if(is_category()){
                        //   echo "Categoria: "; single_cat_title();
                        // } if (is_author()) {
                        //   echo "Articoli di: ";  the_author();
                        // } if (is_tag()) {
                        //   echo "Tag: "; single_tag_title();
                        // }
                        // ! uguale a :
                        the_archive_title();
                        ?>
                      </h2>
                      <h4>
                        <?php the_archive_description(); ?>
                      </h4>
                  </div>
              </div>
          </div>
      </div>
    </header>
