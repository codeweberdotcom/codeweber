<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Community";
$settings->subtitle = 'Customer satisfaction is our major goal. See what our customers are saying about us.';
$settings->paragraph = 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'light';
//$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill mt-3";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = ' <a href="#" class="btn btn-navy rounded-pill mt-3">All Testimonials</a>';

/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = 'Coriss Ambady';
$features->paragraph = 'Cum sociis natoque penatibus et magnis dis parturient montes.';
$features->pattern = '<div class="col-md-6 align-self-end">
                  <div class="card bg-pale-yellow">
                     <div class="card-body">
                        <blockquote class="icon mb-0">
                           <p>“%2$s”</p>
                           <div class="blockquote-details">
                              <div class="info p-0">
                                 <h5 class="mb-1">%1$s</h5>
                                 <p class="mb-0">%3$s</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
$features->default_features = '<div class="col-md-6 col-xl-5 align-self-end">
                  <div class="card bg-pale-yellow">
                     <div class="card-body">
                        <blockquote class="icon mb-0">
                           <p>“Cum sociis natoque penatibus et magnis dis parturient montes.”</p>
                           <div class="blockquote-details">
                              <div class="info p-0">
                                 <h5 class="mb-1">Coriss Ambady</h5>
                                 <p class="mb-0">Financial Analyst</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-end">
                  <div class="card bg-pale-red">
                     <div class="card-body">
                        <blockquote class="icon mb-0">
                           <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper.”</p>
                           <div class="blockquote-details">
                              <div class="info p-0">
                                 <h5 class="mb-1">Cory Zamora</h5>
                                 <p class="mb-0">Marketing Specialist</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 col-xl-5 offset-xl-1">
                  <div class="card bg-pale-leaf">
                     <div class="card-body">
                        <blockquote class="icon mb-0">
                           <p>“Donec id elit non porta gravida at eget metus. Duis mollis est commodo luctus, nisi erat porttitor.”</p>
                           <div class="blockquote-details">
                              <div class="info p-0">
                                 <h5 class="mb-1">Barclay Widerski</h5>
                                 <p class="mb-0">Sales Specialist</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-start">
                  <div class="card bg-pale-blue">
                     <div class="card-body">
                        <blockquote class="icon mb-0">
                           <p>“Nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo pellentesque ornare.”</p>
                           <div class="blockquote-details">
                              <div class="info p-0">
                                 <h5 class="mb-1">Jackie Sanders</h5>
                                 <p class="mb-0">Investment Planner</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7">
            <div class="row gx-md-5 gy-5">
               <?php echo $features->Testimonials_01(); ?>
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg"><?php echo $settings->subtitle; ?></p>
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