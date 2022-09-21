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
				'title' => __('Meta', 'codeweber'),
				'fields' => array(
					array(
						'key' => 'field_60140651ee8f1',
						'label' => __('Meta', 'codeweber'),
						'name' => 'meta',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_60140662ee8f2',
								'label' => __('Chrome Theme', 'codeweber'),
								'name' => 'theme_color',
								'type' => 'color_picker',
								'instructions' => __('Tab color in Chrome for Android', 'codeweber'),
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

// --- Accordeon ---

class AccordeonS
{
	public $type_accordeon = 'plane';
	public $default_accordeon = NULL;
	public $section_id = NULL;
	public $section_id_2 = NULL;
	public function accordeon()
	{

		if (have_rows('accordeon')) :
			while (have_rows('accordeon')) : the_row();
				$type_accordeon = get_sub_field('type_accordeon');
				$style_accordeon = get_sub_field('style_accordeon');
				if ($style_accordeon == 'border') :
					$card_style_class = NULL;
				elseif ($style_accordeon == 'plain') :
					$card_style_class = 'plain';
				endif;
				if (have_rows('accordeon_repeater')) :
					while (have_rows('accordeon_repeater')) : the_row();

						$title = get_sub_field('title');
						$paragraph = get_sub_field('paragraph');
						$row_id = get_row_index();

						if ($type_accordeon == 'Type_1' && $row_id == '1') :
							$class_expand = 'true';
							$button_accordeon_class = 'accordion-button';
							$collapse_class = 'accordion-collapse collapse show ';
						else :
							$class_expand = 'false';
							$button_accordeon_class = 'collapsed';
							$collapse_class = 'collapse';
						endif; ?>
						<div class="card <?php echo $card_style_class; ?> accordion-item">
							<div class="card-header" id="headingOne-<?php echo  $this->section_id . '-' . $row_id; ?>">
								<button class="<?php echo $button_accordeon_class; ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" aria-expanded="<?php echo $class_expand; ?>" aria-controls="collapseOne-<?php echo $this->section_id; ?>"> <?php echo $title; ?> </button>
							</div>
							<!--/.card-header -->
							<div id="collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="headingOne-<?php echo $this->section_id; ?>" data-bs-parent="#<?php echo $this->section_id; ?>">
								<div class="card-body">
									<p><?php echo $paragraph; ?></p>
								</div>
								<!--/.card-body -->
							</div>
							<!--/.accordion-collapse -->
						</div>
						<!--/.accordion-item -->
					<?php
					endwhile;
				else :
					echo $this->default_accordeon;
				endif;
			endwhile;
		endif;
	}


	public function accordeon1()
	{
		if (have_rows('accordeon_repeater_1_accordeon')) :
			while (have_rows('accordeon_repeater_1_accordeon')) : the_row();
				$type_accordeon = get_sub_field('type_accordeon');
				$style_accordeon = get_sub_field('style_accordeon');
				if ($style_accordeon == 'border') :
					$card_style_class = NULL;
				elseif ($style_accordeon == 'plain') :
					$card_style_class = 'plain';
				endif;
				if (have_rows('accordeon_repeater')) :
					while (have_rows('accordeon_repeater')) : the_row();

						$title = get_sub_field('title');
						$paragraph = get_sub_field('paragraph');
						$row_id = get_row_index();

						if ($type_accordeon == 'Type_1' && $row_id == '1') :
							$class_expand = 'true';
							$button_accordeon_class = 'accordion-button';
							$collapse_class = 'accordion-collapse collapse show ';
						else :
							$class_expand = 'false';
							$button_accordeon_class = 'collapsed';
							$collapse_class = 'collapse';
						endif; ?>

						<div class="card <?php echo $card_style_class; ?> accordion-item">
							<div class="card-header" id="headingOne-<?php echo  $this->section_id . '-' . $row_id; ?>">
								<button class="<?php echo $button_accordeon_class; ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" aria-expanded="<?php echo $class_expand; ?>" aria-controls="collapseOne-<?php echo $this->section_id; ?>"> <?php echo $title; ?> </button>
							</div>
							<!--/.card-header -->
							<div id="collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="headingOne-<?php echo $this->section_id; ?>" data-bs-parent="#<?php echo $this->section_id; ?>">
								<div class="card-body">
									<p><?php echo $paragraph; ?></p>
								</div>
								<!--/.card-body -->
							</div>
							<!--/.accordion-collapse -->
						</div>
						<!--/.accordion-item -->
		<?php
					endwhile;
				else :
					echo $this->default_accordeon;
				endif;
			endwhile;
		endif;
	}
}


//* --- Swiper Gallery Class ACF---

class SwiperSlider
{
	public $root_theme = '';
	public $default_imageurl = '/dist/img/photos/about7.jpg';

	public $class_swiper = 'swiper-container dots-over shadow-lg';
	public $data_nav = 'data-nav="true"';
	public $data_dots = 'data-dots="true"';
	public $data_margin = 'data-margin="5"';
	public $image_size = 'sandbox_hero_3';
	public $data_items_lg = 'data-items-lg="1"';
	public $data_items_md = 'data-items-md="1"';
	public $data_items_xs = 'data-items-xs="1"';
	public $data_items_xl = 'data-items-xl="1"';
	public $data_items_xxl = 'data-items-xxl="1"';
	public $data_autoplay = 'data-autoplay="false"';
	public $data_autoplaytime = 'data-autoplaytime="5000"';
	public $data_effect = 'data-effect="slide"';
	public $default_media = '';

	public function GetSwiper()
	{ ?>
		<!-- swiper-container -->
		<?php
		$data_args = $this->data_nav . ' ' . $this->data_dots . ' ' . $this->data_margin . ' ' . $this->data_effect . ' ' . $this->data_autoplay . ' ' . $this->data_autoplaytime . ' ' . $this->data_items_lg . ' ' . $this->data_items_md . ' ' . $this->data_items_xs . ' ' . $this->data_items_xl . ' ' . $this->data_items_xxl; ?>
		<?php if (have_rows('gallery')) : ?>
			<div class="<?php echo $this->class_swiper; ?>" <?php echo $data_args; ?>>
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php while (have_rows('gallery')) : the_row(); ?>
							<!-- swiper-items -->
							<?php $video_or_photo = get_sub_field('photo_or_video');
							if ($video_or_photo === 'Photo') :
								$image = get_sub_field('photo');
								$size = $this->image_size;
								if ($image) :
									$imageurl = esc_url($image['sizes'][$size]);
									$imagealt = esc_attr($image['alt']); ?>
									<div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
								<?php endif;
							elseif ($video_or_photo === 'Video') :
								$videourl =  get_sub_field('video');
								$poster_for_video = get_sub_field('poster_for_video');
								if ($poster_for_video) :
									$size = $this->image_size;
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
			<?php else :
			echo $this->default_media;
		endif;
	}
};


//* --- Settings Class ACF---

class Settings
{
	public $root_theme = '';
	public $title = "Grow Your Business with Our Solutions.";
	public $subtitle = "Hello! This is Sandbox.";
	public $paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';

	public $imageurl = '/dist/img/photos/about18.jpg';
	public $video_url = '/dist/media/movie.mp4';
	public $backgroundurl = '/dist/img/photos/bg4.jpg';
	public $typewriter = 'customer satisfaction,business needs,creative ideas';
	public $backgroundcolor = 'dark';
	public $backgroundcolor_light = 0;
	public $textcolor = 'white';
	public $section_id = NULL;
	public $section_classes = NULL;
	public $column_one = NULL;
	public $column_two = NULL;
	public $style_parameters = NULL;

	public function __construct()
	{
		$this->root_theme = get_template_directory_uri();
		$this->features = new Icons;
	}

	public function GetDataACF()
	{

		if (get_sub_field('mirror') == 0) :

			if (get_sub_field('reverse_mobile') == 1) :
				$this->column_one = 'order-1 order-lg-2';
				$this->column_two = '';
			elseif (get_sub_field('reverse_mobile') == 0) :
				$this->column_one = 'order-lg-2';
				$this->column_two = '';
			endif;
			$this->style_parameters = 'top: -2rem; right: -1.9rem;';
		elseif (get_sub_field('mirror') == 1) :
			if (get_sub_field('reverse_mobile') == 1) :
				$this->column_one = 'order-2 order-lg-1';
				$this->column_two = 'order-1 order-lg-2';
			elseif (get_sub_field('reverse_mobile') == 0) :
				$this->column_one = '';
				$this->column_two = '';
			endif;
			$this->style_parameters = 'top: -2rem; left: -1.9rem;';
		endif;




		if (get_sub_field('title')) :
			$this->title = get_sub_field('title');
		endif;

		if (get_sub_field('subtitle')) :
			$this->subtitle = get_sub_field('subtitle');
		endif;

		if (get_sub_field('paragraph')) :
			$this->paragraph = get_sub_field('paragraph');
		endif;

		if (get_sub_field('dark_or_white_light_or_dark') == 0) :
			$this->backgroundcolor = $this->backgroundcolor;
			$this->textcolor = 'light';
		elseif (get_sub_field('dark_or_white_light_or_dark') == 1) :
			if ($this->backgroundcolor_light == 0) :
				$this->backgroundcolor = $this->backgroundcolor_light;
				$this->textcolor = 'dark';
			else :
				$this->backgroundcolor = $this->backgroundcolor;
				$this->textcolor = 'light';
			endif;
		endif;

		/* --- Typewriter --- */
		if (have_rows('typewriter_effect_text')) :
			$typewriterarray = array();
			while (have_rows('typewriter_effect_text')) : the_row();
				array_push($typewriterarray, get_sub_field('text'));
			endwhile;
			$this->typewriter = implode(", ", $typewriterarray);
		endif;

		$background = get_sub_field('background');
		if ($background) :
			$this->backgroundurl = esc_url($background['url']);
		endif;

		$video_url = get_sub_field('video');
		if ($video_url) :
			$this->video_url = $video_url;
		endif;
	}
};


//* --- Images Class ACF---

class Images
{
	public $root_theme = '';
	public $image_1 = '';
	public $image_2 = '';
	public $image_3 = '';
	public $image_4 = '';
	public $image_5 = '';
	public $image_6 = '';
	public $image_7 = '';
	public $image_size = 'large';

	public function GetImage()
	{
		$image = get_sub_field('image_1');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_1 = $imageurl;
		endif;

		$image = get_sub_field('image_2');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_2 = $imageurl;
		endif;

		$image = get_sub_field('image_3');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_3 = $imageurl;
		endif;

		$image = get_sub_field('image_4');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_4 = $imageurl;
		endif;


		$image = get_sub_field('image_5');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_5 = $imageurl;
		endif;

		$image = get_sub_field('image_6');
		if ($image) :
			$size = $this->image_size;
			$imageurl = esc_url($image['sizes'][$size]);
			$imagealt = esc_attr($image['alt']);
			$this->image_6 = $imageurl;
			echo $imageurl;
		endif;
	}
}


//* --- Icons Class ACF---

class Icons
{
	public $icon = NULL;
	public $icon_url = NULL;
	public $icon_type = 'Unicons';
	public $iconform = 'btn-circle';
	public $iconnumber = NULL;
	public $iconsize = '';
	public function GetIcon()
	{
		if (have_rows('type_icons')) :
			while (have_rows('type_icons')) : the_row();
				$this->iconsize = get_sub_field('icon_size');
				$this->icon_type = get_sub_field('select_type_icons');
				$this->iconform =  get_sub_field('icon_form');
				$this->iconnumber = get_sub_field('number');
				$this->icon = get_sub_field('icon');
				if (get_sub_field('icon_lineal_svg')) {
					$this->icon_url = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg';
				}
			endwhile;
		endif;
	}
}


//* --- Color Class ACF---

class Color
{
	public $color_icon = 'primary';
	public $base_color_icon = 'primary';
	public function ColorIcon()
	{
		if (have_rows('type_color')) :
			while (have_rows('type_color')) : the_row();
				$type_color = get_sub_field('select_type_color');
				if ($type_color == 'Solid') :
					$this->color_icon = get_sub_field('theme_btn_solid_color');
				elseif ($type_color == 'Soft') :
					$this->color_icon = 'soft-' . get_sub_field('theme_btn_solid_color');
					$this->base_color_icon = get_sub_field('theme_btn_solid_color');
				elseif ($type_color == 'Gradient') :
					$this->color_icon = get_sub_field('gradient_btn') . ' gradient';
				endif;
			endwhile;
		endif;
	}
}



//* --- Label Class ACF---

class LabelIcons
{
	public $root_theme = '';
	public $title = "25000+";
	public $paragraph = 'Happy Clients';
	public $icon = '<div class="icon btn btn-circle btn-md btn-soft-primary disabled mx-auto me-3"> <i class="uil uil-users-alt"></i></div>';
	public $icon_lg = '<div class="icon btn btn-circle btn-lg btn-soft-primary disabled mx-auto me-3"> <i class="uil uil-users-alt"></i></div>';
	public $color_icon = 'primary';
	public $default_card_body = '';
	public $pattern = NULL;
	public $icon_svg_classes = 'svg-inject icon-svg icon-svg-lg mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление
	public $icon_classes = 'icon btn btn-circle btn-lg disabled mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление

	public $iconpaddingclass = 'mx-auto me-4 mb-lg-3 mb-xl-0';



	public function GetLabel()
	{
		if (have_rows('label_on_banner')) :
			while (have_rows('label_on_banner')) : the_row();

				/*Settings */
				if (get_sub_field('label_title')) {
					$this->title = get_sub_field('label_title');
				}
				if (get_sub_field('label_text')) {
					$this->paragraph = get_sub_field('label_text');
				}
				// Select Color 

				$icon_color = new Color();
				$icon_color->ColorIcon();


				// Get icon
				$icon = new Icons;
				$icon->GetIcon();
				if (have_rows('type_icons')) :
					while (have_rows('type_icons')) : the_row();
						if ($icon->icon_type == 'Unicons') :
							$icon_block = '<div class="icon btn btn-circle btn-md btn-' . $icon_color->color_icon . ' disabled mx-auto me-3">' . get_sub_field('icon') . '</div>';
						else :
							$icon_block = '<img src="' . $this->root_theme . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg" class="svg-inject icon-svg icon-svg-sm text-' . $icon_color->color_icon . ' mx-auto me-3" alt=""/>
								';
						endif; ?>
						<div class="card-body py-4 px-5">
							<div class="d-flex flex-row align-items-center">
								<div>
									<?php echo $icon_block; ?>
								</div>
								<div>
									<h3 class="counter mb-0 text-nowrap"><?php echo $this->title; ?></h3>
									<p class="fs-14 lh-sm mb-0 text-nowrap"><?php echo $this->paragraph; ?></p>
								</div>
							</div>
						</div>
						<!--/.card-body -->
					<?php
					endwhile;
				endif;
			endwhile;
		endif;
	}


	public function GetLabel_4()
	{
		if (have_rows('label_on_banner')) :
			while (have_rows('label_on_banner')) : the_row();
				if (get_sub_field('label_title')) {
					$this->title = get_sub_field('label_title');
				}
				if (get_sub_field('label_text')) {
					$this->paragraph = get_sub_field('label_text');
				}

				// Select Color 
				$icon_color = new Color();
				$icon_color->ColorIcon();

				// Get icon
				$icon = new Icons;
				$icon->GetIcon();

				if (have_rows('type_icons')) :
					while (have_rows('type_icons')) : the_row();
						if ($icon->icon_type == 'Unicons') :
							$icon_block = '<div class="icon btn btn-circle btn-lg btn-' . $icon_color->color_icon . ' disabled mx-auto me-4 mb-lg-3 mb-xl-0">' . get_sub_field('icon') . '</div>';
						else :
							$icon_block = '<img src="' . $this->root_theme . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg" class="svg-inject icon-svg icon-svg-lg text-' . $icon_color->color_icon . ' me-4 mb-lg-3 mb-xl-0"/>';
						endif; ?>

						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<div>
											<?php echo $icon_block; ?>
										</div>
										<div>
											<h3 class="counter mb-1"><?php echo $this->title; ?></h3>
											<p class="mb-0"><?php echo $this->paragraph; ?></p>
										</div>
									</div>
								</div>
								<!--/.card-body -->
							</div>
							<!--/.card -->
						</div>
						<!--/column -->
					<?php
					endwhile;
				endif;
			endwhile;
		endif;
	}
	public function GetLabel_5()
	{
		if (have_rows('label_on_banner')) :
			while (have_rows('label_on_banner')) : the_row();
				if (get_sub_field('label_title')) {
					$this->title = get_sub_field('label_title');
				}
				if (get_sub_field('label_text')) {
					$this->paragraph = get_sub_field('label_text');
				}

				// Select Color 
				$icon_color = new Color();
				$icon_color->ColorIcon();
				$iconcolor = $icon_color->color_icon;

				// Get Icon
				$icon = new Icons;
				$icon->GetIcon();
				$this->iconsize = $icon->iconsize;


				// Get Link
				$link = new Links();
				$link->linkcolor = $this->linkcolor;
				$link_s = $link->Link();


				if (have_rows('type_icons')) :
					while (have_rows('type_icons')) : the_row();


						if ($icon->icon_type == 'Unicons') :
							$icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
						elseif ($icon->icon_type == 'SVG') :
							$icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->base_color_icon . ' ' . $this->iconpaddingclass . '"/>';
						elseif ($icon->icon_type == 'Number') :
							$icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number fs-18">' . $icon->iconnumber . '</span></span>';
						elseif ($icon->icon_type == 'None') :
						endif;

						$pattern = $this->pattern;
						echo wp_sprintf($pattern, $this->title, $this->paragraph, $icon_block, $link_s); //> На дереве сидят 5 обезьян
					endwhile;
				endif;
			endwhile;
		endif;
	}
};


//* --- Buttons Group Class ACF---

class Buttons
{
	public $form_button = NULL;
	public $button_outline = NULL;
	public $button_size = NULL;
	public $button_link = "#";
	public $gradient = NULL;
	public $ghligthbox = NULL;
	public $count = NULL;
	public $class_button_wrapper = "d-flex justify-content-start flex-wrap";
	public $default_button;
	public $data_cues = "slideInDown";
	public $data_group = "page-title-buttons";
	public $data_delay = "900";
	public $animate_swiper = 'false';
	public $animate_swiper_class = NULL;

	//* Function Data Buttons *//
	public function showbuttons()
	{
		/* Count row buttons*/
		$count = 0;
		$repeater = get_sub_field('button_repeater');
		if (is_array($repeater)) {
			$this->count = count($repeater);
		}

		if (have_rows('button_repeater')) :

			/* Animate swiper */
			if ($this->animate_swiper == 'true') :
				$class_button_swiper_animate = 'animate__animated animate__slideInUp animate__delay-3s';
				$this->data_cues = NULL;
				$this->data_group = NULL;
				$this->data_delay = NULL;
			elseif ($this->animate_swiper == 'false') :
				$class_button_swiper_animate = NULL;
			endif;

			if ($this->count > 1) :
				echo "<div class='{$this->class_button_wrapper}' data-cues='{$this->data_cues}' data-group='{$this->data_group}' data-delay='{$this->data_delay}'>";
			endif;

			while (have_rows('button_repeater')) : the_row();
				if (have_rows('button_button')) :
					while (have_rows('button_button')) : the_row();

						/* link */
						$ghligthbox = NULL;
						if (get_sub_field('select_type') == 'Page or Post') :
							$button_link = get_sub_field('button_link');
							if ($button_link) :
								$button_link = get_permalink($button_link);
							endif;
						elseif (get_sub_field('select_type') == 'Taxonomy') :
							$taxonomy = get_sub_field('taxonomy');
							if ($taxonomy) :
								$button_link = esc_url(get_term_link($taxonomy));
							endif;
						elseif (get_sub_field('select_type') == 'URL') :
							$button_link = get_sub_field('url');
						elseif (get_sub_field('select_type') == 'Video URL') :
							$button_link = get_sub_field('video_url');
							$ghligthbox = 'data-glightbox';
						elseif (get_sub_field('select_type') == 'Form') :
							$contact_form = get_sub_field('contact_form');
							if ($contact_form) :
								$cf7_id = $contact_form;
								$button_bs_target = "#form-{$cf7_id}";
							endif;
						else :
							$button_link = $this->button_link;
						endif;

						/* outline */
						if (get_sub_field('outline_btn') == 1) :
							$outline_class = "-outline";
						else :
							$outline_class = NULL;
						endif;

						/* color button class */
						$color_button = get_sub_field('select_type_color');
						if ($color_button == 'Solid') :
							$color_btn = '-' . get_sub_field('theme_btn_solid_color');
						elseif ($color_button == 'Soft') :
							$color_btn = '-' . get_sub_field('theme_btn_soft_color');
						elseif ($color_button == 'Gradient') :
							$color_btn = '-gradient ' . get_sub_field('gradient_btn');
						endif;

						$color_button = 'btn' . $outline_class . $color_btn;

						/* add icon classes */
						if (get_sub_field('icon')) :
							$icon_class = 'btn-icon btn-icon-start';
							$icon_font = get_sub_field('icon');
						else :
							$icon_class = NULL;
							$icon_font = NULL;
						endif;

						/* text button */
						$text_button = get_sub_field('text_on_btn');

						/* button size */
						$button_size = $this->button_size;

						/* button form */
						$form_button = $this->form_button;

						/* button type */
						$button_type = get_sub_field('button_type');
						if ($button_type == 'Expand') :
							$button_type = ' btn-expand';
							$icon_font = '<i class="uil uil-arrow-right"></i>';
							$form_button = 'rounded-pill';
						elseif ($button_type == 'Play') :
							$button_type = ' btn-circle btn-play ripple';
							$icon_font = '<i class="icn-caret-right"></i>';
						elseif ($button_type == 'Default') :
							$button_type = NULL;
						elseif ($button_type == 'None') :
							$button_type = 'none';
						endif;

						/* Show buttons */
						if (get_sub_field('select_type') == 'Form') :
							if (get_sub_field('button_type') == 'Expand') :
								$button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $form_button . ' ' . $button_type . ' me-2 mb-2" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font . '<span>' . $text_button . '</span></button></span>';
							elseif (get_sub_field('button_type') == 'Play') :
								$button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . ' me-2 mb-2" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font .  '</button></span>';
							elseif (get_sub_field('button_type') == 'None') :
								$button = NULL;
							else :
								$button = '<span' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . $button_type . ' me-2 mb-2" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '"><span>' . $icon_font  . $text_button . '</span></button></span>';
							endif;
						else :
							if (get_sub_field('button_type') == 'Expand') :
								$button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $form_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . ' me-2 mb-2" ' . $ghligthbox . '>' . $icon_font . '<span>' . $text_button . '</span></a></span>';
							elseif (get_sub_field('button_type') == 'Play') :
								$button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . ' me-2 mb-2" ' . $ghligthbox . '>' . $icon_font .  '</a></span>';
							elseif (get_sub_field('button_type') == 'None') :
								$button = NULL;
							else :
								$button = '<span ' . $this->animate_swiper_class . '"><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . ' ' . $button_type . ' me-2 mb-2" ' . $ghligthbox . '><span>' . $icon_font  . $text_button . '</span></a></span>';
							endif;
						endif;
						echo $button;
					endwhile;
				endif;
			endwhile;
			if ($this->count > 1) :
				echo '</div>';
			endif;
		else :
			echo $this->default_button;
		endif;
	}
}


// --- Links Class ACF---

class Links
{
	public $linkurl = '#';
	public $linktext = 'Learn More';
	public $linkcolor = 'text-primary';
	public $linkstyle = 'hover';
	public $linktype = 'more';

	public function Link()
	{
		if (have_rows('link_text')) :
			while (have_rows('link_text')) : the_row();
				if (get_sub_field('text_link')) :
					$this->linktext = get_sub_field('text_link');
				endif;
				if (get_sub_field('style_link') == 'hover') :
					$this->linkstyle = 'hover';
				elseif (get_sub_field('style_link') == 'hover-2') :
					$this->linkstyle = 'hover-2';
				elseif (get_sub_field('style_link') == 'hover-3') :
					$this->linkstyle = 'hover-3';
				endif;
				if (get_sub_field('theme_btn_solid_color')) :
					$this->linkcolor = get_sub_field('theme_btn_solid_color');
				endif;
				if (get_sub_field('type_link') == 'link-body') :
					$this->linktype = 'link-body';
				elseif (get_sub_field('type_link') == 'default') :
					$this->linktype = NULL;
				elseif (get_sub_field('type_link') == 'more') :
					$this->linktype = 'more';
				endif;
				$link = get_sub_field('link');
				if ($link) :
					$this->linkurl = esc_url($link);
				endif;
				if (get_sub_field('text_link')) {
					$link_s = '<a href="' . $this->linkurl . '" class="' . $this->linkstyle . ' ' . $this->linktype . ' link-' . $this->linkcolor . '">' . $this->linktext . '</a>';
				} else {
					$link_s = NULL;
				}
			endwhile;
		endif;
		return $link_s;
	}
}

/** List */

class ListUnicon
{
	public $paragraph = 'Aenean quam ornare curabitur blandit consectetur.';
	public $icon = '<i class="uil uil-check"></i>';
	public $color_icon = '-soft-leaf';
	public $default_list = '';
	public $listtrue = NULL;

	public function __construct()
	{
		if (have_rows('list_icon')) :
			$this->listtrue = '1';
		endif;
	}

	public function listunicons()
	{
		if (have_rows('list_icon')) :
			while (have_rows('list_icon')) : the_row();
				$responsive = new ResponsiveCol;
				$responsiveclass = $responsive->responsives();

				/**Color */
				$color = new  Color;
				$color->ColorIcon();

				if (have_rows('list')) :
					?>
					<div class="row gy-3">
						<?php while (have_rows('list')) : the_row();

							get_sub_field('icon') != NULL ? $icon = get_sub_field('icon') : $icon = '<i class="uil uil-check"></i>';
						?>
							<div class="<?php echo $responsiveclass; ?>">
								<ul class="icon-list bullet-bg bullet-<?php echo $color->color_icon; ?> mb-0 ">
									<li class=""><span><?php echo $icon; ?></span><span><?php the_sub_field('paragraph'); ?></span></li>
								</ul>
							</div>
						<?php endwhile; ?>
					</div>
					<!--/row -->
				<?php else :
					echo $this->default_list; ?>
				<?php endif;
			endwhile;
		endif;
	}
}


/* Add Hero Slider */
class HeroSlider
{
	public $root_theme = NULL;
	public $default_slides = NULL;

	public function heroslideritems()
	{
		$i = 0;
		if (have_rows('hero_slider_hero_slider')) :
			while (have_rows('hero_slider_hero_slider')) : the_row();

				/*/* Add buttons */
				$button = new Buttons();
				$button->form_button = "rounded-pill";
				$button->button_size = 'btn-lg';
				$button->animate_swiper = 'true';
				$button->default_button = '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>';

				/*Slide item */
				/* --- */
				$position_text = get_sub_field('position_text');
				$button->class_button_wrapper = 'd-flex justify-content-' . $position_text . ' flex-wrap';
				$title = get_sub_field('title');
				$paragraph = get_sub_field('paragraph');
				$button->animate_swiper_class = 'class="animate__animated animate__slideInUp animate__delay-3s"';

				/* --- */
				$position_text = get_sub_field('position_text');
				if ($position_text == 'start') :
					$position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
					$button_wrapper_class = 'justify-content-start';
				elseif ($position_text == 'end') :
					$position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
					$button_wrapper_class = 'justify-content-start';
				elseif ($position_text == 'center') :
					$position_text = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
					$button_wrapper_class = 'justify-content-center';
				endif;

				$textcolor = 'white';
				/* Dark or white */
				if (get_sub_field('light_or_dark') == 0) :
					$textcolor = 'white';
				elseif (get_sub_field('light_or_dark') == 1) :
					$textcolor = 'dark';
				endif;

				/* --- */
				$photo = get_sub_field('photo');
				if ($photo) :
					$size = 'sandbox_hero_15';
					$image_url = esc_url($photo['sizes'][$size]); ?>
					<?php if ($i == 0) : ?>
						<?php $title_tag = 'h1'; ?>
					<?php else : ?>
						<?php $title_tag = 'h2'; ?>
					<?php endif; ?>
					<div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_url; ?>);">
						<div class="container h-100">
							<div class="row h-100">
								<div class="<?php echo $position_text; ?>">
									<?php echo '<' . $title_tag . ' class="display-1 fs-56 mb-4 text-' . $textcolor . ' animate__animated animate__slideInDown animate__delay-1s">' . $title . '</' . $title_tag . '>'; ?>

									<p class="lead fs-23 lh-sm mb-7 text-<?php echo $textcolor; ?> animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>
									<!--  buttons group -->
									<?php $button->showbuttons(); ?>
									<!--/buttons group -->
								</div>
								<!--/column -->
							</div>
							<!--/.row -->
						</div>
						<!--/.container -->
					</div>
					<!--/.swiper-slide -->
				<?php endif; ?>
				<?php $i++; ?>
			<?php endwhile; ?>

		<?php else : ?>
			<div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg7.jpg);">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
							<h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
							<p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
							<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
						</div>
						<!--/column -->
					</div>
					<!--/.row -->
				</div>
				<!--/.container -->
			</div>
			<!--/.swiper-slide -->

			<div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg8.jpg);">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
							<h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
							<p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
							<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo $this->root_theme; ?>/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
						</div>
						<!--/column -->
					</div>
					<!--/.row -->
				</div>
				<!--/.container -->
			</div>
			<!--/.swiper-slide -->

			<div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg9.jpg);">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
							<h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
							<p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
							<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
						</div>
						<!--/column -->
					</div>
					<!--/.row -->
				</div>
				<!--/.container -->
			</div>
			<!--/.swiper-slide -->
		<?php endif; ?>
		<?php	}

	/**/

	public function heroslideritems1()
	{
		if (have_rows('hero_slider_hero_slider')) :
			while (have_rows('hero_slider_hero_slider')) : the_row();

				/*/* Add buttons */
				$button = new Buttons();
				$button->form_button = "rounded";
				$button->button_size = 'btn-lg';
				$button->animate_swiper = 'true';
				$button->default_button = '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>';

				/*Slide item */
				/* --- */
				$position_text = get_sub_field('position_text');
				$button->class_button_wrapper = 'd-flex justify-content-center justify-content-lg-start start flex-wrap';
				$title = get_sub_field('title');
				$paragraph = get_sub_field('paragraph');
				$button->animate_swiper_class = 'class="animate__animated animate__slideInUp animate__delay-3s"';

				/* --- */
				$position_text = get_sub_field('position_text');
				if ($position_text == 'start') :
					$position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
					$button_wrapper_class = 'justify-content-start';
				elseif ($position_text == 'end') :
					$position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
					$button_wrapper_class = 'justify-content-start';
				elseif ($position_text == 'center') :
					$position_text = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
					$button_wrapper_class = 'justify-content-start';
				endif;

				$textcolor = 'white';
				/* Dark or white */
				if (get_sub_field('light_or_dark') == 0) :
					$textcolor = 'white';
				elseif (get_sub_field('light_or_dark') == 1) :
					$textcolor = 'dark';
				endif;


				/* --- */
				$photo = get_sub_field('photo');
				if ($photo) :
					$size = 'sandbox_hero_14';
					$image_url = esc_url($photo['sizes'][$size]); ?>
					<div class="swiper-slide h-100 " ;">
						<section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
							<div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $image_url; ?>">
							</div>
							<!--/column -->
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
											<h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s"><?php echo $title; ?></h1>
											<p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>
											<!--  buttons group -->
											<?php $button->showbuttons(); ?>
											<!--/buttons group -->
										</div>
										<!--/div -->
									</div>
									<!--/column -->
								</div>
								<!--/.row -->
							</div>
							<!-- /.container -->
						</section>
						<!-- /section -->
						<!--/.container -->
					</div>
					<!--/.swiper-slide -->
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else : ?>

			<div class="swiper-slide h-100 " ;">
				<section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
					<div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $this->root_theme; ?>/dist/img/photos/about16.jpg">
					</div>
					<!--/column -->
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
									<h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s">Just sit & relax while we take care of your business needs.</h1>
									<p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s">We make your spending stress-free for you to have the perfect control.</p>
									<div class="d-flex justify-content-center justify-content-lg-start animate__animated animate__slideInUp animate__delay-3s">
										<span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
										<span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
									</div>
								</div>
								<!--/div -->
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!-- /.container -->
				</section>
				<!-- /section -->
				<!--/.container -->
			</div>

			<div class="swiper-slide h-100 " ;">
				<section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
					<div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $this->root_theme; ?>/dist/img/photos/about16.jpg">
					</div>
					<!--/column -->
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
									<h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s">Just sit & relax while we take care of your business needs.</h1>
									<p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s">We make your spending stress-free for you to have the perfect control.</p>
									<div class="d-flex justify-content-center justify-content-lg-start animate__animated animate__slideInUp animate__delay-3s">
										<span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
										<span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
									</div>
								</div>
								<!--/div -->
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!-- /.container -->
				</section>
				<!-- /section -->
				<!--/.container -->
			</div>
		<?php endif; ?>
		<?php	}
}

