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

add_filter('wpcf7_autop_or_not', '__return_false');



/**
 * Modal after sent CF7
 */
add_action('wp_footer', 'сf7_modal_after_sent');

function сf7_modal_after_sent()
{
    echo '<div class="modal fade" id="modal-0166" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body p-6">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <p class="mb-0">Спасибо за Ваше сообщение.<br>Оно успешно отправлено.</p>
        </div>
        <!--/.row -->
      </div>
      <!--/.modal-body -->
    </div>
    <!--/.modal-content -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->';
?>

    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
            var myModal = new bootstrap.Modal(document.getElementById('modal-0166'), {
                keyboard: false
            })
            myModal.show();

            function sayHi() {
                myModal.hide();
            }
            setTimeout(sayHi, 5000);
        }, false);
    </script>
<?php
}


/* --- Contact form 7  Demo Template Floating Plaeholder

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