<?php
    //loads css file
   function load_css() {
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/style/style.css');
}
   add_action('wp_enqueue_scripts', 'load_css');


   
    
    function followrayan_menus() {
        $locations = array(
            'primary' => "Desktop navbar on top",
        );
        register_nav_menus($locations);
    }
 
    add_action('init', 'followrayan_menus');

      //Jquery cdn     
      function load_Jquery() {
        wp_enqueue_script('rayan-Jquery','https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.4.1');
      }
      add_action('wp_enqueue_scripts', 'load_Jquery');
  

    //tailwindCSS CDN
    function rayan_register_scripts() {
        wp_enqueue_script('rayan-tailwind','https://cdn.tailwindcss.com', array(), '3.4.1');
    }
    add_action('wp_enqueue_scripts', 'rayan_register_scripts');

 
 


    // tailwindcss config file
    function get_config_file() {
        wp_enqueue_script("main", get_template_directory_uri() . "/tailwindconfig.js", array('jquery'));
      }
      add_action("wp_enqueue_scripts", "get_config_file",11);

 


    // gsap CDN
   function load_gsap() {
    wp_enqueue_script('rayan-gsap','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js', array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'load_gsap');


 // gsap config js file
 function get_gsap_config_file() {
  wp_enqueue_script("second", get_template_directory_uri() . "/configuregsap.js", array('jquery'));
}
add_action("wp_enqueue_scripts", "get_gsap_config_file",11);
      

 


     
 

?>