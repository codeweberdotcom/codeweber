<?php get_header(); ?>
<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12">
         <div class="col-lg-8">
            <div class="blog classic-view">
               <?php while (have_posts()) :
                  the_post();
                  get_template_part('templates/content/loop', 'faq');
               endwhile;
               codeweber_pagination(); ?>
               <!-- /post pagination -->
            </div>
         </div>
         <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
            <?php do_action('faq_sidebar_start'); ?>
            <?php $args = [
               'taxonomy'      => ['faq_categories'], // название таксономии с WP 4.5
               'orderby'       => 'name',
               'order'         => 'ASC',
               'hide_empty'    => true,
               'update_term_meta_cache' => true, // подгружать метаданные в кэш
            ];
            $categories = get_terms($args); ?>
            <div class="widget">
               <h4 class="widget-title mb-3"><?php esc_html_e('FAQ categories', 'codeweber'); ?></h4>
               <ul class="unordered-list bullet-primary text-reset">
                  <?php foreach ($categories as $category) {
                     $tag_link = get_tag_link($category->term_id); ?>
                     <li><a href="<?php echo $tag_link; ?>" title='<?php echo $category->name; ?>' class="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
                  <?php } ?>
               </ul>
            </div>
            <!-- /.widget -->

            <?php $args = [
               'taxonomy'      => ['faq_tag'], // название таксономии с WP 4.5
               'orderby'       => 'name',
               'order'         => 'ASC',
               'hide_empty'    => true,
               'update_term_meta_cache' => true, // подгружать метаданные в кэш
            ];
            $faq_tags = get_terms($args); ?>
            <div class="widget">
               <h4 class="widget-title mb-3"><?php esc_html_e('FAQ tags', 'codeweber'); ?></h4>
               <ul class="list-unstyled tag-list mb-0">
                  <?php foreach ($faq_tags as $faq_tag) {
                     $tag_link = get_tag_link($faq_tag->term_id); ?>
                     <li><a href="<?php echo $tag_link; ?>" title='<?php echo $faq_tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $faq_tag->slug; ?>"><?php echo $faq_tag->name; ?></a></li>
                  <?php } ?>
               </ul>
            </div>
            <?php do_action('widget_consultant'); ?>
         </aside>
         <!-- /column .sidebar -->
      </div>
</section>
<?php get_footer(); ?>