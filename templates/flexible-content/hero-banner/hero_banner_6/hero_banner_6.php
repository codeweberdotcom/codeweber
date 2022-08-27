<?php

/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = "Get all of your steps, exercise, sleep and meds in one place.";
$settings->paragraph = 'Sandbox is now available to download from both the App Store and Google Play Store.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/devices.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'red';
$settings->textcolor = 'white';

$settings->section_id = esc_html($args['block_id']);
$settings->section_classes = esc_html($args['block_class']);
$settings->GetDataACF();

// --- Image ---
/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/devices.png';
$image->image_size = 'large';
$image->GetImage();


/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a class="btn btn-primary btn-icon btn-icon-start rounded me-2"><i class="uil uil-apple"></i> App Store</a></span>
          <span><a class="btn btn-green btn-icon btn-icon-start rounded"><i class="uil uil-google-play"></i> Google Play</a></span>
        </div>';
?>

<section id="<?php echo $settings->section_id; ?>" class="<?php echo $settings->section_classes; ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container pt-5 pb-15 py-lg-17 py-xl-19 pb-xl-20 position-relative">
      <img class="position-lg-absolute col-12 col-lg-10 col-xl-11 col-xxl-10 px-lg-5 px-xl-0 ms-n5 ms-sm-n8 ms-md-n10 ms-lg-0 mb-md-4 mb-lg-0" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" data-cue="fadeIn" alt="" style="top: -1%; left: -21%;" />
      <div class="row gx-0 align-items-center">
         <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-7 offset-xxl-6 ps-xxl-12 mt-md-n9 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-4 mx-sm-n2 mx-md-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
            <p class="lead fs-lg mb-7 px-md-10 px-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->