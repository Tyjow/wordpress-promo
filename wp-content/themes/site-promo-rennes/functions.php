<?php
/**
 * Fonction pour ajouter les Font Awesome à WordPress
 */

function add_font_awesome()
{
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'youropotionalfolder/font-awesome/css/font-awesome.min.css' );
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );
 ?>

<?php add_theme_support( 'post-thumbnails' ); ?>

<?php

    $args = array(
    'width'         => 800,
    'height'        => 540,
    'default-image' => get_template_directory_uri() . '/img/header.jpg',
    'uploads'       => true,
    );

add_theme_support( 'custom-header', $args );

?>


<?php
add_action('generate_rewrite_rules', 'themes_dir_add_rewrites');
 
function themes_dir_add_rewrites() {
  $theme_name = next(explode('/themes/', get_stylesheet_directory()));
 
  global $wp_rewrite;
  $new_non_wp_rules = array(
    'cv/(.*)'    => 'wp-content/uploads/cv/$1',
  );
  $wp_rewrite->non_wp_rules += $new_non_wp_rules;
}
?>