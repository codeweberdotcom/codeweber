<?php
$user_id = get_the_author_meta('ID');
global $post;

if (get_the_post_thumbnail_url($post->ID, 'full', null) && is_singular('services')) { ?>
	<section class="wrapper image-wrapper bg-image bg-cover bg-overlay bg-overlay-500 overflow-hidden" data-image-src="<?php echo get_the_post_thumbnail_url($post->ID, 'full', null); ?>">
	<?php } else { ?>
		<section class="wrapper bg-gray">
		<?php }

	if (get_the_post_thumbnail_url($post->ID, 'full', null) && is_singular('services')) { ?>
			<div class="container pt-10 pb-12 pt-md-14 pb-md-14 text-center">
				<div class="row">
					<div class="col-md-7 col-lg-6 col-xl-6 mx-auto">
						<h1 class="display-1 mb-3 text-white"><?php codeweber_page_title(); ?></h1>
					<?php } else { ?>
						<div class="container pt-10 pb-12 pt-md-14 pb-md-14 text-center">
							<div class="row">
								<div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
									<h1 class="display-1 mb-3"><?php codeweber_page_title(); ?></h1>
								<?php }
							codeweber_meta_blog(); // Blog Meta Data
							brk_breadcrumbs(); // Breadcrumbs
								?>
								</div>
								<!-- /column -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.container -->
		</section>