<?php

$phone = get_field('phone', 'option');

?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-12 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/bg3.jpg">
               <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-left text-lg-start">

                  <div class="col-lg-7">
                     <h3 class="display-6 text-white mb-0">Консультация специалиста <br>Донстрах</h3>
                  </div>

                  <div class="col">
                     <div class="d-flex">
                        <div>
                           <a href="#" class="btn btn-circle btn-outline-white btn-lg me-3"><i class="uil uil-phone"></i></a>
                        </div>
                        <div>

                           <a class="text-white fs-22 fw-bold" href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                           <p class="text-white mb-0">Позвоните сейчас</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <a href="tel:<?php echo esc_attr($phone); ?>" class="btn btn-lg btn-white rounded-pill mb-0 text-nowrap">Заказ звонка</a>
                  </div>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->