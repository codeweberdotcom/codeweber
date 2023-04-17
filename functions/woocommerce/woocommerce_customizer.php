<?php

//Customizer_Woocommerce_Settings

function Customizer_Woocommerce_Settings($wp_customize)
{

   // Woocommerce Header
   if (class_exists('WooCommerce')) {
      // Header Control
      $wp_customize->add_setting(
         'woocommerce_header',
         array(
            'default'   => 'default',
         )
      );

      $wp_customize->add_control(
         'woocommerce_header',
         array(
            'section'  => 'codeweber_header_options',
            'label'    => __('Woocommerce Header', 'codeweber'),
            'type'     => 'select',
            'choices'  => array(
               'default' => 'Default',
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
               'sandbox-09_cw' => 'Header CW',
               'sandbox-woo-01' => 'Header Woo 1'
            )
         )
      );

      // Header Color Background
      $wp_customize->add_setting(
         'codeweber_woo_header_bg',
         array(
            'default'   => 'default',
         )
      );

      $wp_customize->add_control(
         'codeweber_woo_header_bg',
         array(
            'section'  => 'codeweber_header_options',
            'label'    => __(
               'Background Color',
               'codeweber'
            ),
            'type'     => 'select',
            'choices'  => array(
               'default'       => 'Default',
               ' bg-aqua'       => 'Aqua',
               ' bg-fuchsia'    => 'Fuchsia',
               ' bg-grape'      => 'Grape',
               ' bg-green'      => 'Green',
               ' bg-leaf'       => 'Leaf',
               ' bg-navy'       => 'Navy',
               ' bg-orange'     => 'Orange',
               ' bg-pink'       => 'Pink',
               ' bg-purple'     => 'Purple',
               ' bg-red'        => 'Red',
               ' bg-sky'        => 'Sky',
               ' bg-violet'     => 'Violet',
               ' bg-yellow'     => 'Yellow',
               ' bg-pinterest'  => 'Pinterest',
               ' bg-telegram' => 'Telegram',
               ' bg-whatsapp' => 'Whatsapp',
               ' bg-facebook' => 'Facebook',
               ' bg-dark'     => 'Dark',
               ' bg-light'     => 'Light',
               ' bg-primary'     => 'Primary',
               ' bg-soft-primary' => 'Soft Primary',
               ' bg-soft-light' => 'Soft Light',
               ' bg-soft-white' => 'Soft White',
               ' bg-soft-fuchsia' => 'Soft Fuchsia',
               ' bg-soft-green' => 'Soft Green',
               ' bg-soft-orange' => 'Soft Orange',
               ' bg-soft-pink' => 'Soft Pink',
               ' bg-soft-purple' => 'Soft Purple',
               ' bg-soft-red' => 'Soft Red',
               ' bg-soft-sky' => 'Soft Sky',
               ' bg-soft-violet' => 'Soft Violet',
               ' bg-soft-yellow' => 'Soft Yellow',
               ' bg-soft-ash' => 'Soft Ash',
               ' bg-soft-navy' => 'Soft Navy',
               ' bg-soft-grape' => 'Soft Grape',
               ' bg-soft-muted' => 'Soft Muted',
               ' bg-soft-telegram' => 'Soft Telegram',
               ' bg-soft-whatsapp' => 'Soft Whatsapp',
               ' bg-soft-facebook' => 'Soft Facebook',
               ' bg-soft-pinterest' => 'Soft Pinterest'

            )
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woocomerce_style',
         array(
            'default' => 'solid',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woocomerce_style',
         array(
            'type' => 'radio',
            'label' => esc_html__('Style Woocommerce Header', 'codeweber'),
            'section' => 'codeweber_header_options',
            'choices' => array(
               'solid' => esc_html__('Solid', 'codeweber'),
               'transparent' => esc_html__('Transparent', 'codeweber'),
            ),
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woocomerce_color',
         array(
            'default' => 'dark',
         )
      );

      $wp_customize->add_control(
         'codeweber_header_woocomerce_color',
         array(
            'type' => 'radio',
            'label' => esc_html__('Color Text Header', 'codeweber'),
            'section' => 'codeweber_header_options',
            'choices' => array(
               'dark' => esc_html__('Dark', 'codeweber'),
               'light' => esc_html__('Light', 'codeweber'),
            ),
         )
      );

      $wp_customize->add_setting(
         'codeweber_page_woocommerce_header',
         array(
            'default' => 'type_1',
         )
      );

      $wp_customize->add_control(
         'codeweber_page_woocommerce_header',
         array(
            'type' => 'radio',
            'label' => esc_html__('Secondary Header', 'codeweber'),
            'section' => 'codeweber_header_options',
            'choices' => array(
               'type_1' => esc_html__('Type 1', 'codeweber'),
               'type_2' => esc_html__('Type 2', 'codeweber'),
               'type_3' => esc_html__('Type 3', 'codeweber'),
               'type_4' => esc_html__('Type 4', 'codeweber'),
               'type_5' => esc_html__('Disable', 'codeweber'),
            ),
         )
      );
   }
}

add_action('customize_register', 'Customizer_Woocommerce_Settings');
