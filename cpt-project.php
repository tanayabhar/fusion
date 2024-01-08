<?php
function project_posttype() {
    register_post_type( 'project',
    // CPT Options
    array(
    'labels' => array(
    'name' => __( 'project' ),
    'singular_name' => __( 'Projects' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'project'),
    'taxonomies' => array('category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail')
    )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'project_posttype' );
    /* Custom Post Type End */