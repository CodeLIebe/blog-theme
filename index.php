<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage codinski
 */

get_header(); ?>

	<div class="row m-2">
    <div class="col-xl-8 col-md-12 px-5">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
          <h2 class="pt-5"> <?php the_title(); ?> </h2>
          <div class="bg-secondary text-light">
						<i><small>By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?></small></i>
					</div>
					<div class="bg-light">
						<?php the_content(); ?>
					</div>
          <?php if( $tags = get_the_tags() ) {
            foreach( $tags as $tag ) {
                $sep = ( $tag === end( $tags ) ) ? '' : ', ';
                echo '<a href="' . get_term_link( $tag, $tag->taxonomy ) . '" class="bg-light mr-1">#' . $tag->name . ' </a>';
            }
          }
				 endwhile;
      else :
          _e( 'Sorry, nothing to see here. Mind your own business, bro!', 'textdomain' );
      endif;
      ?>
			<br />
			<a href="<?php echo esc_url( get_permalink( get_previous_post()->ID ) ); ?>"><< prev </a>
			|
			<a href="<?php echo esc_url( get_permalink( get_next_post()->ID ) ); ?>">next >> </a>
    </div>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
