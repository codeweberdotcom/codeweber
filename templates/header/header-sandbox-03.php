<?php if ($args['style_nav'] == 'transparent') {
  $class_nav = 'position-absolute navbar-dark';
}

$transparent_style = $args['style_nav'];

if ($args['bg_nav'] == 'nav-dark') {
  $color_logo = 'light';
} elseif ($args['bg_nav'] == 'nav-light') {
  $color_logo = 'dark';
} else {
  $color_logo = NULL;
}
?>
<header class="wrapper bg-dark">
  <nav class="navbar navbar-expand-lg center-nav transparent <?php echo $class_nav; ?>">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <?php echo codeweber_logo($color_logo, NULL, $transparent_style); ?>
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
          <?php if (have_rows('cw_buttons', 'option')) {
            while (have_rows('cw_buttons', 'option')) {
              the_row();
              $buttons_object = new CW_Buttons('<div class="d-flex justify-content-center">%s</div>', '<a href="#" class="btn btn-sm btn-primary rounded">' . esc_html__('Contact', 'codeweber') . '</a>', NULL, NULL); ?>
              <li class="nav-item d-none d-md-block">
                <?php echo $buttons_object->final_buttons; ?>
              </li>
            <?php } ?>
          <?php } ?>
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