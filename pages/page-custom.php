<?php
  /**
  *Template Name: Pagina Custom
  */
 ?>
<?php get_header(); ?>
<?php while (have_posts()) {
  // code...
  the_post(); ?>
<!-- ! INTESTAZIONE -->
  <?php get_template_part('includes/top-single') ?>
<!-- ! Corpo -->
    <section id="page">
        <div class="container-fluid">
          <div class="">
              <?php the_content(); ?>
          </div>
        </div>
        <?php } ?>
    </section>
<!-- FOOTER -->
<?php get_footer(); ?>
