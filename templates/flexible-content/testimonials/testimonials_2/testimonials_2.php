<?php

/**
 * Testimonial 2
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

      // 'title' => 'Our Community',
      // 'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      // 'subtitle' => 'Customer satisfaction is our major goal. See what our customers are saying about us.',
      // 'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      // 'paragraph' => 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.',
      // 'patternParagraph' => '<p>%s</p>',

      // 'buttons' => '<a href="#" class="btn btn-navy rounded-pill mt-3">All Testimonials</a>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      // 'background_class_default' => 'wrapper bg-light',

      // 'divider' => true,


   )
);
?>




<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row position-relative">
         <figure class="rounded position-absolute d-none d-lg-block" style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2"><img src="<?php echo get_template_directory_uri(); ?>./dist/img/photos/tei1.jpg" srcset="<?php echo get_template_directory_uri(); ?>./dist/img/photos/tei1@2x.jpg 2x" alt=""></figure>
         <div class="col-lg-9 text-center">
            <div class="card bg-gray">
               <div class="card-body p-md-10 py-xxl-16">
                  <div class="row gx-0">
                     <div class="col-lg-8 ps-xl-10">

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
                                       if (have_rows('testimonials_post_field', $post_id)) :
                                          while (have_rows('testimonials_post_field', $post_id)) : the_row();
                                             $name = get_sub_field('name');
                                             $testimonial = get_sub_field('testimonial');
                                             $job_title = get_sub_field('job_title');
                                          endwhile;
                                       endif;
                                    ?>
                                       <div class="swiper-slide">

                                          <span class="ratings five fs-20 mb-3"></span>
                                          <blockquote class="border-0 fs-lg mb-0">
                                             <p>“<?php echo $testimonial; ?>”</p>
                                             <div class="blockquote-details justify-content-center text-center">
                                                <div class="info p-0">
                                                   <h4 class="mb-1"><?php echo $name ?></h4>
                                                   <?php if ($job_title) { ?>
                                                      <p class="mb-0"><?php echo $job_title ?></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </blockquote>

                                       </div>
                                       <!--/.swiper-slide -->
                                    <?php
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
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->