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



$but = new CW_Buttons;

printr($but);

echo $but->final_button;




echo $test->title; ?><br>
<?php
echo $test->subtitle; ?><br>
<?php
echo $test->paragraph; ?>