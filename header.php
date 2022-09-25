<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php global $forms; ?>
	<?php $forms = array(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-loader"></div>

	<?php wp_body_open(); ?>
	<?php sandbox_frame_open(); ?>

	<div id="content-wrapper" class="content-wrapper">
		<?php

		// get_template_part('templates/header/header', 'topbar');
		get_template_part('templates/header/header', 'sandbox-09_cw'); ?>