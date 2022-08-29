<?php
/* Add settings */
$settings = new Settings();

$settings->title = "Grow Your Business with Our Solutions.";
$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/about16.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = NULL;
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
$button->default_button = '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
            <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
          </div>';


/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/about16.jpg';
$image->image_size = 'brk_big';
$image->GetImage();
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-<?php echo $settings->backgroundcolor; ?> position-relative min-vh-70 d-lg-flex align-items-center">

  <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-cues="slideInDown" data-image-src="<?php echo $image->image_1; ?>"></div>

  <!--/column -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
          <p class="lead fs-25 lh-sm mb-7 pe-md-10 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
          <!--  buttons group -->
          <?php $button->showbuttons(); ?>
          <!--/buttons group -->
        </div>
        <!--/div -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->