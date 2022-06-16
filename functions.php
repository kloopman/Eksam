<?php 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200);


function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-one">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
    
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );

?>