<?php
$args = [
   'taxonomy' => 'faq_categories',
   'orderby'       => 'name',
   'order'         => 'ASC'
]; ?>
<?php $terms = get_terms($args);

foreach ($terms as $term) : ?>
   <?php echo esc_html($term->name); ?>


<?php
   $args = array(
      'post_type' => 'faq',
<<<<<<< HEAD
      'post_status' => 'publish',
=======
      'post_status'    => 'publish',
>>>>>>> 7d34dba1cafc504c7610bcf96e611fd48d9b2881
      'tax_query' => array(
         array(
            'taxonomy' => 'faq_categories',
            'field'    => 'slug',
            'terms'    => $term->slug
         )
      )
   );
   $query = new WP_Query($args);
   if ($query->have_posts()) {
      $f = 1;
      while ($query->have_posts()) {
         $query->the_post();
         $post_id =  get_the_ID(); ?>

      <?php the_title() ?>


<?php $f++;
      }
   }
   wp_reset_postdata();
?>
<?php endforeach; ?>