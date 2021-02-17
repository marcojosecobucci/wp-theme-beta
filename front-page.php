<?php get_header(); ?>
<?php get_template_part('includes/top-home'); ?>
<!-- CORSI -->
    <section id="corsi-block">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-4">Corsi</h1>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ut perferendis nostrum, nulla facere quam modi eos vero magni consectetur.</p>
                        <a href="#" class="btn btn-outline-secondary">Vedi tutti i corsi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- PROMO -->
    <section id="corsi-content" class="bg-light text-muted py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_theme_file_uri('/images/circle.jpg')?>" alt="" class="img-fluid mb-3 rounded-circle">
                </div>
                <div class="col-md-6">

                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur qui molestiae optio animi architecto, labore voluptatem dolor, excepturi vero doloribus quo quam reprehenderit aperiam temporibus eveniet consequuntur quidem ipsam ipsa.</p>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, quaerat cupiditate quia voluptate voluptatum repellendus?
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, quaerat cupiditate quia voluptate voluptatum repellendus?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  CANALE YOUTUBE-->
    <section id="tutorial-block">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-4">Tutorial su Youtube</h1>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ut perferendis nostrum, nulla facere quam modi eos vero magni consectetur.</p>
                        <a href="#" class="btn btn-outline-light">Scopri tutti</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- RISORSE -->
    <section id="yt-block" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Le playlist</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur qui molestiae optio animi architecto, labore voluptatem dolor, excepturi vero doloribus quo quam reprehenderit aperiam temporibus eveniet consequuntur quidem ipsam ipsa.</p>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, quaerat cupiditate quia voluptate voluptatum repellendus?
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, quaerat cupiditate quia voluptate voluptatum repellendus?
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card text-center" id="yt-card">
                        <div class="card-body">
                            <h4 class="card-title">WP Hero</h4>
                            <iframe width="90%" height="315" src="https://www.youtube.com/watch?v=L_FoqPqaesw" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- SERVIZI -->
    <section id="servizi-block">
        <div class="container">
            <div class="row">
                <div class="col  text-center">
                    <div class="p-5">
                        <h1 class="display-4">Servizi</h1>
                        <div class="d-flex justify-content-between">

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe culpa expedita cum aspernatur veniam, commodi nulla facilis deleniti vel illum odit eveniet, repellendus architecto excepturi facere quae nihil sapiente ut vero aliquam nisi maiores odio deserunt alias eligendi! Natus est veniam temporibus incidunt earum. Voluptatem nobis non consequuntur qui ea voluptates sit, cumque error perspiciatis.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CAROUSEL -->
    <section>
      <div id="my-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/slide1.jpg')?>" alt="slide 1">
        <div class="carousel-caption d-none d-md-block">
   <h3 class="display-4">Titolo slide</h3>
   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
 </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/slide2.jpg')?>" alt="slide 2">
        <div class="carousel-caption d-none d-md-block">
   <h3 class="display-4">Titolo slide</h3>
   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
 </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/slide3.jpg')?>" alt="slide 3">
        <div class="carousel-caption d-none d-md-block">
   <h3 class="display-4">Titolo slide</h3>
   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
 </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/slide4.jpg')?>" alt="slide 4">
        <div class="carousel-caption d-none d-md-block">
   <h3 class="display-4">Titolo slide</h3>
   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
 </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </section>

<section id="sidebar-footer">
  <div class="container-fluid">
<div class="row widget-footer">
<div class="col-sm-12 col-md-4 col-lg-4">
  <div class="card widget my-5 section-sidebar">
    <?php
      if (is_active_sidebar('foo-left')): dynamic_sidebar('foo-left');
      endif;
     ?>
  </div>
</div>

<div class="col-sm-12 col-md-4 col-lg-4">
  <div class="card widget my-5 section-sidebar">
    <?php
      if (is_active_sidebar('foo-center')): dynamic_sidebar('foo-center');
      endif;
     ?>
  </div>
</div>
<div class="col-sm-12 col-md-4 col-lg-4">
<div class="card widget my-5 section-sidebar">
    <?php
      if (is_active_sidebar('foo-right')): dynamic_sidebar('foo-right');
      endif;
     ?>
  </div>
</div>

</div>
</section>
<?php get_footer(); ?>
