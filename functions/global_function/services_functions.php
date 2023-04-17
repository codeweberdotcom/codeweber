<?php

//CPT Function Customizer Settings

function CPT_Services_Settings($wp_customize)
{

   // Add service section to our panel
   $wp_customize->add_section('services-section', array(
      'title' => __('Services', 'codeweber'),
      'description' => __('Services settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // Service Archive Template
   $wp_customize->add_setting(
      'service_template',
      array(
         'choices'  => array(
            'default'   => 'template_1',
         )
      )
   );

   $wp_customize->add_control(
      'service_template',
      array(
         'section' => 'services-section',
         'label'    => __('Services archive template', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'template_1'   => 'Template 1',
            'template_2'   => 'Template 2',
            'template_3'   => 'Template 3',
            'template_4'   => 'Template 4',
            'template_5'   => 'Template 5',
         )
      )
   );

   // Service Archive Description
   $wp_customize->add_setting('service_description', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('service_description', array(
      'type' => 'textarea',
      'priority' => 20,
      'label' => __('Service Archive Description', 'codeweber'),
      'section' => 'services-section',
   ));


   //Service Archive Title
   $wp_customize->add_setting('service_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));


   $wp_customize->add_control('service_title', array(
      'type' => 'textarea',
      'priority' => 15,
      'label' => __('Service Archive Title', 'codeweber'),
      'section' => 'services-section',
   ));


   //

   $wp_customize->add_setting(
      'codeweber_header_service_style',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_service_style',
      array(
         'type' => 'radio',
         'label' => esc_html__('Style Service Header', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'solid' => esc_html__('Solid', 'codeweber'),
            'transparent' => esc_html__('Transparent', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_service_color',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_service_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Color Text Header', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'dark' => esc_html__('Dark', 'codeweber'),
            'light' => esc_html__('Light', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   // Header Color Background
   $wp_customize->add_setting(
      'codeweber_header_service_bg',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_header_service_bg',
      array(
         'section'  => 'services-section',
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
      'codeweber_header_service_bread',
      array(
         'default' => 'on',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_service_bread',
      array(
         'type' => 'radio',
         'label' => esc_html__('Breadcrumbs', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'on' => esc_html__('On', 'codeweber'),
            'off' => esc_html__('Off', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_header_service_angle',
      array(
         'default' => 'on',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_service_angle',
      array(
         'type' => 'radio',
         'label' => esc_html__('Angle Page Header', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'on' => esc_html__('On', 'codeweber'),
            'off' => esc_html__('Off', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_service_bread_color',
      array(
         'default' => 'dark',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_service_bread_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Text Page Header color', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'white' => esc_html__('Light', 'codeweber'),
            'dark' => esc_html__('Dark', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_page_service_header',
      array(
         'default' => 'type_1',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_service_header',
      array(
         'type' => 'radio',
         'label' => esc_html__('Secondary Header', 'codeweber'),
         'section' => 'services-section',
         'choices' => array(
            'type_1' => esc_html__('Type 1', 'codeweber'),
            'type_2' => esc_html__('Type 2', 'codeweber'),
            'type_3' => esc_html__('Type 3', 'codeweber'),
            'type_4' => esc_html__('Type 4', 'codeweber'),
            'type_5' => esc_html__('Type 5', 'codeweber'),
            'type_6' => esc_html__('Type 6', 'codeweber'),
            'type_7' => esc_html__('Type 7', 'codeweber'),
            'type_8' => esc_html__('Type 8', 'codeweber'),
            'disable' => esc_html__('Disable', 'codeweber'),
         ),
      )
   );


   // Color Control Page Background
   $wp_customize->add_setting(
      'codeweber_page_service_header_bg',
      array(
         'default'   => 'light',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_service_header_bg',
      array(
         'section'  => 'services-section',
         'label'    => __('Background Color', 'codeweber'),
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
            'pinterest'  => 'Pinterest',
            'telegram' => 'Telegram',
            'whatsapp' => 'Whatsapp',
            'facebook' => 'Facebook',
            'dark'     => 'Dark',
            'light'     => 'Light',
            'primary'     => 'Primary',
            'soft-primary' => 'Soft Primary',
            'soft-light' => 'Soft Light',
            'soft-white' => 'Soft White',
            'soft-fuchsia' => 'Soft Fuchsia',
            'soft-green' => 'Soft Green',
            'soft-orange' => 'Soft Orange',
            'soft-pink' => 'Soft Pink',
            'soft-purple' => 'Soft Purple',
            'soft-red' => 'Soft Red',
            'soft-sky' => 'Soft Sky',
            'soft-violet' => 'Soft Violet',
            'soft-yellow' => 'Soft Yellow',
            'soft-ash' => 'Soft Ash',
            'soft-navy' => 'Soft Navy',
            'soft-grape' => 'Soft Grape',
            'soft-muted' => 'Soft Muted',
            'soft-telegram' => 'Soft Telegram',
            'soft-whatsapp' => 'Soft Whatsapp',
            'soft-facebook' => 'Soft Facebook',
            'soft-pinterest' => 'Soft Pinterest'
         )
      )
   );


   // Image Background Service Page Header
   $wp_customize->add_setting('image_control_one', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));
   $wp_customize->add_control(
      new WP_Customize_Image_Control($wp_customize, 'image_control_one', array(
         'label' => __('Page Header Service Background', 'codeweber'),
         'section' => 'services-section',
         'settings' => 'image_control_one',
      ))
   );
}

add_action('customize_register', 'CPT_Services_Settings');
