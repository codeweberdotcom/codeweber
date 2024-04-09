<?php

global $codeweber;

$nav_color = $codeweber['page_settings']['nav_color'];
$logo_style = $codeweber['page_settings']['header_style'];

if ($logo_style == 'transparent') {
   $class_nav = 'position-absolute transparent ';
   $class_nav .= $nav_color;
} elseif ($logo_style == 'solid') {
   $class_nav = $nav_color;
} else {
   $class_nav = NULL;
}

if ($codeweber['page_settings']['nav_color'] == 'navbar-dark') {
   $color_logo = 'light';
} elseif ($codeweber['page_settings']['nav_color'] == 'navbar-light') {
   $color_logo = 'dark';
} else {
   $color_logo = 'dark';
}

if ($codeweber['page_settings']['header_bg_color'] !== 'default') {
   $class_header = ' ' . $codeweber['page_settings']['header_bg_color'];
} else {
   $class_header = NULL;
}
?>

<header class="wrapper<?php echo $class_header; ?>">
   <nav class="navbar navbar-expand-lg classic <?php echo $class_nav; ?>">
      <div class="container flex-lg-row flex-nowrap align-items-center">
         <div class="navbar-brand w-100 pe-3">
            <?php echo codeweber_logo($color_logo, NULL, $logo_style); ?>
         </div>
         <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
               <?php echo codeweber_logo('light', NULL, NULL); ?>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
               <?php get_template_part('templates/components/main-menu', ''); ?>
               <!-- /.navbar-nav -->
               <div class="offcanvas-footer d-lg-none">
                  <div>
                     <?php md_offcanvas_contact_option(); ?>
                     <?php md_social_icons_option(); ?>
                     <!-- /.social -->
                  </div>
               </div>
               <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
         </div>
         <!-- /.navbar-collapse -->
         <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
               <li class="nav-item d-none d-lg-block">
                  <ul class="navbar-nav flex-row align-items-center ms-auto">
                     <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
               </li>
            </ul>
            <!-- /.navbar-nav -->

            </li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>

            <?php do_action('before_header_nav_woo'); ?>
            <?php do_action('after_header_nav_woo'); ?>

            <li class="nav-item">
               <?php if (is_active_sidebar('header_right')) : ?>
                  <?php dynamic_sidebar('header_right'); ?>
               <?php endif; ?>
            </li>
            <li class="nav-item d-lg-none ms-0">
               <button class="hamburger offcanvas-nav-btn"><span></span></button>
            </li>
            </ul>
            <!-- /.navbar-nav -->

         </div>
         <?php do_action('before_header_three'); ?>
         <!-- /.navbar-other -->

      </div>
      <!-- /.container -->
   </nav>
   <!-- /.navbar -->



   <?php if (class_exists('WooCommerce')) { ?>
      <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true" aria-modal="true" role="dialog">
         <div class="offcanvas_cart_wrapper">
            <?php do_action('codeweber_offcanvas_cart_start'); ?>
            <div class="offcanvas-header">
               <div class="mb-0 h3"><?php echo esc_html__('Your cart', 'codeweber'); ?> </div>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <?php woocommerce_mini_cart(); ?>
            <?php do_action('codeweber_offcanvas_cart_end'); ?>
         </div>
      </div>
   <?php } ?>



   <div class="offcanvas offcanvas-end text-dark bg-light" id="offcanvas-info" data-bs-scroll="true">
      <div class="offcanvas-header">
         <?php echo codeweber_logo('dark', NULL, NULL); ?>
         <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>


      <div class="offcanvas-body pb-6">
         <?php do_action('codeweber_offcanvas_start'); ?>
         <?php echo about_company_option(); ?>
         <!-- /.widget -->
         <?php offcanvas_contact_option(); ?>
         <!-- /.widget -->
         <?php offcanvas_menu_option(); ?>
         <!-- /.widget -->
         <?php social_icons_option(); ?>
         <!-- /.widget -->
         <?php do_action('codeweber_offcanvas_end'); ?>
      </div>
      <!-- /.offcanvas-body -->


   </div>
   <!-- /.offcanvas -->




   <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
      <div class="container d-flex flex-row py-6">
         <?php get_search_form(); ?>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- /.container -->
   </div>
   <!-- /.offcanvas -->
</header>
<!-- /header -->