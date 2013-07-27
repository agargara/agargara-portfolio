<?php
if ( $_POST ) {
	$sentMail = false;
	// Validate input
	require 'validate.php';
	//Jump if no errors.
	if(!$errors) {
		// Send the email
		$to = "test@dokofuri.co";
		$subject = "Contact Form from $name ($email)";
		$message = "$message";
		$headers = "From: test@dokofuri.co";
		mail($to, $subject, $message, $headers);
		$sentMail = true;
	}
}?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<meta charset="UTF-8"/>
	<title>あなたのどこでもフリーマーケット。</title>
	<meta name="description" content="あなたのどこでもフリーマーケット。"/>
	<meta name="keywords" content="dokofuri">
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="http://dokofuri.co"/>
	<meta name='twitter:image' content='http://dokofuri.co/images/logo.jpg'/>
	<meta name="twitter:description" content="あなたのどこでもフリーマーケット。"/>
	<meta property="og:title" content="あなたのどこでもフリーマーケット。">
	<meta property="og:url" content="http://dokofuri.co">
	<meta property="og:image" content="http://dokofuri.co/images/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body id="top">
	<nav class="cf">
		<ul>
			<li><a href="#sell">物を売る</a><li>
			<li><a href="#buy">物を買う</a></li>
		</ul>
	</nav>
	<div id="main">
		<div id="logo">
			<img id="logo" src="images/logo.jpg">
		</div>
	</div>
    <div id="contact">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/taffy-min.js"></script>
<script src="js/dokofuri.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.js"></script>
</html>