//* --- Counters Class ACF---

class Counter
{
	public $counters_default = NULL;
	public $textcolor = 'light';
	public function Counters()
	{
		if (have_rows('counters_block')) :
			while (have_rows('counters_block')) : the_row();
				if (have_rows('counter')) :
					while (have_rows('counter')) : the_row();
						echo '<div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-' . $this->textcolor . '">' . get_sub_field('number_counter') . '</h3>
                              <p class="text-' . $this->textcolor . '">' . get_sub_field('text_counter') . '</p>
                           </div>';
					endwhile;
				endif;
			endwhile;
		else :
			echo $this->counters_default;
		endif;
	}

	public function Counters_1()
	{
		if (have_rows('counters_block')) :
			while (have_rows('counters_block')) : the_row();
				if (have_rows('counter')) :
					while (have_rows('counter')) : the_row();
						echo '<div class="col-md-4 text-center">
                              <h3 class="counter counter-lg text-' . $this->textcolor . '">' . get_sub_field('number_counter') . '</h3>
                              <p class="text-dark">' . get_sub_field('text_counter') . '</p>
                           </div>';
					endwhile;
				endif;
			endwhile;
		else :
			echo $this->counters_default;
		endif;
	}
	public function Counters_2()
	{
		if (have_rows('counters_block')) :
			while (have_rows('counters_block')) : the_row();
				if (have_rows('counter')) :
					while (have_rows('counter')) : the_row();
						/**Color */
						$color = new  Color;
						$color->ColorIcon();
						echo '<div class="col-md-6">
                        <div class="progressbar semi-circle ' . $color->color_icon . '" data-value="' . get_sub_field('number_counter') . '"></div>
                        <h4 class="mb-0">' . get_sub_field('text_counter') . '</h4>
                        </div>
                        <!-- /column -->';
					endwhile;
				endif;
			endwhile;
		else :
			echo $this->counters_default;
		endif;
	}
	public function Counters_3()
	{
		if (have_rows('counters_block')) :
			while (have_rows('counters_block')) : the_row();
				if (have_rows('counter')) :
					while (have_rows('counter')) : the_row();
						/**Color */
						$color = new  Color;
						$color->ColorIcon();
						echo '<div class="col-md-6 col-lg-3">
                        <div class="progressbar semi-circle ' . $color->color_icon . '" data-value="' . get_sub_field('number_counter') . '"></div>
                        <h4 class="mb-0">' . get_sub_field('text_counter') . '</h4>
								<p class="mb-0">' . get_sub_field('paragraph_counter') . '</p>
                        </div>
                        <!-- /column -->';
					endwhile;
				endif;
			endwhile;
		else :
			echo $this->counters_default;
		endif;
	}
}

