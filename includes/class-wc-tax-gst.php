<?php
/**
 * GST setup
 *
 * @package WC-TAX-GST
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit;


/**
 * Create the section beneath the tax tab
 **/
add_filter( 'woocommerce_get_sections_tax', 'wc_tax_gst_add_section' );
function wc_tax_gst_add_section( $sections ) {
	
	$sections['gst'] = __( 'GST India', 'kdc' );
	return $sections;
	
}

/**
 * Add settings to the specific section we created before
 */
add_filter( 'woocommerce_get_settings_tax', 'wc_tax_gst_settings', 10, 2 );
function wc_tax_gst_settings( $settings, $current_section ) {
	/**
	 * Check the current section is what we want
	 **/
	if ( $current_section == 'gst' ) {
		$settings_slider = array();
		// Add Title to the Settings
		$settings_slider[] = array( 'name' => __( 'GST India Settings', 'kdc' ), 'type' => 'title', 'desc' => __( 'Manage the setting in regards to your GST', 'kdc' ), 'id' => 'gst' );
		// Add first checkbox option
		$settings_slider[] = array(
			'name'     => __( 'Auto-insert into single product page', 'kdc' ),
			'desc_tip' => __( 'This will automatically insert your slider into the single product page', 'kdc' ),
			'id'       => 'gst_auto_insert',
			'type'     => 'checkbox',
			'css'      => 'min-width:300px;',
			'desc'     => __( 'Enable Auto-Insert', 'kdc' ),
		);
		// Add second text field option
		$settings_slider[] = array(
			'name'     => __( 'Slider Title', 'kdc' ),
			'desc_tip' => __( 'This will add a title to your slider', 'kdc' ),
			'id'       => 'gst_title',
			'type'     => 'text',
			'desc'     => __( 'Any title you want can be added to your slider with this option!', 'kdc' ),
		);
		
		$settings_slider[] = array( 'type' => 'sectionend', 'id' => 'gst' );
		return $settings_slider;
	
	/**
	 * If not, return the standard settings
	 **/
	} else {
		return $settings;
	}
}