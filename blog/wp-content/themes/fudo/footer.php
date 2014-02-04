<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
?>
	</section>
</div>
	<footer role="contentinfo">
		<aside id="colophon">
			<?php get_sidebar( 'footer' ); ?>
		</aside>
		<div id="bottom">
			<div id="copy">
				<section id="site-info">
					<h1><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</section>
				<section id="site-generator">
					<h2><?php do_action( 'fudo_credits' ); ?>Theme: <a class="url" href="http://psdtohtmllab.com/" title="PSDtoHTML Laboratory">Fudo by Yura Smirnov</a><a id="powered" href="<?php echo esc_url( __('http://wordpress.org/', 'fudo') ); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'fudo'); ?>" rel="generator"><?php printf( __('Proudly powered by %s.', 'fudo'), 'WordPress' ); ?></a></h2>
				</section>
				<section id="up">
					<a href="#">top ↑</a>
				</section>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
