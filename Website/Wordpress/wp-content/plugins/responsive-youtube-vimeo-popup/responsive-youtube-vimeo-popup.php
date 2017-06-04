<?php
/**
 * Plugin Name: Responsive YouTube & Vimeo Video Popup
 * Plugin URI: http://www.mapsteps.com/downloads/
 * Description: Create responsive YouTube & Vimeo Video Popup's
 * Version: 1.1.1
 * Author: MapSteps
 * Author URI: https://mapsteps.com
 * Text Domain: ryvpopup
 */

	// exit if plugin is accessed directly
	if ( ! defined( 'ABSPATH' ) ) exit;

	// Plugin constants
	define( 'RYV_POPUP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'RYV_POPUP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

	// Textdomain
	add_action( 'plugins_loaded', 'ryv_popup_textomain' );
	function ryv_popup_textomain() {
		load_plugin_textdomain( 'ryvpopup', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
	}

	// Required Files
	require  RYV_POPUP_PLUGIN_DIR . '/assets/vendor/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php';

	// Admin Notice
	function ryv_popup_pro_notice() {
	    if ( ! PAnD::is_admin_notice_active( 'disable-ryv-notice-forever' ) ) {
	        return;
	    }

	    ?>
	    <div data-dismissible="disable-ryv-notice-forever" class="updated notice notice-success is-dismissible">
	        <p><?php _e( '<a href="https://mapsteps.com/en/downloads/responsive-youtube-vimeo-popup-wordpress/?utm_source=plugin&utm_campaign=ryv_popup_pro&utm_medium=notice" target="_blank">Responsive YouTube & Vimeo Video Popup PRO</a> is here!', 'sample-text-domain' ); ?></p>
	    </div>
	    <?php
	}
	add_action( 'admin_init', array( 'PAnD', 'init' ) );
	add_action( 'admin_notices', 'ryv_popup_pro_notice' );

	// Shortcode
	function ryv_popup_shortcode($ryv_popup_atts) {

		$ryv_popup_atts = shortcode_atts(array(
			'video' => 'https://www.youtube.com/embed/YlUKcNNmywk',
		), $ryv_popup_atts, 'ryv-popup');

		// Enqueue Styles & Scripts only when Shortcode is present
		wp_register_style( 'ryv-popup', RYV_POPUP_PLUGIN_URL . '/assets/css/ryv-popup.css' );
		wp_enqueue_style( 'ryv-popup' );

		wp_register_script( 'ryv-popup', RYV_POPUP_PLUGIN_URL . '/assets/js/ryv-popup.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'ryv-popup' );

		// Initialize output
		$ryv_output = '';

		// Popup Wrapper
		$ryv_output .= '<div class="ryv-popup-wrapper">';

		// Close Icon
		$ryv_output .= '<div class="ryv-popup-close"></div>';

		// Video
		$ryv_output .= '<iframe class="ryv-popup-video" src="" data-ryv-popup-url="'. $ryv_popup_atts['video'] .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

		// Close Popup Wrapper
		$ryv_output .= '</div>';

		return $ryv_output;
	}

	add_shortcode('ryv-popup', 'ryv_popup_shortcode');