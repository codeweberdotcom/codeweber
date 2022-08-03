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
			'social-name' => 'Facebook',
			'icon-style' => 'uil',
			'icon-name' => 'uil-facebook-f',
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


//* --- ---

class Buttons
{
	public $form_button;
	public $button_size;
	public $class_button_wraper;
	public $gradient;
	public $default_button;
	public $data_cues;
	public $show_button;

	//* Function Show Buttons *//
	public function buttons()
	{
		if (have_rows('button_repeater')) : ?>
			<?php $i = 0; ?>
			<?php $form = ''; ?>
			<div class="<?php echo $class_button_wraper; ?>" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
				<!--  buttons start -->
				<?php while (have_rows('button_repeater')) : the_row(); ?>
					<?php if (have_rows('button_button')) : ?>
						<?php while (have_rows('button_button')) : the_row(); ?>
							<?php $style_button = get_sub_field('outline') ?>
							<!--  buttons style -->
							<?php if (get_sub_field('outline') == 1) : ?>
								<?php $class_style = '-outline' ?>
							<?php else : ?>
								<?php $class_style = ''; ?>
							<?php endif; ?>
							<?php $color_button = get_sub_field('dark_white_primary'); ?>
							<?php if ($color_button == 'dark') : ?>
								<?php $color_button = '-dark'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'white') : ?>
								<?php $color_button = '-white'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'primary') : ?>
								<?php $color_button = '-primary'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'custom') : ?>
								<?php $color_button = '-' . get_sub_field('custom_button_color'); ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif (get_sub_field('gradient')) : ?>
								<?php $gradient = 'btn-gradient gradient-' . get_sub_field('gradient'); ?>
							<?php endif; ?>
							<?php $select_icon = get_sub_field('icon'); ?>
							<!--  buttons style end-->
							<?php $text_on_button = get_sub_field('text_on_button'); ?>
							<?php $select_type = get_sub_field('select_type'); ?>
							<?php if ($select_type == 'Page or Post') : ?>
								<?php $button_link = get_sub_field('button_link'); ?>
								<?php if ($button_link) : ?>
									<?php $post = $button_link; ?>
									<?php setup_postdata($post); ?>
									<?php $button_link = get_permalink(); ?>
									<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							<?php elseif ($select_type == 'Taxonomy') : ?>
								<?php $taxonomy = get_sub_field('taxonomy'); ?>
								<?php if ($taxonomy) : ?>
									<?php $button_link = get_term_link($taxonomy->term_id); ?>
									<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
								<?php endif; ?>
							<?php elseif ($select_type == 'URL') : ?>
								<?php $url = get_sub_field('url'); ?>
								<?php $button_link = $url; ?>
								<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
							<?php elseif ($select_type == 'Video URL') : ?>
								<?php $video_url = get_sub_field('video_url'); ?>
								<?php if ($video_url) : ?>
									<?php $glightbox = 'data-glightbox=""'; ?>
								<?php endif; ?>
								<?php $button_link = $video_url; ?>
								<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
							<?php elseif ($select_type == 'Contact Form') : ?>
								<?php $contact_form = get_sub_field('contact_form'); ?>
								<?php if ($contact_form) : ?>
									<?php $data_modal = 'data-bs-toggle="modal"'; ?>
									<?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
									<span><a href="#" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?> me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
									<?php $form = '<div class="modal fade" id="modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '" tabindex="-1">
                       <div class="modal-dialog modal-dialog-centered modal-sm">
                       <div class="modal-content text-center">
                      <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; ?>
									<?php $id = $contact_form; ?>
									<?php $form .= do_shortcode("[contact-form-7 id='{$id}']"); ?>
									<?php $form .= '</div></div></div></div>'; ?>
									<?php $forms[$i] = $form; ?>
								<?php endif; ?>
							<?php elseif ($select_type == 'Html') : ?>
								<?php $html = get_sub_field('html'); ?>
								<?php $data_modal = 'data-bs-toggle="modal"'; ?>
								<?php $data_modal_id = 'data-bs-target="#test386'; ?>
								<span><a href="#" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?> me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
								<?php $form = '<div class="modal fade" id="test386" tabindex="-1">
                       <div class="modal-dialog modal-dialog-centered modal-sm">
                       <div class="modal-content text-center">
                      <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; ?>
								<?php $form .= $html; ?>
								<?php $form .= '</div></div></div></div>'; ?>
								<?php $forms[$i] = $form; ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php $i++; ?>
					<?php endif; ?>
				<?php endwhile; ?>
				<!--  buttons end -->
			<?php endif; ?>
			</div>

		<?php }

	//* Function forms *//


}


