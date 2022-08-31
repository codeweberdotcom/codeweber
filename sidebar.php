<?php if (is_page() && !dynamic_sidebar()) : ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-page'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php elseif (is_post_type_archive('services') || is_tax('service_category') || is_tax('types_of_services')) : ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-services'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php else : ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-main'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php endif; ?>