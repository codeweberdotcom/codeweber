<?php get_header(); ?>
<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="row gx-lg-8 gx-xl-12">
			<?php
			/** Faq Content */ ?>
			<?php if (is_post_type_archive('faq')  || is_tax('faq_categories') || is_tax('faq_tag')) :
				if (is_active_sidebar('sidebar-faq') || has_action('sidebar_faq_start') || has_action('sidebar_faq_end')) {
					$class_faq_content = 'col-lg-8';
				} else {
					$class_faq_content = 'col';
				} ?>
				<div class="<?php echo $class_faq_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'faq');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php get_sidebar(); ?>
				<?php /** Services Content */ ?>
			<?php elseif (is_post_type_archive('services')  || is_tax('service_category')  || is_tax('types_of_services')) :
				if (is_active_sidebar('sidebar-testimonials')) {
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
				<?php get_sidebar(); ?>
			<?php elseif (is_post_type_archive('testimonials')) :
				if (is_active_sidebar('sidebar-testimonials')) {
					$class_service_content = 'col-lg-8';
				} else {
					$class_service_content = 'col';
				} ?>
				<div class="<?php echo $class_service_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'testimonials');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php get_sidebar(); ?>

			<?php elseif (have_posts()) :
				if (is_active_sidebar('sidebar-main') || has_action('sidebar_main_start') || has_action('sidebar_main_end')) {
					$class_content = 'col-lg-8';
				} else {
					$class_content = 'col';
				} ?>
				<div class="<?php echo $class_content; ?>">
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
			else :
				if (is_active_sidebar('sidebar-main') || has_action('sidebar_main_start') || has_action('sidebar_main_end')) {
					$class_content = 'col-lg-8';
				} else {
					$class_content = 'col';
				} ?>
				<div class="<?php echo $class_content; ?>">
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
