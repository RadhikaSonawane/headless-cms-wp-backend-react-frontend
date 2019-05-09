<?php
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

    //create new top-level menu
    //add_submenu_page('Travel-Lovers','My Cool Plugin Settings',  'Settings', 'manage_options', 'setting', 'my_custom_taxonomies_page' );
 add_submenu_page('edit.php?post_type=travel-lover', 'Settings', 'Settings', 'manage_options', 'wiki-options', 'my_custom_taxonomies_page' );
    //call register settings function
 add_action( 'admin_init', 'register_my_custom_taxonomies' );
}

// create custom plugin settings menu
//add_action('init', 'my_custom_taxonomies');


function register_my_custom_taxonomies() {
	//register our settings
	register_setting( 'settings', 'menu_top' );
	register_setting( 'settings', 'menu_bottom' );
	register_setting( 'settings', 'address_line' );
    register_setting( 'settings', 'address_postcode' );
    register_setting( 'settings', 'address_city' );
    register_setting( 'settings', 'address_contry' );
}

function my_custom_taxonomies_page() {
?>
<div class="wrap">
<h1>Add Nav Slug</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'settings' ); ?>
    <?php do_settings_sections( 'settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Add menu navbar slug </th>
        <td><input type="text" name="menu_top" value="<?php echo esc_attr( get_option('menu_top') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Add footer menu slug</th>
        <td><input type="text" name="menu_bottom" value="<?php echo esc_attr( get_option('menu_bottom') ); ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Add Address Street Name</th>
            <td><input name="address_line" value="<?php echo esc_attr( get_option('address_line') ); ?>"/></td>
        </tr>

         <tr valign="top">
            <th scope="row">Add Address Postcode</th>
            <td><input name="address_postcode" value="<?php echo esc_attr( get_option('address_postcode') ); ?>"/></td>
        </tr>

         <tr valign="top">
            <th scope="row">Add Address City Name</th>
            <td><input name="address_city" value="<?php echo esc_attr( get_option('address_city') ); ?>"/></td>
        </tr>

         <tr valign="top">
            <th scope="row">Add Address Contry Name</th>
            <td><input name="address_contry" value="<?php echo esc_attr( get_option('address_contry') ); ?>"/></td>
        </tr>
    </table>

    <?php submit_button(); ?>


</form>
</div>
<?php } ?>
