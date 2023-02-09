<?php

/**
 * Blog Pageheader Meta (Переписать, слишком сложно)
 */

function codeweber_meta_blog()
{
   if (class_exists('WooCommerce')) {
      if (get_post_type() == 'post' && is_singular() && !is_product() || is_singular('faq')) { ?>
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
      <?php };
   } else {
      if (get_post_type() == 'post' && is_singular() || is_singular('faq')) { ?>
         <p class="lead px-lg-5 px-xxl-8">
         <ul class="post-meta">
            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d M Y'); ?></span></li>
            <li class="post-author"><i class="uil uil-user"></i><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="text-reset"><span> <?php echo __("By", "codeweber"); ?> <?php echo get_the_author(); ?></span></a></li>
            <li class="post-comments"><i class="uil uil-comment"></i><a href="#comments" class="text-reset scroll"><?php echo get_comments_number(); ?><span> <?php echo __("Comments", "codeweber"); ?></span></a></li>
            <li class="post-likes">
               <a href="<?php echo add_query_arg('post_action', 'like'); ?>" class="text-reset">
                  <i class="uil uil-heart-alt"></i>
                  <?php echo ip_get_like_count('likes') ?>
                  <span><?php esc_html_e('Likes', 'codeweber'); ?>
                  </span></a>
            </li>
         </ul>
         </p>
<?php };
   }
}


/**
 * Set Page Header
 */

function page_header()
{
   if (!is_post_type_archive('projects')) {
      if (!is_front_page() && get_field('pageheader') && get_field('pageheader') !== 'disable') :
         if (get_theme_mod('codeweber_page_header') == 'type_1') :
            get_template_part('templates/sections/common', 'breadcrumb');
         endif;
      endif;

      if (!is_front_page() && get_field('pageheader') && get_field('pageheader') !== 'disable') {
         if (get_theme_mod('codeweber_page_header') == 'type_2') {
            get_template_part('templates/sections/common', 'pageheader');
         } elseif (get_theme_mod('codeweber_page_header') == 'type_3') {
            get_template_part('templates/sections/common', 'pageheader_1');
         } elseif (get_theme_mod('codeweber_page_header') == 'type_1') {
            get_template_part('templates/sections/common', 'pageheader_2');
         }
      }
   }
}

add_action('codeweber_after_header', 'page_header', 5);




/**
 * Set Page Wrapper
 */

function page_wrapper_start()
{
   if (is_account_page()) {
      echo '<section class="wrapper bg-light"><div class="container pt-12 pt-md-14 pb-14 pb-md-16">';
   }
}

add_action('page_content_start', 'page_wrapper_start', 10);


function page_wrapper_end()
{
   if (is_account_page()) {
      echo '</div></section>';
   }
}

add_action('page_content_end', 'page_wrapper_end', 10);
