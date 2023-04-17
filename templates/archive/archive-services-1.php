<?php if (get_theme_mod('service_title')) {
   $title = get_theme_mod('service_title');
} else {
   $title = codeweber_page_title();
}

$subtitle = get_theme_mod('service_description');
$type = get_theme_mod('codeweber_page_service_header');
$bg_color = 'dark';
$theme_color = 'dark';
if (get_theme_mod('codeweber_header_service_style') == 'default') {
   $header_style = get_theme_mod('codeweber_header_style');
} else {
   $header_style = get_theme_mod('codeweber_header_service_style');
}

if ($type == 'type_5' || $type == 'Disable') {
   $container_class = ' pb-23 pb-md-25';
   $class_content = ' mt-n18 mt-md-n20 mt-lg-n21 position-relative';
} elseif ($type == 'type_7' || $type == 'Disable') {
   $container_class = ' pb-14 pb-md-16';
   $class_content = ' mt-n20';
} else {
   $container_class = 'pt-14 pb-12 pt-md-16 pb-md-14';
   $class_content = NULL;
}

if (get_theme_mod('codeweber_header_service_angle') == 'on') {
   $angle_class = ' angled upper-end';
} else {
   $angle_class = NULL;
}
echo codeweber_pageheader_generator($title, $subtitle, $type, NULL, $bg_color, NULL, NULL, $theme_color, $header_style);
?>

<section class="wrapper bg-light<?php echo $angle_class; ?>">
   <div class="container <?php echo $container_class; ?>">
      <div class="row mb-14">
         <div class="col-12 <?php echo $class_content; ?>">
            <?php
            $row = 0;
            while (have_posts()) {
               the_post();
               $post_id = get_the_ID();
               if ($row % 2 === 0) {
                  $col_class_1 = 'col-lg-4 pb-12 align-self-center';
                  $col_class_2 = 'col-lg-7 offset-lg-1 align-self-end';
                  $card_body_class = 'card-body p-12';
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
      </div>
   </div>
</section>
<!-- /section -->