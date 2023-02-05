<?php
if (is_shop() || is_product_tag() || is_product_category()) : ?>
	<aside class="col-lg-3 sidebar">
		<?php dynamic_sidebar('woocommerce_sidebar'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php elseif (is_page() && !dynamic_sidebar()) : ?>
	<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-page'); ?>
	</aside> <!-- #sidebar-main-wrapper -->

<?php elseif (is_post_type_archive('services') || is_tax('service_category') || is_tax('types_of_services') || is_singular('services')) : ?>
	<?php if (is_active_sidebar('sidebar-services')) : ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php dynamic_sidebar('sidebar-services'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php endif; ?>

<?php else : ?>
	<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-main'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php endif; ?>