<?php

/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = "Staying on top of your bills never been this easy";
$settings->paragraph = 'Easily achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/sa1.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';

$settings->GetDataACF();

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/sa1.jpg';
$image->image_2 = get_template_directory_uri() . '/dist/img/photos/sa2.jpg';
$image->image_3 = get_template_directory_uri() . '/dist/img/photos/sa3.jpg';
$image->image_4 = get_template_directory_uri() . '/dist/img/photos/sa4.jpg';

$image->image_size = 'large';
$image->GetImage();


/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "600";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
          <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
          <span><a class="btn btn-green rounded mx-1">Free Trial</a></span>
        </div>';

?>

<section id="section-<?php echo get_the_ID(); ?>-<?php echo get_row_index(); ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
      <div class="row">
         <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 mb-4  text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
            <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7  text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
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
<section class="wrapper bg-light">
   <div class="container pb-14 pb-md-16 mb-lg-22 mb-xl-24">
      <div class="row gx-0 mb-16 mb-mb-20">
         <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images" data-delay="1500">
            <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" />

            <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="<?php echo $image->image_2; ?>" srcset="<?php echo $image->image_2; ?>" style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $image->image_3; ?>" srcset="<?php echo $image->image_3; ?>" style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $image->image_4; ?>" srcset="<?php echo $image->image_4; ?>" style=" bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->