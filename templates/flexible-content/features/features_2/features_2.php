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
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = 'btn-lg';
$features->iconform = 'btn-block';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'pe-none mb-5';
$features->pattern = '<div class="col-md-6 col-lg-3">
                      %3$s
                      <h4 class="text-' . $settings->textcolor . '">%1$s</h4>
                      <p class="text-' . $settings->textcolor . ' mb-3">%2$s</p>
                      %4$s
                     </div>
                   <!--/column -->';
$features->default_features = '<div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-yellow pe-none mb-5"> <i class="uil uil-phone-volume"></i> </div>
          <h4>24/7 Support</h4>
          <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
          <a href="#" class="more hover link-yellow">Learn More</a>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-red pe-none mb-5"> <i class="uil uil-shield-exclamation"></i> </div>
          <h4>Secure Payments</h4>
          <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
          <a href="#" class="more hover link-red">Learn More</a>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-leaf pe-none mb-5"> <i class="uil uil-laptop-cloud"></i> </div>
          <h4>Daily Updates</h4>
          <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
          <a href="#" class="more hover link-leaf">Learn More</a>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-blue pe-none mb-5"> <i class="uil uil-chart-line"></i> </div>
          <h4>Market Research</h4>
          <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
          <a href="#" class="more hover link-blue">Learn More</a>
          </div>
          <!--/column -->';
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-9 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-md-8 gy-8">
         <?php echo $features->Feutures(); ?>
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->