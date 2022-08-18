<?php if (post_password_required()) {
	return;
} ?>



<?php if (have_comments()) { ?>

	<hr>
	<div id="comments">

		<h3 class="mb-6">
			<?php
			comments_number(
				esc_html__('No comments yet.', 'codeweber'),
				esc_html__('One comment.', 'codeweber'),
				esc_html__('% Comments.', 'codeweber')
			);
			?>
		</h3>


		<ol id="singlecomments" class="commentlist">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 48,
					'reply_text'        => 'Reply',
				)
			);
			?>
		</ol>



		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>
			<nav class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text section-heading">
					<?php esc_html_e('Comment navigation', 'codeweber'); ?>
				</h2>
				<div class="nav-previous">
					<?php previous_comments_link(esc_html__('&larr; Older Comments', 'codeweber')); ?>
				</div>
				<div class="nav-next">
					<?php next_comments_link(esc_html__('Newer Comments &rarr;', 'codeweber')); ?>
				</div>
			</nav>
		<?php
		} ?>









		<hr>
		<h3 class="mb-3"><?php comment_form_title('Would you like to share your thoughts?', 'Leave a Comment to %s'); ?></h3>
		<p class="mb-7"><?php esc_html_e('Your email address will not be published. Required fields are marked *.', 'codeweber'); ?></p>

		<div class="cancel-comment-reply">
			<?php cancel_comment_reply_link(); ?>
		</div>

		<?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
			<p><?php esc_html_e('You must be ', 'codeweber'); ?><a href="<?php echo wp_login_url(get_permalink()); ?>"><?php esc_html_e('logged in', 'codeweber'); ?></a> <?php esc_html_e(' to post a comment.', 'codeweber'); ?></p>
		<?php else : ?>
			<form role="form" class="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if (is_user_logged_in()) : ?>
					<p><?php esc_html_e('Logged in as ', 'codeweber'); ?><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php esc_html_e('Log out', 'codeweber'); ?></a></p>
				<?php else : ?>
					<div class="form-floating mb-4">
						<input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" placeholder="Name" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="author"><?php esc_html_e('Name *', 'codeweber'); ?></label>
					</div> <!-- .form-group -->
					<div class="form-floating mb-4">
						<input type="text" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" placeholder="Email" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="email"><?php esc_html_e('Email *', 'codeweber'); ?></label>
					</div> <!-- .form-group -->
				<?php endif; ?>
				<div class="form-floating mb-4">
					<textarea class="form-control input-lg" name="comment" id="comment" tabindex="4" placeholder="Type your comment here..." style="height: 150px"></textarea>
					<label for="comment"><?php esc_html_e('Comment', 'codeweber'); ?></label>
				</div> <!-- .form-group -->

				<div class="form-floating mb-4">
					<button type="submit" class="btn btn-primary rounded-pill mb-0"><?php esc_html_e('Post Comment', 'codeweber'); ?></button>
					<?php comment_id_fields(); ?>
				</div> <!-- .form-group -->
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		<?php endif; // If registration required and not logged in 
		?>









	</div>
<?php	}

if (!comments_open() && get_comments_number()) {
?>
	<p class="no-comments"><?php esc_html_e('Comments are closed.', 'codeweber'); ?></p>
<?php
}
?>