<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage codinski
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="col px-5  mt-5 mt-xl-0 bg-light">
		<div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
<?php endif; ?>
