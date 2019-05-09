<?php
// Custom Taxonomies
function my_custom_taxonomies() {

   // Travel-Categorie taxonomy (hierarchical)
    $labels = array(
        'name'                       => 'Travel-Categories',
        'singular_name'              => 'Travel-Categorie',
        'search_items'               => 'Search Travel-Categories',
        'popular_items'              => 'Popular Travel-Categories',
        'all_items'                  => 'All Travel-Categories',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit Travel-Categorie',
        'update_item'                => 'Update Travel-Categorie',
        'add_new_item'               => 'Add New Travel-Categorie',
        'new_item_name'              => 'New Travel-Categorie Name',
        'separate_items_with_commas' => 'Separate Travel-Categories with commas',
        'add_or_remove_items'        => 'Add or remove Travel-Categories',
        'choose_from_most_used'      => 'Choose from the most used Travel-Categories',
        'not_found'                  => 'No Travel-Categories found.',
        'menu_name'                  => 'Travel-Categories',
    );


     $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'travel-categories' ),
        'show_in_rest'          => true
    );

   register_taxonomy( 'travel-categorie', array( 'travel-lover' ), $args );

    // Tag taxonomy (hierarchical)
    $labels = array(
        'name'                       => 'Tags',
        'singular_name'              => 'Tag',
        'search_items'               => 'Search Tags',
        'popular_items'              => 'Popular Tags',
        'all_items'                  => 'All Tags',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit Tag',
        'update_item'                => 'Update Tag',
        'add_new_item'               => 'Add New Tag',
        'new_item_name'              => 'New Tag Name',
        'separate_items_with_commas' => 'Separate Tags with commas',
        'add_or_remove_items'        => 'Add or remove Tags',
        'choose_from_most_used'      => 'Choose from the most used Tags',
        'not_found'                  => 'No Tags found.',
        'menu_name'                  => 'Tags',
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'tags' ),
        'show_in_rest'          => true
    );

    register_taxonomy( 'tag', array( 'travel-lover' ), $args );

}


add_action( 'init', 'my_custom_taxonomies' );
