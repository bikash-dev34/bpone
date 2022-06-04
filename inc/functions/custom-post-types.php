<?php

function create_portfolio_function(){
$labels                 = array(
'name'                  => _x('Portfolios', 'post type general name', 'textdomain'),
'singular_name'         => _x('Portfolio', 'post type Singular name', 'textdomain'),
'add_new'               => _x('Add Portfolio', '', 'textdomain'),
'add_new_item'          => __('Add New Portfolio', 'textdomain'),
'edit_item'             => __('Edit Portfolio', 'textdomain'),
'update_item'           => __( 'Update Portfolio', 'textdomain' ),
'new_item'              => __('New Portfolio', 'textdomain'),
'all_items'             => __('All Portfolios', 'textdomain'),
'view_item'             => __('View Portfolios', 'textdomain'),
'view_items'            => __( 'View Portfolios', 'textdomain' ),
'search_items'          => __('Search Portfolio', 'textdomain'),
'not_found'             => __('No Portfolio found', 'textdomain'),
'not_found_in_trash'    => __('No Portfolio on trash', 'textdomain'),
'parent_item_colon'     => __( 'Parent Portfolio:', 'textdomain' ),
'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'textdomain' ),
'archives'              => __( 'Portfolio Archives', 'textdomain' ),
'attributes'            => __( 'Portfolio Attributes', 'textdomain' ),
'featured_image'        => __( 'Featured Image', 'textdomain' ),
'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
'insert_into_item'      => __( 'Insert into Portfolio', 'textdomain' ),
'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'textdomain' ),
'items_list'            => __( 'Portfolios list', 'textdomain' ),
'items_list_navigation' => __( 'Portfolios list navigation', 'textdomain' ),
'filter_items_list'     => __( 'Filter Portfolios list', 'textdomain' ),
'menu_name'             => __('Portfolios', 'Admin Menu text','textdomain'),
);
$args = array(
'labels'              => $labels,
'public'              => true,
'publicly_queryable'  => true,
'show_ui'             => true,
'show_in_menu'        => true,
'query_var'           => true,
'rewrite'             => array('slug' => 'portfolio'),
'capability_type'     => 'post',
'has_archive'         => true,
'hierarchical'        => true,
'menu_position'       => 6,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => true,
'can_export'          => true,
'exclude_from_search' => false,
'show_in_rest'        => true,
'menu_icon'           => 'dashicons-format-gallery',
'supports'            => array('title','editor', 'thumbnail'),


);
$labels = array(
'name'              => __('Category'),
'singular_name'     => __('Category'),
'search_items'      => __('Search'),
'popular_items'     => __('More Used'),
'all_items'         => __('All Categories'),
'parent_item'       => null,
'parent_item_colon' => null,
'edit_item'         => __('Add new'),
'update_item'       => __('Update'),
'add_new_item'      => __('Add new Category'),
'new_item_name'     => __('New'),

);
register_taxonomy('portfolio_category', array('portfolio'), array(
'hierarchical'   => true,
'labels'         => $labels,
'singular_label' => 'portfolio_category',
'all_items'      => 'Category',
'query_var'      => true,

'rewrite'        => array('slug' => 'cat'))
);
register_post_type('portfolio', $args);
flush_rewrite_rules();
  add_theme_support('post-thumbnails');
}
add_action('init', 'create_portfolio_function');