/* FAQ Class ACF*/

class FAQ
{
	public $root_theme = '';
	public $col_faq = 'col-lg-6';
	public $text_color = 'light';
	public $default_template = NULL;
	public $pattern = '<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<div>
										%3$s
										</div>
										<div>
											<h3 class="counter mb-1">%1$s</h3>
											<p class="mb-0">%2$s</p>
										</div>
									</div>
								</div>
								<!--/.card-body -->
							</div>
							<!--/.card -->
						</div>
						<!--/column -->';
	public $icon_classes = 'icon btn btn-circle btn-lg btn-soft-red disabled mx-auto me-4 mb-lg-3 mb-xl-0';

	//* Function FAQ5 *//
	public function Faq5()
	{
		$array_bool =  is_array(get_sub_field('faq_repeater')) ? 'true' : 'false';
		if ($array_bool == 'true') :
			$count_row = count(get_sub_field('faq_repeater'));
		elseif ($array_bool == 'false') :
			$count_row = NULL;
		endif;
		if (!$count_row == NULL) :
			if (have_rows('faq_repeater')) :
				while (have_rows('faq_repeater')) : the_row();

					/**Color */
					$color = new  Color;
					$color->ColorIcon();

					/**Icons */
					$icons = new Icons;
					$icons->GetIcon();
					$icons_url = $icons->icon_url;
					$icon = $icons->icon;
					$icon_type = $icons->icon_type;

					/* Settings */
					$this->title = get_sub_field('title');
					$this->paragraph = get_sub_field('paragraph');

					/* Content item */ ?>
					<div class="<?php echo $this->col_faq; ?>">
						<div class="d-flex flex-row">
							<div>
								<?php if ($icon_type == 'Unicons') : ?>
									<span class="icon btn btn-sm btn-circle btn-<?php echo $color->color_icon; ?> disabled me-5"><?php echo $icon; ?></span>
								<?php elseif ($icon_type == 'SVG') : ?>
									<img src=" <?php echo $icons_url; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $color->color_icon; ?> me-4" alt="" />
								<?php endif; ?>
							</div>
							<div>
								<h4 class="text-<?php echo $this->text_color; ?>"><?php the_sub_field('title'); ?></h4>
								<p class="text-<?php echo $this->text_color; ?> mb-0"><?php the_sub_field('paragraph'); ?></p>
							</div>
						</div>
					</div>
					<!-- /column -->
			<?php endwhile;
			endif;
		else :
			echo $this->default_template;
		endif;
	}

