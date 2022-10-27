<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php global $forms; ?>
	<?php $forms = array(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#sidebar-nav">
	<?php do_action('codeweber_start_body_open'); ?>
	<?php wp_body_open(); ?>
	<?php sandbox_frame_open(); ?>
	<div id="content-wrapper" class="content-wrapper">
		<?php do_action('codeweber_start_content_wrapper'); ?>
		<?php
		do_action('codeweber_header');
		?>