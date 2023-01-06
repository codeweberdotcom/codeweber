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



/**
 * Cleanup Woocommerce
 * Set WooCommerce image dimensions upon theme activation
 * https://woocommerce.com/document/disable-the-default-stylesheet/
 */
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
 * Remove p tag from Short Description
 * https://wpcommerce.ru/threads/kak-otkljuchit-formatirovanie-v-kratkom-opisanii-tovara.2866/post-15736
 */

remove_filter('woocommerce_short_description', 'wpautop');



/**
 * WooCommerce
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


/**
 * Transport Sale flash Single Product
 */

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10, 3);
add_action('woocommerce_before_product_gallery', 'woocommerce_show_product_sale_flash', 10);


/**
 * Transport Sale flash Loop Product
 */

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10, 3);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 1);



/**
 * 
 * https://stackoverflow.com/a/41330111/20374350
 */

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');
function addBootstrapToCheckoutFields($fields)
{
   foreach ($fields as &$fieldset) {
      foreach ($fieldset as &$field) {
         // if you want to add the form-group class around the label and the input
         $field['class'][] = 'form-floating mb-4';

         // add form-control to the actual input
         $field['input_class'][] = 'form-control';
      }
   }
   return $fields;
}



/** Forms Codeweber*/

/**
 * Outputs a checkout/address form field.
 *
 * @param string $key Key.
 * @param mixed  $args Arguments.
 * @param string $value (default: null).
 * @return string
 */
