<?php
/**
 * The Left Sidebar
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
?>
			<div id="left-side">
			<?php if ( is_active_sidebar( 'top-left-primary-widget-area' ) ) : ?>
				<aside id="top-left-primary">
					<ul>
						<?php dynamic_sidebar( 'top-left-primary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'top-left-secondary-widget-area' ) ) : ?>
				<aside id="top-left-secondary">
					<ul>
						<?php dynamic_sidebar( 'top-left-secondary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'left-feature-widget-area' ) ) : ?>
				<aside id="left-feature">
					<ul>
						<?php dynamic_sidebar( 'left-feature-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'left-primary-widget-area' ) ) : ?>
				<aside id="left-primary">
					<ul>
						<?php dynamic_sidebar( 'left-primary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'left-secondary-widget-area' ) ) : ?>
				<aside id="left-secondary">
					<ul>
						<?php dynamic_sidebar( 'left-secondary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			</div>
