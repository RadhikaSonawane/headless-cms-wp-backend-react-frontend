<?php
function my_custom_posttypes() {

    $labels = array(
        'name'               => 'Travel-Lovers',
        'singular_name'      => 'Travel-Lover',
        'menu_name'          => 'Travel-Lovers',
        'name_admin_bar'     => 'Travel-Lover',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Travel-Lover',
        'new_item'           => 'New Travel-Lover',
        'edit_item'          => 'Edit Travel-Lover',
        'view_item'          => 'View Travel-Lover',
        'all_items'          => 'All Travel-Lovers',
        'search_items'       => 'Search Travel-Lovers',
        'parent_item_colon'  => 'Parent Travel-Lovers:',
        'not_found'          => 'No Travel-Lovers found.',
        'not_found_in_trash' => 'No Travel-Lovers found in Trash.'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'travel-lovers' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true
    );
    register_post_type( 'travel-lover', $args );
}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules( false );
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

?>
