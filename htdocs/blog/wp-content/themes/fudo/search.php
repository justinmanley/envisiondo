<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
get_header(); ?>
		<div id="content">
<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'fudo' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>
				<article>
					<h1"><?php _e( 'Nothing Found', 'fudo' ); ?></h1>
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'fudo' ); ?></p>
						<?php get_search_form(); ?>
				<article>
<?php endif; ?>
		</div>
<?php get_footer(); ?>
