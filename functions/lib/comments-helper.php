<?php
if (!function_exists('better_comments')) :
   function better_comments($comment, $args, $depth)
   {
?>


      <li class="comment" id="comment-<?php comment_ID(); ?>">
         <div class=" comment-header d-md-flex align-items-center">
            <div class="d-flex align-items-center">
               <figure class="user-avatar">
                  <?php
                  $user_id = get_current_user_id();
                  $user_acf_prefix = 'user_';
                  $user_id_prefixed = $user_acf_prefix . $user_id;
                  ?>
                  <img class="rounded-circle" alt="" src="<?php the_field('avatar', $user_id_prefixed); ?>">
               </figure>
               <div>
                  <h6 class="comment-author"><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="link-dark"><?php echo get_comment_author(comment_ID()); ?></a></h6>
                  <ul class="post-meta">
                     <li><i class="uil uil-calendar-alt"></i><?php echo get_comment_date(); ?> <i class="uil uil-clock"></i><?php echo get_comment_time('H:i'); ?></li>
                  </ul>
                  <!-- /.post-meta -->
               </div>
               <!-- /div -->
            </div>
            <!-- /div -->
            <div class="mt-3 mt-md-0 ms-auto">
               <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'before' => '', 'max_depth' => $args['max_depth']))) ?>
               <a href="" class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-comments"></i> Reply</a>
            </div>
            <!-- /div -->
         </div>
         <!-- /.comment-header -->
         <p><?php comment_text() ?></p>
         <?php if ($comment->comment_approved == '0') : ?>
            <em><?php esc_html_e('Your comment is awaiting moderation.', 'codeweber') ?></em>
            <br />
         <?php endif; ?>
      </li>

<?php
   }
endif;
