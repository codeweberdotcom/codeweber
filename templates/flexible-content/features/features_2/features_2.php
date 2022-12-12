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

<?php
if (have_rows('background_settings')) :
   while (have_rows('background_settings')) : the_row();

      if (get_sub_field('fixed_photo') == 1) :
         $background_wrapper = 'wrapper image-wrapper';
      else :
         $background_wrapper = 'wrapper';
      endif;


      if (get_sub_field('background_overlay') == 'Disable') :
         $background_overlay = NULL;
      elseif (get_sub_field('background_overlay') == '50') :
         $background_overlay = 'bg-overlay';
      elseif (get_sub_field('background_overlay') == '40') :
         $background_overlay = 'bg-overlay bg-overlay-400';
      elseif (get_sub_field('background_overlay') == '30') :
         $background_overlay = 'bg-overlay bg-overlay-300';
      endif;

      if (get_sub_field('background_type') == 'photo') :
         $background = get_sub_field('background');
         if ($background) :
            $background_data = 'data-image-src="' . esc_url($background['url']) . '"';
            $background_back = 'bg-image';
         endif;
      elseif (get_sub_field('background_type') == 'color') :
         if (have_rows('type_color')) :
            while (have_rows('type_color')) : the_row();
               $type_color = get_sub_field('select_type_color');
               if ($type_color == 'Solid') :
                  $background_back = 'bg-' . get_sub_field('theme_btn_solid_color');
               elseif ($type_color == 'Soft') :
                  $background_back = 'bg-soft-' . get_sub_field('theme_btn_solid_color');
               elseif ($type_color == 'Pale') :
                  $background_back = 'bg-pale-' . get_sub_field('theme_btn_solid_color');
               elseif ($type_color == 'Gradient') :
                  $background_back = get_sub_field('gradient_btn') . ' gradient';
               endif;
               $background_data = NULL;
            endwhile;
         endif;
      endif;
   endwhile;
endif;
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> <?php echo $background_overlay; ?> <?php echo $background_wrapper; ?> <?php echo $background_back; ?>" <?php echo $background_data; ?>>
   <div class=" container py-14 py-md-16">
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