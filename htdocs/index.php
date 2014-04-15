<?php 

require_once("functions/hello.php");
$css = '<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" /><style>.gastro-conference {background: rgba(1,1,1, 0.5);} #cgc {background: url(../images/facebook_profile.png); width: 310px; height: 0px; padding-top: 231px; display: block; overflow: hidden;}</style>';
$js = '<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>';
$page = "home";
echo pageTemplate($page, $css, $js);
echo pageHeader($page); ?>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=288054841296469";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>  
<div class="motto">
	<b>EnvisionDo</b> is a platform for students to explore innovation and creativity in business. 
</div>
<div class="body">

<div class="content">
	<div class="overlay">
		Overlay
	</div>
	<div class="secondary">
		<div class="featurette connect-with-us">
			<h3>
				EnvisionDo on Facebook
			</h3>
            <div class="fb-facepile" data-href="https://www.facebook.com/EnvisionDo" data-width="292" data-height="300" data-max-rows="5" data-colorscheme="dark" data-size="large" data-show-count="true"></div>
        </div>
		<div class="featurette middle events">
			<h3>
				Chicago Entrepreneurship
			</h3>
             <a class="twitter-timeline" href="https://twitter.com/ChicagoCIE" data-widget-id="455494365406695424">Tweets by @ChicagoCIE</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div class="featurette" id="upcoming-events">
			<h3>Upcoming events</h3>
			<p>
				<strong>Saturday, April 31</strong>
				<br />
				Conference: The Business of Style
			</p>
		</div>
	</div>
</div>
<?php echo pageFooter($page); ?>
