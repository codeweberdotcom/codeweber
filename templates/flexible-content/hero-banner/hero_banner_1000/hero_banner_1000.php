<?php
$array = array(
   array(get_template_directory_uri() . '/dist/img/photos/about3.jpg', 'sandbox_hero_11', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about13.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
   array(get_template_directory_uri() . '/dist/img/photos/about2.jpg', 'sandbox_hero_11', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
   array(get_template_directory_uri() . '/dist/img/photos/about3.jpg', 'sandbox_hero_11', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
   array(get_template_directory_uri() . '/dist/img/photos/about4.jpg', 'sandbox_hero_11', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about4.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
   array(get_template_directory_uri() . '/dist/img/photos/about5.jpg', 'sandbox_hero_11', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure>'),
);

$ttt = new CW_MultiImage($array);


if (isset($ttt->final_images_array[0])) {
   echo $ttt->final_images_array[0];
}


if (isset($ttt->final_images_array[1])) {
   echo $ttt->final_images_array[1];
}


if (isset($ttt->final_images_array[2])) {
   echo $ttt->final_images_array[2];
}

if (isset($ttt->final_images_array[3])) {
   echo $ttt->final_images_array[3];
}

if (isset($ttt->final_images_array[4])) {
   echo $ttt->final_images_array[4];
}


if (isset($ttt->final_images_array[5])) {
   echo $ttt->final_images_array[5];
}

if (isset($ttt->final_images_array[6])) {
   echo $ttt->final_images_array[6];
}
