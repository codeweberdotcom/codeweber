<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Who Are We?";
$settings->subtitle = NULL;
$settings->paragraph = NULL;
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/** Icon */
$icon = new Icons();
$icon->GetIcon();
$icon->iconpaddingclass = 'mb-4';

/**Color */
// Select Color 
$icon_color = new Color();
$icon_color->ColorIcon();
$iconcolor = $icon_color->color_icon;


/** Image */
$image = new ImageCustomizable;
$image->root_theme = get_template_directory_uri();
$image->imagefull = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagesmall = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$image->imagebigsize = 'brk_big';
$image->imagethumbsize = 'sandbox_hero_11';

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $settings->column_one; ?>">
            <div class="shape bg-dot primary rellax w-20 h-20" data-rellax-speed="1" style="<?php echo $settings->style_parameters; ?>"></div>
            <figure class="rounded">
               <?php $image->image(); ?>
            </figure>
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $settings->column_two; ?>">
            <?php if ($icon->icon_type == 'Unicons') :
               $icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $icon->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $icon->iconpaddingclass . ' ">' . $icon->icon . '</div>';
            elseif ($icon->icon_type == 'SVG') :
               $icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $icon->iconsize . ' text-' . $icon_color->color_icon . ' ' . $icon->iconpaddingclass . '"/>';
            elseif ($icon->icon_type == 'Number') :
               $icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $icon->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $icon->iconpaddingclass . '"><span class="number">' . $icon->iconnumber . '</span></span>';
            elseif ($icon->icon_type == 'None') :
            endif;
            echo $icon_block; ?>
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <?php if (isset($settings->subtitle)) { ?>
               <p class="lead fs-lg"><?php echo $settings->subtitle; ?></p>
            <?php } ?>
            <?php if (isset($settings->paragraph)) { ?>
               <p class="mb-6"><?php echo $settings->paragraph; ?></p>
            <?php } ?>
            <?php
            /** Add list icon */
            $listicon = new ListUnicon;
            ?>
            <?php if (isset($listicon->listtrue)) { ?>
               <?php $listicon->listunicons(); ?>
            <?php } ?>
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