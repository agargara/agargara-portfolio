<?php
if ( $_POST ) {
	$sentMail = false;
	// Validate input
	require 'validate.php';
	//Jump if no errors.
	if(!$errors) {
		// Send the email
		$to = "david@thedavidcummings.com";
		$subject = "Contact Form from $name";
		$message = "$message";
		$headers = "From: $email";
		mail($to, $subject, $message, $headers);
		$sentMail = true;
	}
}?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8"/>
	<title>I'm David Cummings. I love to code and create.</title>
	<meta name="description" content="I'm David Cummings. I love to code and create."/>
	<meta name="keywords" content="David, Cummings, Code, Development, Design, digital design">
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@http://agargara.com"/>
	<meta name='twitter:image' content='http://thedavidcummings.com/images/logo.png'/>
	<meta name="twitter:description" content="I'm David Cummings. I love to code and create."/>
	<meta property="og:title" content="David Cummings Online Portfolio">
	<meta property="og:url" content="http://thedavidcummings.com">
	<meta property="og:image" content="http://thedavidcummings.com/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel='stylesheet' href='agargara.css' type='text/css'/>
</head>
<body id="top">
	<nav class="cf">
		<ul>
			<li><a href="#home" class="active">home</a><li>
			<li><a href="#about">about</a></li>
			<li><a href="#portfolio">portfolio</a></li>
			<li><a href="#contact">contact</a></li>
		</ul>
	</nav>
	<div id="main">
	    <div id="home" class="sliding-content">
	    	<div class="inner">
		    	<h1 id="title">
					I'm <strong>David Cummings.</strong><br>
					I love to <strong>code</strong> and <strong>create.</strong>
				</h1>
			</div>
	    </div>
	    <div id="about" class="sliding-content">
	    	<div class="inner">
		    	<h2>Hi, I'm David Cummings.</h2>
		        <p>
					I'm a musician and coder living in Japan.
					I'm interested in digital audio, web development and more. My hobbies are composing, playing piano, studying Japanese and practicing judo.
				</p>
				<div id="skills">
					<strong>Skills</strong>
					<ul>
						<li>HTML, CSS, Javascript</li>
						<li>Java, PHP</li>
						<li><abbr title="Digital Audio Workstations">DAWs</abbr></li>
						<li>Max/MSP/Jitter</li>
						<li>Composition</li>
						<li>Sound design</li>
						<li>Japanese (conversational)</li>
						<li>Learning new things</li>
					</ul>
				</div>
				<p>
					For more details, see my <a href="cv.html">CV</a> or <a href="#contact">contact me</a>. I promise I don't bite.
				</p>
			</div>
	    </div>
	    <div id="portfolio" class="sliding-content">
	    	<div class="inner">
           		<ul>
	            	<li class="cf">
	            		<h2>
		            		<a href="http://agargara.com">
		            			Agargara Music
		            		</a>
		            	</h2>
		            	<a href="http://agargara.com">
		            		<img title="Agargara Music" src="images/agargara-screenshot.png">
		            	</a>
	            		<div class="description">
	            		A personal music website built with Wordpress and custom templates.
	            		Styled with a modified version of Daryl Koopersmith's <a href="http://wordpress.org/extend/themes/hum">Hum theme<a/>.
	            		</div>
	            	</li>
	            	<li class="cf">
	            		<h2>
		            		<a href="https://github.com/agargara/film-score-generator">
		            			Film Score Generator
		            		</a>
		            	</h2>
		            	<a href="https://github.com/agargara/film-score-generator">
		            		<img title="Film Score Generator" src="images/filmScoreGenerator-screenshot.png">
		            	</a>
	            		<div class="description">
	            		A <a href="http://cycling74.com/products/max/">Max/MSP/Jitter</a> program that automatically scores videos. The program analyzes a video as it plays and tries to select appropriate music clips from a database. <a href="http://vimeo.com/22379628">Watch a demo.</a>
	            		</div>
	            	</li>
	            	<li class="cf">
	            		<h2>
		            		<a href="https://github.com/agargara/DodgeCity">
		            			Dodge City
		            		</a>
		            	</h2>
		            	<a href="https://github.com/agargara/DodgeCity">
		            		<img title="Dodge City" src="images/dodgeCity-screenshot.png">
		            	</a>
	            		<div class="description">
	            		A small game about dodging falling cubes written in Java. The graphics engine is coded from scratch. How long can you survive? <br><a href="http://agargara.com/files/DodgeCity.zip">Download and play (executable .jar)</a>
	            		</div>
	            	</li>
	            	<li class="cf">
	            		<h2>
		            		<a href="http://agargara.com/files/LSystems.maxpat">
		            			Musical L-Systems
		            		</a>
		            	</h2>
		            	<a href="http://agargara.com/files/LSystems.maxpat">
		            		<img title="Musical L-Systems" src="images/lsystems-screenshot.png">
		            	</a>
	            		<div class="description">
	            		 A <a href="http://cycling74.com/products/max/">Max/MSP</a> program that uses the production rules of <a href="https://en.wikipedia.org/wiki/L-system">Lindenmayer systems</a> to generate musical sequences.<br><a href="http://agargara.com/files/LSystems.maxpat" title="Download">Download the source</a>
	            		</div>
	            	</li>
	            	<li class="cf">
	            		<h2>
		            		<a href="http://pistonsource.iiichan.net">
		            			Piston Source Records
		            		</a>
		            	</h2>
		            	<a href="http://pistonsource.iiichan.net">
		            		<img title="Piston Source" src="images/pistonsource-screenshot.png">
		            	</a>
	            		<div class="description">
	            		A netlabel dedicated to releasing music made with <a href="http://hp.vector.co.jp/authors/VA022293/pxtone/">Piston Collage</a>. Written in 2008, the techniques used on this website are dated, but the site is hand-coded with valid HTML and CSS. Styled to look like the program Piston Collage.
	            		</div>
	            	</li>
	            </ul>
       		</div>
        </div>
        <div id="contact" class="sliding-content">
        	<div class="inner">
        		<h1>I'd love to hear from you.</h1>
        		<br>
				<div id="contact-left" class="cf">
					<ul id="contactInfo">
						<li>David Cummings</li>
						<li>Wakayama, Japan</li>
						<li>090 (6756) 6845</li>
						<li><span id="email">
							david@<span>rem@veme.</span>TheDavidCummings.com
						</span></li>
					</ul>
				</div>
				<div id="contact-right" class="cf">
					<form class="cmxform" id="contactForm" method="post" action="index.php#contact"
							<?php
							if ( $sentMail) {
							print ' style="display:none"';
							}
							?>
					>
						<input id="cname" name="name" size="25"  class="required" minlength="2" placeholder="Your Name"
							<?php
							if ( $_POST['name'] ) {
							print ' value="' . $_POST['name'] . '"';
							}
							?>
						/>
						<input id="cemail" name="email" size="25"  class="required email"  placeholder="Your e-mail"
							<?php
							if ( $_POST['email'] ) {
							print ' value="' . $_POST['email'] . '"';
							}
							?>
						/>
						<textarea id="ccomment" name="comment" rows="8"  class="required" placeholder="Your Message"><?php
								if ( $_POST['comment'] ) {
								print $_POST['comment'];
								}
							?></textarea>
						<input class="submit" type="submit" value="Send!">
					</form>
					<?php
						if($errors) {
						  print "<span class='error'><ul>";
						  foreach($errors as $error) {
						    print "<li>".$error."</li>";
						  }
						  print "</ul></span>";
						}else if($sentMail) {
							print "Message sent successfully! Thank you!";
						}
					?>
				</div>
	        </div>
        </div>
	</div>
	<script type="text/javascript">
		var s="=b!isfg>#nbjmup;ebwjeAUifEbwjeDvnnjoht/dpn#?ebwjeAUifEbwjeDvnnjoht/dpn=0b?";
		m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1); document.getElementById('email').innerHTML=(m);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.form.js"></script>
</html>
