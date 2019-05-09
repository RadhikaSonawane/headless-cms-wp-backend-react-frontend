<?php

add_action( 'rest_api_init', 't_contact_form' );
function t_contact_form() {

    register_rest_route( 't-for-contact/v1', 'contact-forms',  array(
                    'methods' => 'GET',
                    'callback' => 'call_plugin_cf7_using_plugin_my_custom_posttypes',
                )
            );
    register_rest_route( 't-for-contact/v1', 'contact-forms/(?P<id>\d+)',  array(
                    'methods' => 'GET',
                    'callback' => 'get_contact_form_by_id',
                )
            );
     register_rest_route( 't-for-contact/v1', 'contact-forms',  array(
                    'methods' => 'POST',
                    'callback' => 'post_submitform',
                )
            );
}

//add_action('plugins_loaded', 'call_plugin_cf7_using_plugin_my_custom_posttypes');
function call_plugin_cf7_using_plugin_my_custom_posttypes() {
    if (class_exists('WPCF7_ContactForm')) {
			$args = array();
			$items = WPCF7_ContactForm::find( $args );
			$response = array();
				foreach ( $items as $item ) {
					$response[] = array(
						'id' => $item->id(),
						'slug' => $item->name(),
						'title' => $item->title(),
						'locale' => $item->locale(),
					);
				}
			return rest_ensure_response( $response );;
	    }

}

function get_contact_form_by_id(WP_REST_Request $request) {
	$id = (int) $request->get_param( 'id' );
	$item = wpcf7_contact_form( $id );

	   if ( ! $item ) {
			return new WP_Error( 'wpcf7_not_found',
				__( "The requested contact form was not found.", 'contact-form-7' ),
				array( 'status' => 404 ) );
		}
			$response = array(
			'id' => $item->id(),
			'slug' => $item->name(),
			'title' => $item->title(),
			'locale' => $item->locale(),
			'properties' => $item->get_properties(),
		);
				return rest_ensure_response( $response );

		    }

function post_submitform(WP_REST_Request $request) {
	/**$id = (int) $request->get_param( 'id' );
	$item = wpcf7_contact_form( $id );

	   if ( ! $item ) {
			return new WP_Error( 'wpcf7_not_found',
				__( "The requested contact form was not found.", 'contact-form-7' ),
				array( 'status' => 404 ) );
		}
			$response = array(
			'id' => $item->id(),
			'slug' => $item->name(),
			'title' => $item->title(),
			'locale' => $item->locale(),
			'properties' => $item->get_properties(),
		);
				return rest_ensure_response( $response );
		$data = $request->get_params();
		$item = wpcf7_contact_form( $data['formid'] );
			$item->submit();
							return rest_ensure_response( $data['message'] );*/

		    }



?>
