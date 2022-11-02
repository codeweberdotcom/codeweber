<?php

/**
 * WooCommerce Post Class filter.
 *
 * https://stackoverflow.com/a/64805994/20374350
 * 
 * @since 3.6.2
 * @param array      $classes Array of CSS classes.
 * @param WC_Product $product Product object.
 */

function filter_woocommerce_post_class($classes, $product)
{
   // is_product() - Returns true on a single product page
   // NOT single product page, so return
   if (!is_product()) return $classes;

   // Add new class
   $classes[] = 'row gx-md-8 gx-xl-12 gy-8';

   return $classes;
}
add_filter('woocommerce_post_class', 'filter_woocommerce_post_class', 10, 2);





remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

function woocommerce_add_custom_text_after_product_title()
{ ?>
   <div class="post-header mb-5">
      <h2 class="post-title display-5"><?php the_title(); ?></h2>
   </div>
<?php }
add_action('woocommerce_single_product_summary', 'woocommerce_add_custom_text_after_product_title', 5);



/**
 * Change Woocommerce Single Price
 * https://stackoverflow.com/a/59406480/20374350
 */
function modify_wc_price($return, $price, $args)
{
   // remove span tags
   $negative          = $price < 0;
   $formatted_price = ($negative ? '-' : '') . sprintf($args['price_format'], get_woocommerce_currency_symbol($args['currency']), $price);
   return $formatted_price;
}
add_filter('wc_price', 'modify_wc_price', 99, 3);




/**
 * Set WooCommerce image dimensions upon theme activation
 * https://woocommerce.com/document/disable-the-default-stylesheet/
 */
// Remove each style one by one
add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
   unset($enqueue_styles['woocommerce-general']);   // Remove the gloss
   unset($enqueue_styles['woocommerce-layout']);      // Remove the layout
   unset($enqueue_styles['woocommerce-smallscreen']);   // Remove the smallscreen optimisation
   return $enqueue_styles;
}

// Or just remove them all in one line
add_filter('woocommerce_enqueue_styles', '__return_empty_array');



/**
 * Remove p tag from Short Description
 * https://wpcommerce.ru/threads/kak-otkljuchit-formatirovanie-v-kratkom-opisanii-tovara.2866/post-15736
 */

remove_filter('woocommerce_short_description', 'wpautop');



/**
 * WooCommerce
 * Place the following code in your theme's functions.php file
 * Override the quantity input with a bootstrap dropdown
 * https://misha.agency/woocommerce/pole-kolichestva-tovara-v-vide-vypadayushhego-spiska.html
 */

function woocommerce_quantity_input($args = array(), $product = null, $echo = true)
{

   if (is_null($product)) {
      $product = $GLOBALS['product'];
   }

   // Default values
   $defaults = array(
      'input_name' => 'quantity',
      'input_value' => '1',
      'max_value' => apply_filters('woocommerce_quantity_input_max', -1, $product),
      'min_value' => apply_filters('woocommerce_quantity_input_min', 0, $product),
      'step' => 1,
   );

   $args = apply_filters('woocommerce_quantity_input_args', wp_parse_args($args, $defaults), $product);

   $args['min_value'] = max($args['min_value'], 0);
   $args['max_value'] = 0 < $args['max_value'] ? $args['max_value'] : 10;

   if (
      '' !== $args['max_value'] && $args['max_value'] < $args['min_value']
   ) {
      $args['max_value'] = $args['min_value'];
   }

   $options = '';

   // Add loop
   for ($count = $args['min_value']; $count <= $args['max_value']; $count = $count + $args['step']) {

      // Cart item quantity defined?
      if ('' !== $args['input_value'] && $args['input_value'] >= 1 && $count == $args['input_value']) {
         $selected = 'selected';
      } else {
         $selected = '';
      }

      $options .= '<option value="' . $count . '"' . $selected . '>' . $count . '</option>';
   }

   $html = '<div><div class="quantity form-select-wrapper"><select class="form-select" name="' . $args['input_name'] . '">' . $options . '</select></div><!--/.form-select-wrapper --></div>';

   if ($echo) {
      echo $html;
   } else {
      return $html;
   }
}

/**
 * WooCommerce: Add class to Dropdown Variation Product
 * https://www.stackfinder.ru/questions/58594970/woocommerce-add-class-to-variation-dropdown
 */
add_filter('woocommerce_dropdown_variation_attribute_options_args', static function ($args) {
   $args['class'] = 'form-control';
   return $args;
}, 2);



// disable flexslider js
function flex_dequeue_script()
{
   wp_dequeue_script('flexslider');
}
add_action('wp_print_scripts', 'flex_dequeue_script', 100);

// disable zoom jquery js file
function zoom_dequeue_script()
{
   wp_dequeue_script('zoom');
}
add_action('wp_print_scripts', 'zoom_dequeue_script', 100);

// disable photoswipe js file
function photoswipe_dequeue_script()
{
   wp_dequeue_script('photoswipe-ui-default');
}
add_action('wp_print_scripts', 'photoswipe_dequeue_script', 100);



add_filter('woocommerce_product_description_heading', '__return_false', 99);

// Hide the additional information tab's title.
add_filter('woocommerce_product_additional_information_heading', '__return_false', 99);






add_filter('woocommerce_cart_item_thumbnail', 'custom_class_woocommerce_cart_item_thumbnail_filter', 10, 3);

function custom_class_woocommerce_cart_item_thumbnail_filter($product_image, $cart_item, $cart_item_key)
{
   $product_image = str_replace('class="', 'class="your-class ', $product_image);
   return $product_image;
}


/**
 * Sale on Cart Page
 * https://wpgid.ru/woocommerce/kak-v-korzine-woocommerce-poluchit-podytog-bez-skidki-po-aktsiyam.html
 */

function codeweber_get_cart_subtotal_and_discount()
{
   global $woocommerce;
   $discount_total = 0;
   // Перебираем товары по акции и суммируем скидку
   foreach ($woocommerce->cart->get_cart() as $cart_item_key => $values) {
      $_product = $values['data'];
      if ($_product->is_on_sale() && !empty($_product->get_sale_price()) && is_numeric($_product->get_sale_price())) {
         $regular_price = $_product->get_regular_price();
         $sale_price = $_product->get_sale_price();
         $discount = ($regular_price - $sale_price) * $values['quantity'];
         $discount_total += $discount;
      }
   }
   // Записываем значения в переменные в зависимости от того есть скидки или их нету
   if ($discount_total > 0 || $woocommerce->cart->discount_cart > 0) {
      $discount = $discount_total + $woocommerce->cart->discount_cart;
      $discount_sale = $discount_total;
      $subtotal = $discount_total + $woocommerce->cart->get_subtotal();
   } else {
      $discount = '';
      $discount_sale = '';
      $subtotal =  $woocommerce->cart->get_subtotal();
   }

   // Собираем значения в массив
   $array = [
      'subtotal'      => $subtotal,
      'discount_all'  => $discount,
      'discount_sale' => $discount_sale,

   ];

   return $array;
}
