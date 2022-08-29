<?php

/* Add settings */
$settings = new Settings();


$settings->title = "Creative. Smart. Awesome.";
$settings->paragraph = 'We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i12.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'gradient-primary';
$settings->textcolor = 'white';


$settings->GetDataACF();

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/illustrations/i12.png';
$image->image_size = 'large';
$image->GetImage();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "join";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap" data-cues="slideInDown" data-group="join" data-delay="900">
      <span><a class="btn btn-lg btn-primary rounded-pill mx-1">See Projects</a></span>
      <span><a class="btn btn-lg btn-outline-primary rounded-pill mx-1">Contact Us</a></span>
    </div>';
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container py-14 pt-md-15 pb-md-18 text-center">
      <div class="row text-center">
         <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
            <h2 class="display-1 mb-4 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h2>
            <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <!--  buttons group -->
      <?php $button->showbuttons(); ?>
      <!--/buttons group -->
      <!-- /div -->
      <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
         <div class="col-lg-8 mx-auto">
            <figure><img class="img-fluid" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt=""></figure>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->