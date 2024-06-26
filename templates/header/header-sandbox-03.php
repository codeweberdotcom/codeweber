<header class="wrapper bg-dark">
  <nav class="navbar navbar-expand-lg center-nav transparent navbar-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <?php echo codeweber_logo('light', NULL, NULL); ?>
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
      <div class="navbar-other w-100 d-flex ms-auto">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
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
  <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
    <div class="container d-flex flex-row py-6">
      <?php get_search_form(); ?>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.offcanvas -->
</header>