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




/** Icon */
$icon = new Icons();
$icon->GetIcon();
$icon->iconpaddingclass = 'mb-4';



/**Color */
// Select Color 
$icon_color = new Color();
$icon_color->ColorIcon();
$iconcolor = $icon_color->color_icon;
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $settings->column_one; ?>">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
               <?php if (have_rows('images')) : ?>
                  <?php while (have_rows('images')) : the_row(); ?>
                     <?php /** Image */
                     $image = new ImageCustomizable;
                     $image->root_theme = get_template_directory_uri();
                     $image->imagefull = get_template_directory_uri() . '/dist/img/photos/about2.jpg';
                     $image->imagesmall = get_template_directory_uri() . '/dist/img/photos/about2.jpg';
                     $image->imagebigsize = 'brk_big';
                     $image->imagethumbsize = 'sandbox_about_4';
                     ?>
                     <div class="item">
                        <figure class="rounded shadow"><?php $image->image(); ?></figure>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $settings->column_two; ?>">
            <?php /** Add list icon */
            $listicon = new ListUnicon;
            $listicon->default_list = '<div class="row gy-3 gx-xl-8">
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                     <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                  </ul>
               </div>
               <!--/column -->
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                     <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                  </ul>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->'; ?>
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
            <p class="lead fs-lg"><?php echo $settings->subtitle; ?></p>
            <p class="mb-6"><?php echo $settings->paragraph; ?></p>
            <?php $listicon->listunicons(); ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->