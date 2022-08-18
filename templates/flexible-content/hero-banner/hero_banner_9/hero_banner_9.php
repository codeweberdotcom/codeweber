<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();

$settings->title = 'Sandbox is effortless and powerful with';
$settings->paragraph = 'Achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/sa16.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'white';

$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF();


/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/sa18.jpg';
$image->image_2 = get_template_directory_uri() . '/dist/img/photos/sa20.jpg';
$image->image_3 = get_template_directory_uri() . '/dist/img/photos/sa21.jpg';
$image->image_4 = get_template_directory_uri() . '/dist/img/photos/sa19.jpg';
$image->image_5 = get_template_directory_uri() . '/dist/img/photos/sa17.jpg';
$image->image_6 = get_template_directory_uri() . '/dist/img/photos/sa16.jpg';
$image->image_size = 'large';
$image->GetImage();


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
?>

<section id="<?php echo $settings->section_id; ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container pt-10 pb-12 pt-md-14 pb-md-17">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 mt-lg-n2 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 mx-md-10 mx-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?> <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $settings->typewriter; ?>"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
            <p class="lead fs-lg mb-7 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
         <div class="col-lg-7">
            <div class="row">
               <div class="col-3 offset-1 offset-lg-0 col-lg-4 d-flex flex-column" data-cues="zoomIn" data-group="col-start" data-delay="300">
                  <div class="ms-auto mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo $image->image_2; ?>" srcset="<?php echo $image->image_2; ?>" alt="" /></div>
                  <div class="ms-auto mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-4 col-lg-5" data-cue="zoomIn">
                  <div><img class="w-100 img-fluid rounded shadow-lg" src="<?php echo $image->image_6; ?>" srcset="<?php echo $image->image_6; ?>" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-3 d-flex flex-column" data-cues="zoomIn" data-group="col-end" data-delay="300">
                  <div class="mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo $image->image_3; ?>" srcset="<?php echo $image->image_3; ?>" alt="" /></div>
                  <div class="mt-5"><img class="img-fluid rounded shadow-lg" src="<?php echo $image->image_4; ?>" srcset="<?php echo $image->image_4; ?>" alt="" /></div>
                  <div class="mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo $image->image_5; ?>" srcset="<?php echo $image->image_5; ?>" alt="" /></div>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->