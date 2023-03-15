    <header class="wrapper bg-soft-primary">
       <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none">
          <div class="container flex-lg-column">
             <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                <div class="navbar-brand">
                   <?php echo codeweber_logo(NULL, NULL, NULL); ?>
                </div>
                <div class="navbar-other ms-auto">
                   <ul class="navbar-nav flex-row align-items-center">
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                      <li class="nav-item dropdown language-select text-uppercase">
                         <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                         <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                         </ul>
                      </li>
                      <li class="nav-item d-lg-none">
                         <button class="hamburger offcanvas-nav-btn"><span></span></button>
                      </li>
                   </ul>
                   <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
             </div>
             <!-- /.d-flex -->
             <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                   <div class="offcanvas-header d-lg-none">
                      <?php echo codeweber_logo(NULL, NULL, NULL); ?>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body d-flex flex-column h-100">
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
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-auto w-100 d-none d-lg-block">
                   <nav class="nav social social-muted justify-content-end text-end">
                      <?php if (class_exists('ACF')) {
                           get_template_part('templates/components/socialicons', '');
                        }; ?>
                   </nav>
                   <!-- /.social -->
                </div>
                <!-- /.navbar-other -->
             </div>
             <!-- /.navbar-collapse-wrapper -->
          </div>
          <!-- /.container -->
       </nav>
       <!-- /.navbar -->
       <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
          <div class="offcanvas-header">
             <?php echo codeweber_logo(NULL, NULL, NULL); ?>
             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pb-6">
             <div class="widget mb-8">
                <p><?php esc_html_e('Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.', 'codeweber'); ?></p>
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
                <ul class="list-unstyled">
                   <li><a href="#">Our Story</a></li>
                   <li><a href="#">Terms of Use</a></li>
                   <li><a href="#">Privacy Policy</a></li>
                   <li><a href="#">Contact Us</a></li>
                </ul>
             </div>
             <!-- /.widget -->
             <div class="widget">
                <h4 class="widget-title text-white mb-3"><?php esc_html_e('CFollow Us', 'codeweber'); ?></h4>
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