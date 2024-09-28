<?php
// register post type footer
add_action( 'init', 'post_type_footer' );
function post_type_footer() {
	$labels = array(
		'name' => _x('Footer', 'post type general name', 'akordian'),
		'singular_name' => _x('Footer', 'post type singular name', 'akordian'),
		'add_new' => _x('Add New Footer', 'book', 'akordian'),
		'add_new_item' => __('Add New Footer', 'akordian'),
		'edit_item' => __('Edit Footer', 'akordian'),
		'new_item' => __('New Footer', 'akordian'),
		'view_item' => __('View Footer', 'akordian'),
		'search_items' => __('Search Footer', 'akordian'),
		'not_found' =>  __('No Footer found', 'akordian'),
		'not_found_in_trash' => __('No Footer found in Trash', 'akordian'), 
		'parent_item_colon' => ''
	);		
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_nav_menus' => false,
		'show_in_admin_bar' => true,
		'menu_position' => 20,
		'exclude_from_search' => true,
		'supports' => array('title', 'content'),
		'menu_icon' => 'dashicons-editor-insertmore'
	); 		

	register_post_type( 'footer', $args );
}