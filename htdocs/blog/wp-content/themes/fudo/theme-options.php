<?php
/**
 * Theme-options
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 3.0
 */
 
add_action( 'admin_init', 'fudo_theme_options_init' );
add_action( 'admin_menu', 'fudo_theme_options_add_page' );

/**
 * Add theme options page styles
 */
wp_register_style( 'fudo', get_template_directory_uri() . '/theme-options.css', '', '0.1' );
if ( isset( $_GET['page'] ) && $_GET['page'] == 'theme_options' ) {
	wp_enqueue_style( 'fudo' );
}

/**
 * Init plugin options to white list our options
 */
function fudo_theme_options_init(){
	register_setting( 'fudo_options', 'fudo_theme_options', 'fudo_theme_options_validate' );
}

/**
 * Load up the menu page
 */
function fudo_theme_options_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'fudo_theme_options_do_page' );
}

/**
 * Return array for our layouts
 */
function fudo_layouts() {
	$theme_layouts = array(
		'content960' => array(
			'value' => 'content960',
			'label' => __( 'Content width 960px: 1 column' ),
		),
		'content800' => array(
			'value' => 'content800',
			'label' => __( 'Content width  800px: 2 columns' )
		),
		'content740' => array(
			'value' => 'content740',
			'label' => __( 'Content width  740px: 2 columns' )
		),
		'content640' => array(
			'value' => 'content640',
			'label' => __( 'Content width 640px: 2-3 columns' )
		),
		'content480' => array(
			'value' => 'content480',
			'label' => __( 'Content width 480px: 3-4 columns' )
		),
		'content320' => array(
			'value' => 'content320',
			'label' => __( 'Content width 320px: 3-5 columns' )
		),
	);

	return $theme_layouts;
}

/**
 * Set default options
 */
function fudo_default_options() {
	$options = get_option( 'fudo_theme_options' );

	if ( ! isset( $options['theme_layout'] ) ) {
		$options['theme_layout'] = 'content960';
		update_option( 'fudo_theme_options', $options );
	}
}
add_action( 'init', 'fudo_default_options' );

/**
 * Create the options page
 */
function fudo_theme_options_do_page() {

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'fudo_options' ); ?>
			<?php $options = get_option( 'fudo_theme_options' ); ?>

			<table class="form-table">
				<?php
				/**
				 * About
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'About theme' ); ?></th>
					<td>
						<img src="http://psdtohtmllab.com/wp-content/uploads/2010/10/me-crop.png" alt="Yura Smirnov" /><br />
						Author: <a href="http://yurasmirnov.com/">Yura Smirnov</a><br />
						Theme Name: Fudo<br />
						Theme URI: <a href="http://psdtohtmllab.com/">PSDtoHTML lab</a><br />
						<a href="http://psdtohtmllab.com/">Download new child themes</a><br />
					</td>
				</tr>

				<?php
				/**
				 * Content Width
				 */
				?>
				<tr valign="top" id="fudo-layouts"><th scope="row"><?php _e( 'Default Content Width' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Default  Content Width' ); ?></span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( fudo_layouts() as $option ) {
								$radio_setting = $options['theme_layout'];

								if ( '' != $radio_setting ) {
									if ( $options['theme_layout'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<div class="layout">
								<label class="description">
									<input type="radio" name="fudo_theme_options[theme_layout]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
									<span>
										<?php echo $option['label']; ?>
									</span>
								</label>
								</div>
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options' ); ?>" />
			</p>
		</form>
		<div class="scheme" style="margin-bottom: 50px;text-align: center;">
			<img src="<?php echo get_template_directory_uri(); ?>/scheme.jpg" alt="" />
		</div>
	</div>
<div>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form><br />
						Яndex: 41001442628184<br />
						Webmoney: Z266830025510 or R377784109295<br />
</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function fudo_theme_options_validate( $input ) {

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['theme_layout'] ) )
		$input['theme_layout'] = null;
	if ( ! array_key_exists( $input['theme_layout'], fudo_layouts() ) )
		$input['theme_layout'] = null;

	return $input;
}
