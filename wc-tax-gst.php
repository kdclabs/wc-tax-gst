<?php
/**
 * Plugin Name: GST India for WooCommerce
 * Plugin URI: https://gst.dukaan.tech/
 * Description: Make your WooCommerce store compliant with Indian Goods and Service Tax [GST].
 * Version: 1.0.0
 * Author: dukaan.TECH
 * Author URI: https://dukaan.tech/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kdc
 * WC requires at least: 3.0.0
 * WC tested up to: 3.4.7
 * GitHub Plugin URI: https://github.com/kdclabs/wc-tax-gst
 *
 * @package wc-tax-gst
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define WC_TAX_GST_FILE.
if ( ! defined( 'WC_TAX_GST_FILE' ) ) {
	define( 'WC_TAX_GST_FILE', __FILE__ );
}

// Include the main class.
if ( ! class_exists( 'WC_Tax_GST' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wc-tax-gst.php';
}

/**
 * Create the section beneath the tax tab
 **/
add_filter( 'woocommerce_get_sections_tax', 'wc_tax_gst_add_section' );
function wc_tax_gst_add_section( $sections ) {
	
	$sections['gst'] = __( 'GST India', 'kdc' );
	return $sections;
	
}