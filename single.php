<?php get_header(); ?>
<?php
if (is_singular('services')) :
	// get_template_part('templates/sections/common', 'pageheader');
	get_template_part('templates/content/single', 'services');

elseif (is_singular('product')) :
	while (have_posts()) :
		the_post();
?>
		<?php
		if (!is_front_page() || !is_product()) :
			if (get_theme_mod('codeweber_page_header') == 'type_1') :
				get_template_part('templates/sections/common', 'breadcrumb');
			endif;
		endif;
		?>
		<div class="container py-14 py-md-16">
			<?php get_template_part('templates/content/single', ''); ?>

			<?php if (!is_product()) : ?>
				<nav class="nav">
					<?php
					previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
					next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
					?>
				</nav>
			<?php endif; ?>
		</div>
	<?php endwhile;

elseif (is_singular('post')) :
	if (!is_front_page()) :
		if (get_theme_mod('codeweber_page_header') == 'type_1') :
			get_template_part('templates/sections/common', 'breadcrumb');
		endif;
	endif;

	if (!is_front_page()) :
		if (get_theme_mod('codeweber_page_header') == 'type_2') :
			get_template_part('templates/sections/common', 'pageheader');
		elseif (get_theme_mod('codeweber_page_header') == 'type_3') :
			get_template_part('templates/sections/common', 'pageheader_1');
		endif;
	endif;

	get_template_part('templates/content/single', 'blog');

else :

	while (have_posts()) :
		the_post();
		if (!is_front_page()) :
			if (get_theme_mod('codeweber_page_header') == 'type_2') :
				get_template_part('templates/sections/common', 'pageheader');
			elseif (get_theme_mod('codeweber_page_header') == 'type_3') :
				get_template_part('templates/sections/common', 'pageheader_1');
			endif;
		endif;

		get_template_part('templates/content/single', ''); ?>


		<nav class="nav">
			<?php
			previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
			next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
			?>
		</nav>


<?php endwhile;
endif;
get_footer();
