<?php
/* Add settings */
$settings = new Settings();

$settings->title = "Get Consultation";
$settings->subtitle = "Call Now";
//$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg3.jpg';
$settings->backgroundurl = get_template_directory_uri() . '/dist/img/photos/bg3.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a class="btn btn-lg btn-white rounded-pill mb-0 text-nowrap">CallBack</a></span>';

/** Phone */
$phone = get_field('phone', 'option');
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-12 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="<?php echo $settings->backgroundurl; ?>">
               <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-left text-lg-start">
                  <div class="col-lg-6 col-xl-6 col-xxl-7">
                     <h3 class="display-6 text-white mb-4 mb-lg-0"><?php echo $settings->title; ?></h3>
                  </div>
                  <div class="col">
                     <div class="d-flex mb-4 mb-lg-0">
                        <div>
                           <a href="#" class="btn btn-circle btn-outline-white btn-lg me-3"><i class="uil uil-phone"></i></a>
                        </div>
                        <div>
                           <?php if (get_sub_field('phone') == 'Option page') : ?>
                              <a class="text-white fs-22 fw-bold" href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                           <?php elseif (get_sub_field('phone') == 'Custom') : ?>
                              <a class="text-white fs-22 fw-bold" href="tel:<?php the_sub_field('custom_phone'); ?>"><?php the_sub_field('custom_phone'); ?></a>
                           <?php endif; ?>
                           <p class="text-white mb-0"><?php echo $settings->subtitle; ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <!--  buttons group -->
                     <?php $button->showbuttons(); ?>
                     <!--/buttons group -->
                  </div>
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