<?php
global $post;
?>
<div class="container py-14 py-md-16" id="post-<?php the_ID(); ?>">
	<div class=" row gx-lg-8 gx-xl-12">
		<div class="col">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before'        => '<nav class="nav"><span class="nav-link">' . esc_html__('Part:', 'codeweber') . '</span>',
					'after'         => '</nav>',
					'link_before'   => '<span class="nav-link">',
					'link_after'    => '</span>',
				)
			);
			?>
		</div>
		<?php get_sidebar(); ?>
		<!-- /column .sidebar -->
	</div>
</div> <!-- #post-<?php the_ID(); ?> -->