<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Clients";
$settings->subtitle = "We are trusted by over 300+ clients. Join them by using our services and grow your business.";
$settings->paragraph = 'Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Maecenas faucibus mollis interdum. Cras justo odio mollis.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
      <div class="row gx-lg-8 mb-10 gy-5">
         <div class="col-lg-6">
            <h3 class="display-5 mb-0"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /column -->
         <div class="col-lg-6">
            <p class="lead mb-0"><?php echo $settings->paragraph; ?></p>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <?php if (have_rows('logos')) : ?>
         <?php while (have_rows('logos')) : the_row(); ?>
            <?php $type_clients = get_sub_field('logo'); ?>
            <?php if ($type_clients == 'Images') : ?>
               <?php if (have_rows('images')) : ?>
                  <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                     <?php while (have_rows('images')) : the_row(); ?>
                        <?php $images = get_sub_field('images'); ?>
                        <?php if ($images) : ?>
                           <div class="col">
                              <div class="card shadow-lg h-100 align-items-center">
                                 <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" /></figure>
                                 </div>
                                 <!--/.card-body -->
                              </div>
                              <!--/.card -->
                           </div>
                           <!--/column -->
                        <?php endif; ?>
                     <?php endwhile; ?>
                  </div>
               <?php else : ?>
                  <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/z1.png" alt="" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/z2.png" alt="" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/z3.png" alt="" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/z4.png" alt="" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo $settings->root_theme; ?>/dist/img/brands/z5.png" alt="" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                  </div>
               <?php endif; ?>
            <?php elseif ($type_clients == 'Posts') : ?>
               <?php $posts = get_sub_field('posts'); ?>
               <?php if ($posts) : ?>
                  <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                     <?php foreach ($posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php $id = $post->ID; ?>
                        <div class="col">
                           <div class="card shadow-lg h-100 align-items-center">
                              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                 <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><?php echo get_the_post_thumbnail($id, 'sandbox_clients_logo_2', null); ?></figure>
                              </div>
                              <!--/.card-body -->
                           </div>
                           <!--/.card -->
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
   <!-- /.container -->
</section>
<!-- /section -->