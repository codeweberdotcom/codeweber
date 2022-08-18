<?php get_header(); ?>

<?php get_template_part('templates/sections/common', 'pageheader'); ?>

<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="row gx-lg-8 gx-xl-12">
			<div class="col-lg-8 order-lg-2">
				<div class="blog classic-view">
					<?php
					if (have_posts()) :
						while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', '');
						endwhile;
						the_posts_pagination(
							array(
								'mid_size'  => 2,
								'prev_text' => esc_html__('&laquo; Previous', 'bricks'),
								'next_text' => esc_html__('Next &raquo;', 'bricks'),
							)
						);
					else :
						get_template_part('templates/content/loop', 'none');
					endif;
					?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