function woocommerce_form_field($key, $args, $value = null)
{
   $defaults = array(
      'type'              => 'text',
      'label'             => '',
      'description'       => '',
      'placeholder'       => '',
      'maxlength'         => false,
      'required'          => false,
      'autocomplete'      => false,
      'id'                => $key,
      'class'             => array(),
      'label_class'       => array(),
      'input_class'       => array(),
      'return'            => false,
      'options'           => array(),
      'custom_attributes' => array(),
      'validate'          => array(),
      'default'           => '',
      'autofocus'         => '',
      'priority'          => '',
   );

   $args = wp_parse_args($args, $defaults);
   $args = apply_filters('woocommerce_form_field_args', $args, $key, $value);

   if (is_string($args['class'])) {
      $args['class'] = array($args['class']);
   }

   if ($args['required']) {
      $args['class'][] = 'validate-required';
      $required        = '&nbsp;<abbr class="required" title="' . esc_attr__('required', 'woocommerce') . '">*</abbr>';
   } else {
      $required = '&nbsp;<span class="optional">(' . esc_html__('optional', 'woocommerce') . ')</span>';
   }

   if (is_string($args['label_class'])) {
      $args['label_class'] = array($args['label_class']);
   }

   if (is_null($value)) {
      $value = $args['default'];
   }

   // Custom attribute handling.
   $custom_attributes         = array();
   $args['custom_attributes'] = array_filter((array) $args['custom_attributes'], 'strlen');

   if ($args['maxlength']) {
      $args['custom_attributes']['maxlength'] = absint($args['maxlength']);
   }

   if (!empty($args['autocomplete'])) {
      $args['custom_attributes']['autocomplete'] = $args['autocomplete'];
   }

   if (true === $args['autofocus']) {
      $args['custom_attributes']['autofocus'] = 'autofocus';
   }

   if ($args['description']) {
      $args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
   }

   if (!empty($args['custom_attributes']) && is_array($args['custom_attributes'])) {
      foreach ($args['custom_attributes'] as $attribute => $attribute_value) {
         $custom_attributes[] = esc_attr($attribute) . '="' . esc_attr($attribute_value) . '"';
      }
   }

   if (!empty($args['validate'])) {
      foreach ($args['validate'] as $validate) {
         $args['class'][] = 'validate-' . $validate;
      }
   }

   $field           = '';
   $label_id        = $args['id'];
   $sort            = $args['priority'] ? $args['priority'] : '';
   $field_container = '<p class="form-row %1$s form-floating mb-4 form-select-wrapper" id="%2$s" data-priority="' . esc_attr($sort) . '">%3$s</p>';

   switch ($args['type']) {
      case 'country':
         $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

         if (1 === count($countries)) {

            $field .= '<strong>' . current(array_values($countries)) . '</strong>';

            $field .= '<input type="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="' . current(array_keys($countries)) . '" ' . implode(' ', $custom_attributes) . ' class="country_to_state" readonly="readonly" />';
         } else {
            $data_label = !empty($args['label']) ? 'data-label="' . esc_attr($args['label']) . '"' : '';

            $field = '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="country_to_state form-select country_select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder'] ? $args['placeholder'] : esc_attr__('Select a country / region&hellip;', 'woocommerce')) . '" ' . $data_label . '><option value="">' . esc_html__('Select a country / region&hellip;', 'woocommerce') . '</option>';

            foreach ($countries as $ckey => $cvalue) {
               $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . esc_html($cvalue) . '</option>';
            }

            $field .= '</select>';

            $field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__('Update country / region', 'woocommerce') . '">' . esc_html__('Update country / region', 'woocommerce') . '</button></noscript>';
         }

         break;
      case 'state':
         /* Get country this state field is representing */
         $for_country = isset($args['country']) ? $args['country'] : WC()->checkout->get_value('billing_state' === $key ? 'billing_country' : 'shipping_country');
         $states      = WC()->countries->get_states($for_country);

         if (is_array($states) && empty($states)) {

            $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

            $field .= '<input type="hidden" class="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="" ' . implode(' ', $custom_attributes) . ' placeholder="' . esc_attr($args['placeholder']) . '" readonly="readonly" data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
         } elseif (!is_null($for_country) && is_array($states)) {
            $data_label = !empty($args['label']) ? 'data-label="' . esc_attr($args['label']) . '"' : '';

            $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="state_select form-select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder'] ? $args['placeholder'] : esc_html__('Select an option&hellip;', 'woocommerce')) . '"  data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '" ' . $data_label . '>
						<option value="">' . esc_html__('Select an option&hellip;', 'woocommerce') . '</option>';

            foreach ($states as $ckey => $cvalue) {
               $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . esc_html($cvalue) . '</option>';
            }

            $field .= '</select>';
         } else {

            $field .= '<input type="text" class="input-text ' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($value) . '"  placeholder="' . esc_attr($args['id']) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" ' . implode(' ', $custom_attributes) . ' data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
         }

         break;
      case 'textarea':
         $field .= '<textarea name="' . esc_attr($key) . '" class="input-text ' . esc_attr(implode(' ', $args['input_class'])) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['id']) . '" ' . (empty($args['custom_attributes']['rows']) ? ' rows="2"' : '') . (empty($args['custom_attributes']['cols']) ? ' cols="5"' : '') . implode(' ', $custom_attributes) . '>' . esc_textarea($value) . '</textarea>';

         break;
      case 'checkbox':
         $field = '<label class="checkbox ' . implode(' ', $args['label_class']) . '" ' . implode(' ', $custom_attributes) . '>
						<input type="' . esc_attr($args['type']) . '" class="input-checkbox ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="1" ' . checked($value, 1, false) . ' /> ' . $args['label'] . $required . '</label>';

         break;
      case 'text':
      case 'password':
      case 'datetime':
      case 'datetime-local':
      case 'date':
      case 'month':
      case 'time':
      case 'week':
      case 'number':
      case 'email':
      case 'url':
      case 'tel':
         $field .= '<input type="' . esc_attr($args['type']) . '" class="input-text form-control ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['id']) . '"  value="' . esc_attr($value) . '" ' . implode(' ', $custom_attributes) . ' />';

         break;
      case 'hidden':
         $field .= '<input type="' . esc_attr($args['type']) . '" class="input-hidden form-control ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="' . esc_attr($value) . '" ' . implode(' ', $custom_attributes) . ' />';

         break;
      case 'select':
         $field   = '';
         $options = '';

         if (!empty($args['options'])) {
            foreach ($args['options'] as $option_key => $option_text) {
               if ('' === $option_key) {
                  // If we have a blank option, select2 needs a placeholder.
                  if (empty($args['placeholder'])) {
                     $args['placeholder'] = $option_text ? $option_text : __('Choose an option', 'woocommerce');
                  }
                  $custom_attributes[] = 'data-allow_clear="true"';
               }
               $options .= '<option value="' . esc_attr($option_key) . '" ' . selected($value, $option_key, false) . '>' . esc_html($option_text) . '</option>';
            }

            $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder']) . '">
							' . $options . '
						</select>';
         }

         break;
      case 'radio':
         $label_id .= '_' . current(array_keys($args['options']));

         if (!empty($args['options'])) {
            foreach ($args['options'] as $option_key => $option_text) {
               $field .= '<input type="radio" class="input-radio ' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($option_key) . '" name="' . esc_attr($key) . '" ' . implode(' ', $custom_attributes) . ' id="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '"' . checked($value, $option_key, false) . ' />';
               $field .= '<label for="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '" class="radio ' . implode(' ', $args['label_class']) . '">' . esc_html($option_text) . '</label>';
            }
         }

         break;
   }

   if (!empty($field)) {
      $field_html = '';

      if ($args['label'] && 'checkbox' !== $args['type']) {
         $field_html .= $field . '<label for="' . esc_attr($label_id) . '" class="' . esc_attr(implode(' ', $args['label_class'])) . '">' . wp_kses_post($args['label']) . $required . '</label>';
      }


      if ($args['description']) {
         $field_html .= '<span class="description" id="' . esc_attr($args['id']) . '-description" aria-hidden="true">' . wp_kses_post($args['description']) . '</span>';
      }


      $container_class = esc_attr(implode(' ', $args['class']));
      $container_id    = esc_attr($args['id']) . '_field';
      $field           = sprintf($field_container, $container_class, $container_id, $field_html);
   }

   /**
    * Filter by type.
    */
   $field = apply_filters('woocommerce_form_field_' . $args['type'], $field, $key, $args, $value);

   /**
    * General filter on form fields.
    *
    * @since 3.4.0
    */
   $field = apply_filters('woocommerce_form_field', $field, $key, $args, $value);

   if ($args['return']) {
      return $field;
   } else {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $field;
   }
}


