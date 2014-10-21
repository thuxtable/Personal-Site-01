<!--

Salutations!

If you're reading this, I suspect you have some knowledge of web coding 
and I welcome you to my humble  site. A quick disclaimer: I wrote the code 
for this website myself (all 200 lines of it!), save a few JavaScript snippets 
for the API implementations. I know the code is not perfect or as concise as 
it probably could be in places, and if you have any suggestions for improving 
it please let me know! I always appreciate constructive feedback and the 
opportunity to learn how to build better code. Feel free to reach me at: 
tyler.huxtable@gmail.com

Thanks, and happy browsing!

Tyler Huxtable

-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" /> 
    <title>Tyler Huxtable</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,900,700,700italic,900italic,300italic,100italic,100' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="http://www.tylerhuxtable.com/favicon.png" type="image/icon">
    <link rel="icon" href="http://www.tylerhuxtable.com/favicon.png" type="image/icon">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIpKm8ZgCG9G7Ifsj44vba3bfBZwxnVzQ"></script>
	<script type="text/javascript" src="map_api.js" />
	<script src="gen_validatorv4.js" type="text/javascript"></script>
</head>
</head>

<body>

	<?php include_once("analyticstracking.php") ?>

	<nav class="fadenav">
		<a href="#about">About</a>
		<a href="#social">Social Media</a>
		<a href="#contact">Contact<a/>
		<a href="#top">Return to Top</a>
	</nav>

	<div class="intro" id="downarrow">
		<a href="#about"><img src="images/down-arrow-icon.png" /></a>
	</div>

	<div class="page" id="top">
		<div class="pagecontent">
			<img class="intro" id="introimg" src="images/signature.png" />
			<h3 class="intro" id="intro1">Writer</h3>
			<h3 class="intro" id="intro2">Linguist</h3>
			<h3 class="intro" id="intro3">Code Enthusiast</h3>
		</div>
	</div>

	<div class="page" id="about">
		<h1>About</h1>
		<h2>"Welcome! Bienvenue! Halló! 歡迎光臨! Willkommen! Nnộ! مرحبا!"</h2>
		<div class="pagecontent">
			<div class="halfcontent" id="portrait">
				<img src="images/portrait.jpg" />
			</div>
			<div class="halfcontent" id="aboutbrief">
				<h3>Tyler Huxtable</h3>
				<ul>
					<li> Seattle-born</li>
						<ul>
							<li>Rain-lover</li>
							<li>Literary name-dropper</li>
						</ul>
					<li>UCLA | Class of 2013</li>
						<ul>
							<li>English BA</li>
							<li>Linguistics BA</li>
								<ul>
									<li>Specialization in Computing</li>
								</ul>
						</ul>
				</ul>
			</div>
			<div id="abouttext">
				<p>Welcome! P1 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
					<div class="quote">
						<p>
							"Beyond the shadow of the ship,
							I watched the water-snakes:
							They moved in tracks of shining white,
							And when they reared, the elfish light
							Fell off in hoary flakes.
						</p>
						<p>
							Within the shadow of the ship
							I watched their rich attire:
							Blue, glossy green, and velvet black,
							They coiled and swam; and every track
							Was a flash of golden fire."
						</p>
						<p><em>The Rime of the Ancient Mariner</em>, Samuel Taylor Coleridge</p>
					</div>
				</p>
				<p>P2 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<p>P3 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<p>P4 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</div>
		</div>
	</div>

	<div class="page" id="uclamap"></div>

	<div class="page" id="social">
		<h1>Social Media</h1>
		<h2>"Life is empty without a little failure and lot of laughter..."</h2>
		<div class="pagecontent">
			<div>
				<div class="iconcontainer">
					<a id="fblogo" href="https://www.facebook.com/tyler.huxtable"><img src="images/fb_icon.png" /></a>
				</div>
				<div class="iconcontainer">
					<a id="inlogo" href="https://www.linkedin.com/pub/tyler-huxtable/69/413/aa1"><img src="images/in_icon.png" /></a>
				</div>
				<div class="iconcontainer">
					<a id="instalogo" href="http://instagram.com/awshux_thux"><img src="images/insta_icon.png" /></a>
				</div>
			</div>
			<div id="twitter">
				<h3>Twitter Feed</h3>
				<a class="twitter-timeline" data-theme="dark" href="https://twitter.com/tyler_huxtable" data-widget-id="510840783432216576">Tweets by @tyler_huxtable</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			
		</div>
	</div>

	<div class="page" id="banner"><img src="images/banner.jpg" /></div>
	
	<div class="page" id="contact">
		<h1>Contact</h1>
		<h2>"Don't be shy!"</h2>
		<div class="pagecontent">
			<div class="halfcontent" id="contactmethods">
				<ul>
					<li><img src="images/mail-icon.png" />
					<li class="contacttitle">email</li>
					<li class="contactbody">tyler.huxtable[at]gmail.com</li>
					<li><img src="images/phone-icon.png" />
					<li class="contacttitle">tel</li>
					<li class="contactbody">253.334.3119</i>
				</ul>
			</div>
			<div class="halfcontent">
				<h3>Send me a message!</h3>
				<form method="post" name="contact_form" action="contact-form-handler.php">
					<p>First Name:</p>
					<input type="text" name="firstname">
					<p>Last Name</p>
					<input type="text" name="lastname">
					<p>Email</p>
					<input type="text" name="email" maxlength="50">
					<p>Message</p>
					<textarea id="messageinput" type="text" name="message"></textarea>
					<input id="formsend" type="submit" value="Send">
				 </form>
				
				<script language="JavaScript">
					var frmvalidator  = new Validator("contactform");
					frmvalidator.addValidation("firstname","req","Please provide your first name");
					frmvalidator.addValidation("lastname","req","Please provide your last name");
					frmvalidator.addValidation("email","req","Please provide your email");
					frmvalidator.addValidation("email","email","Please enter a valid email address");
				</script>
				
			</div>
		 </div>
		 
	</div>

	<div class="page" id="footer">
		<p>
			Copyright &copy; 2014 <a href="mailto:admin@tylerhuxtable.com">Tyler Huxtable</a>
		</p>
	</div>

<script>

	$("nav").hide();
	
	$(".intro").hide();
	var fadeInterval = 1200;
	var fadeDelay = 700;
	$("#introimg").delay(fadeDelay).fadeIn(fadeInterval);
	$("#intro1").delay(fadeDelay + fadeInterval).fadeIn(fadeInterval);
	$("#intro2").delay(fadeDelay + 2*fadeInterval).fadeIn(fadeInterval);
	$("#intro3").delay(fadeDelay + 3*fadeInterval).fadeIn(fadeInterval);
	$("#downarrow").delay(fadeDelay + 4*fadeInterval).fadeIn(fadeInterval);
	
	$(window).scroll(function() {
		if ($(this).scrollTop()> 0)
		{ $('#downarrow').fadeOut(700); }
		
		if ($(this).scrollTop()> 800)
		{ $("nav").fadeIn(500); }
		else
		{ $("nav").fadeOut(500); }
	});
	
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 800);
				return false;
			  }
			}
		});
	});
	
</script>
	
</body>
</html>