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
         'label'     => __('Content Frame?', 'codeweber'),
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


   // Header Section
   $wp_customize->add_section(
      'codeweber_footer_options',
      array(
         'title'     => __('Footer Options', 'codeweber'),
         'priority'  => 1
      )
   );

   // Footer Control
   $wp_customize->add_setting(
      'codeweber_footer',
      array(
         'default'   => 'sandbox-1',
      )
   );

   $wp_customize->add_control(
      'codeweber_footer',
      array(
         'section'  => 'codeweber_footer_options',
         'label'    => __('Footer', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'sandbox-1'   => 'Footer 01',
            'sandbox-2-6'   => 'Footer 02-06',
            'sandbox-3'   => 'Footer 03',
            'sandbox-4'   => 'Footer 04',
            'sandbox-5'   => 'Footer 05',
            'sandbox-7'   => 'Footer 07',
            'sandbox-8'   => 'Footer 08',
            'sandbox-9'   => 'Footer 09',
            'sandbox-10'   => 'Footer 10',
            'sandbox-11'   => 'Footer 11',
            'sandbox-12'   => 'Footer 12',
            'sandbox-13'   => 'Footer 13',
            'sandbox-14'   => 'Footer 14',
            'sandbox-15'   => 'Footer 15',
            'sandbox-16'   => 'Footer 16',
            'sandbox-17'   => 'Footer 17',
            'sandbox-18'   => 'Footer 18',
            'sandbox-19'   => 'Footer 19',
            'sandbox-20'   => 'Footer 20',
            'sandbox-21'   => 'Footer 21',
            'sandbox-22'   => 'Footer 22',
            'sandbox-25_cw'   => 'Footer 25_CW',

         )
      )
   );
}
add_action('customize_register', 'codeweber_register_theme_customizer');



// --- Function Change Header --- //

function change_header()
{
   get_template_part('templates/header/header', get_theme_mod('codeweber_header'));
}

add_action('codeweber_header', 'change_header', 10);




// --- Function Change Footer --- //

function change_footer()
{
   get_template_part('templates/footer/footer', get_theme_mod('codeweber_footer'));
}

add_action('codeweber_footer_start', 'change_footer', 10);
