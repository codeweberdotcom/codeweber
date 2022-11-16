<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
   return;
}

global $product;

$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
   'woocommerce_single_product_image_gallery_classes',
   array(
      'woocommerce-product-gallery',
      'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
      'woocommerce-product-gallery--columns-' . absint($columns),
      'images',
   )
);

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$image_links[] = get_the_post_thumbnail_url();
$image_ids[] = get_post_thumbnail_id();
$product_inc = 1;
foreach ($attachment_ids as $attachment_id) {
   $image_links[] = wp_get_attachment_url($attachment_id);
   $image_ids[] = $attachment_id;
}
?>

<div class="col-lg-6">
   <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
      <?php
      do_action('woocommerce_before_product_gallery');
      ?>
      <div class="swiper">
         <div class="swiper-wrapper">
            <?php
            foreach ($image_links as $image_link_url) { ?>
               <div class="swiper-slide <?php echo ($product_inc == 1) ? 'active' : ''; ?>">
                  <figure class="rounded"><img src="<?php echo $image_link_url; ?>" srcset="<?php echo $image_link_url; ?>" alt="" /><a class="item-link prod-car-img" href="<?php echo $image_link_url; ?>" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
               </div>
               <!--/.swiper-slide -->
            <?php $product_inc++;
            }
            ?>
         </div>
         <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
      <div class="swiper swiper-thumbs">
         <div class="swiper-wrapper">
            <?php foreach ($image_ids as $image_id) { ?>
               <div class="swiper-slide" id="<?php echo $image_id; ?>"><img src="<?php echo wp_get_attachment_url($image_id); ?>" srcset="<?php echo wp_get_attachment_url($image_id); ?>" class="rounded" alt="" /></div>
            <?php } ?>
         </div>
         <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
   </div>
   <!-- /.swiper-container -->
   <?php
   do_action('woocommerce_after_product_gallery');
   ?>
</div>
<!-- /column -->

<?php