	public function Facts_3()
	{
		if (have_rows('facts_repeater')) :
			while (have_rows('facts_repeater')) : the_row();
				$label_icons = new LabelIcons;
				$label_icons->pattern = $this->pattern;
				$label_icons->icon_svg_classes = $this->icon_svg_classes;
				$label_icons->icon_classes = $this->icon_classes;

				$label_icons->iconpaddingclass = $this->iconpaddingclass;
				$label_icons->root_theme = get_template_directory_uri();
				echo $label_icons->GetLabel_5();
			endwhile;
		else :
			echo $this->default_template;
		endif;
	}
}

class ResponsiveCol
{
	public $col_sm = 'col-12';
	public $col_md = 'col-md-6';
	public $col_lg = 'col-lg-4';
	public $col_xl = 'col-lg-3';
	public $col_xxl = 'col-lg-3';
	public $class_responsive = NULL;

	public function responsives()
	{
		if (have_rows('responsive_setttings')) :
			while (have_rows('responsive_setttings')) : the_row();
				if (get_sub_field('mobile_sm')) {
					$this->col_sm = get_sub_field('mobile_sm');
				}
				if (get_sub_field('tablet_md')) {
					$this->col_md = get_sub_field('tablet_md');
				}
				if (get_sub_field('desktop_lg')) {
					$this->col_lg = get_sub_field('desktop_lg');
				}
			endwhile;
		endif;
		$this->class_responsive = $this->col_sm . ' ' . $this->col_md . ' ' . $this->col_lg;
		$class_responsive = $this->col_sm . ' ' . $this->col_md . ' ' . $this->col_lg;
		return $class_responsive;
	}
}


