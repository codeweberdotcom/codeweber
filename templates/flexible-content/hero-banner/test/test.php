<?php if (get_row_layout() == 'test') : ?>
   <?php if (have_rows('button_repeater')) : ?>
      <?php while (have_rows('button_repeater')) : the_row(); ?>
         <?php if (have_rows('button_button')) : ?>
            <?php while (have_rows('button_button')) : the_row(); ?>
               <?php if (get_sub_field('outline') == 1) : ?>
                  <?php // echo 'true'; 
                  ?>
               <?php else : ?>
                  <?php // echo 'false'; 
                  ?>
               <?php endif; ?>

               <?php $button_link = get_sub_field('button_link'); ?>



               <?php if ($button_link) : ?>
                  <?php $post = $button_link; ?>
                  <?php setup_postdata($post); ?>
                  <span><a href="<?php the_permalink(); ?>" class="btn btn-lg btn-primary btn-icon btn-icon-start rounded-pill me-2"><?php the_sub_field('icon'); ?> <?php the_sub_field('text_on_button'); ?></a></span>

                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
               <?php $taxonomy = get_sub_field('taxonomy'); ?>
               <?php if ($taxonomy) : ?>
                  <a href="<?php echo esc_url(get_term_link($taxonomy)); ?>"><?php echo esc_html($taxonomy->name); ?></a>
               <?php endif; ?>

               <?php $contact_form = get_sub_field('contact_form'); ?>
               <?php if ($contact_form) : ?>
                  <a href="<?php echo get_permalink($contact_form); ?>"><?php echo get_the_title($contact_form); ?></a>
               <?php endif; ?>
               <?php the_sub_field('html'); ?>
            <?php endwhile; ?>
         <?php endif; ?>
      <?php endwhile; ?>
   <?php else : ?>
      <?php // no rows found 
      ?>
   <?php endif; ?>
   <?php if (have_rows('button')) : ?>
      <?php while (have_rows('button')) : the_row(); ?>
         <?php if (get_sub_field('outline') == 1) : ?>
            <?php // echo 'true'; 
            ?>
         <?php else : ?>
            <?php // echo 'false'; 
            ?>
         <?php endif; ?>

         <?php $button_link = get_sub_field('button_link'); ?>
         <?php if ($button_link) : ?>
            <?php $post = $button_link; ?>
            <?php setup_postdata($post); ?>

            <span><a href="<?php the_permalink(); ?>" class="btn btn-lg btn-primary btn-icon btn-icon-start rounded-pill me-2"><?php the_sub_field('icon'); ?> <?php the_sub_field('text_on_button'); ?></a></span>


            <?php wp_reset_postdata(); ?>
         <?php endif; ?>
         <?php $taxonomy = get_sub_field('taxonomy'); ?>
         <?php if ($taxonomy) : ?>
            <a href="<?php echo esc_url(get_term_link($taxonomy)); ?>"><?php echo esc_html($taxonomy->name); ?></a>
         <?php endif; ?>

         <?php $contact_form = get_sub_field('contact_form'); ?>
         <?php if ($contact_form) : ?>
            <a href="<?php echo get_permalink($contact_form); ?>"><?php echo get_the_title($contact_form); ?></a>
         <?php endif; ?>
      <?php endwhile; ?>
   <?php endif; ?>

<?php endif; ?>