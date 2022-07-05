<?php

function connectech_register_custom_team_member() {
    $singular = 'Team Member'; // Book
	$plural = 'Team Members';  // Books

    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'connectech' ),
        'singular_name' 	  => __( $singular, 'connectech' ),
        'add_new' 		      => _x( 'Add New', 'connectech', 'connectech' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'connectech' ),
        'edit'		          => __( 'Edit', 'connectech' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'connectech' ),
        'new_item'	          => __( 'New ' . $singular, 'connectech' ),
        'view' 			      => __( 'View ' . $singular, 'connectech' ),
        'view_item' 		  => __( 'View ' . $singular, 'connectech' ),
        'search_term'   	  => __( 'Search ' . $plural, 'connectech' ),
        'parent' 		      => __( 'Parent ' . $singular, 'connectech' ),
        'not_found'           => __( 'No ' . $plural .' found', 'connectech' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'connectech' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-groups',
        'supports'            => array( 'title' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'connectech_register_custom_team_member' );