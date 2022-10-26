<?php
/* Add settings */
$settings = new Settings();
$settings->title = "The service we offer is specifically designed to meet your needs.";
$settings->subtitle = "What We Do?";
$settings->paragraph = 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/tei1.jpg';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/tei1.jpg';
$image->image_size = 'testimonial_2';
$image->GetImage();
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row position-relative">
         <figure class="rounded position-absolute d-none d-lg-block" style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2">
            <img src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" />
         </figure>
         <div class="col-lg-9 text-center">
            <div class="card bg-gray">
               <div class="card-body p-md-10 py-xxl-16">
                  <div class="row gx-0">
                     <div class="swiper-container col-lg-8 px-xl-10 dots-closer mb-6" data-margin="30" data-dots="true">
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <?php $testimonials_loop = get_sub_field('testimonials_loop'); ?>
                              <?php if ($testimonials_loop) : ?>
                                 <?php foreach ($testimonials_loop as $post_ids) : ?>
                                    <?php if (have_rows('testimonials', $post_ids)) : ?>
                                       <?php while (have_rows('testimonials', $post_ids)) : the_row(); ?>
                                          <?php $name = get_sub_field('name'); ?>
                                          <?php $paragraph = get_sub_field('testimonial'); ?>
                                          <?php $town = get_sub_field('town'); ?>
                                          <div class="swiper-slide align-self-center">
                                             <span class="ratings five fs-20 mb-3"></span>
                                             <blockquote class="border-0 fs-lg mb-0">
                                                <p>“<?php echo $paragraph; ?>”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                   <div class="info p-0">
                                                      <h4 class="mb-1"><?php echo $name; ?></h4>
                                                      <p class="mb-0"><?php echo $town; ?></p>
                                                   </div>
                                                </div>
                                             </blockquote>
                                          </div>
                                          <!--/.swiper-slide -->
                                       <?php endwhile; ?>
                                    <?php endif; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </div>
                           <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                     </div>
                     <!-- /.swiper-container -->
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