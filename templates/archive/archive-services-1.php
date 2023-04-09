<section class="section-frame">
   <div class="wrapper bg-gray">
      <div class="container py-13 py-md-17 text-center">
         <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
               <h1 class="display-1 mb-3"><?php codeweber_page_title(); ?></h1>
               <?php codeweber_breadcrumbs(NULL, NULL); ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </div>
   <!-- /.wrapper -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row mt-6 mb-10 mb-lg-15">
         <div class="col-xl-10 mx-auto">
            <div class="projects-tiles">
               <?php
               while (have_posts()) :
                  the_post(); ?>
                  <?php the_title(); ?>
               <?php endwhile; ?>
            </div>
            <!-- /.projects-tiles -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->

      <?php codeweber_pagination(); ?>
      <!-- /post pagination -->

   </div>
   <!-- /.container -->
</section>
<!-- /section -->