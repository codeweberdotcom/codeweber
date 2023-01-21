<?php if ($args['style_nav'] == 'transparent') {
   $class_nav = 'position-absolute navbar-dark';
} else {
   $class_nav = 'navbar-light';
};   ?>

<header class="wrapper">
   <nav class="navbar navbar-expand-lg classic transparent navbar-light <?php echo $class_nav; ?>">
      <div class="container flex-lg-row flex-nowrap align-items-center">
         <div class="navbar-brand w-100 pe-3">
            <?php echo codeweber_logo_dark_link(); ?>
         </div>
         <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
               <?php echo codeweber_logo_light_link(); ?>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
               <?php get_template_part('templates/components/main-menu', ''); ?>
               <!-- /.navbar-nav -->
               <div class="offcanvas-footer d-lg-none">
                  <div>
                     <a href="mailto:<?php echo brk_email(); ?>" class="link-inverse"><?php echo brk_email(); ?></a>
                     <br />
                     <?php echo brk_phone_one(); ?><br />
                     <?php echo brk_phone_two(); ?><br />
                     <nav class="nav social social-white mt-4">
                        <?php if (class_exists('ACF')) {
                           get_template_part('templates/components/socialicons', '');
                        }; ?>
                     </nav>
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
               <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
               <li class="nav-item">
                  <ul class="navbar-nav flex-row align-items-center ms-auto">
                     <li class="nav-item dropdown language-select">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user-circle"></i></a>
                        <ul class="dropdown-menu">
                           <?php if (is_user_logged_in()) { ?>
                              <li class="nav-item">
                                 <?php
                                 global $current_user;
                                 $current_user = wp_get_current_user();
                                 echo '<p class="dropdown-item disabled mb-0">Здравствуйте, ' . $current_user->display_name . '</p>';
                                 ?>
                              </li>
                           <?php }; ?>
                           <hr class="my-1" />
                           <li class="nav-item">
                              <?php if (is_user_logged_in()) { ?>
                                 <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="dropdown-item" title="<?php _e('My Account', 'codeweber'); ?>"><?php _e('My Account', 'codeweber'); ?></a>
                              <?php } else { ?>
                                 <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="dropdown-item" title="<?php _e('Login / Register', 'codeweber'); ?>"><?php _e('Login / Register', 'codeweber'); ?></a>
                              <?php } ?>
                           </li>
                           <?php if (is_user_logged_in()) { ?>
                              <li class="nav-item"><a class="dropdown-item" href="<?php echo wc_get_account_endpoint_url('orders'); ?>" title="<?php _e('Orders', 'codeweber'); ?>"><?php _e('Orders', 'codeweber'); ?></a></li>
                           <?php }; ?>

                           <li class="nav-item">
                              <a class="dropdown-item" href="<?php echo wc_get_cart_url() ?>" title="<?php _e('Cart', 'codeweber'); ?>"><?php _e('Cart', 'codeweber'); ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item" href="<?php echo wc_get_checkout_url() ?>" title="<?php _e('Checkout', 'codeweber'); ?>"><?php _e('Checkout', 'codeweber'); ?></a>
                           </li>
                           <?php if (is_user_logged_in()) {
                              echo '<li class="nav-item"><a class="dropdown-item" href="' . wp_logout_url(get_permalink(wc_get_page_id(' myaccount'))) . '" title="' . __('Checkout', 'codeweber') . '">' . __('Logout', 'codeweber') . '</a></li>';
                           }
                           ?>
                        </ul>
                     </li>
                  </ul>
                  <!-- /.navbar-nav -->
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link position-relative d-flex flex-row align-items-center" id="header-cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                     <i class="uil uil-shopping-cart"></i>
                     <span class="badge badge-cart bg-primary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </a>
               </li>
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
         <!-- /.navbar-other -->

      </div>
      <!-- /.container -->
   </nav>
   <!-- /.navbar -->
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

   <div class="offcanvas offcanvas-end text-dark bg-light" id="offcanvas-info" data-bs-scroll="true">
      <div class="offcanvas-header">
         <?php echo codeweber_logo_light_link(); ?>
         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body pb-6">
         <div class="widget mb-8">
            <p><?php esc_html_e('Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.', 'codeweber'); ?></p>
         </div>
         <!-- /.widget -->
         <div class="widget mb-8">
            <div class="widget-title text-white mb-3 h4"><?php esc_html_e('Contact Info', 'codeweber'); ?></div>
            <address> <?php echo brk_adress(); ?> </address>
            <a href="mailto:<?php brk_email(); ?>"><?php echo brk_email(); ?></a><br />
            <?php echo brk_phone_one(); ?><br />
            <?php echo brk_phone_two(); ?><br />
         </div>
         <!-- /.widget -->
         <div class="widget mb-8">
            <div class="widget-title text-white mb-3 h4"><?php esc_html_e('Learn More', 'codeweber'); ?></div>
            <ul class="list-unstyled">
               <li><a href="#">Our Story</a></li>
               <li><a href="#">Terms of Use</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
         </div>
         <!-- /.widget -->
         <div class="widget">
            <div class="widget-title text-white mb-3 h4"><?php esc_html_e('Follow Us', 'codeweber'); ?></div>

            <nav class="nav social">
               <?php if (class_exists('ACF')) {
                  get_template_part('templates/components/socialicons', '');
               }; ?>
            </nav>
            <!-- /.social -->
         </div>
         <!-- /.widget -->
      </div>
      <!-- /.offcanvas-body -->
   </div>
   <!-- /.offcanvas -->
</header>
<!-- /header -->