<?php

/**
 * Features 11
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'What We Do?',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'subtitle' => 'The full service we are offering is specifically designed to meet your business needs.',
      'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      'paragraph' => 'Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis elit interdum. Duis mollis, est non commodo luctus, nisi erat ligula. ',
      'patternParagraph' => '<p>%s</p>',

      'buttons' => ' <a href="#" class="btn btn-purple rounded-pill mt-3">More Details</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'multi_image' => array(
         array('/dist/img/photos/sa5.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded mb-6"><img src="' . get_template_directory_uri() . '/dist/img/photos/se1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/se1@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa6.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded mb-6 mb-md-0"><img src="' . get_template_directory_uri() . '/dist/img/photos/se2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/se2@2x.jpg 2x" alt=""></figure>'),
      ),

      'features' => '<div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" /></div><div><h4 class="mb-1">Fitness Goal</h4><p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget elit nullam quis risus eget.</p></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-4 %1$s"><div class="d-flex flex-row"><div>%2$s</div><div><h4>%3$s</h4><p class="mb-2">%4$s</p>%5$s</div></div></div><!--/column -->',
      'features_style_icon' => 'me-4',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>



<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Why Choose Sandbox?</h2>
            <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">Here are a few reasons why our customers choose Sandbox.</h3>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column">
         <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
               <div><img src="./assets/img/icons/lineal/rocket.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" /></div>
               <div>
                  <h4>Easy Usage</h4>
                  <p>Duis mollis commodo luctus cursus commodo tortor mauris.</p>
               </div>
            </a> </li>
         <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
               <div><img src="./assets/img/icons/lineal/savings.svg" class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" /></div>
               <div>
                  <h4>Fast Transactions</h4>
                  <p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p>
               </div>
            </a> </li>
         <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
               <div><img src="./assets/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red me-4" alt="" /></div>
               <div>
                  <h4>Secure Payments</h4>
                  <p>Vestibulum ligula porta felis maecenas faucibus mollis.</p>
               </div>
            </a> </li>
      </ul>
      <!-- /.nav-tabs -->
      <div class="tab-content mt-6 mt-lg-8">
         <div class="tab-pane fade show active" id="tab2-1">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
               <div class="col-lg-6">
                  <div class="row gx-md-5 gy-5 align-items-center">
                     <div class="col-6">
                        <img class="img-fluid rounded shadow-lg d-flex ms-auto" src="./assets/img/photos/sa13.jpg" srcset="./assets/img/photos/sa13@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                     <div class="col-6">
                        <img class="img-fluid rounded shadow-lg mb-5" src="./assets/img/photos/sa14.jpg" srcset="./assets/img/photos/sa14@2x.jpg 2x" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10" src="./assets/img/photos/sa15.jpg" srcset="./assets/img/photos/sa15@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <h2 class="mb-3">Easy Usage</h2>
                  <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                  <ul class="icon-list bullet-bg bullet-soft-yellow">
                     <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                     <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                     <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                  </ul>
                  <a href="#" class="btn btn-yellow mt-2">Learn More</a>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/.tab-pane -->
         <div class="tab-pane fade" id="tab2-2">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
               <div class="col-lg-6 order-lg-2">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-5">
                        <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" src="./assets/img/photos/sa9.jpg" srcset="./assets/img/photos/sa9@2x.jpg 2x" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" src="./assets/img/photos/sa10.jpg" srcset="./assets/img/photos/sa10@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                     <div class="col-7">
                        <img class="img-fluid rounded shadow-lg mb-5" src="./assets/img/photos/sa11.jpg" srcset="./assets/img/photos/sa11@2x.jpg 2x" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-11" src="./assets/img/photos/sa12.jpg" srcset="./assets/img/photos/sa12@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <h2 class="mb-3">Fast Transactions</h2>
                  <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                  <ul class="icon-list bullet-bg bullet-soft-green">
                     <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                     <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                     <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                  </ul>
                  <a href="#" class="btn btn-green mt-2">Learn More</a>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/.tab-pane -->
         <div class="tab-pane fade" id="tab2-3">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
               <div class="col-lg-6">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-6">
                        <img class="img-fluid rounded shadow-lg mb-5" src="./assets/img/photos/sa5.jpg" srcset="./assets/img/photos/sa5@2x.jpg 2x" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" src="./assets/img/photos/sa6.jpg" srcset="./assets/img/photos/sa6@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                     <div class="col-6">
                        <img class="img-fluid rounded shadow-lg my-5" src="./assets/img/photos/sa7.jpg" srcset="./assets/img/photos/sa7@2x.jpg 2x" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10" src="./assets/img/photos/sa8.jpg" srcset="./assets/img/photos/sa8@2x.jpg 2x" alt="" />
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <h2 class="mb-3">Secure Payments</h2>
                  <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                  <ul class="icon-list bullet-bg bullet-soft-red">
                     <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                     <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                     <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                  </ul>
                  <a href="#" class="btn btn-red mt-2">Learn More</a>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/.tab-pane -->
      </div>
      <!-- /.tab-content -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->