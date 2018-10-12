<?php

function cptui_register_my_cpts_project() {

	/**
	 * Post Type: Projects.
	 */

	$labels = array(
		"name" => __( "Projects", "" ),
		"singular_name" => __( "Project", "" ),
		"menu_name" => __( "My Projects", "" ),
		"all_items" => __( "All Projects", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Project", "" ),
		"edit_item" => __( "Edit Project", "" ),
		"new_item" => __( "New Project", "" ),
		"view_item" => __( "View Project", "" ),
		"view_items" => __( "View Projects", "" ),
		"search_items" => __( "Search Projects", "" ),
		"not_found" => __( "No Projects Found", "" ),
		"not_found_in_trash" => __( "No Project Found in Trash", "" ),
		"parent_item_colon" => __( "Parent Project", "" ),
		"featured_image" => __( "Featured image for this project", "" ),
		"set_featured_image" => __( "Set featured image for this project", "" ),
		"remove_featured_image" => __( "Remove featured image for this project", "" ),
		"use_featured_image" => __( "Use featured image for this project", "" ),
		"archives" => __( "Project Archives", "" ),
		"insert_into_item" => __( "Insert into Project", "" ),
		"uploaded_to_this_item" => __( "Uploaded to this project", "" ),
		"filter_items_list" => __( "Filter Projects List", "" ),
		"items_list_navigation" => __( "Projects List Navigation", "" ),
		"items_list" => __( "Projects List", "" ),
		"attributes" => __( "Project Attributes", "" ),
		"parent_item_colon" => __( "Parent Project", "" ),
	);

	$args = array(
		"label" => __( "Projects", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "projects",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "project", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions", "author" ),
	);

	register_post_type( "project", $args );
}

add_action( 'init', 'cptui_register_my_cpts_project' );


?>