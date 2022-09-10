<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Trusted by Over 5000 Clients";
$settings->subtitle = "We are a digital and branding company that believes in the power of creative strategy and along with great design.";
$settings->paragraph = 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();
?>

<section class="wrapper bg-light wrapper-border">
   <div class="container py-14 py-md-16">
      <h2 class="fs-15 text-uppercase text-muted text-center mb-8"><?php echo $settings->title; ?></h2>

      <?php if (have_rows('logos')) : ?>
         <?php while (have_rows('logos')) : the_row(); ?>
            <?php $type_clients = get_sub_field('logo'); ?>
            <?php if ($type_clients == 'Images') : ?>
               <?php if (have_rows('images')) : ?>
                  <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                     <div class="swiper">
                        <div class="swiper-wrapper">
                           <?php while (have_rows('images')) : the_row(); ?>
                              <?php $images = get_sub_field('images'); ?>
                              <?php if ($images) : ?>
                                 <div class="swiper-slide px-5">
                                    <img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                                 </div>
                              <?php endif; ?>
                           <?php endwhile; ?>
                        </div>
                        <!--/.swiper-wrapper -->
                     </div>
                     <!-- /.swiper -->
                  </div>
                  <!-- /.swiper-container -->
               <?php else : ?>
                  <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                     <div class="swiper">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c1.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c2.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c3.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c4.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c5.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c6.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c7.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c8.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c9.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c10.png" alt="" /></div>
                           <div class="swiper-slide px-5"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/c11.png" alt="" /></div>
                        </div>
                        <!--/.swiper-wrapper -->
                     </div>
                     <!-- /.swiper -->
                  </div>
                  <!-- /.swiper-container -->
               <?php endif; ?>
            <?php elseif ($type_clients == 'Posts') : ?>
               <?php $posts = get_sub_field('posts'); ?>
               <?php if ($posts) : ?>
                  <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                     <div class="swiper">
                        <div class="swiper-wrapper">
                           <?php foreach ($posts as $post) : ?>
                              <?php setup_postdata($post); ?>
                              <?php $id = $post->ID; ?>
                              <div class="swiper-slide px-5"><?php echo get_the_post_thumbnail($id, 'sandbox_clients_logo_2', null); ?></div>
                           <?php endforeach; ?>
                        </div>
                        <!--/.swiper-wrapper -->
                     </div>
                     <!-- /.swiper -->
                  </div>
                  <!-- /.swiper-container -->
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
      <!--/swiper -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->