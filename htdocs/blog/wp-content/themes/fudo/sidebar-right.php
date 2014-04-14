<?php
/**
 * The Right Sidebar
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
?>
			<div id="right-side">
			<?php if ( is_active_sidebar( 'top-right-primary-widget-area' ) ) : ?>
				<aside id="top-right-primary">
				
					<ul>
						<?php dynamic_sidebar( 'top-right-primary-widget-area' ); ?>
					</ul>
				
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'top-right-secondary-widget-area' ) ) : ?>
				<aside id="top-right-secondary">
					<ul>
						<?php dynamic_sidebar( 'top-right-secondary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'right-feature-widget-area' ) ) : ?>
				<aside id="right-feature">
					<ul>
						<?php dynamic_sidebar( 'right-feature-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'right-primary-widget-area' ) ) : ?>
				<aside id="right-primary">
					<ul>
						<?php dynamic_sidebar( 'right-primary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'right-secondary-widget-area' ) ) : ?>
				<aside id="right-secondary">
					<ul>
						<?php dynamic_sidebar( 'right-secondary-widget-area' ); ?>
					</ul>
				</aside>
			<?php endif; ?>
			</div>
