<?php
  /**
  *Template Name: 404 Page
  */
 ?>
<?php get_header(); ?>
<!-- ! Corpo -->
    <section id="page-404">
        <div class="container">
          <div class="text-center" style="padding: 9rem 0 3rem 0;">
            <h2>Uhm...Sembra che qualcosa sia andato storto!</h2>
            <h3>Ma non ti preoccupare! ecco i nostri consigli di navigazione.</h3>
          </div>
        <div class="row">
          <div class="col-sm-6">
            <?php the_widget('WP_Widget_Pages'/*, 'title=Le mie pagine', 'before_title=<h4>&after_title=</h4>'*/); ?>
          </div>
          <div class="col-sm-6">
            <?php the_widget('WP_Widget_Recent_Posts'); ?>
          </div>
          <div class="col-sm-4">
            <?php the_widget('WP_Widget_Categories'); ?>
          </div>
          <div class="col-sm-4">
            <?php the_widget('WP_Widget_Tag_Cloud'); ?>
          </div>
          <div class="col-sm-4">
            <?php the_widget('WP_Widget_Search'); ?>
          </div>
        </div>
      </div>
    </section>
<!-- FOOTER -->
<?php get_footer(); ?>
