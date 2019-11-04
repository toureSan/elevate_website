
<?php 



function load_stylesheets()
{    wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array(), false, 'all');

   wp_enqueue_style('vendor', get_template_directory_uri() . '/css/vendor.css', array(), false, 'all');

   wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

   wp_enqueue_style('brand', get_template_directory_uri() . '/css/font-awesome/css/fa-brands.css', array(), false, 'all');

   wp_enqueue_style('regular', get_template_directory_uri() . '/css/font-awesome/css/fa-regular.css', array(), false, 'all');

   wp_enqueue_style('solid', get_template_directory_uri() . '/css/font-awesome/css/fa-solid.css', array(), false, 'all');

   wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/font-awesome/css/fontawesome-all.css', array(), false, 'all');
  
}
    
add_action('wp_enqueue_scripts', 'load_stylesheets');

function bbx_enqueue_scripts() {
    $js_directory = get_template_directory_uri() . '/js/';
    wp_enqueue_script( 'jquery-3', $js_directory . 'jquery-3.2.1.min.js', [], '1.0' );
   wp_enqueue_script( 'main-jq', $js_directory . 'main.js', ['jquery-3', 'modernizr'], '1.0', true);
    wp_enqueue_script( 'modernizr', $js_directory . 'modernizr.js', [], '1.0' );
    wp_enqueue_script( 'pace', $js_directory . 'pace.min.js', [], '1.0', true );
    wp_enqueue_script( 'plugin', $js_directory . 'plugins.js', [], '1.0');

    }
    add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );
 