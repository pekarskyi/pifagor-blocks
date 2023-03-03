<?php
/*
 * Plugin Name:       Pifagor Blocks
 * Plugin URI:        https://pifagor.studio/
 * Description:       Custom Gutenberg blocks from Pifagor Studio.
 * Version:           1.0
 * Requires at least: 6.1.1
 * Requires PHP:      7.4
 * Author:            Pifagor Studio
 * Author URI:        https://pifagor.studio/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://pifagor.studio/
 * Text Domain:       pifagor-blocks
 * Domain Path:       /languages
 */

define( 'PB_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once( PB_PLUGIN_PATH . 'inc/ACF_Field_Unique_ID.php' );
PhilipNewcomer\ACF_Unique_ID_Field\ACF_Field_Unique_ID::init();

//Check active plugin ACF
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (!is_plugin_active('advanced-custom-fields-pro/acf.php')) {
    add_action( 'admin_notices', function() {
        $pf = 'Pifagor Blocks';
        $acf = 'Advanced Custom Fields PRO';
        
        echo '<div id="message" class="error notice is-dismissible">
            <p>';
        printf(esc_html__('%1$s installed and activated successfully. But, the following required plugin is currently inactive: %2$s.', 'pifagor-blocks'
        ),
        $pf, $acf);
        echo '</p>
        </div>';
    });
}

//register_acf_blocks
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
register_block_type( __DIR__ . '/blocks/quote/' );
//register_block_type( __DIR__ . '/blocks/fancy-heading-icon/' );
//register_block_type( __DIR__ . '/blocks/fancy-heading/' );
}

//Custom category for blocks
function register_layout_category( $categories ) {
$categories[] = array(
'slug' => 'pifagor',
'title' => 'Pifagor Blocks'
);
return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
add_filter( 'block_categories_all', 'register_layout_category' );
} else {
add_filter( 'block_categories', 'register_layout_category' );
}

//Localization
add_action( 'plugins_loaded', 'pf_blocks_load_textdomain' );
function pf_blocks_load_textdomain() {
load_plugin_textdomain( 'pifagor-blocks', false, dirname( plugin_basename( __FILE__ ) ) .
'/languages/' );
}

//Disable GUI in ACF
//add_filter( 'acf/settings/show_admin', '__return_false' );
