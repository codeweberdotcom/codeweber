    <header class="wrapper bg-gray">
       <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
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
             <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                   <li class="nav-item">
                      <nav class="nav social social-muted justify-content-end text-end">
                        <?php if (class_exists('ACF')) { 
                           get_template_part('templates/components/socialicons', '');
                              }; ?>
                      </nav>
                      <!-- /.social -->
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
    </header>
    <!-- /header -->