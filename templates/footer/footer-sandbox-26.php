  <footer class="bg-white">
     <div class="container pt-8 pt-md-10 pb-7">
        <div class="row gx-lg-0 gy-6">
           <div class="col-lg-4">
              <div class="widget">
                 <img class="mb-4" src="<?php echo brk_logo_dark_link(); ?>" srcset="<?php echo brk_logo_dark_link(); ?>" alt="" />
                 <p class="lead mb-0"><?php esc_html_e('We are trusted by over 5000+ clients. Join them by using our services and grow your business.', 'codeweber'); ?></p>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-lg-3 offset-lg-2">
              <div class="widget">
                 <div class="d-flex flex-row">
                    <div>
                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                       <h5 class="mb-1">Phone</h5>
                       <p class="mb-0"><?php echo brk_phone_one(); ?><br />
                          <?php echo brk_phone_two(); ?><br /></p>
                    </div>
                 </div>
                 <!--/div -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-lg-3">
              <div class="widget">
                 <div class="d-flex flex-row">
                    <div>
                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div class="align-self-start justify-content-start">
                       <h5 class="mb-1"><?php esc_html_e('Address', 'codeweber'); ?></h5>
                       <address><?php echo brk_adress(); ?></address>
                    </div>
                 </div>
                 <!--/div -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <hr class="mt-13 mt-md-14 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
           <p class="mb-2 mb-lg-0"><a class="link-body" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                 © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
              <br class="d-block d-lg-none" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
           </p>
           <nav class="nav social social-muted mb-0 text-md-end">
              <?php if (class_exists('ACF')) {
                  get_template_part('templates/components/socialicons', '');
               }; ?>
           </nav>
           <!-- /.social -->
        </div>
     </div>
     <!-- /.container -->
  </footer>