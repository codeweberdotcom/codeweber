<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
   <?php do_action('woocommerce_before_cart_table'); ?>
   <div class="row gx-md-8 gx-xl-12 gy-12">
      <div class="col-lg-8">
         <div class="table-responsive">
            <table class="table text-center shopping-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
               <thead>
                  <tr>
                     <th class="ps-0 w-25">
                        <div class="h4 mb-0 text-start nowrap"><?php esc_html_e('Product', 'woocommerce'); ?></div>
                     </th>
                     <th>
                        <div class="h4 mb-0 text-start nowrap"><?php esc_html_e('Price', 'woocommerce'); ?></div>
                     </th>
                     <th>
                        <div class="h4 mb-0 text-start nowrap"><?php esc_html_e('Quantity', 'codeweber'); ?></div>
                     </th>
                     <th>
                        <div class="h4 mb-0 text-start nowrap"><?php esc_html_e('Subtotal', 'codeweber'); ?></div>
                     </th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php do_action('woocommerce_before_cart_contents'); ?>
                  <?php
                  foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                     $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                     $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                     if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                  ?>
                        <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                           <td class="product-thumbnail option text-start d-flex flex-row align-items-center ps-0">
                              <?php
                              $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                              if (!$product_permalink) { ?>
                                 <figure class="rounded w-17">
                                    <?php
                                    echo $thumbnail; // PHPCS: XSS ok.
                                    ?>
                                 </figure>
                              <?php
                              } else { ?>
                                 <figure class="rounded w-17">
                                    <?php
                                    printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                    ?>
                                 </figure>
                              <?php
                              }
                              ?>
                              <div class="w-100 ms-4">
                                 <?php
                                 if (!$product_permalink) {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                 } else {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<h3 class="post-title h6 lh-xs mb-1"><a class="link-dark"href="%s">%s</a></h3>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                 }

                                 do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                 // Meta data.
                                 echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                 // Backorder notification.
                                 if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                 }
                                 ?>
                              </div>
                           </td>
                           <td class="product-price nowrap" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                              <p class="price">
                                 <?php
                                 echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                 ?></p>
                           </td>

                           <td class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                              <?php
                              if ($_product->is_sold_individually()) {
                                 $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                              } else {
                                 $product_quantity = woocommerce_quantity_input(
                                    array(
                                       'input_name'   => "cart[{$cart_item_key}][qty]",
                                       'input_value'  => $cart_item['quantity'],
                                       'max_value'    => $_product->get_max_purchase_quantity(),
                                       'min_value'    => '0',
                                       'product_name' => $_product->get_name(),
                                    ),
                                    $_product,
                                    false
                                 );
                              }
                              echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                              ?>
                           </td>
                           <td class="product-subtotal nowrap" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                              <p class="price"><?php
                                                echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                ?></p>
                           </td>
                           <td class="product-remove pe-0">
                              <?php
                              echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                 'woocommerce_cart_item_remove_link',
                                 sprintf(
                                    '<a href="%s" class="remove link-dark" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="uil uil-trash-alt"></i></a>',
                                    esc_url(wc_get_cart_remove_url($cart_item_key)),
                                    esc_html__('Remove this item', 'woocommerce'),
                                    esc_attr($product_id),
                                    esc_attr($_product->get_sku())
                                 ),
                                 $cart_item_key
                              );
                              ?>
                           </td>
                        </tr>
                  <?php
                     }
                  }
                  ?>
                  <?php do_action('woocommerce_cart_contents'); ?>
                  <?php do_action('woocommerce_after_cart_contents'); ?>
               </tbody>
            </table>
         </div>
         <div class="row mt-0 gy-4 actions">
            <div class="col-md-8 col-lg-7">
               <?php if (wc_coupons_enabled()) { ?>
                  <div class="form-floating input-group">
                     <input type="text" name="coupon_code" class="input-text form-control <?php echo GetThemeButton(); ?>" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
                     <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
                     <button type="submit" class="button btn btn-primary <?php echo GetThemeButton(); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'codeweber'); ?>"><?php esc_attr_e('Apply coupon', 'codeweber'); ?></button>
                     <?php do_action('woocommerce_cart_coupon'); ?>
                  </div>
               <?php } ?>
            </div>
            <div class="col-md-4 col-lg-5 ms-auto ms-lg-0 text-md-end">
               <button type="submit" class="button btn btn-primary <?php echo GetThemeButton(); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>
            </div>
            <?php do_action('woocommerce_cart_actions'); ?>
            <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
         </div>
      </div>
      <?php do_action('woocommerce_after_cart_table'); ?>

      <div class="col-lg-4">
         <div class="cart-collaterals table-responsive">
            <?php
            /**
             * Cart collaterals hook.
             *
             * @hooked woocommerce_cross_sell_display
             * @hooked woocommerce_cart_totals - 10
             */
            do_action('woocommerce_cart_collaterals');
            ?>
         </div>
      </div>
   </div>
</form>
<!-- /column -->
</div>
<?php do_action('woocommerce_before_cart_collaterals'); ?>
<?php do_action('woocommerce_after_cart'); ?>