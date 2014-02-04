<?php 
require_once("../functions/hello.php");
$page = "Team";
$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
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

	<div class="panel" id="lanny">
		<div class="panel-wrapper">
			<img class="portrait" alt="Lanny Lang" src="../images/portraits/lanny-new.jpg"/>		
			<h2 class="name">Lanny Lang</h2>
			<h3 class="title">Co-President</h3>
			<p>Lanny Lang is a senior at the University of Chicago majoring in economics and is the co-founder of EnvisionDo. She was inspired by her first-year internship working with innovative startups at Intel Capital, a venture capital firm, to help create an organization that explored the intersection of creativity and business. Of particular interest to her is how people come up with cutting-edge strategies and products in the corporate world today. Outside of EnvisionDo, Lanny is also involved in investment organizations on campus and is a competitive piano player. She also has a passion for photography and can often be seen behind the lens at EnvisionDo events!</p>
		</div>
	</div>

	<div class="panel" id="sibei">
		<div class="panel-wrapper">
			<img class="portrait" alt="Sibei Mi" src="../images/portraits/sibei-new.jpg"/>	
			<h2 class="name">Sibei Mi</h2>
			<h3 class="title">Co-President</h3>
			<p>Sibei Mi is a third year at the University of Chicago studying French Literature and East Asian Languages and Civilizations. She feels proud to be on the EnvisionDo team because she believes young leaders and entrepreneurs deserve the opportunity to learn about the various ways in which they could impact an issue. She believes no one should be limited to change the world through one way, and instead should be able to find that solution through any career field they choose. She is also excited to help develop the incubator program that supports and connects start-up ventures with mentorship and resources. She strives to help connect students and young entrepreneurs from all over the globe with established entrepreneurs who have succeeded through EnvisionDo. With so many world-changing ideas out there, she wants to make sure everyone is receiving the right support they need, and making the impact they have always dreamed about.</p>
			<p>Outside of EnvisionDo, she is passionate about traveling and learning about different countries. Both the Indian and French cultures have proven to be intriguing for her. The next stops on her wish list are Bangkok, Cape Town, and Cairo.  In her spare time, she enjoys figure skating or playing orchestral compositions on the flute. When it is pouring outside, she loves to sit in her bed, drink hot chocolate, and enjoy a nice French film.</p>
		</div>
	</div>

	<div class="panel" id="megan">
		<div class="panel-wrapper">
			<img class="portrait" alt="Megan Matte" src="../images/portraits/megan.jpg"/>		
			<h2 class="name">Megan Matte</h2>
			<h3 class="title">Chair of Employer Relations and Outreach</h3>
			<p>Megan is second year economics major in the College, brought on to the EnvisionDo team last year. Her main role on the Board is facilitating EnvisionDo-sponsored site visits to businesses around the Chicago area and assisting in the recruitment of new members. Last summer, she interned with Groupon's team of sales analysts in order to discover and harness the key success drivers in Groupon's North America daily deals business. When she’s not busy with EnvisionDo or schoolwork, she can be found reading travel literature, going downtown to visit new neighborhoods, and experimenting with new vegetarian recipes.</p>
		</div>
	</div>

	<div class="panel" id="kimberly">
		<div class="panel-wrapper">
			<img class="portrait" alt="Kimberly Chen" src="../images/portraits/kimberly.jpg"/>		
			<h2 class="name">Kimberly Chen</h2>
			<h3 class="title">Chair of Communications</h3>
			<p>Kimberly is a third-year in the College hailing from sunny California. She studies Public Policy and Statistics at the University of Chicago.</p>
			<p>Kimberly heads the EnvisionDo Communications committee, and is looking forward to working on projects with her fellow committee members as the year progresses. She is interested in possible careers in Public Relations, Advertising, or Marketing.</p>
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

	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper -->

	
		</div>
</div>

<?

echo pageFooter($page);

?>

