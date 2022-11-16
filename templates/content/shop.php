<?php
global $post; ?>
<div class="container pt-12 pt-md-14 pb-14 pb-md-16">
   <div class="row">
      <?php do_action('shop_content_before') ?>
      <?php if (is_active_sidebar('woocommerce_sidebar')) : ?>
         <aside class="col-lg-3 sidebar">
            <?php dynamic_sidebar('woocommerce_sidebar'); ?>
         </aside>
         <!-- /column .sidebar -->
      <?php endif; ?>
      <?php the_content(); ?>
      <?php do_action('shop_content_after') ?>
   </div>
</div>