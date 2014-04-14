<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
get_header(); ?>
			<?php get_sidebar( 'left' ); ?>
				<div id="content">
					<?php get_template_part( 'loop', 'index' ); ?>
				</div>
			<?php get_sidebar( 'right' ); ?>
<?php get_footer(); ?>
