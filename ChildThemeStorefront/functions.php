<?php
/**
 * Deli engine room
 *
 * @package deli
 */

/**
 * Set the theme version number as a global variable
 */
$theme				= wp_get_theme( 'deli' );
$deli_version		= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-deli.php' );
require_once( 'inc/class-deli-customizer.php' );
require_once( 'inc/class-deli-template.php' );
require_once( 'inc/class-deli-integrations.php' );
require_once( 'inc/plugged.php' );




add_filter('woocommerce_get_availability','wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {

if ( $_product->is_in_stock() ) {
$availability['availability'] = __('In Stock!', 'woocommerce');
}

if ( ! $_product->is_in_stock() ) {
$availability['availability'] = __('Not Available', 'woocommerce');}

return $availability;
}

/**
 * Filter Force Login to allow exceptions for specific URLs.
 *
 * @param array $whitelist An array of URLs. Must be absolute.
 * @return array
 */
function my_forcelogin_whitelist( $whitelist ) {
  $whitelist[] = home_url( '/time-off-request/' );
	$whitelist[] = home_url( '/time-off-thank-you/');
    $whitelist[] = home_url( '/my-account/lost-password/?reset-link-sent=true');
	$whitelist[] = home_url( '/my-account/lost-password/?reset-link-sent=false');
	
  return $whitelist;
}
add_filter( 'v_forcelogin_whitelist', 'my_forcelogin_whitelist' );

/**
 * Bypass Force Login to allow for exceptions.
 *
 * @return bool Whether to disable Force Login. Default false.
 */
function my_forcelogin_bypass( $bypass ) {
  if ( class_exists( 'WooCommerce' ) ) {
    if ( is_wc_endpoint_url( 'lost-password' ) ) {
      $bypass = true;
    }
  }
  return $bypass;
}
add_filter( 'v_forcelogin_bypass', 'my_forcelogin_bypass' );

function wpmu_register_widgets() {
		
}
add_action( 'widgets_init', 'wpmu_register_widgets' );