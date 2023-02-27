<?php

function codeweber_register_theme_customizer($wp_customize)
{

   /// https://stackoverflow.com/questions/62850036/wordpress-add-second-logo-to-customizer

   $wp_customize->get_setting('blogname')->transport         = 'postMessage';
   $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
   $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

   if (isset($wp_customize->selective_refresh)) {
      $wp_customize->selective_refresh->add_partial(
         'blogname',
         array(
            'selector'        => '.site-title a',
            'render_callback' => 'mytheme_customize_partial_blogname',
         )
      );
      $wp_customize->selective_refresh->add_partial(
         'blogdescription',
         array(
            'selector'        => '.site-description',
            'render_callback' => 'mytheme_customize_partial_blogdescription',
         )
      );
   }

   $wp_customize->add_setting('light_logo');
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'light_logo', array(
      'label' => __('Light Logo', 'codeweber'),
      'section' => 'title_tagline',
      'settings' => 'light_logo',
      'render_callback' => 'mytheme_customize_partial_blogname',
      'priority' => 8
   )));


   /*  <?php the_custom_logo(); ?>
       <img src="<?php echo get_theme_mod('light_logo') ?>" class="dark-logo" alt="logo codeweber"> */
   ///


   // Button Section
   $wp_customize->add_section(
      'codeweber_button_options',
      array(
         'title'     => __('Button Options', 'codeweber'),
         'priority'  => 3
      )
   );

   // Button Form

   $wp_customize->add_setting('codeweber_button_form', array(
      'default' => 'rounded-pill',
   ));

   $wp_customize->add_control('codeweber_button_form', array(
      'type' => 'radio',
      'section' => 'codeweber_button_options', // Add a default or your own section
      'label' => __('Button style', 'codeweber'),
      //'description' => __('This is a custom radio input.'),
      'choices'    => array(
         'rounded-pill' => __('Rounded-pill', 'codeweber'),
         'rounded' =>  __('Rounded', 'codeweber'),
         'rounded-0' =>  __('Squared', 'codeweber'),
      ),
   ));

   // Button Size

   $wp_customize->add_setting('codeweber_button_size', array(
      'default' => 'btn-lg',
   ));

   $wp_customize->add_control('codeweber_button_size', array(
      'type' => 'radio',
      'section' => 'codeweber_button_options', // Add a default or your own section
      'label' => __('Button Size', 'codeweber'),
      //'description' => __('This is a custom radio input.'),
      'choices'    => array(
         'btn-lg' => __('Button Big', 'codeweber'),
         'btn-md' => __('Button Middle', 'codeweber'),
         'btn-sm' => __('Button Small', 'codeweber'),
      ),
   ));


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


   // Image Section
   $wp_customize->add_section(
      'codeweber_image_options',
      array(
         'title'     => __('Image Options', 'codeweber'),
         'priority'  => 2
      )
   );

   // Image Control
   $wp_customize->add_setting(
      'codeweber_image',
      array(
         'default'   => 'rounded',
      )
   );

   // Image Control
   $wp_customize->add_control(
      'codeweber_image',
      array(
         'section'  => 'codeweber_image_options',
         'label'    => __('Image Form', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'rounded'       => 'rounded',
            'rounded-pill'    => 'rounded-pill',
            'rounded-0'      => 'rounded-0',
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
         'label'    => __('Main Header', 'codeweber'),
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
            'sandbox-09_cw' => 'Header CW',
            'sandbox-woo-01' => 'Header Woo 1'
         )
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_style',
      array(
         'default' => 'solid',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_style',
      array(
         'type' => 'radio',
         'label' => esc_html__('Style Main Header', 'codeweber'),
         'section' => 'codeweber_header_options',
         'choices' => array(
            'solid' => esc_html__('Solid', 'codeweber'),
            'transparent' => esc_html__('Transparent', 'codeweber'),
         ),
      )
   );

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
      'codeweber_page_header',
      array(
         'default' => 'type_1',
      )
   );


   $wp_customize->add_control(
      'codeweber_page_header',
      array(
         'type' => 'radio',
         'label' => esc_html__('Secondary Header', 'codeweber'),
         'section' => 'codeweber_header_options',
         'choices' => array(
            'type_1' => esc_html__('Type 1', 'codeweber'),
            'type_2' => esc_html__('Type 2', 'codeweber'),
            'type_3' => esc_html__('Type 3', 'codeweber'),
            'type_4' => esc_html__('Type 4', 'codeweber'),
         ),
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



function codeweber_cpt_customize_register($wp_customize)
{

   // add a panel
   $wp_customize->add_panel('cpt-panel', array(
      'title'       => __('Settings CPT', 'codeweber'),
      'description' => __('Settings Custom Post Type', 'codeweber'),
   ));


   // Add blog section to our panel
   $wp_customize->add_section('blog-section', array(
      'title' => __('Blog', 'codeweber'),
      'description' => __('blog settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // blog Control
   $wp_customize->add_setting(
      'blog_template',
      array(
         'choices'  => array(
            'default'   => 'Template 1',
         )
      )
   );

   $wp_customize->add_control(
      'blog_template',
      array(
         'section' => 'blog-section',
         'label'    => __('Blog archive template', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'template_1'   => 'Template 1',
            'template_2'   => 'Template 2',
            'template_3'   => 'Template 3',
         )
      )
   );

   // Add project section to our panel
   $wp_customize->add_section('project-section', array(
      'title' => __('Projects', 'codeweber'),
      'description' => __('project settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // Project Control
   $wp_customize->add_setting(
      'project_template',
      array(
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
         'choices'  => array(
            'default'   => 'Template 1',
         )
      )
   );

   $wp_customize->add_control(
      'project_template',
      array(
         'section' => 'project-section',
         'label'    => __('Projects archive template', 'codeweber'),
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


   $wp_customize->add_setting('project_description', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('project_description', array(
      'type' => 'textarea',
      'priority' => 20,
      'label' => __('Project Archive Description', 'codeweber'),
      'section' => 'project-section',
   ));


   $wp_customize->add_setting('project_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('project_title', array(
      'type' => 'textarea',
      'priority' => 15,
      'label' => __('Project Archive Title', 'codeweber'),
      'section' => 'project-section',
   ));



   // Add service section to our panel
   $wp_customize->add_section('services-section', array(
      'title' => __('Services', 'codeweber'),
      'description' => __('Services settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));


   // Service Control
   $wp_customize->add_setting(
      'service_template',
      array(
         'choices'  => array(
            'default'   => 'Template 1',
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
         )
      )
   );


   // Add service section to our panel
   $wp_customize->add_section('testimonial-section', array(
      'title' => __('Testimonials', 'codeweber'),
      'description' => __('Testimonials settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));


   // Service Control
   $wp_customize->add_setting(
      'testimonial_template',
      array(
         'choices'  => array(
            'default'   => 'Template 1',
         )
      )
   );

   $wp_customize->add_control(
      'testimonial_template',
      array(
         'section' => 'testimonial-section',
         'label'    => __('Testimonials archive template', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'template_1'   => 'Template 1',
            'template_2'   => 'Template 2',
            'template_3'   => 'Template 3',
         )
      )
   );
}

add_action('customize_register', 'codeweber_cpt_customize_register');
