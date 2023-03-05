<?php


/**
 * Woocommerce 1
 */

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Our Models',
      'patternTitle' => ' <h2 class="mb-6">%s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.',
      'patternParagraph' => '<p class="mb-5">%s</p>',

      // 'buttons' => '<a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'shapes' => array('<div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>', '<div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>'),
   )
);


?>


<section class="wrapper bg-gray related products">
   <div class="container py-14 py-md-16">
      <?php echo $block->title;



      $products = get_sub_field('products');
      if ($products) { ?>
         <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1" data-nav="true">

            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php
                  foreach ($products as $post_ids) { ?>

                     <div class="swiper-slide">
                        <a href="<?php echo get_permalink($post_ids); ?>">
                           <figure class="rounded mb-6">
                              <?php
                              $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_ids), 'single-post-thumbnail');
                              ?>
                              <img src="<?php echo $image[0]; ?>" srcset="<?php echo $image[0]; ?>" alt="" />
                              <a class="item-link" href="<?php echo $image[0]; ?>" data-glightbox="title: <?php echo get_the_title($post_ids); ?>;" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                           </figure>
                           <div class="project-details d-flex justify-content-center flex-column">
                              <div class="post-header">
                                 <h2 class="post-title h3"><a href="<?php echo get_permalink($post_ids); ?>" class="link-dark"><?php echo get_the_title($post_ids); ?></a></h2>
                              </div>
                              <!-- /.post-header -->
                           </div>
                           <!-- /.project-details -->

                        </a>
                     </div>
                     <!--/.swiper-slide -->
                  <?php }
                  ?>
               </div>
               <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
         </div>
         <!-- /.swiper-container -->
      <?php
      }; ?>

   </div>
   <!-- /.container -->
</section>
<!-- /section -->