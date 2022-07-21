<?php

/**
 * Custom user functions.
 * You can put here your custom code.
 */


 // Admin footer modification
  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://codeweber.com" target="_blank">Codeweber</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');



function printr($data) {
    echo "<pre>";
       print_r($data);
    echo "</pre>";
 }
