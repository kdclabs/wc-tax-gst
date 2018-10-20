<?php
/**
 * Plugin Name: GST India for WooCommerce
 * Plugin URI: https://gst.dukaan.tech/
 * Description: Make your WooCommerce store compliant with Indian Goods and Service Tax [GST].
 * Version: 1.0.1
 * Author: dukaan.TECH
 * Author URI: https://dukaan.tech/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kdc
 * WC requires at least: 3.0.0
 * WC tested up to: 3.4.7
 * GitHub Plugin URI: https://github.com/kdclabs/wc-tax-gstv 
 *
 * @package wc-tax-gst
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Functions used by plugins
 */
if ( ! class_exists( 'WC_Dependencies' ) )
	require_once dirname( __FILE__ ) . '/includes/class-wc-dependencies.php';

/**
 * WC Detection
 */
if ( ! function_exists( 'is_woocommerce_active' ) ) {
	function is_woocommerce_active() {
		return WC_Dependencies::woocommerce_active_check();
	}
}

// WC active check
if ( ! is_woocommerce_active() ) {
	return;
}

// Define WC_TAX_GST_FILE.
if ( ! defined( 'WC_TAX_GST_FILE' ) ) {
	define( 'WC_TAX_GST_FILE', __FILE__ );
}

// Include the main class.
if ( ! class_exists( 'WC_Tax_GST' ) ) {
	require_once dirname( __FILE__ ) . '/includes/class-wc-tax-gst.php';
}