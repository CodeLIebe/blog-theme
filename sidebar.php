<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage codinski
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="col p-5 border-left bg-light">
		<div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
<?php endif; ?>
