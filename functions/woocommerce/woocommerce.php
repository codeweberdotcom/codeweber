<?php

include 'woocommerce-clean.php';
include 'woocommerce-single-product.php';
include 'woocommerce-cart.php';
include 'woocommerce-checkout.php';

/**
 * Display item meta data.
 *
 * @since  3.0.0
 * @param  WC_Order_Item $item Order Item.
 * @param  array         $args Arguments.
 * @return string|void
 */
function wc_display_item_meta($item, $args = array())
{
   $strings = array();
   $html    = '';
   $args    = wp_parse_args(
      $args,
      array(
         'before'       => '',
         'after'        => '',
         'separator'    => '',
         'echo'         => true,
         'autop'        => false,
         'label_before' => '<div class="small">',
         'label_after'  => '',
         'value_before' => '',
         'value_after'  => '</div>'
      )
   );
   foreach ($item->get_all_formatted_meta_data() as $meta_id => $meta) {
      $value     = $args['autop'] ? wp_kses_post($meta->display_value) : wp_kses_post(make_clickable(trim($meta->display_value)));
      $strings[] = $args['label_before'] . wp_kses_post($meta->display_key) . $args['label_after'] . $args['value_before'] . ': ' . wp_strip_all_tags($value) . $args['value_after'];
   }

   if ($strings) {
      $html = $args['before'] . implode($args['separator'], $strings) . $args['after'];
   }

   $html = apply_filters('woocommerce_display_item_meta', $html, $item, $args);

   if ($args['echo']) {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $html;
   } else {
      return $html;
   }
}


/**
 * Ajax фильтр Woocommerce - Увеличиваем количество вариаций, которые могут учавствовать в ajax запросе с 30 до 100
 * https://stackoverflow.com/a/46001103/20374350
 */
function custom_wc_ajax_variation_threshold($qty, $product)
{
   return 100; // Increase default 30 to 50
}
add_filter('woocommerce_ajax_variation_threshold', 'custom_wc_ajax_variation_threshold', 100, 2);



/**
 * Insert the opening anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_open()
{
   echo '<figure class="rounded mb-6">';
}


/**
 * Insert the closing anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_close()
{
   echo '</figure>';
}


/**
 * Show the product title in the product loop. By default this is an H2.
 */
function woocommerce_template_loop_product_title()
{

   global $product;

   $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

   echo '<h2 class="post-title h3 fs-18 link-dark ' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '"><a href="' . esc_url($link) . '" class="link-dark">' . get_the_title() . '</a></h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}



/**
 * Transport Image loop product on top item
 */
add_action('woocommerce_init', function () {
   remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
   add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 1);
});


/**
 * 
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item', 'postheaderblockbefore', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 25);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20);


function postheaderblockbefore()
{
   global $woocommerce, $product;
   $product_id = $product->get_id();

   echo '<div class="post-header"><div class="d-flex flex-row align-items-center justify-content-between mb-2">';



   if (class_exists('RankMath')) {
      $primary_tax =  (get_post_meta($product_id, 'rank_math_primary_product_cat', true));
      if (!empty($primary_tax)) {
         $category_primary = get_term_by('id', $primary_tax, 'product_cat');
         if (!empty($category_primary->name)) {
            $link_category = get_category_link($primary_tax);

            $category_primary_col = '<div class="post-category text-ash mb-0"><a href="' . $link_category . '" rel="tag">' . $category_primary->name . '</a></div>';
         } else {
            $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
         }
      } else {
         $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
      }
   } else {
      $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
   };

   echo $category_primary_col;


   // Remove the product rating display on product loops
   remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);


   $average = $product->get_average_rating();
   if ($average == 0) {
   } elseif ($average == 1) {
      echo '<span class="ratings one"></span>';
   } elseif ($average == 2) {
      echo '<span class="ratings two"></span>';
   } elseif ($average == 3) {
      echo '<span class="ratings three"></span>';
   } elseif ($average == 4) {
      echo '<span class="ratings four"></span>';
   } elseif ($average == 5) {
      echo '<span class="ratings five"></span>';
   }
   echo '</div>';
}

add_action('woocommerce_after_shop_loop_item', 'postheaderblockafter', 25);

function postheaderblockafter()
{
   echo '</div>';
}

add_filter('woocommerce_attribute', 'woocommerce_attribute_filter_callback', 10, 3);
function woocommerce_attribute_filter_callback($formatted_values, $attribute, $values)
{
   return wptexturize(implode(', ', $values));
}


/***
 * Sale Flash on product in percantagle
 * 
 * https://stackoverflow.com/a/52559420/20374350
 */
