<?php

 add_action( 'rest_api_init', 'footer_menu' );
function footer_menu() {

    register_rest_route( 'menu/v1', 'footer-menu',  array(
                    'methods' => 'GET',
                    'callback' => 'get_footer_menu_restapi',
                )
            );
}

function get_footer_menu_restapi( WP_REST_Request $request ) {
    # Change 'menu' to your own navigation slug.
    $menu_items = wp_get_nav_menu_items(get_option('menu_bottom'));
    if (!empty($menu_items)) {
    foreach($menu_items as $menu_item) {
        // ALTERNATIVE: $slug = get_post_field( 'post_name', $menu_item->object_id );
        $slug = basename( get_permalink($menu_item->object_id) );
        $menu_item->slug = $slug;
    }
    return $menu_items;
}
}
