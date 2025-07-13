<?php
require get_theme_file_path('/inc/register-sidebars.php');
require get_theme_file_path('/inc/new-post-type.php');
require get_theme_file_path('/inc/new-shortcodes.php');
require get_theme_file_path('/inc/seo-fix.php');
require get_theme_file_path('/inc/testimonial-route.php');

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');

  wp_localize_script('ourmainjs', 'siteData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

  wp_enqueue_script('masonry');
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function kankonglabs_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'wp-block-styles' );
}

function kangkonglabs_register_menus() {
  register_nav_menu('primary', __('Primary Menu'));
}

add_action('after_setup_theme', 'kangkonglabs_register_menus');
add_action('after_setup_theme', 'kankonglabs_theme_support');

