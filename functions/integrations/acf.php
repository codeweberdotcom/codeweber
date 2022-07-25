<?php

/**
 * Integration with Advanced Custom Fields
 */

// https://www.advancedcustomfields.com/resources/options-page/

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

if (class_exists('ACF')) {

	function brk_acf_meta()
	{

		acf_add_local_field_group(
			array(
				'key' => 'group_theme_meta',
				'title' => __('Meta', 'bricks'),
				'fields' => array(
					array(
						'key' => 'field_60140651ee8f1',
						'label' => __('Meta', 'bricks'),
						'name' => 'meta',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_60140662ee8f2',
								'label' => __('Chrome Theme', 'bricks'),
								'name' => 'theme_color',
								'type' => 'color_picker',
								'instructions' => __('Tab color in Chrome for Android', 'bricks'),
								'wrapper' => array(
									'width' => '25',
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options',
						),
					),
				),
				'menu_order' => 2,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			)
		);
	}
	add_action('acf/init', 'brk_acf_meta');

	// --- Metadata ---

	function brk_head_meta()
	{

		// --- Chrome theme ---

		$themecolor = get_field('meta_theme_color', 'option');

		if ($themecolor) {
			echo '<meta name="theme-color" content="', esc_attr($themecolor), '">';
		}
	}
	add_action('wp_head', 'brk_head_meta');
}

// --- Social icons ---

function brk_socialicons()
{

	$brk_socialnetworks = array(
		'facebook' => array(
			'social-name'   => 'Facebook',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-facebook-f',
		),
		'twitter' => array(
			'social-name'   => 'Twitter',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-twitter',
		),
		'linkedin' => array(
			'social-name'   => 'LinkedIn',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-linkedin',
		),
		'instagram' => array(
			'social-name'   => 'Instagram',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-instagram',
		),

		'whatsapp' => array(
			'social-name'   => 'Whatsapp',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-whatsapp',
		),
		'telegram' => array(
			'social-name'   => 'Telegram',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-telegram',
		),
		'github' => array(
			'social-name'   => 'Github',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-github',
		),

		'youtube' => array(
			'social-name'   => 'YouTube',
			'icon-style'    => 'uil',
			'icon-name'     => 'uil-youtube',
		),
	);
	return $brk_socialnetworks;
}

// --- Phone 1 ---

function brk_phone_one()
{
	if (get_field('phone', 'option')) :
		$phone_acf_1 = get_field('phone', 'option');
		$brk_phone_one = $phone_acf_1;
	else :
		$brk_phone_one = '+00 (123) 456 78 90';
	endif;
	return $brk_phone_one;
};

// --- Phone 2 ---

function brk_phone_two()
{
	if (get_field('phone_1', 'option')) :
		$phone_acf_2 = get_field('phone_1', 'option');
		$brk_phone_two = $phone_acf_2;
	else :
		$brk_phone_two = '00 (123) 456 78 91';
	endif;
	return $brk_phone_two;
};


// --- E-Mail 1 ---

function brk_email()
{
	if (get_field('email', 'option')) :
		$email_acf = get_field('email', 'option');
		$brk_email = $email_acf;
	else : $brk_email = 'info@codeweber.com';
	endif;
	return $brk_email;
};

// --- Address ---

function brk_adress()
{
	$adress_1 = get_field('address_1', 'option');
	$adress_2 = get_field('address_2', 'option');

	if ($adress_1 && $adress_2) :
		$brk_adress = $adress_1 . ' ' . $adress_2;
	else :
		$brk_adress = 'Moonshine St. 14/05 Light City, London, United Kingdom';
	endif;
	return $brk_adress;
};


// --- Logo Dark Link ---

function brk_logo_dark_link()
{
	$logo_header_dark = get_field('logo_dark', 'option');
	if ($logo_header_dark) :
		$brk_logo_header_dark = $logo_header_dark;
	else :
		$brk_logo_header_dark = './dist/img/logo-dark.png';
	endif;
	return $brk_logo_header_dark;
};


// --- Logo Light Link ---

function brk_logo_light_link()
{
	$logo_light = get_field('logo_light', 'option');
	if ($logo_light) :
		$brk_logo_light = $logo_light;
	else :
		$brk_logo_light = './dist/img/logo-light.png';
	endif;
	return $brk_logo_light;
};
