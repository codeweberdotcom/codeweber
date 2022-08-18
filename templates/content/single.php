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
									<?php the_content(); ?>
								</div>
								<!-- /.post-content -->
								<div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
									<div>
										<?php $tags = get_tags([
											'number'       => 4,
											'order'        => 'ASC',
											'hide_empty'   => true,
										]);
										?>
										<ul class="list-unstyled tag-list mb-0">
											<?php foreach ($tags as $tag) {
												$tag_link = get_tag_link($tag->term_id); ?>
												<li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
											<?php } ?>
										</ul>
									</div>
									<div class="mb-0 mb-md-2">
										<?php // https://github.com/ellisonleao/sharer.js  
										?>
										<div class="dropdown share-dropdown btn-group">
											<button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
								<hr>
								<div class="author-info d-md-flex align-items-center mb-3">
									<div class="d-flex align-items-center">

										<?php
										$user_id = get_current_user_id();;
										$user_acf_prefix = 'user_';
										$user_id_prefixed = $user_acf_prefix . $user_id;
										?>
										<?php if (get_field('аватар', $user_id_prefixed)) : ?>
											<figure class="user-avatar"><img class="rounded-circle" alt="" src="<?php the_field('avatar', $user_id_prefixed); ?>"></figure>
										<?php endif ?>
										<div>
											<h6><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="link-dark"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a></h6>
											<span class="post-meta fs-15"><?php the_field('job_title', $user_id_prefixed); ?></span>
										</div>
									</div>
									<div class="mt-3 mt-md-0 ms-auto">
										<a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> <?php esc_html_e('All Posts', 'codeweber'); ?></a>
									</div>
								</div>
								<p><?php the_author_meta('description'); ?></p>
								<nav class="nav social">
									<?php get_template_part('templates/components/socialicons', ''); ?>
								</nav>
							</article>
							<!-- /.post -->
						</div>
						<!-- /.classic-view -->


						<?php
						if (comments_open() || get_comments_number()) {
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


		<?php get_sidebar(); ?>
		<!-- /column .sidebar -->
	</div>
</div>