class ImageCustomizable
{
	public $root_theme = NULL;
	public $title = '';
	public $description = '';
	public $imagebig = '';
	public $imagesmall = '';
	public $imagelink = '#';
	public $imagebigsize = 'brk_big';
	public $imagethumbsize = 'sandbox_youtube_mq';
	public $imagelightbox = 'false';
	public $imageeffectcursor = 'primary';
	public $titleclass = 'from-top mb-1';
	public $descriptionclass = 'from-bottom';
	public $figureclass = '';
	public $overlayclass = '';
	public $hoverclass = '';
	public $hovergradient = '';
	public $imagealt = '';

	function __construct()
	{
		$this->root_theme = get_template_directory_uri();
	}
	function image()
	{
		if (have_rows('image_customizable')) : ?>
			<?php
			while (have_rows('image_customizable')) : the_row();
				$this->title = get_sub_field('caption_image');
				$this->figureclass = 'title = "' . get_sub_field('caption_image') . '"';
				$this->description = get_sub_field('description_image');
				if (get_sub_field('effect_overlay')) {
					$this->overlayclass = get_sub_field('effect_overlay') . ' ';
				}
				if (get_sub_field('effect_hover')) {
					$this->hoverclass = get_sub_field('effect_hover') . ' ';
				}
				if (get_sub_field('gradient')) {
					$this->hovergradient = get_sub_field('gradient') . ' ';
				}

				if (get_sub_field('cursor_effect')) {
					$this->imageeffectcursor =  get_sub_field('cursor_effect') . ' ';
				}

				if (get_sub_field('link')) {
					$this->imagelink = get_sub_field('link');
				}
				if (get_sub_field('cursor_effect') == 'overlay overlay-1') {
					$this->titleclass = 'from-top mb-0';
					$this->figureclass = '';
				} elseif (get_sub_field('cursor_effect') == 'overlay overlay-2') {
					$this->titleclass = 'from-top mb-1';
					$this->descriptionclass = 'from-bottom';
					$this->figureclass = '';
				} elseif (get_sub_field('cursor_effect') == 'overlay overlay-3') {
					$this->titleclass = 'from-left mb-1';
					$this->descriptionclass = 'from-left mb-0';
					$this->figureclass = '';
				} elseif (get_sub_field('cursor_effect') == 'cursor-dark') {
					$this->figureclass = '';
				} elseif (get_sub_field('cursor_effect') == 'cursor-light') {
					$this->figureclass = '';
				} elseif (get_sub_field('cursor_effect') == 'cursor-primary') {
					$this->figureclass = '';
				}

				if (get_sub_field('image')) {
					$image = get_sub_field('image');
					$this->imagealt = $image['alt'];
					$this->imagesmall = $image['sizes'][$this->imagethumbsize];
					$this->imagebig = $image['sizes'][$this->imagebigsize];
				}
				$classcursoreffect = '';
				if (get_sub_field('cursor_effect')) {
					$classcursoreffect = get_sub_field('cursor_effect') . ' ';
					$this->overlayclass = '';
				}
				if (get_sub_field('cursor_effect') == 'cursor-light' || get_sub_field('cursor_effect') == 'cursor-dark' || get_sub_field('cursor_effect') == 'cursor-primary') {
					$this->title = '';
				}
				$glightbox = 'data-glightbox data-gallery="g1"';
				if (get_sub_field('link_type') == 'image') {
					$this->imagelink = $this->imagebig;
				} elseif (get_sub_field('link_type') == 'video') {
					$this->imagelink = get_sub_field('link_video');
				} elseif (get_sub_field('link_type') == 'link') {
					$this->imagelink = get_sub_field('link');
					$glightbox = '';
				} elseif (get_sub_field('link_type') == 'youtube') {
					$youtubeid = getYoutubeIdFromUrl(get_sub_field('link_video'));
					$this->imagesmall = 'https://img.youtube.com/vi/' . $youtubeid . '/hqdefault.jpg';
					$this->imagelink = get_sub_field('link_video');
				} ?>
				<?php
				if (get_sub_field('cursor_effect') !== 'itooltip itooltip-light' || get_sub_field('cursor_effect') !== 'itooltip itooltip-dark' || get_sub_field('cursor_effect') !== 'itooltip itooltip-primary') {
				} ?>
				<figure class="<?php echo $classcursoreffect; ?><?php echo $this->overlayclass; ?><?php echo $this->hovergradient; ?><?php echo $this->hoverclass; ?>rounded" <?php echo $this->figureclass; ?>>
					<?php if (get_sub_field('link_type') != 'none') { ?>
						<a href="<?php echo $this->imagelink; ?>" <?php echo $glightbox; ?>>
						<?php }

					if (get_sub_field('link_type') == 'video' || get_sub_field('link_type') == 'youtube') { ?>

							<div class="wrapper-video position-absolute" style="z-index: 5; top: 50%; left: 50%; filter: drop-shadow(3px 2px 5px #00000078);">
								<button type="button" style="display: block;" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
										<path d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z" fill="#555" />
									</svg><span class="plyr__sr-only">Play</span></button>
							</div>
						<?php }  ?>

						<img src="<?php echo $this->imagesmall; ?>" srcset="<?php echo $this->imagesmall; ?> 2x" alt="<?php echo $this->imagealt; ?>" />
						<?php if (get_sub_field('cursor_effect') !== 'itooltip itooltip-light' || get_sub_field('cursor_effect') !== 'itooltip itooltip-dark' || get_sub_field('cursor_effect') !== 'itooltip itooltip-primary') { ?>
							<?php if (get_sub_field('link_type') != 'none') { ?>
						</a>
					<?php } ?>
					<?php if (
								get_sub_field('cursor_effect') == 'overlay overlay-1' || get_sub_field('cursor_effect') == 'overlay overlay-2' ||
								get_sub_field('cursor_effect') == 'overlay overlay-3'
							) { ?>
						<figcaption>
							<h5 class="<?php echo $this->titleclass ?>"><?php echo $this->title; ?></h5>
							<?php if (get_sub_field('cursor_effect') == 'overlay overlay-2' || get_sub_field('cursor_effect') == 'overlay overlay-3') { ?>
								<p class="<?php echo $this->descriptionclass; ?>"><?php echo $this->description; ?></p>
							<?php } ?>
						</figcaption>
					<?php	} ?>
				<?php	} ?>
				<!--/column -->
			<?php endwhile;
		endif;
	}
}

