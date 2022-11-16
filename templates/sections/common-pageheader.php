<?php
$user_id = get_the_author_meta('ID');
global $post;

if (get_the_post_thumbnail_url($post->ID, 'full', null) && is_singular('services')) { ?>
	<section class="wrapper image-wrapper bg-image bg-cover bg-overlay bg-overlay-500 overflow-hidden" data-image-src="<?php echo get_the_post_thumbnail_url($post->ID, 'full', null); ?>">
	<?php } else { ?>
		<section class="wrapper bg-soft-primary">
		<?php }

	if (get_the_post_thumbnail_url($post->ID, 'full', null) && is_singular('services')) { ?>
			<div class="container pt-10 pb-12 pt-md-14 pb-md-14 text-left">
				<div class="row">
					<div class="col-md-10 col-xl-8 mx-0">
						<h1 class="display-1 mb-3 text-white"><?php codeweber_page_title(); ?></h1>
					<?php } else { ?>
						<div class="container pt-10 pb-12 pt-md-14 pb-md-14 text-left">
							<div class="row">
								<div class="col-md-12 mx-0">
									<h1 class="display-1 mb-3"><?php codeweber_page_title(); ?></h1>
								<?php }
							if (is_single() && !is_singular('services')) : ?>
									<p class="lead px-lg-5 px-xxl-8">
									<ul class="post-meta">
										<li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d M Y'); ?></span></li>
										<li class="post-author"><i class="uil uil-user"></i><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="text-reset"><span> <?php echo __("By", "codeweber"); ?> <?php echo get_the_author(); ?></span></a></li>
										<li class="post-comments"><i class="uil uil-comment"></i><a href="#comments" class="text-reset scroll"><?php echo get_comments_number(); ?><span> <?php echo __("Comments", "codeweber"); ?></span></a></li>
										<li class="post-likes">
											<a href="<?php echo add_query_arg('post_action', 'like'); ?>" class="text-reset">
												<i class="uil uil-heart-alt"></i>
												<?php echo ip_get_like_count('likes') ?>
												<span><?php esc_html_e('Likes', 'codeweber'); ?></span></a>
										</li>
									</ul>
									</p>
								<?php endif;
							brk_breadcrumbs();
								?>
								</div>
								<!-- /column -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.container -->
		</section>