add_filter('woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3);
function add_percentage_to_sale_badge($html, $post, $product)
{

   if ($product->is_type('variable')) {
      $percentages = array();

      // Get all variation prices
      $prices = $product->get_variation_prices();

      // Loop through variation prices
      foreach ($prices['price'] as $key => $price) {
         // Only on sale variations
         if ($prices['regular_price'][$key] !== $price) {
            // Calculate and set in the array the percentage for each variation on sale
            $percentages[] = round(100 - (floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100));
         }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';
   } elseif ($product->is_type('grouped')) {
      $percentages = array();

      // Get all variation prices
      $children_ids = $product->get_children();

      // Loop through variation prices
      foreach ($children_ids as $child_id) {
         $child_product = wc_get_product($child_id);

         $regular_price = (float) $child_product->get_regular_price();
         $sale_price    = (float) $child_product->get_sale_price();

         if ($sale_price != 0 || !empty($sale_price)) {
            // Calculate and set in the array the percentage for each child on sale
            $percentages[] = round(100 - ($sale_price / $regular_price * 100));
         }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';
   } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ($sale_price != 0 || !empty($sale_price)) {
         $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
      } else {
         return $html;
      }
   }
   return '<span class="onsale avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13 m-2"><span> ' . $percentage . '</span></span>';
}



/**
 * Woocommerce Product Single Add To cart
 * Добавить в корзину AJAX Простой товар
 */

function ql_woocommerce_ajax_add_to_cart_js()
{
   if (function_exists('is_product') && is_product()) {
      wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . '/woocommerce/ajax_add_to_cart.js', array('jquery'), '1.0');
   }
}
add_action('wp_enqueue_scripts', 'ql_woocommerce_ajax_add_to_cart_js');
add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
function ql_woocommerce_ajax_add_to_cart()
{
   $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
   $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
   $variation_id = absint($_POST['variation_id']);
   $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
   $product_status = get_post_status($product_id);
   if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
      do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
      if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) {
         wc_add_to_cart_message(array($product_id => $quantity), true);
      }
      WC_AJAX::get_refreshed_fragments();
   } else {
      $data = array(
         'error' => true,
         'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
      );
      echo wp_send_json($data);
   }
   wp_die();
}

/**
 * Open Offcanvas after added to cart
 * https://stackoverflow.com/a/47463018/20374350
 * 
 */

add_action('wp_footer', 'custom_jquery_add_to_cart_script');
function custom_jquery_add_to_cart_script()
{
   if (is_shop() || is_product_category() || is_product_tag()) : // Only for archives pages
?>
      <script type="text/javascript">
         // Ready state
         (function($) {
            $(document.body).on('added_to_cart', function() {
               document.getElementById("header-cart").click();
            });
         })(jQuery); // "jQuery" Working with WP (added the $ alias as argument)
      </script>
   <?php
   endif;
}

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{
   global $woocommerce;
   ob_start();
   ?>
   <span class="badge badge-cart bg-primary"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
<?php
   $fragments['span.badge.badge-cart.bg-primary'] = ob_get_clean();
   return $fragments;
}



/**
 * Ajax Update OffCanvas Cart
 */

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
   ob_start();
?>
   <div class="offcanvas_cart_wrapper">
      <?php do_action('codeweber_offcanvas_cart_start'); ?>
      <div class="offcanvas-header">
         <div class="h3 mb-0"><?php echo esc_html__('Your cart', 'codeweber'); ?> </div>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <?php woocommerce_mini_cart(); ?>
      <?php do_action('codeweber_offcanvas_cart_end'); ?>
   </div>
<?php $fragments['div.offcanvas_cart_wrapper'] = ob_get_clean();
   return $fragments;
});



/**
 * Output the proceed to checkout button.
 * Woocommerce
 * wc-template-functions.php
 * 2296 row
 */
function woocommerce_widget_shopping_cart_proceed_to_checkout()
{
   echo '<a href="' . esc_url(wc_get_checkout_url()) . '" class="button checkout wc-forward btn btn-primary btn-icon btn-icon-start ' . ButtonStyleCustomizer() . ' w-100 mb-4"><i class="uil uil-credit-card fs-18"></i>' . esc_html__('Checkout', 'woocommerce') . '</a>';
}


/**
 * Output the view cart button.
 * Woocommerce
 * wc-template-functions.php
 * 2285 row
 */
function woocommerce_widget_shopping_cart_button_view_cart()
{
   echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="button wc-forward btn btn-outline-primary btn-icon btn-icon-start ' . ButtonStyleCustomizer() . ' w-100 mb-2"><i class="uil uil-shopping-basket"></i>' . esc_html__('View cart', 'woocommerce') . '</a>';
}


/**
 * Output to view cart subtotal.
 * Woocommerce
 * wc-template-functions.php
 * 2307 row
 * @since 3.7.0
 */
function woocommerce_widget_shopping_cart_subtotal()
{
   echo '<span>' . esc_html__('Subtotal:', 'woocommerce') . '</span><span class="h6 mb-0"> ' . WC()->cart->get_cart_subtotal() . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}



/**
 * Show sale prices in the cart.
 */
function codeweber_show_sale_price_at_cart($old_display, $cart_item, $cart_item_key)
{
   /** @var WC_Product $product */
   $product = $cart_item['data'];

   if ($product) {
      return $product->get_price_html();
   }
   return $old_display;
}
add_filter('woocommerce_cart_item_price', 'codeweber_show_sale_price_at_cart', 10, 3);





