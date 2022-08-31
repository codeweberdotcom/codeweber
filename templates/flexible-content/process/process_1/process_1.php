<?php
/* Add settings */
$settings = new Settings();
$settings->title = "How It Works?";
$settings->subtitle = "What We Do?";
$settings->paragraph = 'So here are three working steps why our valued customers choose us.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();


/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = 'Collect Ideas';
$features->paragraph = 'Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = NULL;
$features->iconform = 'btn-circle';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'pe-none me-5';
$features->pattern = '<div class="d-flex flex-row mb-6">
               <div>
                  %3$s
               </div>
               <div>
                  <h4 class="mb-1">%1$s</h4>
                  <p class="mb-0">%2$s</p>
               </div>
            </div>';
$features->default_features = '<div class="d-flex flex-row mb-6">
               <div>
                  <span class="icon btn btn-circle btn-primary disabled me-5"><span class="number fs-18">1</span></span>
               </div>
               <div>
                  <h4 class="mb-1">Collect Ideas</h4>
                  <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p>
               </div>
            </div>
            <div class="d-flex flex-row mb-6">
               <div>
                  <span class="icon btn btn-circle btn-primary disabled me-5"><span class="number fs-18">2</span></span>
               </div>
               <div>
                  <h4 class="mb-1">Data Analysis</h4>
                  <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna.</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <span class="icon btn btn-circle btn-primary disabled me-5"><span class="number fs-18">3</span></span>
               </div>
               <div>
                  <h4 class="mb-1">Finalize Product</h4>
                  <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed.</p>
               </div>
            </div>';

$image = new ImageCustomizable;
$image->root_theme = get_template_directory_uri();
$image->imagefull = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagesmall = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagebigsize = 'brk_big';
$image->imagethumbsize = 'sandbox_hero_11';
?>

<section class="wrapper bg-light wrapper-border">
   <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
         <div class="col-md-8 col-lg-6 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded">
               <?php $image->image(); ?>
            </figure>
         </div>
         <!--/column -->
         <div class="col-lg-5 col-xl-4 offset-lg-1">
            <h2 class="h1 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg mb-6"><?php echo $settings->paragraph; ?></p>

            <?php echo $features->Feutures(); ?>

         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->