//* --- Features Class ACF---

class Features
{
	public $root_theme = '';
	public $title = '24/7 Support';
	public $paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
	public $link_url = "#";
	public $link_text = "Learn more";
	public $default_features = '';
	public $pattern = NULL;
	public $iconsize = NULL;
	public $iconpaddingclass = NULL;
	public $iconform = NULL;
	public $linkcolor = NULL;
	public $iconcolor = NULL;

	function __construct()
	{
		$this->root_theme = get_template_directory_uri();
	}
	//* Function Feutures *//
	public function Feutures()
	{
		$i = 0;
		if (have_rows('features_block')) :
			while (have_rows('features_block')) : the_row();
				if (have_rows('features_item')) :
					while (have_rows('features_item')) : the_row();

						// Select Color 
						$icon_color = new Color();
						$icon_color->ColorIcon();
						$iconcolor = $icon_color->color_icon;

						// Select Icon
						$icon = new Icons();
						$icon->GetIcon();
						$this->iconsize = $icon->iconsize;

						if ($icon->icon_type == 'Unicons') :
							$icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
						elseif ($icon->icon_type == 'SVG') :
							$icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->base_color_icon . ' ' . $this->iconpaddingclass . '"/>';
						elseif ($icon->icon_type == 'Number') :
							$icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number fs-18">' . $icon->iconnumber . '</span></span>';
						elseif ($icon->icon_type == 'None') :
						endif;

						if (get_sub_field('title')) {
							$this->title = get_sub_field('title');
						}
						if (get_sub_field('paragraph')) {
							$this->paragraph = get_sub_field('paragraph');
						}

						$link = new Links();
						$link->linkcolor = $this->linkcolor;
						$link_s = $link->Link();
						echo wp_sprintf($this->pattern, $this->title, $this->paragraph, $icon_block, $link_s, $iconcolor); //> На дереве сидят 5 обезьян
						$i++;
					endwhile;

				endif;
			endwhile;
		else :
			echo $this->default_features;
			?>
		<?php endif; ?>
		<?php
	}

