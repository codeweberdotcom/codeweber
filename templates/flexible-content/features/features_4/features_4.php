<?php
/* Add settings */
$settings = new Settings();
$settings->title = "The service we offer is specifically designed to meet your needs.";
$settings->subtitle = "What We Do?";
$settings->paragraph = 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill mt-3";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a href="#" class="btn btn-navy rounded-pill mt-3">More Details</a></span>';


/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = 'btn-lg';
$features->iconform = 'btn-block';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'pe-none mb-5';
$features->pattern = '<div class="col-md-6 align-self-start tt">
                  <div class="card bg-pale-%5$s">
                     <div class="card-body">
                        %3$s
                        <h4>%1$s</h4>
                        <p class="mb-0">%2$s</p>
                        %4$s
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
$features->default_features = '<div class="col-md-5 offset-md-1 align-self-end">
                  <div class="card bg-pale-yellow">
                     <div class="card-body">
                        <img src="' . $settings->root_theme . '/dist/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>24/7 Support</h4>
                        <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-end">
                  <div class="card bg-pale-red">
                     <div class="card-body">
                        <img src="' . $settings->root_theme . '/dist/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4>Secure Payments</h4>
                        <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-5">
                  <div class="card bg-pale-leaf">
                     <div class="card-body">
                        <img src="' . $settings->root_theme . '/dist/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <h4>Daily Updates</h4>
                        <p class="mb-0">Nulla vitae elit libero, a pharetra augue.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-start">
                  <div class="card bg-pale-primary">
                     <div class="card-body">
                        <img src="' . $settings->root_theme . '/dist/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4>Market Research</h4>
                        <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7 order-lg-2">
            <div class="row gx-md-5 gy-5">
               <?php echo $features->Feutures_01(); ?>
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-5"><?php echo $settings->title; ?></h3>
            <p><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->