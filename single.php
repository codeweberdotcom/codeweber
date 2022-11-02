<?php get_header(); ?>
<?php
if (is_singular('services')) :
	// get_template_part('templates/sections/common', 'pageheader');
	get_template_part('templates/content/single', 'services');

elseif (is_singular('product')) :
	while (have_posts()) :
		the_post();
?>
		<div class="container py-14 py-md-16">
			<?php get_template_part('templates/content/single', ''); ?>
			<nav class="nav">
				<?php
				previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
				next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
				?>
			</nav>
		</div>
	<?php endwhile;

elseif (is_singular('post')) :
	get_template_part('templates/sections/common', 'pageheader');
	get_template_part('templates/content/single', 'blog');

else :
	while (have_posts()) :
		the_post();
		get_template_part('templates/sections/common', 'pageheader');
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
