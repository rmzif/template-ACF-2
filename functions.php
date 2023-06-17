<?php
//loads css file
function load_css()
{
  wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/style/style.css');
}
add_action('wp_enqueue_scripts', 'load_css');


function followrayan_theme_support()
{
  // Adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'followrayan_theme_support');

function followrayan_menus()
{
  $locations = array(
    'primary' => "Desktop navbar on top",
  );
  register_nav_menus($locations);
}

add_action('init', 'followrayan_menus');

//Jquery cdn     
function load_Jquery()
{
  wp_enqueue_script('rayan-Jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'load_Jquery');


//tailwindCSS CDN
function rayan_register_scripts()
{
  wp_enqueue_script('theme-tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'rayan_register_scripts');



// function create_custom_post_type() {
//     $args = array(
//       'label' => 'Actualiteit',
//       'public' => true,
//       'show_ui' => true,
//       'show_in_menu' => true,
//       'capability_type' => 'post',
//       'hierarchical' => false,
//       'rewrite' => array('slug' => 'actualiteit'),
//       'query_var' => true,
//       'supports' => array(
//         'title',
//         'editor',
//         'excerpt',
//         'trackbacks',
//         'custom-fields',
//         'comments',
//         'revisions',
//         'thumbnail',
//         'author',
//         'page-attributes',)
//       );
//     register_post_type( 'actualiteit', $args );
//   }
//   add_action( 'init', 'create_custom_post_type' );



// tailwindcss config file
function get_config_file()
{
  wp_enqueue_script("main", get_template_directory_uri() . "/config.js", array('jquery'));
}
add_action("wp_enqueue_scripts", "get_config_file", 11);




// gsap CDN
function load_gsap() {
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js', array(), '3.11.4', true);
}
add_action('wp_enqueue_scripts', 'load_gsap');


// gsap config js file
function enqueue_custom_scripts() {
  wp_enqueue_script('congsap-js', get_template_directory_uri() . '/congsap.js', array('jquery', 'gsap'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

