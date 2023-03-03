<?php get_header(); ?>
<?php if (is_singular('services')) {
	while (have_posts()) :
		the_post();
		get_template_part('templates/content/single', get_post_type());
		get_sidebar();
	endwhile;
} else {
?>
	<div class="container py-14 py-md-16">
		<div class="row gx-lg-8 gx-xl-12">
			<?php
			while (have_posts()) :
				the_post();
				get_template_part('templates/content/single', get_post_type());
				get_sidebar();
			endwhile;
			?>
		</div>
	</div>
<?php
} ?>

<?php get_footer(); ?>