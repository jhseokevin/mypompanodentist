<?php
 
    add_theme_support('menus');
    register_nav_menu('topmenu', 'Top Menu');
   
   function wpdocs_menu_item_class( $classes, $item, $args ) {
       if ( 'topmenu' === $args->theme_location ) {
           if (property_exists($args, 'list_item_class')) {
               $classes[] = $args->list_item_class;
           }
       }
       return $classes;
   }
   add_action( 'nav_menu_css_class', 'wpdocs_menu_item_class', 10, 3 );
   
   function add_anchor_class($attr, $item, $args){
       if ( 'topmenu' === $args->theme_location ) {
           if(isset($args->a_class)){
               $attr['class'] = $args->a_class;
           }
       }
       return $attr;
   }
   add_filter('nav_menu_link_attributes' , 'add_anchor_class' , 10,3);
   
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . './style.css' );
   
    wp_enqueue_style( 'Bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'FonyAwsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );
    wp_enqueue_style( 'SlickCss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
    wp_enqueue_style( 'Customstyle', get_stylesheet_directory_uri() . '/assets/css/style.css');;
    wp_enqueue_style( 'Owlcss', get_stylesheet_directory_uri() . '/assets/css/owl.css');;
    wp_enqueue_style( 'owldefault', get_stylesheet_directory_uri() . '/assets/css/owldefault.css');;
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');;
    wp_enqueue_style( 'Landing', get_stylesheet_directory_uri() . '/assets/css/landing.css');;
    wp_enqueue_style( 'GoolgeFonts','https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_scripts() { 
    wp_enqueue_script('jQuery-js', get_stylesheet_directory_uri() . '/assets/js/jQuery.js', array());
    wp_enqueue_script( 'SlickSlider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array());
    wp_enqueue_script('Owl-js', get_stylesheet_directory_uri() . '/assets/js/Owl.js', array());
    wp_enqueue_script( 'BootstrapJs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );



// require_once dirname( __FILE__ ) . '/Layout/home.php';