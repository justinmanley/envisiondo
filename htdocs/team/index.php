<?php 
require_once("../functions/hello.php");
$page = "Team";
$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
<script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
	<script type="text/javascript">
			$().ready(function() {
				$("#coda-slider-1").codaSlider({
					autoHeight: false,				
					panelTitleSelector: "h2.name",
					firstPanelToLoad: Math.floor(Math.random()*9)+1,					
					dynamicArrows: false,
					dynamicTabsAlign: "left",
					slideEaseFunction: "easeInOutSine"					
				});
			});
	 </script>';
	 
	echo pageTemplate($page, $css, $js);
	echo pageHeader($page); ?>
</div>
	<div class="content">
		<div class="page">
		<h2>Team</h2>

<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">

	<div class="panel" id="megan">
		<div class="panel-wrapper">
			<img class="portrait" alt="Megan Matte" src="../images/portraits/megan.jpg"/>		
			<h2 class="name">Megan Matte</h2>
			<h3 class="title">Chair of Employer Relations and Outreach</h3>
			<p>Megan is second year economics major in the College, brought on to the EnvisionDo team last year. Her main role on the Board is facilitating EnvisionDo-sponsored site visits to businesses around the Chicago area and assisting in the recruitment of new members. Last summer, she interned with Groupon's team of sales analysts in order to discover and harness the key success drivers in Groupon's North America daily deals business. When she’s not busy with EnvisionDo or schoolwork, she can be found reading travel literature, going downtown to visit new neighborhoods, and experimenting with new vegetarian recipes.</p>
		</div>
	</div>

	<div class="panel" id="justin">
		<div class="panel-wrapper">
			<img class="portrait" alt="Justin Manley" src="../images/portraits/justin.jpg"/>		
			<h2 class="name">Justin Manley</h2>
			<h3 class="title">Chair of Technology</h3>
			<p>Justin is a second-year at the University of Chicago studying Math and Computer Science. He has been involved with EnvisionDo since the spring of 2012, and is currently working to plan the EnvisionDo Food Conference slated for the spring of 2013. In addition to his role as the Chair of Technology in EnvisionDo, Justin is also interested in innovation and creativity in design and architecture. He hopes to expose students at the University of Chicago to some of Chicago's innovators in architecture, design, and engineering this year.</p>
			<p>Justin loves to read, especially fantasy fiction, biographies, and books about architecture and urban planning. He loves skating the Midway ice rink, exploring the city of Chicago, and backpacking and camping with friends.</p>
		</div>
	</div>

	<div class="panel" id="laurel">
		<div class="panel-wrapper">
			<img class="portrait" alt="Laurel Freidenberg" src="../images/portraits/laurel.jpg"/>		
			<h2 class="name">Laurel Freidenberg</h2>
			<p>
				Laurel is a second-year in the college majoring in economics and minoring in Spanish. 
				Laurel aspires to combine her passion for the food industry and her love of entrepreneurship to eventually work with startups that focus on the food industry and social justice issues related to food. 
				She recently interned with a farm-to-fork startup based out of Columbus, Ohio called Azoti, helping them to expand the reach of their services. 
				She also recently interned with the Ohio Treasurer of State’s office, implementing a new computer program to enhance the efficiency and accuracy of account analysis. 
				Laurel also serves as Fundraising Chair for University Ballet, and dances with the group, continuing to pursue her lifelong love of ballet.
			</p>
		</div><!-- .panel-wrapper -->
	</div><!-- .panel -->	

	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper -->

	
		</div>
</div>

<?

echo pageFooter($page);

?>

