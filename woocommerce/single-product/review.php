<?php

/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
?>
<li class="comment" id="li-comment-<?php comment_ID(); ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment-header d-md-flex align-items-center comment_container">
		<figure class="user-avatar">
			<?php
			/**
			 * The woocommerce_review_before hook
			 *
			 * @hooked woocommerce_review_display_gravatar - 10
			 */
			do_action('woocommerce_review_before', $comment);
			?></figure>
		<div>
			<h6 class="comment-author"><a href="#" class="link-dark"><?php comment_author(); ?></a></h6>
			<ul class="post-meta">
				<li><i class="uil uil-calendar-alt"></i><?php do_action('woocommerce_review_meta', $comment); ?>
				</li>
			</ul>
			<!-- /.post-meta -->
		</div>
		<!-- /div -->
	</div>
	<!-- /.comment-header -->


	<div class="d-flex flex-row align-items-center mt-5 mb-2">
		<?php /**
		 * The woocommerce_review_before_comment_meta hook.
		 *
		 * @hooked woocommerce_review_display_rating - 10
		 */
		do_action('woocommerce_review_before_comment_meta', $comment); ?>
	</div>



	<div class="comment-text">

		<?php


		/**
		 * The woocommerce_review_meta hook.
		 *
		 * @hooked woocommerce_review_display_meta - 10
		 */


		do_action('woocommerce_review_before_comment_text', $comment);

		/**
		 * The woocommerce_review_comment_text hook
		 *
		 * @hooked woocommerce_review_display_comment_text - 10
		 */
		do_action('woocommerce_review_comment_text', $comment);

		do_action('woocommerce_review_after_comment_text', $comment);
		?>

	</div>

	<div class="d-flex flex-row align-items-center pb-3">
		<p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
		<div>
			<a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
			<a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
		</div>
	</div>

</li>