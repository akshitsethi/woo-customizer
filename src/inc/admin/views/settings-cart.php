<?php
/**
 * Cart settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\CustomizeWoo\Config;

?>

<div class="as-tile" id="cart">
	<form method="post" class="as-cart-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'CART', 'customize-woo' ); ?></h2>
			<p><?php esc_html_e( 'Configure options for the WooCommerce Cart page.', 'customize-woo' ); ?></p>

			<div class="as-section-content">
				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'no_shipping_available_html'; ?>" class="as-strong"><?php esc_html_e( 'No Shipping Available Text', 'customize-woo' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'no_shipping_available_html'; ?>" id="<?php echo Config::PREFIX . 'no_shipping_available_html'; ?>" value="<?php echo esc_attr( stripslashes( $options['woocommerce_no_shipping_available_html'] ) ); ?>" placeholder="<?php esc_attr_e( 'No shipping available text on cart page', 'customize-woo' ); ?>" class="as-form-control">

						<p class="as-form-help-block"><?php esc_html_e( 'Changes the no shipping available text on cart.', 'customize-woo' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'shipping_estimate_html'; ?>" class="as-strong"><?php esc_html_e( 'Shipping Estimate Text', 'customize-woo' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'shipping_estimate_html'; ?>" id="<?php echo Config::PREFIX . 'shipping_estimate_html'; ?>" value="<?php echo esc_attr( stripslashes( $options['woocommerce_shipping_estimate_html'] ) ); ?>" placeholder="<?php esc_attr_e( 'Shipping estimate text on cart page', 'customize-woo' ); ?>" class="as-form-control">

						<p class="as-form-help-block"><?php esc_html_e( 'Changes the shipping estimate text on cart.', 'customize-woo' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</form>
</div><!-- #cart -->
