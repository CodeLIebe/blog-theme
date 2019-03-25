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
    <div class="col-7 p-5">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?> <h2> <?php the_title(); ?> </h2>
          <hr  />
          <i><small>By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?></small></i>
          <?php the_content();
      endwhile;
      else :
          _e( 'Sorry, nothing to see here. Mind your own business, bro!', 'textdomain' );
      endif;
      ?>
    </div>

    <div class="col p-5 border-left">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
