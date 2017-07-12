<?php
/*
Plugin Name: WooCommerce čeština
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7F53XKXAB2HSG
Plugin URI: http://wptranslations.eu/preklady/woocommerce-cestina/
Description: Přeloží plugin WooCommerce do češtiny. uživatelskou i admin část, včetně vybraných dodatků.
Version: 2.5
Author: WPranslations.eu
Author URI: http://wptranslations.eu
Text Domain: woocommerce-cestina

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the WooCommerce čeština.
 *
 * @since 2.4.2
 */
 
	/**********  Vytvoreni menu hlavni **********/
add_action( 'admin_menu', 'woocommerce_cestina' );

function woocommerce_cestina() {
// 	add_plugins_page( 'WooCommerce čeština', 'Woo čeština', 'manage_options', 'info', 'ObsahUvodWC' );
}

// Obsah Kontaktní fomulář
function ObsahUvodWC() {


include 'info.php';

} 

// Překlad woocomerce
function wccf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/woocommerce/' . apply_filters( 'woocommerce_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce', $mofile );
}
add_action( 'woocommerce_loaded', 'wccf_load_textdomain' );

// Překlad Admin Bar Addition
function wccbf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/admin-bar-addition/' . apply_filters( 'woocommerce-admin-bar-addition_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce-admin-bar-addition', $mofile );
}
add_action( 'woocommerce_loaded', 'wccbf_load_textdomain' );

// Překlad All in One Seo pack
function wccsf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/all-in-one-seo-pack/' . apply_filters( 'woo_ai_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woo_ai', $mofile );
}
add_action( 'woocommerce_loaded', 'wccsf_load_textdomain' );

// Překlad Delivery notes
function wccdnf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/delivery-notes/' . apply_filters( 'woocommerce-delivery-notes_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce-delivery-notes', $mofile );
}
add_action( 'woocommerce_loaded', 'wccdnf_load_textdomain' );

// Překlad Video product tab
function wccvptf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/video-product-tab/' . apply_filters( 'wc_video_product_tab_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'wc_video_product_tab', $mofile );
}
add_action( 'woocommerce_loaded', 'wccvptf_load_textdomain' );

// Překlad Photos product tab
function wccpptf_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/photos-product-tab/' . apply_filters( 'wc_photos_product_tab_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'wc_photos_product_tab', $mofile );
}
add_action( 'woocommerce_loaded', 'wccpptf_load_textdomain' );

// Kontrola aktualizace
require 'plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = PucFactory::buildUpdateChecker(
'http://free.wptranslations.eu/?action=get_metadata&slug=woocommerce-cestina', //Metadata URL.
__FILE__, //Full path to the main plugin file.
'woocommerce-cestina' //Plugin slug. Usually it's the same as the name of the directory.
);