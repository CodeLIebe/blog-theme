<?php
/**
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
			'before_title'  => '<h2 class="pt-5">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'codinski_widgets_init' );


/**
 * Add the custom css class (bootstrap 4 link/text color) to the output of the_author_posts_link()
 *
*/
add_filter( 'the_author_posts_link', function( $link )
{
    return str_replace( 'rel="author"', 'rel="author" class="lighter"', $link );
});

/**
 * Add the custom css class (bootstrap 4 link/text color) to the output of the_category( ',')
 *
*/
function add_class_to_category( $thelist, $separator, $parents){
    $class_to_add = 'lighter';
    return str_replace('<a href="',  '<a class="'. $class_to_add. '" href="', $thelist);
}

add_filter('the_category', __NAMESPACE__ . '\\add_class_to_category',10,3);


?>
