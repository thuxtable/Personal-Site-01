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
		<a href="#about"><img src="images/downarrow.png" /></a>
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
		<h2>Welcome! Bienvenue! Halló! 欢迎! Willkommen! Nnộ! أهلاً و سهلاً! Vítáme vás! Bienvenido! ยินดีต้อนรับ!</h2>
		<div class="pagecontent">
			<div id="aboutbanner">
				<div class="halfcontent" id="portrait">
					<img src="images/portrait.jpg" />
				</div>
				<div class="halfcontent" id="aboutbrief">
					<h3>an overview</h3>
					<ul>
						<li> Seattle-born</li>
							<ul>
								<li>Rain-lover</li>
								<li>Caffeine-sipper</li>
								<li>Literary name-dropper</li>
							</ul>
						<li>UCLA | Class of 2013</li>
							<ul>
								<li>English BA</li>
								<li>Linguistics BA</li>
									<ul>
										<li>Specialization in Computing</li>
									</ul>
								<li>Bruin Born, Bruin Bred</li>
							</ul>
					</ul>
				</div>
			</div>
			<div id="abouttext">
				<p><span>Hey, listen!</span> Thanks for visiting my humble site, and don't click away just yet! Look, I know you have better things to be doing, like catching up on OITNB (loving the show acronyms these days) or getting your money's worth out of a Crossfit membership, but I swear this'll be worth a few seconds of your day. And now, since I've (hopefully) lured you in with my wit, let me give you the briefest introduction of myself that I'm probably able to give.
				<div class="quote">
						<p>
							"You step onto the road, and if you don't keep your feet, there's no knowing where you might be swept off to.”
						</p>
						<p><em>The Lord of the Rings</em>, J.R.R. Tolkien</p>
					</div>
				</p>
				<p> As the astute reader will have surmised from above, I am a passionate Seattleite, and I'll talk your ear off about it if you're not careful.
				I find lists to be more efficient in conveying my favorite things about the City, and I hope this one does the trick: 
				drippy forests, the San Juan Islands, fish markets, gum walls, chicken bakes, Emerald Downs, clam digs, the Muckleshoot, airplane fields, <span>red lion boats</span>, Mount Rainier, the Puyallup Fair, listening to out-of-towners pronounce "the Puyallup Fair," 
				and the <em>ad nauseum</em> fantasies of drinking-coffee-in-the-rain-while-biking-to-work-at-Microsoft-in-an-REI-coat-yada-yada.  If it weren't for my love of UCLA and other such gems of the Los Angeles area, I'm afraid my heart would be forever stuck in that misty Emerald City.
				</p>
				<p>Though I was deposited at UCLA at the tender age of 18 under the pretence of studying engineering, I found myself suddenly whisked away into the unknown world of linguistics, as well as into the classrooms of one of my long-time favorite subjects--literature.
				I am fascinated by linguistic phenomena of all sorts, though most importantly syntax, computational linguistics, and natural language processing.
				My current literary fascinations lie in contemporary Postcolonial and environmental literatures, though I've always had an inner <span>compass</span> steering me towards much more ancient Anglo-Saxon texts.
				While completing my degrees I also acquired a fair amount of techinical and coding prowess, which I am keen to exercise where I can (e.g. this very website).
				</p>
				<p> If you're curious about any of my interests, work, or areas of expertise, please don't hesitate to use the contact methods posted conveniently at the bottom of this site! I'm always looking to collaborate on new projects and ventures.
				</p>
				<p> P.S. 10 points for Gryffindor if you noticed three Hyrulian references in all this jabber.<br>(Small hint: they glow green if you run your cursor over them.)
				</p>
			</div>
		</div>
	</div>

	<div class="page" id="uclamap"></div>

	<div class="page" id="social">
		<h1>Social Media</h1>
		<h2>"Words can be like X-rays, if you use them properly–they'll go through anything. You read and you're pierced." <em>Brave New World</em>, Aldous Huxley</h2>
		<div class="pagecontent">
			<div>
				<div class="iconcontainer">
					<a id="fblogo" href="https://www.facebook.com/tyler.huxtable" target="_blank"><img src="images/facebook.png" /></a>
				</div>
				<div class="iconcontainer">
					<a id="inlogo" href="https://www.linkedin.com/pub/tyler-huxtable/69/413/aa1" target="_blank"><img src="images/linkedin.png" /></a>
				</div>
				<div class="iconcontainer">
					<a id="gitlogo" href="https://github.com/thuxtable" target="_blank"><img src="images/github.png" /></a>
				</div>
			</div>
			<span id="icontitles"><p>Facebook</p><p>LinkedIn</p><p>GitHub</p></span>
			<div id="twitter">
				<h3>
					<img src="images/twitter.png" />
					<span>Twitter</span>
					<img id="twitter2" src="images/twitter.png" />
				</h3>
				<a class="twitter-timeline" data-theme="dark" href="https://twitter.com/tyler_huxtable" data-widget-id="510840783432216576">Tweets by @tyler_huxtable</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			
		</div>
	</div>

	<div class="page" id="banner"><img src="images/banner.jpg" /></div>
	
	<div class="page" id="contact">
		<h1>Contact</h1>
		<h2>Don't be shy!</h2>
		<div class="pagecontent" id="contactwrapper">
			<div class="halfcontent" id="contactcontainer">
				<ul>
					<li><img src="images/email-white.png" />
					<li class="contacttitle">email</li>
					<li class="contactbody">tyler.huxtable[at]gmail.com</li>
					<li><img src="images/telephone-white.png" />
					<li class="contacttitle">tel</li>
					<li class="contactbody">253.334.3119</i>
				</ul>
			</div>
			<div class="halfcontent" id="contactform">
				<h3>send a message</h3>
				<form method="post" id="contact_form" name="contact_form" action="contact-form-handler.php">
					<span>
						<p>First Name</p>
						<input type="text" name="firstname">
					</span>
					<span>
						<p>Last Name</p>
						<input type="text" name="lastname">
					</span>
					<p>Email</p>
					<input id="formemail" type="text" name="email" maxlength="60">
					<p>Message</p>
					<textarea id="formmessage" type="text" name="message"></textarea>
					<br/>
					<input id="formsend" type="submit" value="Send">
				 </form>
				
				<script language="JavaScript">
					var frmvalidator  = new Validator("contact_form");
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
			Copyright &copy; 2015 <a href="mailto:admin@tylerhuxtable.com">Tyler Huxtable</a>
		</p>
	</div>

<script>
	
	/* FadeIn effects for intro page */
	
	$(".intro").hide();
	var fadeInterval = 1200;
	var fadeDelay = 700;
	$("#introimg").delay(fadeDelay).fadeIn(fadeInterval);
	$("#intro1").delay(fadeDelay + fadeInterval).fadeIn(fadeInterval);
	$("#intro2").delay(fadeDelay + 2*fadeInterval).fadeIn(fadeInterval);
	$("#intro3").delay(fadeDelay + 3*fadeInterval).fadeIn(fadeInterval);
	$("#downarrow").delay(fadeDelay + 4*fadeInterval).fadeIn(fadeInterval);
	
	/* Scroll effects for Nav */
	
	$("nav").hide();
	
	$(window).scroll(function() {
		if ($(this).scrollTop()> 0)
		{ $('#downarrow').fadeOut(700); }
		
		if ($(this).scrollTop()> 800)
		{ $("nav").fadeIn(500); }
		else
		{ $("nav").fadeOut(500); }
	});
	
	/* Scroll smoothing */
	
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