/**
 * Disable billing field
 * https://misha.agency/woocommerce/otklyuchit-polya-na-stranicze-oformleniya-zakaza.html
 */

add_filter('woocommerce_checkout_fields', 'codeweber_del_fields', 25);

function codeweber_del_fields($fields)
{

   // unset( $fields[ 'billing' ][ 'billing_first_name' ] ); // имя
   // unset( $fields[ 'billing' ][ 'billing_last_name' ] ); // фамилия
   // unset( $fields[ 'billing' ][ 'billing_phone' ] ); // телефон
   // unset( $fields[ 'billing' ][ 'billing_email' ] ); // емайл

   unset($fields['billing']['billing_company']); // компания
   // unset($fields['billing']['billing_country']); // страна
   // unset($fields['billing']['billing_address_1']); // адрес 1
   unset($fields['billing']['billing_address_2']); // адрес 2
   // unset($fields['billing']['billing_city']); // город
   // unset($fields['billing']['billing_state']); // регион, штат
   // unset($fields['billing']['billing_postcode']); // почтовый индекс
   //unset($fields['order']['order_comments']); // заметки к заказу

   unset($fields['shipping']['shipping_company']); // компания
   unset($fields['shipping']['shipping_address_2']); // адрес 2

   return $fields;
}




add_filter('woocommerce_billing_fields', 'codeweber_remove_billing_fields');
function codeweber_remove_billing_fields($fields)
{
   unset($fields['billing_address_2']); // or shipping_address_2 for woocommerce_shipping_fields hook
   return $fields;
}


add_filter('woocommerce_shipping_fields', 'codeweber_remove_shipping_fields');
function codeweber_remove_shipping_fields($fields)
{
   unset($fields['shipping_address_2']); // or shipping_address_2 for woocommerce_shipping_fields hook
   return $fields;
}



// /**
//  * Reorder billing fields
//  * https://stackoverflow.com/a/45310503/20374350
//  */
// add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
// function custom_override_checkout_fields($fields)
// {
//    $fields['billing']['billing_first_name']['priority'] = 10;
//    $fields['billing']['billing_last_name']['priority'] = 20;
//    $fields['billing']['billing_company']['priority'] = 30;
//    $fields['billing']['billing_country']['priority'] = 40;
//    $fields['billing']['billing_state']['priority'] = 50;
//    $fields['billing']['billing_address_1']['priority'] = 60;
//    $fields['billing']['billing_address_2']['priority'] = 70;
//    $fields['billing']['billing_city']['priority'] = 55;
//    $fields['billing']['billing_postcode']['priority'] = 90;
//    $fields['billing']['billing_email']['priority'] = 100;
//    $fields['billing']['billing_phone']['priority'] = 110;
//    return $fields;
// }

add_filter('woocommerce_default_address_fields', 'custom_override_default_locale_fields');
function custom_override_default_locale_fields($fields)
{
   $fields['state']['priority'] = 50;
   $fields['city']['priority'] = 55;
   $fields['address_1']['priority'] = 60;
   $fields['address_2']['priority'] = 70;
   return $fields;
}


/**
 * Change country field class
 */
// change country class
add_filter('woocommerce_default_address_fields', 'country_class_change');

function country_class_change($address_fields)
{
   // change country class
   $address_fields['first_name']['class'] = array('col-md-6');
   $address_fields['last_name']['class'] = array('col-md-6');
   $address_fields['country']['class'] = array('col-md-6');
   $address_fields['postcode']['class'] = array('col-md-12 col-xl-3');
   $address_fields['state']['class'] = array('col-md-6');
   $address_fields['city']['class'] = array('col-md-6 col-lg-6 col-xl-4');
   $address_fields['address_1']['class'] = array('col-md-6 col-xl-5');
   $address_fields['']['class'] = array('col-md-6');

   return $address_fields;
}



