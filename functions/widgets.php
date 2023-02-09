<?php

/**
 * Consultant Widget
 */
function consultant_widget()
{
?>
   <div class="widget ">
      <div class="card">
         <div class="card-body">
            <img class="rounded-circle w-15 mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/avatars/te3.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/avatars/te3@2x.jpg 2x" alt="" />
            <h4 class="mb-1">Алексей</h4>
            <div class="meta mb-2">Консультант</div>
            <p class="mb-3">Наши специалисты ответят на любой интересующий вопрос.</p>
            <a href="#" class="btn btn-primary rounded w-100">Задать вопрос</a>
            <!-- /.social -->
         </div>
         <!--/.card-body -->
      </div>
      <!-- /.card -->
   </div>
<?php
}

add_action('sidebar_faq_end', 'consultant_widget', 100);
add_action('sidebar_main_end', 'consultant_widget', 100);


/**
 * FAQ Categories Widget
 */

function categories_menu_faq_widget()
{
   $args = [
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

<?php }

add_action('sidebar_faq_end', 'categories_menu_faq_widget', 5);


/**
 * FAQ Cloud Links Widget
 */

function cloud_links_faq_widget()
{
   $args = [
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

<?php }

add_action('sidebar_faq_end', 'cloud_links_faq_widget', 10);


/**
 * Blog Categories Links Widget
 */

function categories_menu_blog_widget()
{
   $args = [
      'taxonomy'      => ['category'], // название таксономии с WP 4.5
      'orderby'       => 'name',
      'order'         => 'ASC',
      'hide_empty'    => true,
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
   ];
   $categories = get_terms($args); ?>
   <div class="widget">
      <h4 class="widget-title mb-3"><?php esc_html_e('Blog categories', 'codeweber'); ?></h4>
      <ul class="unordered-list bullet-primary text-reset">
         <?php foreach ($categories as $category) {
            $tag_link = get_tag_link($category->term_id); ?>
            <li><a href="<?php echo $tag_link; ?>" title='<?php echo $category->name; ?>' class="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
         <?php } ?>
      </ul>
   </div>
   <!-- /.widget -->

<?php }

add_action('sidebar_main_end', 'categories_menu_blog_widget', 5);



/**
 * Blog Recent Post Widget
 */

function recent_post_blog_widget()
{
   $user_id = get_the_author_meta('ID');
   $result = wp_get_recent_posts([
      'numberposts' => 3,
      'offset' => 0,
      'category' => 0,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'include' => '',
      'exclude' => '',
      'meta_key' => '',
      'meta_value' => '',
      'post_type' => 'post',
      'post_status' => 'publish',
      'suppress_filters' => true,
   ], OBJECT); ?>
   <div class="widget">
      <h3 class="h4 widget-title mb-3"><?php esc_html_e('Recent Posts', 'codeweber'); ?></h3>
      <ul class="image-list">
         <?php
         $i = 0;
         foreach ($result as $post) {
            setup_postdata($post);
            $id = $post->ID;
            $title = $post->post_title;
         ?>
            <li>
               <figure class="rounded"><a href="<?php the_permalink($id); ?>"><?php echo get_the_post_thumbnail($id, 'brk_post_sm', array('class' => 'alignleft')); ?></a></figure>
               <div class="post-content">
                  <h4 class="h6 mb-2"> <a class="link-dark" href="<?php the_permalink($id); ?>"><?php echo $title; ?></a> </h4>
                  <ul class="post-meta">
                     <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d F Y', $post); ?></span></li>
                     <li class="post-comments"><a href="<?php echo get_permalink($id); ?>/#comments"><i class="uil uil-comment"></i><?php echo get_comments_number($id); ?></a></li>
                  </ul>
                  <!-- /.post-meta -->
               </div>
            </li>
         <?php } ?>
      </ul>
   </div>
   <?php wp_reset_postdata();
   ?>
   <!-- /.image-list -->
<?php  }

add_action('sidebar_main_end', 'recent_post_blog_widget', 10);
