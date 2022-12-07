<?php $test = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with Our Solutions.',
    'subtitle' => 'Ge help our clients to increase their website traffic, rankings and visibility in search results',
    'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
  )
);

echo $test->title; ?><br>
<?php
echo $test->subtitle; ?><br>
<?php
echo $test->paragraph; ?>