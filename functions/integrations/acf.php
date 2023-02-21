<?php

/**
 * Integration with Advanced Custom Fields
 */

// https://www.advancedcustomfields.com/resources/options-page/



add_action('acf/init', 'my_acf_init');

function my_acf_init()
{

	if (function_exists('acf_add_options_page')) {

		$option_page = acf_add_options_page(array(
			'page_title' 	=> __('Options', 'codeweber'),
			'menu_title' 	=> __('Options', 'codeweber'),
			'menu_slug' 	=> 'acf-options',
		));
	}
}

// https://www.advancedcustomfields.com/resources/register-fields-via-php/


// --- Social icons ---

function codeweber_socialicons()
{
	$brk_socialnetworks = array(
		'facebook' => array(
			'social-name' => 'Facebook',
			'icon-style' => 'uil',
			'icon-name' => 'uil-facebook-f',
		),
		'vkontakte' => array(
			'social-name' => 'Vkontakte',
			'icon-style' => 'uil',
			'icon-name' => 'uil-vk',
		),
		'twitter' => array(
			'social-name' => 'Twitter',
			'icon-style' => 'uil',
			'icon-name' => 'uil-twitter',
		),
		'linkedin' => array(
			'social-name' => 'LinkedIn',
			'icon-style' => 'uil',
			'icon-name' => 'uil-linkedin',
		),
		'instagram' => array(
			'social-name' => 'Instagram',
			'icon-style' => 'uil',
			'icon-name' => 'uil-instagram',
		),

		'whatsapp' => array(
			'social-name' => 'Whatsapp',
			'icon-style' => 'uil',
			'icon-name' => 'uil-whatsapp',
		),
		'telegram' => array(
			'social-name' => 'Telegram',
			'icon-style' => 'uil',
			'icon-name' => 'uil-telegram',
		),
		'github' => array(
			'social-name' => 'Github',
			'icon-style' => 'uil',
			'icon-name' => 'uil-github',
		),

		'youtube' => array(
			'social-name' => 'YouTube',
			'icon-style' => 'uil',
			'icon-name' => 'uil-youtube',
		),
	);
	return $brk_socialnetworks;
}

// --- Phone 1 ---

function brk_phone_one()
{
	if (get_field('phone', 'option')) :
		$phone_acf_1 = get_field('phone', 'option');
		$brk_phone_one = '<a href="tel:' . $phone_acf_1 . '">' . $phone_acf_1 . '</a>';
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
		$brk_phone_two = '<a href="tel:' . $phone_acf_2 . '">' . $phone_acf_2 . '</a>';
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
	if ($adress_2 && $adress_1) :
		$brk_adress = $adress_1 . ' ' . $adress_2;
	elseif ($adress_1) :
		$brk_adress = $adress_1;
	else :
		$brk_adress = 'Moonshine St. 14/05 Light City, London, United Kingdom';
	endif;
	return $brk_adress;
};





// if (
// 	function_exists('acf_add_local_field_group')
// ) :

// 	acf_add_local_field_group(array(
// 		'key' => 'group_6346af2c75768',
// 		'title' => __('Translate', 'codeweber'),
// 		'fields' => array(
// 			array(
// 				'key' => 'field_6346af32a70b7',
// 				'label' => __('Test', 'codeweber'),
// 				'name' => 'test',
// 				'type' => 'text',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'maxlength' => '',
// 			),
// 		),
// 		'location' => array(
// 			array(
// 				array(
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'post',
// 				),
// 			),
// 		),
// 		'menu_order' => 0,
// 		'position' => 'normal',
// 		'style' => 'default',
// 		'label_placement' => 'top',
// 		'instruction_placement' => 'label',
// 		'hide_on_screen' => '',
// 		'active' => true,
// 		'description' => '',
// 		'show_in_rest' => 0,
// 	));

// endif;


function is_acf_admin()
{
	if (isset($_GET['post']) && 'acf-field-group' == get_post_type($_GET['post'])) {
		return true;
	}
	if (isset($_POST['post_type']) && 'acf-field-group' == $_POST['post_type']) {
		return true;
	}
	return false;
}


add_filter('acf/load_field', 'translate_acf_fields');
function translate_acf_fields($field)
{

	// Don't run on acf-field-group page
	if (get_post_type(get_the_ID()) == 'acf-field-group') {
		return $field;
	}

	// Translate backend labels/titles/instuctions
	$field['label']        = __($field['label'], 'codeweber');
	$field['instructions'] = __($field['instructions'], 'codeweber');

	return $field;
}


add_filter('acf/get_field_group', 'translate_acf_field_group');

function translate_acf_field_group($field_group)
{

	$field_group['title'] = __($field_group['title'], 'codeweber');
	return $field_group;
}