<?php 
	// ini_set('display_errors', true);
	require_once("../functions/hello.php");
	$page = "About";
	$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
	$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
	<script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
		<script type="text/javascript">
				$().ready(function() {
					$("#coda-slider-1").codaSlider({
	//					autoHeight: false,
						dynamicArrows: false,
						dynamicTabsAlign: "left",
						slideEaseFunction: "easeInOutSine"					
					});
				});
		 </script>';
		 
		echo pageTemplate($page, $css, $js);
		echo pageHeader($page); 
?>
</div>
<div class="content">
	<div class="page">
		<div class="panel" id="methodology">
			<div class="panel-wrapper">
				<div class="mission">
					<h2 class="title">Our Mission</h2>
					<p>
						<b>EnvisionDo was founded in 2010 at the University of Chicago to help student entrepreneurs realize their ideas.</b>
						Today, our mission is to help students explore innovation and creativity in all areas of business.
					</p>
					<p>In order to bring students together with industry leaders, innovators, and changemakers, we bring speakers to campus, host conferences, organize site visits to local startups, and organize workshops.</p>
					<p>
						Recently, <a href="../initiatives#alexis-ohanian">we hosted Reddit co-founder Alexis Ohanian for a talk on campus</a>, brought students to visit local businesses <a href="../initiatives#groupon">Groupon</a> and <a href="../initiatives#the-plant">The Plant</a>, and hosted the sell-out <a href="../initiatives#chicago-gastroconference">Chicago Gastroconference</a>, which brought together students, entreprenurs, and foodies from all over Chicago.  
						<a href="../initiatives">Read more about our initiatives >></a>
					</p>
				</div>
				<div id="sidebar-picture">
					<img src="../images/events/gastroconference/nalebuff.jpg">
					<div class="photo-credit">Photo &copy; 2013 The University of Chicago by <a href="http://communications.uchicago.edu/people/rob-kozloff">Bob Kozloff</a>.</div>					
				</div>						
			</div>
		</div>
	</div>
</div>
<?php
	echo pageFooter($page);
?>
