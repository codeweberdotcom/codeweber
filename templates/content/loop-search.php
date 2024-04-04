<?php

/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Codeweber
 * @since Codeweber 1.0
 */

/**get_header();*/
?>
<li class="product project item col-md-6 col-lg-12 search-result">
	<div class="card p-5">
		<div class="row">
			<div class="col-md-4">
				<figure class="rounded-0 mb-6">
					<img width="300" height="300" src="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" fetchpriority="high">
				</figure>
			</div>
			<div class="col-md-8 ps-md-10">

				<h2 class="post-title h1 link-dark woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="link-dark"><?php the_title(); ?></a></h2>
				<p class="mb-3 lead"></p>
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
</li>