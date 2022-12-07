<?php get_header(); ?>

<?php get_template_part('templates/sections/common', 'pageheader'); ?>

<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="row gx-lg-8 gx-xl-12">

			<?php
			if (is_post_type_archive('services')  || is_tax('service_category')  || is_tax('types_of_services')) :
				if (is_active_sidebar('sidebar-services')) {
					$class_service_content = 'col-lg-8';
				} else {
					$class_service_content = 'col';
				} ?>
				<div class="<?php echo $class_service_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'services');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
			<?php get_sidebar();

			elseif (have_posts()) : ?>
				<div class="col-lg-8">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', '');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
			<?php get_sidebar();
			else : ?>
				<div class="col-lg-8">
					<div class="blog classic-view">
						<?php get_template_part('templates/content/loop', 'none'); ?>
					</div>
				</div>
			<?php get_sidebar();
			endif;
			?>
		</div>
	</div>
</section>
<?php
get_footer();
