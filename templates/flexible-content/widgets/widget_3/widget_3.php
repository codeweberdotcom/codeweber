<?php
/* Add settings */
$settings = new Settings();

$settings->root_theme = get_template_directory_uri();
$settings->title = "About us.";
$settings->paragraph = 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'light';
//$settings->textcolor = 'white';
//$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF();
?>

<h4 class="widget-title mb-3"><?php echo $settings->title; ?></h4>
<p><?php echo $settings->paragraph; ?></p>