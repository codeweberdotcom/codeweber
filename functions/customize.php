<?php

function codeweber_register_theme_customizer($wp_customize)
{

   // Color Section
   $wp_customize->add_section(
      'codeweber_color_options',
      array(
         'title'     => __('Color Options', 'codeweber'),
         'priority'  => 2
      )
   );

   // Color Control
   $wp_customize->add_setting(
      'codeweber_color',
      array(
         'default'   => 'green',
      )
   );

   $wp_customize->add_control(
      'codeweber_color',
      array(
         'section'  => 'codeweber_color_options',
         'label'    => __('Color Theme', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'aqua'       => 'Aqua',
            'fuchsia'    => 'Fuchsia',
            'grape'      => 'Grape',
            'green'      => 'Green',
            'leaf'       => 'Leaf',
            'navy'       => 'Navy',
            'orange'     => 'Orange',
            'pink'       => 'Pink',
            'purple'     => 'Purple',
            'red'        => 'Red',
            'sky'        => 'Sky',
            'violet'     => 'Violet',
            'yellow'     => 'Yellow',
            'custom'     => 'Custom'
         )
      )
   );


   // Header Section
   $wp_customize->add_section(
      'codeweber_header_options',
      array(
         'title'     => __('Header Options', 'codeweber'),
         'priority'  => 1
      )
   );


   // Frame Control
   $wp_customize->add_setting(
      'codeweber_frame_content',
      array(
         'default'    =>  'true',
      )
   );

   $wp_customize->add_control(
      'codeweber_frame_content',
      array(
         'section'   => 'codeweber_header_options',
         'label'     => 'Content Frame?',
         'type'      => 'checkbox',
      )
   );


   // Header Control
   $wp_customize->add_setting(
      'codeweber_header',
      array(
         'default'   => 'sandbox-02',
      )
   );

   $wp_customize->add_control(
      'codeweber_header',
      array(
         'section'  => 'codeweber_header_options',
         'label'    => __('Header', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'sandbox-02'   => 'Header 02',
            'sandbox-03'   => 'Header 03',
            'sandbox-04'   => 'Header 04',
            'sandbox-05'   => 'Header 05',
            'sandbox-06'   => 'Header 06',
            'sandbox-07'   => 'Header 07',
            'sandbox-08'   => 'Header 08',
            'sandbox-09'   => 'Header 09',
            'sandbox-10'   => 'Header 10',
            'sandbox-11'   => 'Header 11',
            'sandbox-12'   => 'Header 12',
            'sandbox-13'   => 'Header 13',
            'sandbox-14'   => 'Header 14',
            'sandbox-15'   => 'Header 15',
            'sandbox-16'   => 'Header 16',
            'sandbox-17'   => 'Header 17',
            'sandbox-18'   => 'Header 18',
            'sandbox-19'   => 'Header 19',
            'sandbox-20'   => 'Header 20',
            'sandbox-21'   => 'Header 21',
            'sandbox-22'   => 'Header 22',
            'sandbox-23'   => 'Header 23',
            'sandbox-24'   => 'Header 24',
            'sandbox-25'   => 'Header 25',
            'sandbox-26'   => 'Header 26',
            'sandbox-27'   => 'Header 27',
            'sandbox-09_cw' => 'Header CW'
         )
      )
   );
}
add_action('customize_register', 'codeweber_register_theme_customizer');


function change_header()
{
   get_template_part('templates/header/header', get_theme_mod('codeweber_header'));
}

add_action('codeweber_header', 'change_header', 10);




/// https://awhitepixel.com/blog/compile-scss-with-php-add-variables-to-wordpress-customizer/

add_action('customize_register', function ($wp_customize) {
   $wp_customize->add_section('theme-variables', [
      'title' => __('Theme Variables', 'txtdomain'),
      'priority' => 25
   ]);

   $wp_customize->add_setting('theme-main', ['default' => '#594c74']);
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-main', [
      'section' => 'theme-variables',
      'label' => __('Main theme color', 'txtdomain'),
      'priority' => 10
   ]));

   $wp_customize->add_setting('theme-secondary', ['default' => '#555']);
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-secondary', [
      'section' => 'theme-variables',
      'label' => __('Secondary theme color', 'txtdomain'),
      'priority' => 20
   ]));
});
