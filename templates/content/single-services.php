<?php
global $post;
?>
<div class="container py-14 py-md-16">
	<div class="row gx-lg-8 gx-xl-12">
		<?php
		if (is_active_sidebar('sidebar-services')) {
			$class_service_content = 'col-lg-8';
		} else {
			$class_service_content = 'col';
		} ?>
		<div class="<?php echo $class_service_content; ?>">
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
		<?php get_sidebar(); ?>
		<!-- /column .sidebar -->
	</div>
</div>