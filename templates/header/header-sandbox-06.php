    <header class="wrapper bg-soft-primary">
       <div class="alert bg-primary text-white alert-dismissible fade show rounded-0 mb-0 text-lg-center" role="alert">
          <div class="container">
             <div class="alert-inner p-0">
                <span class="badge badge-lg bg-white text-primary text-uppercase rounded me-2"><?php esc_html_e('Update', 'codeweber'); ?></span> <?php esc_html_e('New version of our product is finally', 'codeweber'); ?> <a href="#" class="alert-link link-white hover"> <?php esc_html_e('here', 'codeweber'); ?></a>!
             </div>
             <!-- /.alert-inner -->
          </div>
          <!-- /.container -->
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       <!-- /.alert -->
       <nav class="navbar navbar-expand-lg classic transparent navbar-light">
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
                   <li class="nav-item d-none d-md-block">
                      <a href="#" class="btn btn-sm btn-primary rounded"><?php esc_html_e('Free Trial', 'codeweber'); ?></a>
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
    </header>
    <!-- /header -->