<?php get_header(); ?>
<?php while (have_posts()) {
  // code...
  the_post(); ?>
<!-- ! INTESTAZIONE -->
  <?php get_template_part('includes/top-single') ?>
<!-- ! Corpo -->
    <section id="blog">
        <div class="container-fluid">
            <div class="row">

<div class="col-sm-12 col-md-8 col-lg-8">
<div class="meta-data-single">
  <div class="data-single">
    <b><?php the_tags(); ?></b>
    <br>
    <b>Categoria: </b> <b><?php the_category(); ?></b>
  </div>
</div>
<hr>
<div class="card card-single-img">
  <?php the_post_thumbnail('large'); ?>
  <div class="card-body">
    <p class="card-text single">
      <?php the_content(); ?>
      <button type="button" name="button" class="btn btn-link">
        <?php previous_post_link( '%link', 'precedente nella categoria'); ?>
      </button>
      <button type="button" name="button" class="btn btn-link">
        <?php next_post_link( '%link', 'Seguente nella categoria'); ?>
      </button>
    </p>
  </div>
  <!-- ! Paginazione -->
  <nav>
    <ul class="pagination pagination-lg d-flex justify-content-center my-5">
      <li class="page-item bold">
        <?php previous_post_link(); ?>  <i class="far fa-newspaper icon-other-article"></i>
      </li>
      <li class="page-item bold">
           <?php next_post_link(); ?>
      </li>
    </ul>
  </nav>
</div>
<?php } ?>
<hr>

<!-- ! Commenti -->
<h3 class="bg-primary mt-5 text-white pl-1">Commenti</i></h3>
<?php comments_template(); ?>
  </div>
  <!-- ! Sidebar -->
  <div class="col-sm-12 col-md-4 col-lg-4 mt-5">
    <div class="card widget my-5 section-sidebar">
      <?php
        if (is_active_sidebar('sidebar')): dynamic_sidebar('sidebar');
        endif;
       ?>
    </div>
  </div>
</div>
</div>
</section>
<!-- FOOTER -->
<?php get_footer(); ?>
