<?php

/**
 * Testimonial 2
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'subtitle' => 'Customer satisfaction is our major goal. See what our customers are saying about us.',
      'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      'paragraph' => 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.',
      'patternParagraph' => '<p>%s</p>',

      'buttons' => '<a href="#" class="btn btn-navy rounded-pill mt-3">All Testimonials</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,


   )
);
?>




<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row position-relative">
         <figure class="rounded position-absolute d-none d-lg-block" style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2"><img src="./assets/img/photos/tei1.jpg" srcset="./assets/img/photos/tei1@2x.jpg 2x" alt=""></figure>
         <div class="col-lg-9 text-center">
            <div class="card bg-gray">
               <div class="card-body p-md-10 py-xxl-16">
                  <div class="row gx-0">
                     <div class="col-lg-8 ps-xl-10">
                        <span class="ratings five fs-20 mb-3"></span>
                        <blockquote class="border-0 fs-lg mb-0">
                           <p>“Donec id elit non mi porta gravida at eget metus. Vivamus mollis est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis porta est non commodo luctus.”</p>
                           <div class="blockquote-details justify-content-center text-center">
                              <div class="info p-0">
                                 <h4 class="mb-1">Coriss Ambady</h4>
                                 <p class="mb-0">Financial Analyst</p>
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
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