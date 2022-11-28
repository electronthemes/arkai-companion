<?php

function arkai_portfolio_posts(){

	register_post_type( 'arkai-portfolio', array(
		'labels' 		=> array(
			'name'          => __( 'Portfolio', 'arkai' ),
	        'singular_name' => __( 'Portfolio', 'arkai' ),
	        'add_new_item'  => __( 'Add New Portfolio', 'arkai' ),
	        'edit_item'     => __( 'Edit Portfolio', 'arkai' ),
	        'new_item'      => __( 'New Portfolio', 'arkai' ),
	        'view_item'     => __( 'View Portfolio', 'arkai' ),
	        'view_items'    => __( 'View Portfolios', 'arkai' ),
	        'search_items'  => __( 'Search Portfolios', 'arkai' ),
	        'all_items'     => __( 'All Portfolios', 'arkai' ),		
		),
		'public' 		=> true,
		'show_ui'		=> true,
		'menu_position'	=> 10,
		'menu_icon'	=> 'dashicons-schedule',
		'hierarchical'  => true,
		'show_in_rest'	=> true,
		'has_archive'	=> true,
		'supports'		=> array('title', 'editor', 'thumbnail', 'author', 'comments', 'page-attributes'),
		'rewrite'	=> array('slug'=> 'portfolios')
	) );

	register_taxonomy('portfolio-cat', 'arkai-portfolio', array(
		'labels'		=> array(
			'name'				=> __('Categories', 'arkai'),
			'singular_name'		=> __('Category', 'arkai'),
			'all_items'         => __( 'All Category', 'arkai' ),
	        'parent_item'       => __( 'Parent Category', 'arkai' ),
	        'parent_item_colon' => __( 'Parent Category:', 'arkai' ),
	        'edit_item'         => __( 'Edit Category', 'arkai' ),
	        'update_item'       => __( 'Update Category', 'arkai' ),
	        'add_new_item'      => __( 'Add New Category', 'arkai' ),
	        'new_item_name'     => __( 'New Category Name', 'arkai' ),
	        'menu_name'         => __( 'Categories', 'arkai' ),
		),
		'show_ui'		=> true,
		'show_in_rest'	=> true,
		'hierarchical'	=> true
	));

	register_taxonomy('portfolio-skills', 'portfolio', array(
		'labels'		=> array(
			'name'				=> __('Skills', 'arkai'),
			'singular_name'		=> __('Skill', 'arkai'),
			'all_items'         => __( 'All Skill', 'arkai' ),
	        'parent_item'       => __( 'Parent Skill', 'arkai' ),
	        'parent_item_colon' => __( 'Parent Skill:', 'arkai' ),
	        'edit_item'         => __( 'Edit Skill', 'arkai' ),
	        'update_item'       => __( 'Update Skill', 'arkai' ),
	        'add_new_item'      => __( 'Add New Skill', 'arkai' ),
	        'new_item_name'     => __( 'New Skill Name', 'arkai' ),
	        'menu_name'         => __( 'Skills', 'arkai' ),
		),
		'show_ui'		=> true,
		'show_in_rest'	=> true,
		'hierarchical'	=> true,
		'rewrite'       => array( 'slug' => 'skill' ),
	));
	
}
add_action( 'init', 'arkai_portfolio_posts' );








?>