<?php

/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined('ABSPATH') || exit;

?>

<?php do_action('woocommerce_before_lost_password_form');
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password text-start mb-3">
	<div class="position-relative">
		<div class="row">
			<div class="col-12 col-md-10 col-lg-8">

				<div class="row">
					<div class="col-12 ">
						<h2 class="mb-3 text-start"><?php echo esc_html__('Form lost password', 'codeweber') ?></h2>
						<p class="lead mb-6 text-start"><?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce')); ?></p>
					</div>
					<?php // @codingStandardsIgnoreLine 
					?>


					<div class="col-12 col-md-6">
						<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first form-floating mb-4">
							<input class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e('Username or email', 'woocommerce'); ?>" type="text" name="user_login" id="user_login" autocomplete="username" required />
							<label class="form-label" for="user_login"><?php esc_html_e('Username or email', 'woocommerce'); ?></label>
						</p>
						<?php do_action('woocommerce_lostpassword_form'); ?>
					</div>



					<div class="col-12 col-md-6">
						<p class="woocommerce-form-row form-row">
							<input type="hidden" name="wc_reset_password" value="true" />
							<button type="submit" class="woocommerce-Button button btn btn-primary rounded btn-login w-100 mb-2" value="<?php esc_attr_e('Reset password', 'woocommerce'); ?>"><?php esc_html_e('Reset password', 'woocommerce'); ?></button>
						</p>
						<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="position-relative">
		<div class="shape bg-dot blue rellax w-16 h-17" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem; z-index: 0;"></div>
	</div>



</form>
<!-- /form -->
<?php
do_action('woocommerce_after_lost_password_form');