// shows the product price on sale (if any) in the checkout table
add_filter('woocommerce_cart_item_subtotal', 'show_sale_price_at_checkout', 10, 3);
function show_sale_price_at_checkout($subtotal, $cart_item, $cart_item_key)
{

   // gets the product object
   $product = $cart_item['data'];
   // get the quantity of the product in the cart
   $quantity = $cart_item['quantity'];

   // check if the object exists
   if (!$product) {
      return $subtotal;
   }

   // check if the product is on sale
   if ($product->is_on_sale() && !empty($product->get_sale_price())) {
      // shows sale price and regular price       
      $price = wc_format_sale_price(
         // regular price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_regular_price(),
               'qty' => $quantity
            )
         ),
         // sale price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_sale_price(),
               'qty' => $quantity
            )
         )
      ) . $product->get_price_suffix();
   } else {
      // shows regular price
      $price = wc_price(
         // regular price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_regular_price(),
               'qty' => $quantity
            )
         )
      ) . $product->get_price_suffix();
   }
   return $price;
}



/**
 * Change number of related products output
 */
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args)
{
   $args['posts_per_page'] = 6; // 4 related products
   $args['columns'] = 2; // arranged in 2 columns
   return $args;
}


/**
 * Move related products to Footer Start
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('codeweber_footer_start', 'woocommerce_output_related_products', 1);



/**
 * Remove result_count
 * https://wordpress.org/support/topic/remove-woocommerce-result-count/
 */
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);

/**
 * Move result count
 */
add_action('codeweber_result_count', 'woocommerce_result_count', 20);



/**
 * Logout redirect homepage
 */
add_action('wp_logout', 'codeweber_homepage_logout_redirect');

function codeweber_homepage_logout_redirect()
{
   wp_redirect(home_url());
   exit;
}



/**
 * overwritten from https://woocommerce.wp-a2z.org/oik_api/wc_get_gallery_image_html/
 */
function my_custom_img_function($attachment_id, $main_image = false, $size = NULL)
{
   $flexslider        = (bool) apply_filters('woocommerce_single_product_flexslider_enabled', get_theme_support('wc-product-gallery-slider'));
   $gallery_thumbnail = wc_get_image_size('gallery_thumbnail');
   $thumbnail_size    = apply_filters('woocommerce_gallery_thumbnail_size', array($gallery_thumbnail['width'], $gallery_thumbnail['height']));
   $image_size        = apply_filters('woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size);
   $full_size         = apply_filters('woocommerce_gallery_full_size', apply_filters('woocommerce_product_thumbnails_large_size', 'full'));
   $thumbnail_src     = wp_get_attachment_image_src($attachment_id, $thumbnail_size);
   $full_src          = wp_get_attachment_image_src($attachment_id, $full_size);
   $alt_text          = trim(wp_strip_all_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)));



   $image = wp_get_attachment_image(
      $attachment_id,
      $image_size,
      false,
      apply_filters(
         'woocommerce_gallery_image_html_attachment_image_params',
         array(
            'title'                   => _wp_specialchars(get_post_field('post_title', $attachment_id), ENT_QUOTES, 'UTF-8', true),
            'data-caption'            => _wp_specialchars(get_post_field('post_excerpt', $attachment_id), ENT_QUOTES, 'UTF-8', true),
            'data-src'                => esc_url($full_src[0]),
            'data-large_image'        => esc_url($full_src[0]),
            'data-large_image_width'  => esc_attr($full_src[1]),
            'data-large_image_height' => esc_attr($full_src[2]),
            'class'                   => esc_attr($main_image ? 'wp-post-image' : ''),
         ),
         $attachment_id,
         $image_size,
         $main_image
      )
   );

   if ($size == 'full') {
      return '<div data-thumb="' . esc_url($thumbnail_src[0]) . '" data-thumb-alt="' . esc_attr($alt_text) . '" class="woocommerce-product-gallery__image swiper-slide"><figure class="rounded">' . $image . '<a class="item-link" href="' . esc_url($full_src[0]) . '" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure></div>';
   } elseif ($size == 'thumbnail') {
      return '
      <div class="swiper-slide"><img src="' . esc_url($thumbnail_src[0]) . '" class="rounded" alt="" /></div>';
   }
}


add_filter('woocommerce_get_image_size_single', 'my_set_product_img_size');
add_filter('woocommerce_get_image_size_shop_single', 'my_set_product_img_size');
add_filter('woocommerce_get_image_size_woocommerce_single', 'my_set_product_img_size');
function my_set_product_img_size()
{
   $size = array(
      'width'  => 600,
      'height' => 600,
      'crop'   => 1,
   );
   return $size;
}


add_filter('woocommerce_get_image_size_gallery_thumbnail', function ($size) {
   return array(
      'width'  => 150,
      'height' => 150,
      'crop'   => 0,
   );
});

add_filter("woocommerce_reset_variations_link", "__return_false");



// Disable Bredcrumbs

add_filter('woocommerce_get_breadcrumb', '__return_false');
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
