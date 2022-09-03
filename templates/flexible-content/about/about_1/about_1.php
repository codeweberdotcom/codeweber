<?php
/* Add settings */
$settings = new Settings();

$settings->title = "Who Are We?";
$settings->subtitle = "We are a digital and branding company that believes in the power of creative strategy and along with great design.";
$settings->paragraph = 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/** Image */
$image = new ImageCustomizable;
$image->root_theme = get_template_directory_uri();
$image->imagefull = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagesmall = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagebigsize = 'brk_big';
$image->imagethumbsize = 'sandbox_hero_11';


/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = 'Our Mission';
$features->paragraph = 'Dapibus eu leo quam ornare curabitur blandit tempus.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = 'btn-lg';
$features->iconform = 'btn-block';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'me-4';
$features->pattern = '<div class="col-md-6">
                  <div class="d-flex flex-row">
                     <div>
                        %3$s
                     </div>
                     <div>
                        <h4 class="mb-1">%1$s</h4>
                        <p class="mb-0">%2$s</p>
                     </div>
                  </div>
               </div>
               <!--/column -->';
$features->default_features = '<div class="col-md-6">
                  <div class="d-flex flex-row">
                     <div>
                        <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                     </div>
                     <div>
                        <h4 class="mb-1">Our Mission</h4>
                        <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                     </div>
                  </div>
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <div class="d-flex flex-row">
                     <div>
                        <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                     </div>
                     <div>
                        <h4 class="mb-1">Our Values</h4>
                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                     </div>
                  </div>
               </div>
               <!--/column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
            <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
            <figure class="rounded">
               <?php $image->image(); ?>
            </figure>
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg"><?php echo $settings->subtitle; ?></p>
            <p class="mb-6"><?php echo $settings->paragraph; ?></p>
            <div class="row gx-xl-10 gy-6">
               <?php echo $features->Feutures(); ?>
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->