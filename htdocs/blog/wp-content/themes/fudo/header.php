<?php
/**
 * The Header
 *
 * @package WordPress
 * @subpackage Fudo
 * @since Fudo 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="Yura Smirnov email@yurasmirnov.com http://yurasmirnov.com">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/skins.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<title>
		<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'fudo' ), max( $paged, $page ) );
		?>
	</title>
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header>
		<div id="header-text">
			<hgroup id="site-name">
					<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		</div>
		<nav id="mainmenu">
			<div id="access">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<a href="<?php echo home_url( '/feed' ) ?>" title="Subscribe <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="feed"><img src="<?php echo get_template_directory_uri(); ?>/images/feed.png" alt="Subscribe" /></a>
			</div>
		</nav>
		<div id="brending">
			<?php
				// Check if this is a post or page, if it has a thumbnail, and if it's a big one
				if ( is_singular() &&
				has_post_thumbnail( $post->ID ) &&
				( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
				$image[1] >= HEADER_IMAGE_WIDTH ) :
				// Houston, we have a new header image!
				echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
				else : 
			?>
				<img id="thmbs" <?php if(header_image() == '') {echo 'style="display: none;"';} // for hidden tag of image ?> src="<?php header_image(); ?>" alt="" />
			<?php endif; ?>
		</div>
	</header>
	<section id="main">
