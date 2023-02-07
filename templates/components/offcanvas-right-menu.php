<?php
wp_nav_menu(
    array(
        'theme_location'    => 'offcanvas_right',
        'depth'             => 2,
        'container'         => '',
        'container_class'   => '',
        'container_id'      => '',
        'menu_class'        => 'navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    )
);
