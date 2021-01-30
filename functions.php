<?php
// Need some support
function marketingM_theme_support(){
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
}
add_action('after_setup_theme','marketingM_theme_support');
// link css and script

function marketingM_css_script()
{
    wp_enqueue_style( 'zerogrid', get_template_directory_uri().'/css/zerogrid.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'lightbox', get_template_directory_uri().'/css/lightbox.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'menu', get_template_directory_uri().'/css/menu.css');
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri());

    wp_enqueue_script('jquery1111', get_template_directory_uri().'/js/jquery1111.min.js', array('jquery'), true, true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), true, true);
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'), true, true);
    wp_enqueue_script('mediaqueries', get_template_directory_uri().'js/css3-mediaqueries.js', array('jquery'), true, true);
}
add_action('wp_enqueue_scripts','marketingM_css_script');

function marketingm_cus_posttype() {
    $labels = array(
      'name' => _x('projects', 'post type general name'),
      'singular_name' => _x('project', 'post type singular name'),
      'add_new' => _x('Add New', 'project'),
      'add_new_item' => __('Add New project'),
      'edit_item' => __('Edit project'),
      'new_item' => __('New project'),
      'all_items' => __('All projects'),
      'view_item' => __('View project'),
      'search_items' => __('Search projects'),
      'not_found' =>  __('No projects found'),
      'not_found_in_trash' => __('No projects found in Trash'), 
      'parent_item_colon' => '',
      'menu_name' => __('projects')
  
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    ); 
    register_post_type('project',$args);
  }
  add_action( 'init', 'marketingm_cus_posttype' );  

?>