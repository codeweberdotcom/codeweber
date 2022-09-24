<?php
/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a class="btn btn-primary rounded-pill me-2">Callback</a></span>';
?>

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
               <div class="mb-0 h3 text-light"><?php echo get_bloginfo('name'); ?></div>
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
                  <!--  buttons group -->
                  <?php $button->showbuttonsoption(); ?>
                  <!--/buttons group -->
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


   <div class="offcanvas offcanvas-end bg-light" id="offcanvas-info" data-bs-scroll="true">
      <div class="offcanvas-header">
         <div class="mb-0 h3"><?php echo get_bloginfo('name'); ?></div>
         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body pb-6">
         <div class="widget mb-8">
            <p><?php the_field('tekst', 'option'); ?></p>
         </div>
         <!-- /.widget -->
         <div class="widget mb-8">
            <div class="widget-title h4 mb-3"><?php esc_html_e('Contact Info', 'codeweber'); ?></div>
            <address> <?php echo brk_adress(); ?> </address>
            <a href="mailto:<?php brk_email(); ?>"><?php echo brk_email(); ?></a><br />
            <?php echo brk_phone_one(); ?><br />
            <?php echo brk_phone_two(); ?><br />
         </div>
         <!-- /.widget -->
         <div class="widget mb-8">
            <div class="widget-title h4 mb-3"><?php esc_html_e('Offices', 'codeweber'); ?></div>
            <?php
            $args = [
               'taxonomy' => 'towns',
               'orderby'       => 'name',
               'order'         => 'ASC'
            ]; ?>

            <div class="form-select-wrapper w-100">
               <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                  <option value="#0" selected>Выбрать город</option>
                  <?php $terms = get_terms($args);
                  $num_option = 1;
                  foreach ($terms as $term) : ?>
                     <option value="<?php echo get_site_url(); ?>/kontakty/#<?php echo $term->slug; ?>"><?php echo esc_html($term->name); ?></option>
                  <?php $num_option++;
                  endforeach; ?>
               </select>
            </div>
         </div>
         <div class="widget">
            <div class="widget-title h4 mb-3"><?php esc_html_e('Follow Us', 'codeweber'); ?></div>
            <nav class="nav social social-color">
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