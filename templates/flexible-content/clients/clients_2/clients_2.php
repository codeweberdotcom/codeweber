<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Clients";
$settings->subtitle = "Trusted by over 300+ clients";
$settings->paragraph = 'We bring solutions to make life easier for our customers.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light <?php echo esc_html($args['block_class']); ?>">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
         <div class="col-lg-4 mt-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-3 pe-xxl-5"><?php echo $settings->title; ?></h3>
            <p class="lead fs-lg mb-0 pe-xxl-5"><?php echo $settings->paragraph; ?></p>
         </div>
         <!-- /column -->
         <div class="col-lg-8">
            <?php if (have_rows('logos')) : ?>
               <?php while (have_rows('logos')) : the_row(); ?>
                  <?php $type_clients = get_sub_field('logo'); ?>
                  <?php if ($type_clients == 'Images') : ?>
                     <?php if (have_rows('images')) : ?>
                        <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
                           <?php while (have_rows('images')) : the_row(); ?>
                              <?php $images = get_sub_field('images'); ?>
                              <?php if ($images) : ?>
                                 <div class="col">
                                    <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" /></figure>
                                 </div>
                                 <!--/column -->
                              <?php endif; ?>
                           <?php endwhile; ?>
                        </div>
                     <?php else : ?>
                        <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z1.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z2.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z3.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z4.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z5.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z6.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z7.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                           <div class="col">
                              <figure class="px-3 px-md-0 px-xxl-2"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/brands/z8.png" alt="" /></figure>
                           </div>
                           <!--/column -->
                        </div>
                     <?php endif; ?>
                  <?php elseif ($type_clients == 'Posts') : ?>
                     <?php $posts = get_sub_field('posts'); ?>
                     <?php if ($posts) : ?>
                        <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
                           <?php foreach ($posts as $post) : ?>
                              <?php setup_postdata($post); ?>
                              <?php $id = $post->ID; ?>
                              <div class="col">
                                 <figure class="px-3 px-md-0 px-xxl-2"><?php echo get_the_post_thumbnail($id, 'sandbox_clients_logo_2', null); ?></figure>
                              </div>
                              <!--/column -->
                           <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                     <?php endif; ?>
                  <?php endif; ?>
               <?php endwhile; ?>
            <?php endif; ?>
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