<?php
global $post; ?>
<?php if (is_account_page()) { ?>
   <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
   <?php }; ?>

   <?php the_content(); ?>

   <?php if (is_account_page()) { ?>
   </div>
<?php }; ?>