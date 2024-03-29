<?php

/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined('ABSPATH') || exit;

if (!wc_coupons_enabled()) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="woocommerce-form-coupon-toggle mb-4">
	<a href="#" class="showcoupon alert-link hover"><?php echo esc_html__('Click here to enter your code', 'codeweber'); ?></a>
</div>

<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

	<p><?php esc_html_e('If you have a coupon code, please apply it below.', 'woocommerce'); ?></p>

	<div class="row mb-5">
		<span class="col-md-6 col-lg-3">
			<p class="form-row form-row-first form-floating mb-4">
				<input type="text" name="coupon_code" class="input-text form-control <?php echo GetThemeButton(); ?>" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" id="coupon_code" value="" />
				<label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
			</p>
		</span>

		<span class="col-md-6 col-lg-3">
			<p class="form-row form-row-last">
				<button type="submit" class="button btn btn-primary <?php echo GetThemeButton(); ?> w-100 flex-grow-1" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
			</p>
		</span>
	</div>

	<div class="clear"></div>

	<hr class="my-4" />
</form>