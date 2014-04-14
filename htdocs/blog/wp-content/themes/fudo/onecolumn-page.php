<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
get_header(); ?>
		<div id="container" class="one-column">
			<div id="content">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<p>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</p>
				</article>
				<?php comments_template( '', true ); ?>
<?php endwhile; ?>
			</div>
		</div>
<?php get_footer(); ?>
