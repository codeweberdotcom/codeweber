<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Pricing";
$settings->subtitle = 'We offer <span class="underline">great prices</span>, premium and quality products for your business.';
$settings->paragraph = 'Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'light';
//$settings->textcolor = 'white';
$settings->GetDataACF();
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-15 mb-md-6 px-lg-10"><?php echo $settings->title; ?></h3>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <?php $price_package = get_sub_field('price_package'); ?>
      <?php if ($price_package) : ?>
         <div class="pricing-wrapper position-relative">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <?php $price_package = get_sub_field('price_package'); ?>
            <?php if ($price_package) : ?>
               <?php $post = $price_package; ?>
               <?php setup_postdata($post); ?>
               <?php $post_id = $post->ID; ?>
               <?php $currency = get_field('currency', $post_id); ?>
               <?php $saletext = get_field('sale', $post_id); ?>
               <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <?php $price_package = get_sub_field('price_package'); ?>
            <?php if ($price_package) : ?>
               <div class="pricing-switcher-wrapper switcher">
                  <p class="mb-0 pe-3"><?php esc_html_e('Monthly', 'codeweber'); ?></p>
                  <div class="pricing-switchers">
                     <div class="pricing-switcher pricing-switcher-active"></div>
                     <div class="pricing-switcher"></div>
                     <div class="switcher-button bg-primary"></div>
                  </div>
                  <p class="mb-0 ps-3"><?php esc_html_e('Yearly', 'codeweber'); ?><span class="text-red">(<?php echo $saletext; ?>)</span></p>
               </div>
               <div class="row gy-6 position-relative mt-5">
                  <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem;"></div>
                  <div class="shape rounded-circle bg-line red rellax w-18 h-18" data-rellax-speed="1" style="top: -1rem; left: -2rem;"></div>


                  <?php $post = $price_package; ?>
                  <?php setup_postdata($post); ?>
                  <?php $post_id = $post->ID; ?>
                  <?php if (have_rows('package_price', $post_id)) : ?>
                     <?php while (have_rows('package_price', $post_id)) : the_row(); ?>
                        <?php if (get_sub_field('popular') == 1) : ?>
                           <?php $popular = true; ?>
                        <?php else : ?>
                           <?php $popular = false; ?>
                        <?php endif; ?>
                        <div class="col-md-6 col-lg-4 text-center <?php if ($popular == true) {
                                                                     echo 'popular';
                                                                  }; ?>">
                           <div class="pricing card text-center <?php if ($popular == true) {
                                                                     echo 'bg-soft-primary';
                                                                  }; ?>">
                              <div class="card-body">
                                 <?php $icon = new Icons; ?>
                                 <?php $icon->GetColorIcon(); ?>
                                 <h4 class="card-title"> <?php the_sub_field('title_package'); ?></h4>
                                 <div class="prices text-dark">
                                    <div class="price price-show">
                                       <span class="price-currency">
                                          <?php echo $currency; ?></span>
                                       <span class="price-value"><?php the_sub_field('price_montly'); ?></span>
                                       <span class="price-duration"><?php esc_html_e('mo', 'codeweber'); ?></span>
                                    </div>
                                    <div class="price price-hide price-hidden">
                                       <span class="price-currency"><?php echo $currency; ?></span>
                                       <span class="price-value"><?php the_sub_field('price_year'); ?></span>
                                       <span class="price-duration"><?php esc_html_e('yr', 'codeweber'); ?></span>
                                    </div>
                                 </div>
                                 <!--/.prices -->

                                 <?php if (have_rows('service_list')) : ?>
                                    <ul class="icon-list bullet-bg mt-7 mb-8 text-start <?php if ($popular == true) {
                                                                                             echo 'bullet-primary';
                                                                                          } else {
                                                                                             echo 'bullet-soft-primary';
                                                                                          }; ?>">
                                       <?php while (have_rows('service_list')) : the_row(); ?>

                                          <?php if (get_sub_field('checkuncheck') == 1 || $popular == true) : ?>
                                             <?php $check = 'uil uil-check';
                                             ?>
                                          <?php elseif (get_sub_field('checkuncheck') == 0) : ?>
                                             <?php $check = 'uil uil-times bullet-soft-red';
                                             ?>
                                          <?php endif; ?>
                                          <?php if (get_sub_field('service_popover')) :
                                             $popover_content = 'role="button" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" title="' . get_sub_field('service_title') . '" data-bs-content="' . get_sub_field('service_popover') . '"';
                                          else :
                                             $popover_content = '';
                                          endif;
                                          ?>
                                          <li <?php echo $popover_content; ?>><i class="<?php echo $check; ?>"></i><span> <?php the_sub_field('service_title'); ?></span>
                                          </li>
                                       <?php endwhile; ?>
                                    </ul>
                                    <?php
                                    /* Add buttons */
                                    $button = new Buttons();
                                    $button->form_button = "rounded-pill";
                                    $button->button_size = NULL;
                                    $button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
                                    $button->data_cues = "slideInDown";
                                    $button->data_group = "page-title-buttons";
                                    $button->data_delay = "900";
                                    $button->default_button = '<a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>';
                                    ?>
                                    <!--  buttons group -->
                                    <?php $button->showbuttons(); ?>
                                    <!--/buttons group -->
                                 <?php endif; ?>
                              </div>
                              <!--/.card-body -->
                           </div>
                           <!--/.pricing -->
                        </div>
                        <!--/column -->



                     <?php endwhile; ?>
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>
               </div>
               <!--/.row -->
            <?php endif; ?>
         </div>

      <?php else : ?>
         <div class="pricing-wrapper position-relative">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <div class="pricing-switcher-wrapper switcher">
               <p class="mb-0 pe-3">Monthly</p>
               <div class="pricing-switchers">
                  <div class="pricing-switcher pricing-switcher-active"></div>
                  <div class="pricing-switcher"></div>
                  <div class="switcher-button bg-primary"></div>
               </div>
               <p class="mb-0 ps-3">Yearly</p>
            </div>
            <div class="row gy-6 mt-3 mt-md-5">
               <div class="col-md-6 col-lg-4">
                  <div class="pricing card text-center">
                     <div class="card-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="card-title">Basic Plan</h4>
                        <div class="prices text-dark">
                           <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">mo</span></div>
                           <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                           <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                           <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                           <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                           <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                           <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
               </div>
               <!--/column -->
               <div class="col-md-6 col-lg-4 popular">
                  <div class="pricing card text-center">
                     <div class="card-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="card-title">Premium Plan</h4>
                        <div class="prices text-dark">
                           <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                           <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                           <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                           <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                           <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                           <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                           <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
               </div>
               <!--/column -->
               <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                  <div class="pricing card text-center">
                     <div class="card-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="card-title">Corporate Plan</h4>
                        <div class="prices text-dark">
                           <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                           <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                           <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                           <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                           <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                           <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                           <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->


         <?php endif; ?>
         <!--/.row -->
         </div>
         <!--/.pricing-wrapper -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->