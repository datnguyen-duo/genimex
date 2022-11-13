<?php
function register_post_types() {
   register_post_type('case-studies',array(
       'labels' => array(
           'name' => _x('Case Studies', 'post type general name'),
           'singular_name' => _x('Case Studie', 'post type singular name'),
           'menu_name' => 'Case Studies'
       ),
       'rewrite' => array(
           'slug' => 'case-studies',
           'with_front' => false
       ),
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'query_var' => true,
       'has_archive' => false,
//        'hierarchical' => true,
       'supports' => array('title','editor','thumbnail','excerpt'),
   ));

   register_post_type('expretises',array(
    'labels' => array(
        'name' => _x('Expertises', 'post type general name'),
        'singular_name' => _x('Expertise', 'post type singular name'),
        'menu_name' => 'Expertise'
    ),
    'rewrite' => array(
        'slug' => 'expretises',
        'with_front' => false
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => false,
//        'hierarchical' => true,
    'supports' => array('title','editor','thumbnail','excerpt'),
    
    ));

    register_post_type('team',array(
        'labels' => array(
            'name' => _x('Team', 'post type general name'),
            'singular_name' => _x('Single Team Member', 'post type singular name'),
            'menu_name' => 'Team'
        ),
        'rewrite' => array(
            'slug' => 'team',
            'with_front' => false
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'has_archive' => false,
    //        'hierarchical' => true,
        'supports' => array('title','editor','thumbnail','excerpt'),
        
        ));
}
add_action('init','register_post_types');