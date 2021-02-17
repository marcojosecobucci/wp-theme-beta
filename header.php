<!DOCTYPE html>
<html lang="it">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container">
            <a href="<?php echo site_url(); ?>" class="navbar-brand"><img id="logo" class="animated bounce" src="<?php echo get_theme_file_uri('/images/logo_wp.png') ?>"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <i class="fa fa-bars" aria-hidden="true"></i>
               </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main_menu',
                  'menu_id' => false,
                  'container' => false,
                  'dept' => 2,
                  'menu_class' => 'navbar-nav ml-auto',
                  'walker' => new bs4Navwalker(),
                  'fallback_cb' => 'bs4Navwalker::fallback'
                ));
                ?>
            </div>
        </div>
    </nav>
