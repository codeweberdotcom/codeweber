<?php

/**
 * Testimonial 4
 */

$argss = array(
   'posts_per_page' => 10,
   'post_type' => 'testimonials',
);

$testimonials = get_sub_field('posts');
if ($testimonials) {
   $cw_post_ids = array();
   foreach ($testimonials as $post_ids) {
      $cw_post_ids[] = $post_ids;
   }
   $cw_post_idsd = implode(',', $testimonials);
   $argss['post__in'] = $cw_post_ids;
}

$block = new CW_Settings(
   $cw_settings = array(

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => 'w-auto',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_1',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i4.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i4@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/illustrations/i4.png',
      ),

      'background_class_default' => 'wrapper bg-light',

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

      // 'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-6 align-items-center">
         <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-5 mt-12 <?php echo $block->column_class_2; ?>">
            <?php
            $query = new WP_Query($argss);
            if ($query->have_posts()) { ?>
               <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                  <div class="swiper">
                     <div class="swiper-wrapper">
                        <?php
                        while ($query->have_posts()) {
                           $query->the_post();
                           $post_id =  get_the_id();
                           $type_field = get_sub_field('select_type');
                           if (have_rows('testimonials_post_field', $post_id)) :
                              while (have_rows('testimonials_post_field', $post_id)) : the_row();
                                 if (get_sub_field('status') == 1) {
                                    if (get_sub_field('name')) {
                                       $name = get_sub_field('name');
                                    } else {
                                       $name = NULL;
                                    }

                                    if (get_sub_field('testimonial')) {
                                       $testimonial = get_sub_field('testimonial');
                                    } else {
                                       $testimonial = NULL;
                                    }

                                    if ($type_field == 'Job') {
                                       if (get_sub_field('job_title')) {
                                          $job_title = get_sub_field('job_title');
                                       } else {
                                          $job_title  = NULL;
                                       }
                                    } elseif ($type_field == 'City') {
                                       if (get_sub_field('job_title')) {
                                          $job_title = get_sub_field('town');
                                       } else {
                                          $job_title  = NULL;
                                       }
                                    } elseif ($type_field == 'Company name') {
                                       if (get_sub_field('job_title')) {
                                          $job_title = get_sub_field('company');
                                       } else {
                                          $job_title  = NULL;
                                       }
                                    } else {
                                       $job_title  = NULL;
                                    } ?>

                                    <div class="swiper-slide">
                                       <blockquote class="icon icon-top fs-lg text-center">
                                          <p>“<?php echo $testimonial; ?>”</p>
                                          <div class="blockquote-details justify-content-center text-center">
                                             <div class="info ps-0">
                                                <h5 class="mb-1"><?php echo $name ?></h5>
                                                <?php if ($job_title) { ?>
                                                   <p class="mb-0"><?php echo $job_title ?></p>
                                                <?php } ?>
                                             </div>
                                          </div>
                                       </blockquote>
                                    </div>
                                    <!--/.swiper-slide -->
                        <?php }
                              endwhile;
                           endif;
                        }
                        ?>
                     </div>
                     <!--/.swiper-wrapper -->
                  </div>
                  <!-- /.swiper -->
               </div>
               <!-- /.swiper-container -->
            <?php
            }
            wp_reset_postdata();
            ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->