<?php
$image = new ImageCustomizable;
$image->root_theme = get_template_directory_uri();
$image->imagefull = get_template_directory_uri() . '/dist/img/photos/b8.jpg';
$image->imagesmall = get_template_directory_uri() . '/dist/img/photos/b8.jpg';
$image->imagebigsize = 'brk_big';
$image->imagethumbsize = 'sandbox_slider_2';
$image->image();
