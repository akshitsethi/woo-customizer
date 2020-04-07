<?php
/**
 * Configuration file for the plugin.
 */

namespace AkshitSethi\Plugins\WooCustomizer;

/**
 * Set configuration options.
 *
 * @package AkshitSethi\Plugins\WooCustomizer
 */
class Config {

	public static $plugin_url;
	public static $plugin_path;
	public static $default_options;

	const PLUGIN_SLUG = 'woo-customizer';
	const SHORT_SLUG  = 'woocustomizer';
	const VERSION     = '1.0.0';
	const DB_OPTION   = 'as_' . self::SHORT_SLUG;
	const PREFIX      = self::SHORT_SLUG . '_';


	/**
	 * Class constructor.
	 */
	public function __construct() {
		self::$plugin_url  = plugin_dir_url( dirname( __FILE__ ) );
		self::$plugin_path = plugin_dir_path( dirname( __FILE__ ) );

		// Default options
		$this->default_options();
	}


	/**
	 * Get plugin name.
	 *
	 * @since 1.0.0
	 */
	public static function get_plugin_name() {
		return esc_html__( 'Woo Customizer', 'woo-customizer' );
	}


	/**
	 * Add default options.
	 *
	 * @since 1.0.0
	 */
	public function default_options() {
		self::$default_options = array(
			'shop' => array(
				'add_to_cart_text' => '',
				'variable_add_to_cart_text' => '',
				'grouped_add_to_cart_text' => '',
				'out_of_stock_add_to_cart_text' => '',
				'loop_sale_flash_text' => '',
				'loop_shop_per_page' => '',
				'loop_shop_columns' => '',
				'woocommerce_product_thumbnails_columns' => ''
			),
			'product' => array(
				'product_description_tab_title' => '',
				'product_additional_information_tab_title' => '',
				'product_description_heading' => '',
				'product_additional_information_heading' => '',
				'single_add_to_cart_text' => '',
				'single_out_of_stock_text' => '',
				'single_backorder_text' => '',
				'single_sale_flash_text' => ''
			),
			'checkout' => array(
				'checkout_must_be_logged_in_message' => '',
				'checkout_coupon_message' => '',
				'checkout_login_message' => '',
				'create_account_default_checked' => '',
				'order_button_text' => ''
			),
			'misc' => array(
				'woocommerce_countries_tax_or_vat' => '',
				'woocommerce_countries_inc_tax_or_vat' => '',
				'woocommerce_countries_ex_tax_or_vat' => '',
				'woocommerce_placeholder_img_src' => ''
			)
		);
	}

}

new Config();
