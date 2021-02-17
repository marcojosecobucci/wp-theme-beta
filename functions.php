<?php

/* ! Inclusione file css */
function weblab_style() {
  // fonts google
  wp_enqueue_style('weblab-fonts','//fonts.googleapis.com/css?family=Asap|Raleway:400,700');
  // import bootstrap
  wp_enqueue_style('weblab-bs', get_template_directory_uri().'/css/bootstrap.css');
  // import style.css
  wp_enqueue_style('weblab-style', get_stylesheet_uri(),NULL,microtime());
}
// hooks add_actions
add_action('wp_enqueue_scripts', 'weblab_style');

  /* ! Inclusione file js */
function weblab_script() {
  // js per libreria esterna di Font Awesome
  wp_enqueue_script('weblab-fa', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js');
  // js della libreria di popper
  wp_enqueue_script('weblab-popper', get_template_directory_uri().'/js/popper.js',array('jquery'),'1.0.0',true);
  // libreria animazioni
  wp_enqueue_style('weblab-animate','//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
  // js della libreria di bootstrap
  wp_enqueue_script('weblab-bsjs', get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'1.0.0',true);
  // js della libreria di wow
  wp_enqueue_script('weblab-wow', get_template_directory_uri().'/js/wow.js',array('jquery'),'1.0.0',false);
  // commenti
  if(is_singular())wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'weblab_script');

/* ! menu */
// foglio esterno per fare funzionare meglio menu in bs4
require_once('bs4Navwalker.php');

// registrare il nuovo menu
register_nav_menus(array(
  'main_menu' => __('Main menu'),
  'footer_left_menu' => __('Footer menu left'),
  'footer_right_menu' => __('Footer menu right')
));

/* ! Sidebar  Widgetsized */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div class="card-body">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
    'name'          => 'Sidebar-blog',
    'id'            => 'sidebar-blog',
    'before_widget' => '<div class="card-body">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer-left',
    'id'            => 'foo-left',
    'before_widget' => '<div class="card-body">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer-center',
    'id'            => 'foo-center',
    'before_widget' => '<div class="card-body">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer-right',
    'id'            => 'foo-right',
    'before_widget' => '<div class="card-body">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* ! Add menu */
add_theme_support('menus');
/* ! Add immagine in evidenza */
add_theme_support('post-thumbnails');
/*! Dinamic title */
add_theme_support('title-tag');
