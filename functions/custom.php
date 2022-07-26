<?php

/**
 * Custom user functions.
 * You can put here your custom code.
 */


// Admin footer modification

function remove_footer_admin()
{
    echo '<span id="footer-thankyou">Developed by <a href="http://codeweber.com" target="_blank">Codeweber</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');



// --- Var Dump ---

function printr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}



// --- Custom login form---

function wp_login_form_brk($args = array())
{
    $defaults = array(
        'echo'           => true,
        // Default 'redirect' value takes the user back to the request URI.
        'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'form_id'        => 'loginform',
        'label_username' => __('Username or Email Address'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in'   => __('Log In'),
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true,
        'value_username' => '',
        // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
        'value_remember' => true,
    );

    /**
     * Filters the default login form output arguments.
     *
     * @since 3.0.0
     *
     * @see wp_login_form()
     *
     * @param array $defaults An array of default login form arguments.
     */
    $args = wp_parse_args($args, apply_filters('login_form_defaults', $defaults));

    /**
     * Filters content to display at the top of the login form.
     *
     * The filter evaluates just following the opening form tag element.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_top = apply_filters('login_form_top', '', $args);

    /**
     * Filters content to display in the middle of the login form.
     *
     * The filter evaluates just following the location where the 'login-password'
     * field is displayed.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_middle = apply_filters('login_form_middle', '', $args);

    /**
     * Filters content to display at the bottom of the login form.
     *
     * The filter evaluates just preceding the closing form tag element.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_bottom = apply_filters('login_form_bottom', '', $args);

    $form =
        sprintf(
            '<form name="%1$s" id="%1$s" action="%2$s" method="post">',
            esc_attr($args['form_id']),
            esc_url(site_url('wp-login.php', 'login_post'))
        ) .
        $login_form_top .
        sprintf(
            '<div class="form-floating mb-4 login-username">
          <input type="text" name="log" class="form-control input" id="%1$s" value="%3$s" size="20" autocomplete="username" placeholder="name@example.com">
          <label for="%1$s">%2$s</label>
           </div>',
            esc_attr($args['id_username']),
            esc_html($args['label_username']),
            esc_attr($args['value_username'])
        ) .
        sprintf(
            '<div class="form-floating password-field mb-4 login-password">
                         <input type="password" class="form-control input" name="pwd" placeholder="Password" id="%1$s value="" size="20" autocomplete="current-password"">
                         <span class="password-toggle"><i class="uil uil-eye"></i></span>
                         <label for="%1$s">%2$s</label>
                      </div>',
            esc_attr($args['id_password']),
            esc_html($args['label_password'])
        ) .
        $login_form_middle .
        ($args['remember'] ?
            sprintf(
                '<p class="login-remember"><label><input name="rememberme" type="checkbox" id="%1$s" value="forever"%2$s /> %3$s</label></p>',
                esc_attr($args['id_remember']),
                ($args['value_remember'] ? ' checked="checked"' : ''),
                esc_html($args['label_remember'])
            ) : ''
        ) .
        sprintf(

            '<p class="login-submit">
				<input type="submit" name="wp-submit" id="%1$s" class="btn btn-primary rounded-pill btn-login w-100 mb-2" value="%2$s" />
				<input type="hidden" name="redirect_to" value="%3$s" />
			</p>',
            esc_attr($args['id_submit']),
            esc_attr($args['label_log_in']),
            esc_url($args['redirect'])
        ) .
        $login_form_bottom .
        '</form>';

    if ($args['echo']) {
        echo $form;
    } else {
        return $form;
    }
}
