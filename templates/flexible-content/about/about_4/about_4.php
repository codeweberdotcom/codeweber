<?php

/**
 * About 4
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Who Are We?',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="mb-6">%s</p>',

      'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      'multi_image' => array(
         array('/dist/img/photos/about2.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about2@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/about3.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
      ),

      'list' => 'true',
      'list_demo' => '<div class="row gy-3 gx-xl-8"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li></ul></div><!--/column --></div><!--/.row -->',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>'),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => 'order-lg-1',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shapes -->
            <div class="overlap-grid overlap-grid-2">
               <div class="item">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
               </div>
               <div class="item">
                  <?php if (isset($block->multi_images[1])) {
                     echo $block->multi_images[1];
                  } ?>
               </div>
            </div>
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->list; ?>
            <!--/list -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->