// --- Buttons Generate Functions ---
/*
/* buttons($form_button = 'rounded', $button_size = 'btn-lg', $class_button_wraper = NULL, $gradient = NULL)
*/
function buttons($form_button = 'rounded', $button_size = NULL, $class_button_wraper = 'd-flex', $gradient = NULL, $data_cues = 'slideInDown',  $data_group = 'page-title-buttons', $data_delay = '900', $default_button = NULL)
{ ?>
		<!--  buttons group -->
		<?php if (have_rows('button_repeater')) : ?>
			<?php $i = 0; ?>
			<?php $form = ''; ?>
			<div class="<?php echo $class_button_wraper; ?>" data-cues="<?php echo $data_cues; ?>" data-group="<?php echo $data_group; ?>" data-delay="<?php echo $data_delay ?>">
				<!--  buttons start -->
				<?php while (have_rows('button_repeater')) : the_row(); ?>
					<?php if (have_rows('button_button')) : ?>
						<?php while (have_rows('button_button')) : the_row(); ?>
							<?php $style_button = get_sub_field('outline') ?>



							<!--  buttons style -->
							<?php if (get_sub_field('outline') == 1) : ?>
								<?php $class_style = '-outline' ?>
							<?php else : ?>
								<?php $class_style = ''; ?>
							<?php endif; ?>
							<?php $color_button = get_sub_field('dark_white_primary'); ?>
							<?php if ($color_button == 'dark') : ?>
								<?php $color_button = '-dark'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'white') : ?>
								<?php $color_button = '-white'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'primary') : ?>
								<?php $color_button = '-primary'; ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif ($color_button == 'custom') : ?>
								<?php $color_button = '-' . get_sub_field('custom_button_color'); ?>
								<?php $button_class = 'btn' . $class_style . $color_button; ?>
							<?php elseif (get_sub_field('gradient')) : ?>
								<?php $gradient = 'btn-gradient gradient-' . get_sub_field('gradient'); ?>
							<?php endif; ?>
							<?php $select_icon = get_sub_field('icon'); ?>


							<!--  buttons style end-->
							<?php $text_on_button = get_sub_field('text_on_button'); ?>
							<?php $select_type = get_sub_field('select_type'); ?>
							<?php if ($select_type == 'Page or Post') : ?>
								<?php $button_link = get_sub_field('button_link'); ?>
								<?php if ($button_link) : ?>
									<?php $post = $button_link; ?>
									<?php setup_postdata($post); ?>
									<?php $button_link = get_permalink(); ?>
									<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							<?php elseif ($select_type == 'Taxonomy') : ?>
								<?php $taxonomy = get_sub_field('taxonomy'); ?>
								<?php if ($taxonomy) : ?>
									<?php $button_link = get_term_link($taxonomy->term_id); ?>
									<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
								<?php endif; ?>
							<?php elseif ($select_type == 'URL') : ?>
								<?php $url = get_sub_field('url'); ?>
								<?php $button_link = $url; ?>
								<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
							<?php elseif ($select_type == 'Video URL') : ?>
								<?php $video_url = get_sub_field('video_url'); ?>
								<?php if ($video_url) : ?>
									<?php $glightbox = 'data-glightbox=""'; ?>
								<?php endif; ?>
								<?php $button_link = $video_url; ?>
								<span><a href="<?php echo $button_link; ?>" class="btn <?php echo $button_size; ?> <?php echo $button_class; ?> btn-icon btn-icon-start <?php echo $gradient; ?> <?php echo $form_button; ?>  me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
							<?php elseif ($select_type == 'Contact Form') : ?>
								<?php $contact_form = get_sub_field('contact_form'); ?>
								<?php if ($contact_form) : ?>

									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form-<?php echo $contact_form; ?>"> Launch demo modal
									</button>


								<?php endif; ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php $i++; ?>
					<?php endif; ?>
				<?php endwhile; ?>
				<!--  buttons end -->
			</div>
		<?php else : ?>
			<?php echo $default_button; ?>
		<?php endif; ?>
		<!--  buttons group -->
	<?php };



// --- Swiper Generate Gallery ---
/*
/* 
*/


function swiper_gallery($image_size = 'large', $class_swiper = 'swiper-container dots-over', $data_nav = "true", $data_dots = "true", $data_margin = "5",  $data_autoplay = "false", $data_autoplaytime = "5000", $data_items_lg = "1", $data_items_md = "1", $data_items_xs = "1", $default_img = NULL)
{ ?>
		<?php
		$data_args = 'data-nav=' . $data_nav . ' ';
		$data_args .= 'data-dots=' . $data_dots . ' ';
		$data_args .= 'data-margin=' . $data_margin . ' ';
		$data_args .= 'data-items-lg=' . $data_items_lg . ' ';
		$data_args .= 'data-items-md=' . $data_items_md . ' ';
		$data_args .= 'data-items-xs=' . $data_items_xs . ' ';
		if ($data_autoplay == 'true') {
			$data_args .= 'data-autoplay=' . $data_autoplay . ' ';
			$data_args .= 'data-autoplaytime=' . $data_autoplaytime . ' ';
		}; ?>

		<!-- swiper-container -->
		<?php if (have_rows('gallery')) : ?>
			<div class="<?php echo $class_swiper; ?>" <?php echo $data_args; ?>>
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php while (have_rows('gallery')) : the_row(); ?>
							<!-- swiper-items -->
							<?php $video_or_photo = get_sub_field('photo_or_video');
							if ($video_or_photo === 'Photo') :
								$image = get_sub_field('photo');
								$size = $image_size;
								if ($image) :
									$imageurl = esc_url($image['sizes'][$size]);
									$imagealt = esc_attr($image['alt']); ?>
									<div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
								<?php endif;
							elseif ($video_or_photo === 'Video') :
								$videourl =  get_sub_field('video');
								$poster_for_video = get_sub_field('poster_for_video');
								if ($poster_for_video) :
									$size = $image_size;
									$video_poster_url = esc_url($poster_for_video['sizes'][$size]);
									$video_poster_alt = esc_attr($poster_for_video['alt']);
								endif; ?>
								<div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
							<?php endif; ?>
							<!--/.swiper-items -->
						<?php endwhile; ?>
					</div>
					<!--/.swiper-wrapper -->
				</div>
				<!--/.swiper -->
			</div>
			<!-- /.swiper-container -->
		<?php else : ?>
			<?php echo $default_img; ?>
		<?php endif; ?>
	<?php  }
