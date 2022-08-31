<?php
/* Add settings */
$settings = new Settings();
$settings->title = "The service we offer is specifically designed to meet your needs.";
$settings->subtitle = "What We Do?";
// $settings->paragraph = 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();


/* Add Features */
$features = new Features();
$settings->GetDataACF();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = 'btn-lg';
$features->iconform = 'btn-block';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'pe-none mb-5';
$features->pattern = '<div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                      %3$s
                      <h4 class="text-' . $settings->textcolor . '">%1$s</h4>
                     <p class="text-' . $settings->textcolor . ' mb-2">%2$s</p>
                     %4$s
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
           <!--/column -->';
$features->default_features = ' <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="' . $settings->root_theme . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                     <h4>SEO Services</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-yellow">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="' . $settings->root_theme . '/dist/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                     <h4>Web Design</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-red">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="' . $settings->root_theme . '/dist/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                     <h4>Social Engagement</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-green">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="' . $settings->root_theme . '/dist/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                     <h4>Content Marketing</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-blue">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16 text-center">
      <div class="row">
         <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-10 px-xl-10"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
         <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
         <div class="row gx-md-5 gy-5 text-center">
            <?php echo $features->Feutures(); ?>
         </div>
         <!--/.row -->
      </div>
      <!-- /.position-relative -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->