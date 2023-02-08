<?php

/**
 * Slider 1
 */

?>


<?php
$my_posts = new WP_Query;
$myposts = $my_posts->query(array(
   'post_type' => 'post'
)); ?>
<h3 class="mb-6"><?php esc_html_e('You Might Also Like', 'codeweber'); ?></h3>
<div class="swiper-container blog grid-view mb-16 swiper-container-0" data-margin="30" data-nav="false" data-dots="true" data-items-md="2" data-items-xs="1">
   <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
      <div class="swiper-wrapper" id="swiper-wrapper-b89a14f97e102ef7d" aria-live="off" style="cursor: grab; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
         <?php
         // обрабатываем результат
         foreach ($myposts as $post) { ?>
            <div class="swiper-slide">
               <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="<?php the_permalink(); ?>">
                        <?php
                        the_post_thumbnail(
                           'sandbox_slider_1',
                           array(
                              'class' => '',
                              'alt' => get_the_title(),
                           )
                        );
                        ?>
                     </a>
                     <figcaption>
                        <div class="from-top mb-0 h5"><?php esc_html_e('Read More', 'codeweber'); ?></div>
                     </figcaption>
                  </figure>

                  <div class="post-header">
                     <div class="post-category text-line">
                        <?php the_category(', '); ?>
                     </div>
                     <!-- /.post-category -->
                     <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?php the_permalink(); ?>"><?php echo esc_html($post->post_title); ?></a></h2>
                  </div>
                  <!-- /.post-header -->
                  <div class="post-footer">
                     <ul class="post-meta mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php the_time(get_option('date_format')); ?></span></li>
                        <li class="post-comments"><a href="<?php echo get_post_permalink(); ?>/#comments"><i class="uil uil-comment"></i><?php echo $post->comment_count; ?></a></li>
                     </ul>
                     <!-- /.post-meta -->
                  </div>
                  <!-- /.post-footer -->
               </article>
               <!-- /article -->
            </div>
            <!--/.swiper-slide -->
         <?php }
         ?>
      </div>
      <!--/.swiper-wrapper -->
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
   </div>
   <!-- /.swiper -->
   <div class="swiper-controls">
      <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
   </div>
</div>