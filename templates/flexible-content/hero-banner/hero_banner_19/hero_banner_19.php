<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = 'We bring solutions to make life <span class="underline-3 style-2 yellow">easier';
$settings->paragraph = 'We are a creative company that focuses on long term relationships with customers.';
$settings->imageurl = $settings->root_theme . '/dist/img/illustrations/i6.png';
$settings->videourl = $settings->root_theme . '/dist/media/movie.mp4';
$settings->backgroundurl = '/dist/img/photos/bg16.png';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';
$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div><a class="btn btn-white rounded mb-10 mb-xxl-5">Read More</a></div>';
?>

<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="<?php echo $settings->backgroundurl; ?>">
  <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
        <h1 class="display-1 text-<?php echo $settings->textcolor; ?> fs-60 mb-4 px-md-15 px-lg-0"><?php echo $settings->title; ?></span></h1>
        <p class="lead fs-24 text-<?php echo $settings->textcolor; ?> lh-sm mb-7 mx-md-13 mx-lg-10"><?php echo $settings->paragraph; ?></p>
        <!--  buttons group -->
        <?php $button->showbuttons(); ?>
        <!--/buttons group -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <div class="overflow-hidden">
    <div class="divider text-light mx-n2">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
        <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
      </svg>
    </div>
  </div>
</section>
<!-- /section -->

<?php
/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
$features->link_url = "#";
$features->link_text = "Learn more";
$features->default_features = '';
?>

<section class="wrapper bg-light">
  <div class="container pb-15 pb-md-17">
    <div class="row gx-md-5 gy-5 mt-n19">
      <?php echo $features->Feutures_3(); ?>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->