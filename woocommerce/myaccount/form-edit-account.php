<?php

/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_edit_account_form'); ?>

<form class="woocommerce-EditAccountForm edit-account row" action="" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>

	<?php do_action('woocommerce_edit_account_form_start'); ?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first form-floating mb-4 col-md-6">
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" placeholder="<?php esc_html_e('First name', 'woocommerce'); ?>" value="<?php echo esc_attr($user->first_name); ?>" />
		<label for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
	</p>
	<!-- /.form-floating -->




	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last form-floating mb-4 col-md-6">
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e('Last name', 'woocommerce'); ?>" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr($user->last_name); ?>" />
		<label for="account_last_name"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>

	</p>
	<!-- /.form-floating -->

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-floating mb-4 col-md-6">
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e('Display name', 'woocommerce'); ?>" name="account_display_name" id="account_display_name" value="<?php echo esc_attr($user->display_name); ?>" />
		<label for="account_display_name"><?php esc_html_e('Display name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
		<span class="d-block mt-2"><em><?php esc_html_e('This will be how your name will be displayed in the account section and in reviews', 'woocommerce'); ?></em></span>
	</p>
	<!-- /.form-floating -->

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-floating mb-4 col-md-6">
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text form-control" placeholder="<?php esc_html_e('Email address', 'woocommerce'); ?>" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr($user->user_email); ?>" />
		<label for="account_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
	</p>
	<!-- /.form-floating -->

	<fieldset class="col-12">


		<legend class="h3 mb-4 orw"><?php esc_html_e('Password change', 'woocommerce'); ?></legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-floating mb-4 ">
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text password-field form-control" placeholder="<?php esc_html_e('Current password (leave blank to leave unchanged)', 'woocommerce'); ?>" name="password_current" id="password_current" autocomplete="off" />
			<label for="password_current"></label>
			<span class="password-toggle"><i class="uil uil-eye"></i></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-floating mb-4 ">
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text password-field form-control" placeholder="<?php esc_html_e('New password (leave blank to leave unchanged)', 'woocommerce'); ?>" name="password_1" id="password_1" autocomplete="off" />
			<label for="password_1"></label>
			<span class="password-toggle"><i class="uil uil-eye"></i></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-floating mb-4 ">
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text password-field form-control" placeholder="<?php esc_html_e('Confirm new password', 'woocommerce'); ?>" name="password_2" id="password_2" autocomplete="off" />
			<label for="password_2"></label>
			<span class="password-toggle"><i class="uil uil-eye"></i></span>
		</p>
	</fieldset>
	<div class="clear"></div>

	<?php do_action('woocommerce_edit_account_form'); ?>

	<p>
		<?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>
		<button type="submit" class="woocommerce-Button button btn btn-primary rounded" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>"><?php esc_html_e('Save changes', 'woocommerce'); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action('woocommerce_edit_account_form_end'); ?>
</form>

<?php do_action('woocommerce_after_edit_account_form'); ?>