<?php


add_filter('woocommerce_cart_item_thumbnail', 'custom_class_woocommerce_cart_item_thumbnail_filter', 10, 3);

function custom_class_woocommerce_cart_item_thumbnail_filter($product_image, $cart_item, $cart_item_key)
{
   $product_image = str_replace('class="', 'class="your-class ', $product_image);
   return $product_image;
}
