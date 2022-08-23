<?php
global $post;
?>
<div class="container py-14 py-md-16" id="post-<?php the_ID(); ?>">
	<div class=" row gx-lg-8 gx-xl-12">
		<div class="col-12">
			<?php
			the_content(); ?>
		</div>
	</div>
</div> <!-- #post-<?php the_ID(); ?> -->