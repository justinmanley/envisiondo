<?php 

require_once("../functions/hello.php");
	
	$page = "Initiatives";

	echo pageTemplate($page);
	echo pageHeader($page); 

?>
</div>
<div class="content">
	<div class="page">
		<div class="initiatives">
			<div class="main-content">
				<h2>Our Initiatives</h2>
				<p>The site visits, workshops, conferences, and speaking events that we organize throughout the year are all part of our mission to help students explore innovation and creativity in business.</p>
				<h3><strong>Chicago GastroConference</strong></h3>
				<div class="conference" id="chicago-gastroconference">
					<p>
						The Chicago GastroConference, held at the University of Chicago in May of 2013, brought Chicago's most innovative chefs, food entrepreneurs, journalists, and activists to campus.
						The event drew more than 150 students, entrepreneurs, and foodies from across the Chicagoland area.
						Featured speakers and panelists included:
						<ul>
							<li class="speaker">Barry Nalebuff, co-founder of Honest Tea</li>	
							<li class="speaker">Donnie Madia, Managing Partner/Owner of One Off Hospitality, the parent group for Chicago restaurants The Violet Hour, Blackbird, avec and The Publican</li>
							<li class="speaker">Iliana Regan, chef and founder of Elizabeth Restaurant</li>
							<li class="speaker">LouisJohn Slagel, owner of Slagel Family Farm</li>
							<li class="speaker">Justin Massa, Founder and CEO at Food Genius</li>
							<li class="speaker">Monica Eng, journalist and investigative reporter at the Chicago Tribune (now at WBEZ Chicago)</li>
							<li class="speaker">Julian Champion, Executive Director of Fresh Moves</li>
						</ul>
					</p>
					<p>
						The UChicago News Office wrote of the event, "the heart of the GastroConference lay in casual conversations between people with similar passions.
						Students and speakers alike took advantage of the opportunity to share ideas, contact information, and job opportunities...[the event] brought together a diverse group of people in an engaging, convivial atmosphere, creating community in the same way a shared meal does."
					</p>			
				</div>
				<h3><strong>Speakers</strong></h3>
				<ul>
					<li>Reddit Co-Founder Alexis Ohanian</li>
					<div class="speaker" id="alexis-ohanian">
						<p>
							EnvisionDo brought Reddit co-founder Alexis Ohanian to campus to speak to students in February of 2013.
							Ohanian spoke about the important of embracing criticism and failure and about his own failures and successes as a programmer and entrepreneur.
							More than 100 students attended the event. 
						</p>
					</div><!-- #alexis-ohanian -->
					<!--<li>Author David Kadavy</li>
					<div class="speaker" id="david-kadavy"></div>-->
				</ul>
				<h3><strong>Site Visits</strong></h3>
				<ul>
					<li>Groupon</li>
					<div class="site-visit" id="groupon">
						<p>
							EnvisionDo worked with Groupon in the fall of 2012 and 2013 to bring students to the Groupon headquarters in downtown Chicago.
							Students had the opportunity to tour the Groupon offices and speak with Groupon recruiters.
						</p>
					</div><!-- #groupon -->
					<li>The Plant</li>
					<div class="site-visit" id="the-plant">
						<p>
							The Plant is an urban farm, education center, and incubator for small craft food business.
							EnvisionDo brought 20 students to visit The Plant in the fall of 2013.
							Students had an opportunity to talk to researchers in R&amp;D and to learn about the science and business of the sustainable bioenergy.
						</p>
					</div>
					<!-- <li class="site-visit" id="reppio">Reppio</li>
					<div class="site-visit" id="the-plant"></div> -->
				</ul>
				<!--<h3>Workshops</h3>
				<ul>
					<li>Stanford Wallet Project</li>
					<div class="workshops" id="stanford-wallet-project"></div>
				</ul>
				<h3>EnvisionDo Conference</h3>
				<div class="conference" id="envisiondo-conference"></div>-->
			</div><!-- .main-content -->
		</div><!-- .initiatives -->		
	</div><!-- .page -->
</div><!-- .content -->
	

<?php echo pageFooter($page); ?>