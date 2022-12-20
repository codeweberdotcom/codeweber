<?php $test = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with Our Solutions.', // echo $test->title;
    'subtitle' => 'Ge help our clients to increase their website traffic, rankings and visibility in search results', //echo $test->subtitle;
    'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.', //echo $test->paragraph;
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">%s</h1>', // шаблон с переменной %s
    'patternSubTitle' => '<p class="mb-5">%s</p>',                           // шаблон с переменной %s
    'patternParagraph' => '<p class=" fs-lg mb-7">%s</p>',                   // шаблон с переменной %s
    'pattern_button' => ' <span><a class="btn btn-primary rounded-pill me-2"></a></span>' // шаблон кнопки
  )
); ?>


<?php

$bag = new CW_Background;

printr($bag); ?>


<?php if (have_rows('cw_background')) : ?>
  <?php while (have_rows('cw_background')) : the_row(); ?>
    <?php the_sub_field('cw_background_type'); ?>
    <?php $cw_image_background = get_sub_field('cw_image_background'); ?>
    <?php if ($cw_image_background) : ?>
      <img src="<?php echo esc_url($cw_image_background['url']); ?>" alt="<?php echo esc_attr($cw_image_background['alt']); ?>" />
    <?php endif; ?>
    <?php the_sub_field('cw_background_size'); ?>
    <?php the_sub_field('cw_background_overlay'); ?>
    <?php if (have_rows('color')) : ?>
      <?php while (have_rows('color')) : the_row(); ?>
        <?php the_sub_field('select_type_color'); ?>
        <?php the_sub_field('select_solid_color'); ?>
        <?php the_sub_field('gradient_color'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>



<?php



// echo $test->title; 
?><br>
<?php
// echo $test->subtitle; 
?><br>
<?php
// echo $test->paragraph; 
?>