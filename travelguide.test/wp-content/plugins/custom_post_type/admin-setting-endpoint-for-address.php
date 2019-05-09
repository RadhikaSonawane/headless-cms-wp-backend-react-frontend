<?php

 add_action( 'rest_api_init', 'address' );
function address() {

    register_rest_route( 'address/v1', 'address',  array(
                    'methods' => 'GET',
                    'callback' => 'get_address_restapi',
                )
            );
}

function get_address_restapi( WP_REST_Request $request ) {

$address = array(
                       "address_line"=> get_option('address_line'),
                       "address_postcode"=>get_option('address_postcode'),
                       "address_city"=>get_option('address_city'),
                       "address_contry"=>get_option('address_contry'),

                      );

    if (!empty($address)) {
    return $address;
}
}
