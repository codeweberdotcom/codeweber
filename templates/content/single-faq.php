<?php
global $post;
?>
<div class="container py-14 py-md-16">
	<div class="row gx-lg-8 gx-xl-12">
		<div class="col-lg-8">
			<div class="blog single">
				<div class="card">
					<figure class="card-img-top">
						<?php the_post_thumbnail('sandbox_hero_5', array('class' => 'img-fluid')); ?>
					</figure>
					<div class="card-body">
						<div class="classic-view">
							<article class="post">
								<div class="post-content mb-5">
									<div class="post-header">
										<h2 class="post-title mt-1 mb-0"><?php esc_html_e('Answer to the question:', 'codeweber') ?></h2>
									</div>
									<?php if (get_field('paragraph')) { ?>
										<p>
											<?php the_field('paragraph'); ?>
										</p>
									<?php	} ?>
								</div>
								<!-- /.post-content -->
								<div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
									<div>
										<ul class="list-unstyled tag-list mb-0">
											<?php $tags_post = get_the_terms($post, 'faq_tag'); ?>
											<?php if (is_array($tags_post)) {
												foreach ($tags_post as $tag) {
													$tag_link = get_tag_link($tag->term_id); ?>
													<li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
											<?php
												}
											}
											?>
										</ul>
									</div>
									<div class="mb-0 mb-md-2">
										<?php // https://github.com/ellisonleao/sharer.js  
										?>
										<div class="dropdown share-dropdown btn-group">
											<button class="btn btn-sm btn-red <?php echo GetThemeButton(); ?> btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="uil uil-share-alt"></i> Поделиться </button>
											<div class="dropdown-menu">
												<button class="dropdown-item" data-sharer="twitter" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-twitter"></i>Twitter</button>
												<button class="dropdown-item" data-sharer="vk" data-title="<?php the_title(); ?>" data-hashtag="hashtag" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-vk"></i>Вконтакте</button>
												<button class="dropdown-item button" data-sharer="facebook" data-hashtag="" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-facebook"></i>Facebook</button>
												<button class="dropdown-item button" data-sharer="email" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>" data-subject="Hey! Check out that URL" data-to="inf0@codeweber.com"><i class="uil uil-envelope-share"></i>Email</button>
												<button class="dropdown-item button" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-whatsapp"></i>Whatsapp</button>
												<button class="dropdown-item button" data-sharer="telegram" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-telegram"></i>Telegram</button>
												<button class="dropdown-item button" data-sharer="skype" data-url="<?php echo get_permalink(); ?>" data-title="<?php the_title(); ?>"><i class="uil uil-skype"></i>Skype</button>
											</div>
											<!--/.dropdown-menu -->
										</div>
										<!--/.share-dropdown -->
									</div>
								</div>
								<!-- /.post-footer -->
							</article>
							<!-- /.post -->
						</div>
						<!-- /.classic-view -->
						<?php
						if (comments_open() || get_comments_number()) { ?>
							<hr />
						<?php
							comments_template();
						}
						?>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.blog -->
		</div>
		<!-- /column -->


		<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
			<?php do_action('faq_sidebar_start'); ?>
			<?php $args = [
				'taxonomy'      => ['faq_categories'], // название таксономии с WP 4.5
				'orderby'       => 'name',
				'order'         => 'ASC',
				'hide_empty'    => true,
				'update_term_meta_cache' => true, // подгружать метаданные в кэш
			];
			$categories = get_terms($args); ?>
			<div class="widget">
				<h4 class="widget-title mb-3"><?php esc_html_e('FAQ categories', 'codeweber'); ?></h4>
				<ul class="unordered-list bullet-primary text-reset">
					<?php foreach ($categories as $category) {
						$tag_link = get_tag_link($category->term_id); ?>
						<li><a href="<?php echo $tag_link; ?>" title='<?php echo $category->name; ?>' class="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<!-- /.widget -->

			<?php $args = [
				'taxonomy'      => ['faq_tag'], // название таксономии с WP 4.5
				'orderby'       => 'name',
				'order'         => 'ASC',
				'hide_empty'    => true,
				'update_term_meta_cache' => true, // подгружать метаданные в кэш
			];
			$faq_tags = get_terms($args); ?>
			<div class="widget">
				<h4 class="widget-title mb-3"><?php esc_html_e('FAQ tags', 'codeweber'); ?></h4>
				<ul class="list-unstyled tag-list mb-0">
					<?php foreach ($faq_tags as $faq_tag) {
						$tag_link = get_tag_link($faq_tag->term_id); ?>
						<li><a href="<?php echo $tag_link; ?>" title='<?php echo $faq_tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $faq_tag->slug; ?>"><?php echo $faq_tag->name; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php do_action('widget_consultant'); ?>
		</aside>
		<!-- /column .sidebar -->
	</div>
</div>