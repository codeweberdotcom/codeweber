<?php

/**
 * Integration with Contact Form 7
 */

// Load CSS & JS only when needed
// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// https://orbitingweb.com/blog/prevent-cf7-from-loading-css-js/





add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    return $content;
});




/* --- Contact form 7  Template Floating Plaeholder

/* <h2 class="mb-3 text-start">Form order</h2>
<p class="lead mb-6 text-start">Fill your email and password to sign in.</p>

<div class="form-floating mb-3"> 
[text text-name id:floatingName class:form-control placeholder "Name"]
<label for="floatingName">Name</label>
</div>

<div class="form-floating mb-3"> 
[email email id:floatingEmail class:form-control placeholder "Email"]
<label for="floatingEmail">Email</label>
</div>

<button type="submit" class="btn btn-primary rounded-pill btn-login">Submit</button>


/*  Function floating CF7

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    return $content;
}); */