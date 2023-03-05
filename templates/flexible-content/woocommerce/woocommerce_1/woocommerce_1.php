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


$argss = array(
   'post_type' => 'product',
   'posts_per_page' => 10,
   //'product_cat' => 'hoodies'
);

$loop = new WP_Query($argss); ?>


<section class="wrapper bg-gray related products">
   <div class="container py-14 py-md-16">
      <?php echo $block->title; ?>


      <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1" data-nav="true">

         <div class="swiper">
            <div class="swiper-wrapper">
               <?php while ($loop->have_posts()) {
                  $loop->the_post();
               ?>

                  <div class="swiper-slide">
                     <figure class="rounded mb-6">

                        <?php
                        $id = wc_get_product($product_id);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');
                        ?>
                        <?php echo $image[0]; ?>


                        <img src="<?php echo $image[0]; ?>" srcset="<?php echo $image[0]; ?>" alt="" /><a class="item-link" href="<?php echo $image[0]; ?>" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>



                     </figure>
                     <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                           <h2 class="post-title h3"><a href="./single-project.html" class="link-dark"><?php echo get_the_title(); ?></a></h2>
                        </div>
                        <!-- /.post-header -->
                     </div>
                     <!-- /.project-details -->



                  </div>
                  <!--/.swiper-slide -->
               <?php }; ?>
               </ul>
               <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
         </div>
         <!-- /.swiper-container -->
      </div>
      <!-- /.container -->
</section>
<!-- /section -->
<?php
wp_reset_query();
