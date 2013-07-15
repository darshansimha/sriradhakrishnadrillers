<?php
$content = $_POST['message'];
$name = $_POST['fname'];
$email = $_POST['email'];
$txt = wordwrap($content,70);
mail("phnrao@sriradhakrishnadrillers.com","Query on Your Website",$txt);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Get in Touch</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/contact.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
		<script src="js/FF-cash.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script src="js/jquery.equalheights.js" type="text/javascript"></script>
		<script src="js/easyTooltip.js" type="text/javascript"></script>
		<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
			<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
		<![endif]-->
	</head>
	<body id="page6">
		<div class="extra">
			<div class="main">
<!--==============================header=================================-->
				<header>
					<div class="indent">
						<div class="row-top">
							<div class="wrapper">
								<h1><a href="index.html">Sri Radhakrishna Drillers and Constructions</a></h1>
								<strong class="support">+91 9849267100</strong>
							</div>
						</div>
						<nav>
							<ul class="menu">
								<li><a class="active" href="index.html">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="projects.html">Recent Projects</a></li>
								<li><a href="machines.html">Machinery</a></li>
								
								<li class="last"><a href="contacts.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					
				</header>
<!--==============================content================================-->
				<br/><br/><h3>Talk To Us</h3>
				<form method="POST" action="contacts.php">

  <label>Full name:</label>
  <input type="text" id="full_name" name="fname" placeholder="Harinath Rao" required>

  <label>Email address:</label>
  <input type="email" id="email_addr" name="email" required placeholder="phnrao@yahoo.com">

  <label>Message:</label>
  <textarea id="contact_list" name="message" required placeholder="Enter your Message Here!!"></textarea>
  
<div class="buttons">
<input type="submit" class="button-2" value="Send Mail">
<br/><br/>
</div>
  


</form>

<br/>
<br/>
				
				<article class="col-2">
							<h3 class="p1">Our Contacts</h3>
							<h6>Hyderabad</h6>
							<dl class="img-indent-bot">
								<dt>E-63, Sri Nivas Heights, Adarsh Nagar, Chilukanagar, Road, Uppal, Hyderabad - 500039, A.P</dt>
								<dd><span>Telephone:</span><strong>(40)645267100</strong></dd>
								
								<dd><span>Email:</span><strong><a href="#">phnrao@yahoo.com</a></strong></dd>
							</dl>
							<h6>Warangal</h6>
							<dl class="img-indent-bot">
								<dt>6-59/8, Viveknagar , Gopalpur, Hanamkonda, 506009, A.P.</dt>
								<dd><span>Telephone:</span><strong>(0870) 2546555</strong></dd>
								<dd><span>Mobile:</span><strong>+91 9849267100</strong></dd>
								<dd><span>Email:</span><strong><a href="#">phnrao@yahoo.com</a></strong></dd>
							</dl>
							<br/>
							<a href="docs/Sri Radhakrishna Drillers-Brochure.pdf">Download our brochure</a>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				
						</article>
						
				
				
				
				
				
				

			</div>
		</div>
		
<!--==============================footer=================================-->
		<footer>
			<div class="main">
				<div class="footer-bg">
					<p class="prev-indent-bot">Sri Radhakrishna Drillers and Constructions &copy; 2012</p>
					<ul class="list-services">
						<li><a class="tooltips" title="facebook" href="#"></a></li>
						<li class="item-1"><a class="tooltips" title="twitter" href="#"></a></li>
						<li class="item-2"><a class="tooltips" title="linkedin" href="#"></a></li>
					</ul>
				</div>
			</div>
		</footer>
	
	</body>
</html>