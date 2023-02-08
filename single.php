<?php get_header(); ?>
<?php
if (is_singular('services')) :
	get_template_part('templates/content/single', 'services');
elseif (is_singular('faq')) :
	get_template_part('templates/content/single', 'faq');
elseif (is_singular('post')) :
	get_template_part('templates/content/single', 'blog');
else :
	while (have_posts()) :
		the_post();
		get_template_part('templates/content/single', ''); ?>
		<section class="wrapper bg-light">
			<div class="container py-10">
				<div class="row gx-md-6 gy-3 gy-md-0">
					<?php codeweber_posts_nav(); ?>
					<aside class="col-md-4 sidebar text-center text-md-end">
						<?php codeweber_share_page(); ?>
					</aside>
					<!-- /column .sidebar -->
				</div>
				<!--/.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /section -->

<?php endwhile;
endif;
get_footer();
