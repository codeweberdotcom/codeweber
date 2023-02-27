    <header class="wrapper bg-gray">
       <nav class="navbar navbar-expand-lg extended extended-alt navbar-light navbar-bg-light">
          <div class="container flex-lg-column">
             <div class="topbar d-flex flex-row justify-content-lg-center align-items-center">
                <div class="navbar-brand">
                   <?php echo codeweber_logo(NULL, NULL, NULL); ?>
                </div>
             </div>
             <!-- /.d-flex -->
             <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center justify-content-between">
                <div class="navbar-other w-100 d-none d-lg-block">
                   <nav class="nav social social-muted">
                      <?php if (class_exists('ACF')) {
                           get_template_part('templates/components/socialicons', '');
                        }; ?>
                   </nav>
                   <!-- /.social -->
                </div>
                <!-- /.navbar-other -->
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
                <div class="navbar-other w-100 d-flex">
                   <ul class="navbar-nav flex-row align-items-center ms-auto">
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                      <li class="nav-item d-lg-none">
                         <button class="hamburger offcanvas-nav-btn"><span></span></button>
                      </li>
                   </ul>
                   <!-- /.navbar-nav -->
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
       <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
          <div class="container d-flex flex-row py-6">
             <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
             </form>
             <!-- /.search-form -->
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <!-- /.container -->
       </div>
       <!-- /.offcanvas -->
    </header>
    <!-- /header -->