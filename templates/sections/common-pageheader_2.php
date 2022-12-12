<?php
$user_id = get_the_author_meta('ID');
global $post; ?>


<section class="wrapper">
	<?php
	?>
	<div class="container text-left pt-9 pb-0">
		<div class="row">
			<div class="col-md-7 col-lg-6 col-xl-6">
				<h1 class="display-3 mb-3"><?php codeweber_page_title(); ?></h1>
				<?php
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
				?>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>