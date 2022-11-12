<?php
function register_taxonomies() {
   register_taxonomy( 'project-type', 'case-studies', array(
       'hierarchical'      => true,
       'labels'            => array(
           'name'              => _x( 'Project Type', 'taxonomy general name', 'textdomain' ),
           'singular_name'     => _x( 'Project Type', 'taxonomy singular name', 'textdomain' ),
           'search_items'      => __( 'Search Project Types', 'textdomain' ),
           'all_items'         => __( 'All Project Types', 'textdomain' ),
           'parent_item'       => __( 'Parent Project Type', 'textdomain' ),
           'parent_item_colon' => __( 'Parent Project Type:', 'textdomain' ),
           'edit_item'         => __( 'Edit Project Type', 'textdomain' ),
           'update_item'       => __( 'Update Project Type', 'textdomain' ),
           'add_new_item'      => __( 'Add New Project Type', 'textdomain' ),
           'new_item_name'     => __( 'New Project Type Name', 'textdomain' ),
           'menu_name'         => __( 'Project Types', 'textdomain' ),
       ),
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'project-type' ),
   ) );
}
add_action( 'init', 'register_taxonomies', 0 );