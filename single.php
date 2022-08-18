<?php get_header(); ?>



<?php
while (have_posts()) :
	the_post();

	get_template_part('templates/sections/common', 'pageheader'); ?>

	<?php get_template_part('templates/content/single', ''); ?>

	<nav class="nav">
		<?php
		previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
		next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
		?>
	</nav>

<?php endwhile ?>

<?php get_footer();
