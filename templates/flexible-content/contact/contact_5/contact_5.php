<?php

/**
 * Contact 5
 */

$address_line_1 = 'Moonshine St. 14/05 Light City,';
$address_line_2 = 'London, United Kingdom';
$e_mail_address = 'info@codeweber.com';
$e_mail_address_1 = '';
$phone_number = '00 (123) 456 78 90';
$phone_number_1 = '';

$cf_form = '';

if (get_field('address_1', 'option')) {
   $address_line_1 = get_field('address_1', 'option');
}
if (get_field('address_2', 'option')) {
   $address_line_2 = get_field('address_2', 'option');
}
if (get_field('email', 'option')) {
   $e_mail_address = get_field('email', 'option');
}
if (get_field('email_1', 'option')) {
   $e_mail_address_1 = get_field('email_1', 'option');
}
if (get_field('phone', 'option')) {
   $phone_number = get_field('phone', 'option');
}
if (get_field('phone_1', 'option')) {
   $phone_number_1 = get_field('phone_1', 'option');
}
$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
}


$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="row gy-10 gx-lg-8 gx-xl-12">
               <div class="col-lg-8 <?php echo $block->column_class_1; ?>">
                  <?php echo $cf_form; ?>
                  <!-- /form -->
               </div>
               <!--/column -->
               <div class="col-lg-4 <?php echo $block->column_class_2; ?>">
                  <div class="d-flex flex-row">
                     <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                     </div>
                     <div>
                        <h5 class="mb-1"><?php esc_html_e('Address', 'codeweber'); ?></h5>
                        <address><?php echo $address_line_1; ?>, <?php echo $address_line_2; ?></address>
                     </div>
                  </div>
                  <div class="d-flex flex-row">
                     <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                     </div>
                     <div>
                        <h5 class="mb-1"><?php esc_html_e('Phone', 'codeweber'); ?></h5>
                        <p><?php echo $phone_number; ?> <?php if ($phone_number_1) { ?><br /><?php echo $phone_number_1; ?><?php } ?></p>
                     </div>
                  </div>
                  <div class="d-flex flex-row">
                     <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                     </div>
                     <div>
                        <h5 class="mb-1"><?php esc_html_e('E-mail', 'codeweber'); ?></h5>
                        <p class="mb-0"><a href="mailto:<?php echo $e_mail_address; ?>" class="text-body"><?php echo $e_mail_address; ?></a></p>
                        <?php if ($e_mail_address_1) { ?>
                           <p><a href="mailto:<?php echo $e_mail_address_1; ?>" class="text-body"><?php echo $e_mail_address_1; ?></a></p>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->