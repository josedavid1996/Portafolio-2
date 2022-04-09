<?php 
function init_template(){
  add_theme_support( 'post-thumbnails');//usar la imagen destacada
  add_theme_support( 'title-tag');//Titulo en la pestaña
  register_nav_menus(
    array(
      'top-menu' => 'Menu principal'
    )
    );
}
add_action('after_setup_theme','init_template');

function assets(){

  //Stles 
  wp_register_style( "fonts","https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@1,600&family=Mada:wght@400;500&family=Poppins:wght@700&display=swap","","1.0","all" );
  wp_register_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css','','6.1.1','all');

    wp_enqueue_style('estilos',get_stylesheet_uri(  ),array('fonts','fontawesome'),'1.0','all');


//Javascript
  wp_enqueue_script('fontawesome','https://kit.fontawesome.com/83d6559691.js','','6.1.1',true);

  wp_enqueue_script('app',get_template_directory_uri( ).'/js/index.js','fontawesome','1.0',true);
}
add_action('wp_enqueue_scripts','assets');

//POST TYPE WORK

function work_type(){
  $labels = array(
    'name' => 'works',
    'singular_name' => 'work',
    'menu_name' => 'works' ,
  );
  $args = array('label' => 
  'works',
  'descripcion' => 'experience jobs',
  'labels'  => $labels,
  'supports' => array('title' , 'editor', 'thumbnail','revisions'),
  'public' => true,
  'show_in_menu' => true,
  'menu_position' => 5,
  'menu_icon' => 'dashicons-block-default',
  'can_export' => true,
  'publicly_queryable' => true,
  'rewrite' => true,
  'show_in_rest' => true
);
  register_post_type( 'work',$args );

}
  add_action('init','work_type');


//POST TYPE TESTIMONIALS

function testimonial_type(){
  $labels = array(
    'name' => 'testimonials',
    'singular_name' => 'testimonial',
    'menu_name' => 'testimonials' ,
  );
  $args = array('label' => 
  'testimonial',
  'descripcion' => 'testimonials',
  'labels'  => $labels,
  'supports' => array('title' , 'editor', 'thumbnail','revisions'),
  'public' => true,
  'show_in_menu' => true,
  'menu_position' => 6,
  'menu_icon' => 'dashicons-groups',
  'can_export' => true,
  'publicly_queryable' => true,
  'rewrite' => true,
  'show_in_rest' => true
);
  register_post_type( 'testimonial',$args );

}
  add_action('init','testimonial_type');
?>