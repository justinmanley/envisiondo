<?php
/**
 * The Footer widget areas
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
?>
		<div id="footer-widget-area">
			<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
			<section id="first" class="widget-area">
				<ul>
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</ul>
			</section>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
			<section id="second" class="widget-area">
				<ul>
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</ul>
			</section>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
			<section id="third" class="widget-area">
				<ul>
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</ul>
			</section>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
			<section id="fourth" class="widget-area">
				<ul>
					<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
				</ul>
			</section>
			<?php endif; ?>
		</div>
		<?php if ( is_active_sidebar( 'fifth-footer-widget-area' ) ) : ?>
		<section id="fifth" class="widget-area">
			<ul>
				<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?>
			</ul>
		</section>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
		<section id="sixth" class="widget-area">
			<ul>
				<?php dynamic_sidebar( 'sixth-footer-widget-area' ); ?>
			</ul>
		</section>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'seventh-footer-widget-area' ) ) : ?>
		<section id="seventh" class="widget-area">
			<ul>
				<?php dynamic_sidebar( 'seventh-footer-widget-area' ); ?>
			</ul>
		</section>
		<?php endif; ?>
