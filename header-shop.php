<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php wp_head(); ?>
   <?php global $forms; ?>
   <?php $forms = array(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#sidebar-nav">
   <?php do_action('codeweber_start_body'); // Hook start body
   wp_body_open();
   sandbox_frame_open(); ?>
   <div id="content-wrapper" class="content-wrapper">
      <?php do_action('codeweber_start_content_wrapper'); // Hook start content wrapper



      if (get_field('cw_transparent_header') == 'default') {
         $params = ['style_nav' => get_theme_mod('codeweber_header_woocomerce_style')];
      } elseif (get_field('cw_transparent_header') == 'transparent') {
         $params = ['style_nav' => 'transparent'];
      } elseif ((get_field('cw_transparent_header') == 'solid')) {
         $params = ['style_nav' => 'solid'];
      }

      if (get_field('navbar_color') == 'dark') {
         $params['bg_nav'] = 'navbar-dark';
      } elseif (get_field('navbar_color') == 'light') {
         $params['bg_nav'] = 'navbar-light';
      } else {
         $params['bg_nav'] = 'navbar-dark';
      }


      if (get_theme_mod('woocommerce_header') == 'default') {
         get_template_part('templates/header/header', get_theme_mod('codeweber_header'), $params);
      } else {
         get_template_part('templates/header/header', get_theme_mod('woocommerce_header'), $params);
      }
      do_action('codeweber_after_header'); // Hook after header