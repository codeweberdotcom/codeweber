        <?php if ($args['style_nav'] == 'transparent') {
            $class_nav = 'position-absolute navbar-dark';
         }   ?>

        <header class="wrapper bg-soft-primary">
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
                       <li class="nav-item d-none d-md-block">
                          <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-signin"><?php esc_html_e('Sign In', 'codeweber'); ?></a>
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
           <div class="modal fade" id="modal-signin" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered modal-sm">
                 <div class="modal-content text-center">
                    <div class="modal-body">
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       <h2 class="mb-3 text-start"><?php esc_html_e('Welcome Back', 'codeweber'); ?></h2>
                       <p class="lead mb-6 text-start"><?php esc_html_e('Fill your email and password to sign in.', 'codeweber'); ?></p>
                       <form class="text-start mb-3">
                          <div class="form-floating mb-4">
                             <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                             <label for="loginEmail"><?php esc_html_e('Email', 'codeweber'); ?></label>
                          </div>
                          <div class="form-floating password-field mb-4">
                             <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                             <span class="password-toggle"><i class="uil uil-eye"></i></span>
                             <label for="loginPassword"><?php esc_html_e('Password', 'codeweber'); ?></label>
                          </div>
                          <a class="btn btn-primary <?php echo ButtonStyleCustomizer(); ?>rounded-pill btn-login w-100 mb-2"><?php esc_html_e('Sign In', 'codeweber'); ?></a>
                       </form>
                       <!-- /form -->
                       <p class="mb-1"><a href="#" class="hover"><?php esc_html_e('Forgot Password?', 'codeweber'); ?></a></p>
                       <p class="mb-0"><?php esc_html_e("Don't have an account?", 'codeweber'); ?> <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover"><?php esc_html_e('Sign up', 'codeweber'); ?></a></p>
                       <div class="divider-icon my-4"><?php esc_html_e('or', 'codeweber'); ?></div>
                       <nav class="nav social justify-content-center text-center">
                          <?php if (class_exists('ACF')) {
                              get_template_part('templates/components/socialicons', '');
                           }; ?>
                       </nav>
                       <!--/.social -->
                    </div>
                    <!--/.modal-content -->
                 </div>
                 <!--/.modal-body -->
              </div>
              <!--/.modal-dialog -->
           </div>
           <!--/.modal -->
           <div class="modal fade" id="modal-signup" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered modal-sm">
                 <div class="modal-content text-center">
                    <div class="modal-body">
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       <h2 class="mb-3 text-start"><?php esc_html_e('Sign up to', 'codeweber'); ?> <?php echo get_bloginfo('name'); ?></h2>
                       <p class="lead mb-6 text-start"><?php esc_html_e('Registration takes less than a minute.', 'codeweber'); ?></p>
                       <form class="text-start mb-3">
                          <div class="form-floating mb-4">
                             <input type="text" class="form-control" placeholder="Name" id="loginName">
                             <label for="loginName"><?php esc_html_e('Name', 'codeweber'); ?></label>
                          </div>
                          <div class="form-floating mb-4">
                             <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                             <label for="loginEmail"><?php esc_html_e('Email', 'codeweber'); ?></label>
                          </div>
                          <div class="form-floating password-field mb-4">
                             <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                             <span class="password-toggle"><i class="uil uil-eye"></i></span>
                             <label for="loginPassword"><?php esc_html_e('Password', 'codeweber'); ?></label>
                          </div>
                          <div class="form-floating password-field mb-4">
                             <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                             <span class="password-toggle"><i class="uil uil-eye"></i></span>
                             <label for="loginPasswordConfirm"><?php esc_html_e('Confirm Password', 'codeweber'); ?></label>
                          </div>
                          <a class="btn btn-primary <?php echo ButtonStyleCustomizer(); ?> btn-login w-100 mb-2"><?php esc_html_e('Sign Up', 'codeweber'); ?></a>
                       </form>
                       <!-- /form -->
                       <p class="mb-0"><?php esc_html_e('Already have an account?', 'codeweber'); ?> <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover"><?php esc_html_e('Sign in', 'codeweber'); ?></a></p>
                       <div class="divider-icon my-4"><?php esc_html_e('or', 'codeweber'); ?></div>
                       <nav class="nav social justify-content-center text-center">
                          <?php if (class_exists('ACF')) {
                              get_template_part('templates/components/socialicons', '');
                           }; ?>
                       </nav>
                       <!--/.social -->
                    </div>
                    <!--/.modal-content -->
                 </div>
                 <!--/.modal-body -->
              </div>
              <!--/.modal-dialog -->
           </div>
           <!--/.modal -->
           <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
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
        </header>
        <!-- /header -->