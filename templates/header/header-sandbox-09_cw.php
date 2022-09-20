    <header class="wrapper bg-light pt-1">
       <nav class="navbar navbar-expand-lg classic transparent navbar-light">
          <div class="container flex-lg-row flex-nowrap align-items-center">
             <div class="navbar-brand w-100">
                <a href="/">
                   <img src="<?php echo brk_logo_dark_link(); ?>" srcset="<?php echo brk_logo_dark_link(); ?>" alt="" />
                </a>
             </div>
             <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                   <h3 class="text-white fs-30 mb-0"><?php echo get_bloginfo('name'); ?></h3>
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
                   <li class="nav-item d-none d-md-block">
                      <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-call"><?php esc_html_e('Call Order', 'codeweber'); ?></a>
                   </li>
                   <li class="nav-item d-lg-none">
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


       <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
          <div class="offcanvas-header">
             <a href="/">
                <img src="<?php echo brk_logo_light_link(); ?>" srcset="<?php echo brk_logo_light_link(); ?>" alt="" />
             </a>
             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pb-6">
             <div class="widget mb-8">
                <p><?php the_field('tekst', 'option'); ?></p>
             </div>
             <!-- /.widget -->
             <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3"><?php esc_html_e('Contact Info', 'codeweber'); ?></h4>
                <address> <?php echo brk_adress(); ?> </address>
                <a href="mailto:<?php brk_email(); ?>"><?php echo brk_email(); ?></a><br />
                <?php echo brk_phone_one(); ?><br />
                <?php echo brk_phone_two(); ?><br />
             </div>
             <!-- /.widget -->
             <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                <?php get_template_part('templates/components/footer-menu-light', ''); ?>
             </div>
             <!-- /.widget -->
             <div class="widget">
                <h4 class="widget-title text-white mb-3"><?php esc_html_e('Follow Us', 'codeweber'); ?></h4>
                <nav class="nav social social-white">
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