/**
 * Add Regions Russia
 */
/**
 * @snippet       Регионы России для добавления в доставкее и на странице оформления заказа
 * @sourcecode    https://wpruse.ru/my-plugins/dobavit-regiony-dostavki-v-woocommerce/
 * @testedwith    WooCommerce 3.8
 * @author        Artem Abramovich
 * @see           https://ru.wordpress.org/plugins/wc-city-select/
 */
add_filter('woocommerce_states', 'awrr_states_russia');
function awrr_states_russia($states)
{

   $states['RU'] = array(
      '01' => 'Республика Адыгея',
      '02' => 'Республика Башкортостан',
      '03' => 'Республика Бурятия',
      '04' => 'Республика Алтай',
      '05' => 'Республика Дагестан',
      '06' => 'Республика Ингушетия',
      '07' => 'Республика Кабардино-Балкария',
      '08' => 'Республика Калмыкия',
      '09' => 'Республика Карачаево-Черкессия',
      '10' => 'Республика Карелия',
      '11' => 'Республика Коми',
      '12' => 'Республика Марий Эл',
      '13' => 'Республика Мордовия',
      '14' => 'Республика Саха',
      '15' => 'Республика Северная Осетия — Алания',
      '16' => 'Республика Татарстан',
      '17' => 'Республика Тыва',
      '18' => 'Удмуртская Республика',
      '19' => 'Республика Хакасия',
      '20' => 'Чеченская республика',
      '21' => 'Чувашская Республика',
      '22' => 'Алтайский край',
      '23' => 'Краснодарский край',
      '24' => 'Красноярский край',
      '25' => 'Приморский край',
      '26' => 'Ставропольский край',
      '27' => 'Хабаровский край',
      '28' => 'Амурская область',
      '29' => 'Архангельская область',
      '30' => 'Астраханская область',
      '31' => 'Белгородская область',
      '32' => 'Брянская область',
      '33' => 'Владимирская область',
      '34' => 'Волгоградская область',
      '35' => 'Вологодская область',
      '36' => 'Воронежская область',
      '37' => 'Ивановская область',
      '38' => 'Иркутская область',
      '39' => 'Калининградская область',
      '40' => 'Калужская область',
      '41' => 'Камчатский край',
      '42' => 'Кемеровская область',
      '43' => 'Кировская область',
      '44' => 'Костромская область',
      '45' => 'Курганская область',
      '46' => 'Курская область',
      '47' => 'Ленинградская область',
      '48' => 'Липецкая область',
      '49' => 'Магаданская область',
      '50' => 'Московская область',
      '51' => 'Мурманская область',
      '52' => 'Нижегородская область',
      '53' => 'Новгородская область',
      '54' => 'Новосибирская область',
      '55' => 'Омская область',
      '56' => 'Оренбургская область',
      '57' => 'Орловская область',
      '58' => 'Пензенская область',
      '59' => 'Пермский край',
      '60' => 'Псковская область',
      '61' => 'Ростовская область',
      '62' => 'Рязанская область',
      '63' => 'Самарская область',
      '64' => 'Саратовская область',
      '65' => 'Сахалинская область',
      '66' => 'Свердловская область',
      '67' => 'Смоленская область',
      '68' => 'Тамбовская область',
      '69' => 'Тверская область',
      '70' => 'Томская область',
      '71' => 'Тульская область',
      '72' => 'Тюменская область',
      '73' => 'Ульяновская область',
      '74' => 'Челябинская область',
      '75' => 'Забайкальский край',
      '76' => 'Ярославская область',
      '77' => 'Москва',
      '78' => 'Санкт-Петербург',
      '79' => 'Еврейская автономная область',
      '82' => 'Республика Крым',
      '83' => 'Ненецкий автономный округ',
      '86' => 'Ханты-Мансийский автономный округ — Югра',
      '87' => 'Чукотский автономный округ',
      '89' => 'Ямало-Ненецкий автономный округ',
      '92' => 'Севастополь',
      '93' => 'Донецкая Народная Республика',
      '94' => 'Луганская Народная Республика',

   );

   return $states;
}




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
 * 
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
   global $product;

   echo '<div class="post-header"><div class="d-flex flex-row align-items-center justify-content-between mb-2">';
   echo wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
   echo '<span class="ratings five"></span></div>';
}

add_action('woocommerce_after_shop_loop_item', 'postheaderblockafter', 25);

function postheaderblockafter()
{
   echo '</div>';
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

//add_filter("woocommerce_reset_variations_link", "__return_false");
