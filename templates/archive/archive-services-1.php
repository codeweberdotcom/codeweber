<section class="wrapper bg-light">
   <div class="container pt-10 pt-md-14">
      <div class="row">
         <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5">
            <h1 class="display-1 mb-3">
               <?php if (get_theme_mod('service_title')) {
                  echo get_theme_mod('service_title');
               } else {
                  codeweber_page_title();
               } ?>
            </h1>
            <?php if (get_theme_mod('service_description')) { ?>
               <p class="lead fs-lg pe-lg-15 pe-xxl-12"><?php echo get_theme_mod('service_description'); ?></p>
            <?php } else { ?>
               <p class="lead fs-lg pe-lg-15 pe-xxl-12">Check out some of our awesome services with creative ideas and great design.</p>
            <?php }; ?>
            <?php codeweber_breadcrumbs(NULL, NULL); ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
   <div class="container py-14 pt-md-16">
      <?php
      $row = 0;
      while (have_posts()) {
         the_post();
         $post_id = get_the_ID();
         if ($row % 2 === 0) {
            $col_class_1 = 'col-lg-4 pb-12 align-self-center';
            $col_class_2 = 'col-lg-7 offset-lg-1 align-self-end';
            $card_body_class = 'card-body p-12 pb-0';
            $row_class = 'row';
         } else {
            $col_class_1 = 'col-lg-4 order-lg-2 offset-lg-1';
            $col_class_2 = 'col-lg-7';
            $card_body_class = 'card-body p-12';
            $row_class = 'row gy-10 align-items-center';
         }
         if ($row == 0 || $row == 2 || $row == 3 || $row == 4 || $row == 5) {
            $bg_color = 'bg-soft-primary';
         } elseif ($row == 1 || $row == 3 || $row == 4 || $row == 5 || $row == 6) {
            $bg_color = 'bg-soft-violet';
         }
      ?>
         <div class="card <?php echo $bg_color; ?> mb-10">
            <div class="<?php echo $card_body_class; ?>">
               <div class="<?php echo $row_class; ?>">
                  <div class="<?php echo $col_class_1; ?>">
                     <?php $category_service = wp_get_post_terms(get_the_ID(), 'service_category'); ?>
                     <?php if (isset($category_service[0])) { ?>
                        <div class="post-category mb-3 text-violet">
                           <?php
                           echo $category_service[0]->name;
                           ?>
                        </div>
                     <?php
                     } ?>
                     <h3 class="h1 post-title mb-3"> <?php the_title(); ?></h3>
                     <p><?php the_excerpt(); ?></p>
                     <a href="<?php the_permalink(); ?>" class="more hover link-violet"><?php esc_html_e('Go to service', 'codeweber') ?></a>
                  </div>
                  <!-- /column -->
                  <div class="<?php echo $col_class_2; ?>">
                     <figure><img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /></figure>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!--/.card-body -->
         </div>
         <!--/.card -->

      <?php $row++;
      }; ?>

      <?php codeweber_pagination(); ?>
      <!-- /post pagination -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->