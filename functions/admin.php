<?php
add_action('admin_head', 'my_custom_fonts'); // admin_head is a hook my_custom_fonts is a function we are adding it to the hook

function my_custom_fonts()
{
  echo '<style>
    body {
    background: #f0f0f1!important;
    color: #3c434a!important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif!important;
    font-size: 13px!important;
    line-height: 1.4em!important;
    min-width: 600px!important;
}
.block-editor .edit-post-sidebar .acf-fields > .acf-field {
    margin: 5px;
}
.acf-tab-group {
    padding: 5px 5px 0;
}
.acf-label.acf-accordion-title {
    background: lightgray;
    font-weight: 800!important;
    letter-spacing: 1px;
}
body {
    display: block;
    flex-direction: unset;
}
  </style>';
}
