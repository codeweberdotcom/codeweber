<section class="section-frame">
   <div class="wrapper bg-gray">
      <div class="container py-13 py-md-17 text-center">
         <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
               <h1 class="display-1 mb-3"><?php codeweber_page_title(); ?></h1>
               <?php codeweber_breadcrumbs(); ?>
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
                  <div class="project grid grid-view">
                     <div class="row g-6 isotope">
                        <div class="item col-md-6">
                           <div class="project-details d-flex justify-content-center flex-column">
                              <div class="post-header">
                                 <div class="post-category text-primary mb-3">
                                    <?php echo wp_get_post_terms(get_the_ID(), 'projects_category')[0]->name;  ?>
                                 </div>
                                 <h2 class="post-title mb-3"><?php the_title(); ?></h2>
                              </div>
                              <!-- /.post-header -->
                              <div class="post-content">
                                 <p><?php the_field('short_description'); ?></p>
                                 <a href="<?php the_permalink(); ?>" class="more hover link-primary"><?php esc_html_e('See Project', 'codeweber') ?></a>
                              </div>
                              <!-- /.post-content -->
                           </div>
                           <!-- /.project-details -->
                        </div>
                        <!-- /.item -->
                        <?php if (have_rows('izobrazheniya')) : ?>
                           <?php $num = 0; ?>
                           <?php while (have_rows('izobrazheniya')) : the_row(); ?>
                              <?php if (have_rows('image')) : ?>
                                 <?php while (have_rows('image')) : the_row(); ?>
                                    <?php if ($num <= 2) { ?>
                                       <?php $image = get_sub_field('image'); ?>
                                       <?php if ($image) : ?>
                                          <div class="item col-md-6">
                                             <figure class="itooltip itooltip-light hover-scale rounded" title='<?php if (get_sub_field('title')) { ?><h5 class="mb-0"><?php the_sub_field('title'); ?></h5><?php }; ?>'><a href="<?php echo esc_url($image['sizes']['brk_big']); ?>" data-glightbox="title: <?php the_sub_field('title'); ?>" data-gallery="<?php echo get_the_ID(); ?>"> <img src="<?php echo esc_url($image['sizes']['project_1_1']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                                             </figure>
                                          </div>
                                          <!-- /.item -->
                                       <?php endif; ?>
                                    <?php } ?>
                                 <?php endwhile; ?>
                              <?php endif; ?>
                              <?php $num++; ?>
                           <?php endwhile; ?>
                        <?php else : ?>
                           <?php // no rows found 
                           ?>
                        <?php endif; ?>
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /.project -->
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