	//* Function Feutures *//
	public function Feutures_01()
	{
		$i = 0;
		if (have_rows('features_block')) :
			while (have_rows('features_block')) : the_row();
				if (have_rows('features_item')) :
					while (have_rows('features_item')) : the_row();

						// Select Color 
						$icon_color = new Color();
						$icon_color->ColorIcon();
						$iconcolor = $icon_color->color_icon;

						// Select Icon
						$icon = new Icons();
						$icon->GetIcon();

						if ($icon->icon_type == 'Unicons') :
							$icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
						elseif ($icon->icon_type == 'SVG') :
							$icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"/>';
						elseif ($icon->icon_type == 'Number') :
							$icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number">' . $icon->iconnumber . '</span></span>';
						elseif ($icon->icon_type == 'None') :

						endif;

						if (get_sub_field('title')) {
							$this->title = get_sub_field('title');
						}
						if (get_sub_field('paragraph')) {
							$this->paragraph = get_sub_field('paragraph');
						}

						$link = new Links();
						$link->linkcolor = $this->linkcolor;
						$link_s = $link->Link();


						if ($i == 0) {
							$this->pattern = '<div class="col-md-5 offset-md-1 align-self-end"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
						} elseif ($i == 1) {
							$this->pattern = '<div class="col-md-6 align-self-end"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
						} elseif ($i == 2) {
							$this->pattern = '<div class="col-md-5"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
						} elseif ($i == 3) {
							$this->pattern = '<div class="col-md-6 align-self-start"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
						}

						echo wp_sprintf($this->pattern, $this->title, $this->paragraph, $icon_block, $link_s, $iconcolor); //> На дереве сидят 5 обезьян
						$i++;
					endwhile;

				endif;
			endwhile;
		else :
			echo $this->default_features;
		?>
		<?php endif; ?>
<?php
	}
}
