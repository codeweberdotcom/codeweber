<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = "Crafting project specific solutions with expertise.";
$settings->paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/co3.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'white';
$settings->section_id = esc_html($args['block_id']);
$settings->section_classes = esc_html($args['block_class']);
$settings->GetDataACF();

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

/* Add LabelIcons */
$label_icons = new LabelIcons;
$label_icons->root_theme = get_template_directory_uri();
$label_icons->title = '25000+';
$label_icons->paragraph = 'Happy Clients';


/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/co3.png';
$image->image_size = 'sandbox_hero_8';
$image->GetImage();

?>

<section id="<?php echo $settings->section_id; ?>" class="<?php echo $settings->section_classes; ?> wrapper bg-light">
  <div class="container">
    <div class="card  bg-<?php echo $settings->backgroundcolor; ?> rounded-4 mt-2 mb-13 mb-md-17">
      <div class="card-body p-md-10 py-xl-11 px-xl-15">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2 d-flex position-relative">
            <img class="img-fluid ms-auto mx-auto me-lg-8" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" data-cue="fadeIn">
            <div data-cue="slideInRight" data-delay="300">
              <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                <?php echo $label_icons->GetLabel(); ?>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/div -->
          </div>
          <!--/column -->
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->