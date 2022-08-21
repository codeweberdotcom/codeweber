<?php
$user_id = get_the_author_meta('ID');
?>



<section class="wrapper bg-soft-primary">
	<div class="container pt-10 pb-12 pt-md-14 pb-md-14 text-center">
		<div class="row">
			<div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
				<h1 class="display-1 mb-3"><?php brk_page_title(); ?></h1>
				<p class="lead px-lg-5 px-xxl-8"></p>
				<?php if (is_single()) : ?>
					<ul class="post-meta">
						<li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d M Y'); ?></span></li>
						<li class="post-author"><i class="uil uil-user"></i><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="text-reset"><span> <?php echo __("By", "codeweber"); ?> <?php echo get_the_author(); ?></span></a></li>
						<li class="post-comments"><i class="uil uil-comment"></i><a href="#comments" class="text-reset scroll"><?php echo get_comments_number(); ?><span> <?php echo __("Comments", "codeweber"); ?></span></a></li>
						<li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> Likes</span></a></li>
					</ul>
				<?php endif; ?>

				<?php brk_breadcrumbs(); ?>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>