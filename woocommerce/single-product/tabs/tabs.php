<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
   exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>

   <div>
      <ul class="nav nav-tabs nav-tabs-basic mt-12">
         <?php $i = 0; ?>
         <?php foreach ($product_tabs as $key => $product_tab) : ?>
            <li class="nav-item">
               <a href="#tab-<?php echo esc_attr($key); ?>" class="nav-link <?php if ($i == 0) :
                                                                                 echo ' active';
                                                                              else : echo ' test';
                                                                              endif;  ?>" <?php if ($i == 0) {
                                                                                             echo ' "aria-selected="true" ';
                                                                                          }  ?> data-bs-toggle="tab">
                  <?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
               </a>
            </li>
            <?php $i++; ?>
         <?php endforeach; ?>
      </ul>

      <div class="tab-content mt-0 mt-md-5">
         <?php $s = 0; ?>
         <?php foreach ($product_tabs as $key => $product_tab) : ?>
            <div class="tab-pane fade <?php if ($s == 0) {
                                          echo ' show active';
                                       }; ?>" id="tab-<?php echo esc_attr($key); ?>">
               <?php
               if (isset($product_tab['callback'])) {
                  call_user_func($product_tab['callback'], $key, $product_tab);
               }
               ?>
            </div>
            <?php $s++; ?>
         <?php endforeach; ?>
      </div>
      <?php do_action('woocommerce_product_after_tabs'); ?>
   </div>
<?php endif; ?>