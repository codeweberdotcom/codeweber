<?php

/**
 * CW
 */
$hero = new CW_Settings(
  $cw_settings = array(
    'image_pattern' => '<figure %5s title="dsdsds"><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    'image_link' => '/dist/img/illustrations/i2.png',
    'image_thumb_size' => 'sandbox_hero_1',
    'image_big_size' => 'project_1',
    'swiper' => array('swiper' => true, 'xs' => '1'),
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $hero->background_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $hero->background_data; ?>>
  <?php if ($hero->background_video_bool == true) { ?>
    <video poster="<?php echo $hero->background_video_preview; ?>" src="<?php echo $hero->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <?php
          echo $hero->swiper_final;
          ?>
          <!--/images -->
        </div>
        <!-- /column -->
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
          <?php echo $hero->title; ?>
          <!--/title -->
          <?php echo $hero->paragraph; ?>
          <!--/pargraph -->
          <?php echo $hero->buttons; ?>
          <!--/buttons group -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php if ($hero->background_video_bool == true) { ?>
    </div>
    </video>
  <?php } ?>
</section>
<!-- /section -->