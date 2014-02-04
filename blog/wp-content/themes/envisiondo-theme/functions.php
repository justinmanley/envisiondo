<?php

/*
$default = array(
'default-color'=>'#fff',
'default-image'=> get_template_directory_uri() . '/images/photo.jpg',
'wp-head-callback'=>'',
'admin-head-callback'=>'',
'admin-preview-callback'=>'',
);

add_theme_support( 'custom-background',$default); */

function ed_scripts() {
	echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/global.js"></script>
	<script type="text/javascript" src="../js/jquery.ez-bg-resize.js"></script>	
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>';
	//return remove_filter('body_class','twentyeleven_body_classes');
}

add_action('wp_head','ed_scripts');

function print_filters_for( $hook = '' ) {
    global $wp_filter;
    if( empty( $hook ) || !isset( $wp_filter[$hook] ) )
        return;

    print_r( $wp_filter[$hook] );
}

function im_background() {
	//$twentyeleven_result = twentyeleven_body_classes($classes);

	$image_background_html = '"> <div class="background"><img src="../images/photo.jpg"/></div>
<script>
$(document).ready(function() {
	$(".background img").bind("load", function () { $(".background").fadeIn(); });
    $(".background").ezBgResize();
    $(".scrollbox").jScrollPane();
});</script><img src="/images/logo.png';
	$classes[]=$image_background_html;
	return $classes;
/*	Above this, the last part of $image_background_html is <pre>'.

$ed_tester=print_filters_for('twentyeleven_layout_classes');
	$ed_finally='</pre>';
	$twentyeleven_result[]=$image_background_html;
	$twentyeleven_result[]=$ed_tester;
	$twentyeleven_result[]=$ed_finally;
	return $twentyeleven_result;*/
}

add_filter('twentyeleven_layout_classes','im_background');


/*function ed_test () {

	$ed_test_result = array();
	$ed_pre='<pre>';
	$ed_tester=print_filters_for('get_header');
	$ed_finally='</pre>';
	$ed_test_result[]=$ed_pre;
	$ed_test_result[]=$ed_tester;
	$ed_test_result[]=$ed_finally;
	return $ed_test_result;
}

add_filter('body_class','ed_test') */
?>
