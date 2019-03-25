<?php /**
 * Registers a widget area.
 *
 */
function codinski_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'codinski' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'codinski' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'codinski_widgets_init' );
?>
