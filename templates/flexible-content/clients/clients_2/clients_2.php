<?php

/**
 * Clients 1
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Trusted by over 300+ clients',
      'patternTitle' => ' <h2 class="display-4 mb-3 pe-xxl-5">%s</h2>',

      'paragraph' => 'We bring solutions to make life easier for our customers.',
      'patternParagraph' => '<p class="lead fs-lg mb-0 pe-xxl-5">%s</p>',

      'subtitle' => 'Our Clients',
      'patternSubtitle' => '<div class="h2 fs-15 text-uppercase text-muted mb-3">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      // 'background_data_default' => '/dist/img/photos/bg16.png',
      // 'background_video_preview' => '/dist/img/photos/movie2.jpg',
      // 'background_video_url' => '/dist/media/movie2.mp4',
      // 'background_pattern_url' => '/dist/img/pattern.png',

      'swiper' => array(
         'swiper_container_class' => 'clients',
         'image_class' => '',
         'wrapper_image_class' => '',
         'image_pattern' => '<img src="%1$s" srcset="%1$s" %3$s />',
         'image_thumb_size' => 'sandbox_clients_logo_1-1',
         'image_demo' => '<img src="' . get_template_directory_uri() . '/dist/img/brands/c3.png" srcset="' . get_template_directory_uri() . '/dist/img/brands/c3.png" alt="" data-cue="fadeIn" data-delay="300" />',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/brands/c3.png',
         'data_margin' => '80',
         'nav' => 'false',
         'nav_color' => '',
         'nav_position' => '',
         'dots' => 'false',
         'dots_color' => '',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '2',
         'items_xs' => '2',
         'items_sm' => '2',
         'items_md' => '3',
         'items_lg' => '7',
         'items_xl' => '7',
         'items_xxl' => '7',
         'autoplay' => 'false',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => NULL,
      ),
   )
);
?>




<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
         <div class="col-lg-4 mt-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $block->subtitle; ?></h2>
            <h3 class="display-4 mb-3 pe-xxl-5"><?php echo $block->title; ?></h3>
            <p class="lead fs-lg mb-0 pe-xxl-5"><?php echo $block->paragraph; ?></p>
         </div>
         <!-- /column -->
         <div class="col-lg-8">
            <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
               <?php $type_client = get_sub_field('cw_type_clients');
               if ($type_client == 'post') {
                  $cw_posts = get_sub_field('cw_posts');
                  if ($cw_posts) {
                     foreach ($cw_posts as $post_ids) {
                        $cw_logotip = get_field('cw_logotip', $post_ids);
                        if ($cw_logotip) {  ?>
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"> <img src="<?php echo esc_url($cw_logotip['sizes']['sandbox_clients_logo_1-1']); ?>" alt="<?php echo esc_attr($cw_logotip['alt']); ?>" /></figure>
                           </div>
                           <!--/column -->
                     <?php };
                     }
                  }
               } elseif ($type_client == 'image') {
                  if (have_rows('images')) : ?>
                     <?php while (have_rows('images')) : the_row(); ?>
                        <?php $cw_image = get_sub_field('cw_image'); ?>
                        <?php if ($cw_image) : ?>
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo esc_url($cw_image['sizes']['sandbox_clients_logo_1-1']); ?>" alt="<?php echo esc_attr($cw_image['alt']); ?>" /></figure>
                           </div>
                           <!--/column -->
                        <?php endif; ?>
                     <?php endwhile; ?>
                  <?php else : ?>
                     <?php // no rows found 
                     ?>
               <?php endif;
               }
               ?>
            </div>
            <!--/.row -->
         </div>
         <!--/.row -->
      </div>
      <!-- /column -->
   </div>
   <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->