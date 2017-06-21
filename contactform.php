<?php
/* Set e-mail recipient */

/*$myemail = "hello@artdirections.co.uk" . " , " . "$email";*/
$myemail = "hello@artdirections.co.uk";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "You have not provided your name");
$subject = check_input($_POST['subject'], "You have not provided a subject");
$email = check_input($_POST['email']);
/*$phone = check_input($_POST['phone'], "Enter a phone");*/
$message = check_input($_POST['message'], "You did not write a message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "
You've received an email from your Art Directions form!

Name: $name
E-mail: $email
Phone: $phone
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>

<title>Creative &amp; Digital Design Freelancer and Contractor in Newbury - Art Directions Ltd - Offering UX and UI design for print, banners, web, email, video, animation, interactive, elearning, branding, logos, events, etc</title>

<!-- Meta Data ================ -->
<meta charset="UTF-8" />
<meta name="description" content="Fill this in with your information" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<!-- CSS ================ -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/header-1.css" type="text/css"/>

<!-- Icons ================ -->
<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
<!-- For first- and second-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png" />
<!-- For iPhone with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png" />
<!-- For third-generation iPad with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png" />
<link rel="shortcut icon" href="favicon.ico" />
<!-- Favicon
============================= -->
<link rel="shortcut icon" type="image/ico" href="favicon.ico"/>


<!-- Open Graph for facebook
http://graph.facebook.com/[UserName] replace [UserName] 
with yours and get your fb:admis content information where the XXXX goes.
================================================== -->
<meta property="og:title" content="" />
<meta property="og:type" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content=""/>
<meta property="og:site_name" content="" />
<meta property="fb:admins" content="XXXXX" />
<meta property="og:locale" content="en_us" />
<meta property="og:description" content="  " />


<!-- SCRIPTS ============================================== -->
		<!--	NOTE:: jquery 1.9.1 supports older ie, 2.0 does not, but 1.9.1 does not work well on ie8 and 
				lower so version 1.7.2 is called for older versions of ie 
				:: calling jQuery in the head for ajax work if necessary.
				-->
		<!--[if gt IE 8]><!-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/jquery-1.9.1.min.js"><\/script>')</script>
		<!--<![endif]-->
		<!--[if lte IE 8]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<![endif]-->

<!-- Add to Head after Style sheet http://modernizr.com/docs/#installing  ================ -->
<script src="assets/js/modernizr.js"></script><!-- js multiple backgrounds svg background size -->

</head>
<body class="contact">

<!-- begin accesibility skip to nav skip content -->
<ul class="visuallyhidden" id="top">
	<li><a href="#nav" title="Skip to navigation" accesskey="n">Skip to navigation</a></li>
	<li><a href="#page" title="Skip to content" accesskey="c">Skip to content</a></li>
</ul>
<!-- end /.visuallyhidden accesibility--> 

<!-- mobile navigation trigger-->
<h5 class="mobile_nav"><a href="javascript:void(0)">&nbsp;<span></span></a></h5>
<!--end mobile navigation trigger-->

<section class="container preheader"> 

	<div class="phone"><a href="tel:07773246837" class="tele">07773 246837</a></div>
	<ul class="social">
		<li><a class="socicon small twitterbird" href="https://twitter.com/intent/user?screen_name=ArtDirectionsUK" data-placement="bottom" title="Follow us on Twitter"></a></li>
		<li><a class="socicon small linkedin" href="http://www.linkedin.com/in/clairedenning" data-placement="bottom" title="Follow us on LinkedIn" target="_blank"></a></li>
		<li><a class="socicon small facebook" href="https://www.facebook.com/ArtDirectionsUK" data-placement="bottom" title="Follow us on Facebook" target="_blank" ></a></li>
	</ul>
</section>

<!-- begin .header-->
<header class="header  clearfix"> <img src="assets/images/print-logo.png" class="print logo" alt="Art Directions" />
	<div class="container"> 
		<div class="mobile-menu-holder"><!--clone menu here for mobile--></div>
		<!-- begin #main_menu -->
		<nav id="main_menu">
			<ul class="primary_menu">
				<li><a href="index.html">Home</a>
				<li><a href="nonmembers/portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="clients.html">Clients</a></li>
				<li><a href="recommendations.html">Recommendations</a></li>
				<li class="active"><a href="contact.html">Contact</a></li>	
			</ul>	
		</nav>
		<!-- close / #main_menu --> 
		<!-- begin #logo -->
		<div id="logo"> <a href="index.html"><img alt="" src="assets/images/trans.gif" /><em>Art Directions Responsive HTML Retina Ready Bootstrap Goodness</em><!--effing ie7 support--></a> </div>
	</div>
</header>
<!-- close /.header --> 

<!-- begin #page - the container for everything but header -->
<div id="page">
	<div class="hero-unit">
		<div class="container">
			<h1>Contact</h1>
		</div>
		<!--close container--> 
	</div>
	<div class="container clearfix" id="main-content">
		<div class="row-fluid reverse-order contact-page">		
			<div class="span5">
				<p class="right"> <a class="icon-map-marker various fancybox.iframe" title="Map and Directions" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39831.21078266123!2d-1.252521600000005!3d51.39477339999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48741e1d873bb805%3A0x789a70be03ee968b!2sThatcham!5e0!3m2!1sen!2suk!4v1394972117070">&nbsp;Map</a></p>
				<p><strong>Claire Denning<br/>
					Art Directions</strong><br />
					Thatcham<br />
					Berkshire<br/>
					<strong>Phone:</strong> <a href="tel:07773246837" class="tele">07773 246837</a><br />
													<script type="text/javascript">
									//<![CDATA[
									<!--
									var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
									"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
									"\\\\,l=x.length;for(i=0;i<l;i++){if(i<2)y++;y%=127;o+=String.fromCharCode(x" +
									".charCodeAt(i)^(y++));}return o;}f(\\\"\\\\gjereld\\\\\\\\177\\\\\\\\\\\"\\" +
									"\\z|fdt~}<7*v8qh~z B=M@KOPJ\\\\\\\\034OMEFDlL\\\\\\\\\\\\\\\\[TX@VWA_XVJ\\\\"+
									"\\\\024XS\\\\\\\\023KT\\\\\\\\17727!. %3u\\\\\\\\036/)?$:*p4<\\\\\\\\\\\"\\" +
									"\\!<$.\\\\\\\\004{z/5)2:]=@ \\\\\\\\010\\\\\\\\014\\\\\\\\005\\\\\\\\014H\\" +
									"\\\\\\035\\\\\\\\005K\\\\\\\\037\\\\\\\\010\\\\\\\\000\\\\\\\\013P\\\\\\\\0" +
									"20\\\\\\\\034S\\\\\\\\021\\\\\\\\030\\\\\\\\027\\\\\\\\036\\\\\\\\024%XE/\\" +
									"\\\\\\030\\\\\\\\020d!cm$`kfae6$m3,&+!)\\\"\\\\,2)\\\"(f};)lo,0(rtsbus.o nr" +
									"uter};)i(tArahc.x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)84=!)31" +
									"/l(tAedoCrahc.x(elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"    ;
									while(x=eval(x));
									//-->
									//]]>
								</script>
				<h3 class="short_headline margin-top"><span>Follow</span></h3><br/>
					<section>
						<a href="https://twitter.com/ArtDirectionsUK" class="twitter-follow-button" 		data-show-count="false" data-dnt="true">Follow @ArtDirectionsUK</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						<br/>
						<div>
							<ul class="social-media">
								<li><a href="https://www.facebook.com/ArtDirectionsUK" target="_blank"><img src="../assets/images/facebook-icon.png" alt="facebook">Find us on facebook</a></li>						
								<li><a href="http://uk.linkedin.com/in/clairedenning" target="_blank"><img src="../assets/images/linkedin-icon.png" alt="linkedin">View Claire's profile</a></li>	</ul>						
						</div>
					</section><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
			<div class="span7">
				<h3>Please correct the following error:</h3>
				<h6 style="color:#ff6600"><strong><?php echo $myError; ?></strong></h6>
				<h6>Hit your back button and try again</h6>
			</div>
		</div>
	</div>
	<!--close .container role="main-content" --> 	
	<!--begin footer -->
	<footer id="footer" class="clearfix">
		<div class="container"><!--footer container-->			
			<div class="row-fluid">
				<div class="span4">
					<section>
						<h4>Contact</h4>
						<p>Claire Denning<br/>
						Art Directions<br/>
							10 Foxhunter Way<br/>
							Thatcham<br/>
							Berks, RG19 3UB<br/><br/>
							
							<strong>Phone:</strong> <a href="tel:07773246837" class="tele">07773 246837</a><br>
							<!-- http://hivelogic.com/enkoder/index.php To hide the email address -->
								<script type="text/javascript">
									//<![CDATA[
									<!--
									var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
									"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
									"\\\\,l=x.length;for(i=0;i<l;i++){if(i<2)y++;y%=127;o+=String.fromCharCode(x" +
									".charCodeAt(i)^(y++));}return o;}f(\\\"\\\\gjereld\\\\\\\\177\\\\\\\\\\\"\\" +
									"\\z|fdt~}<7*v8qh~z B=M@KOPJ\\\\\\\\034OMEFDlL\\\\\\\\\\\\\\\\[TX@VWA_XVJ\\\\"+
									"\\\\024XS\\\\\\\\023KT\\\\\\\\17727!. %3u\\\\\\\\036/)?$:*p4<\\\\\\\\\\\"\\" +
									"\\!<$.\\\\\\\\004{z/5)2:]=@ \\\\\\\\010\\\\\\\\014\\\\\\\\005\\\\\\\\014H\\" +
									"\\\\\\035\\\\\\\\005K\\\\\\\\037\\\\\\\\010\\\\\\\\000\\\\\\\\013P\\\\\\\\0" +
									"20\\\\\\\\034S\\\\\\\\021\\\\\\\\030\\\\\\\\027\\\\\\\\036\\\\\\\\024%XE/\\" +
									"\\\\\\030\\\\\\\\020d!cm$`kfae6$m3,&+!)\\\"\\\\,2)\\\"(f};)lo,0(rtsbus.o nr" +
									"uter};)i(tArahc.x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)84=!)31" +
									"/l(tAedoCrahc.x(elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"    ;
									while(x=eval(x));
									//-->
									//]]>
								</script><br/>						
							<strong>Fill out an </strong> <a href="contact.html">enquiry form</a> </p>
					</section>
				</div>
				<div class="span4">
					<section>
						<h4>Follow</h4>
						<a href="https://twitter.com/ArtDirectionsUK" class="twitter-follow-button" 		data-show-count="false" data-dnt="true">Follow @ArtDirectionsUK</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						<br/>						
						<div>
							<ul class="social-media">
								<li><a href="https://www.facebook.com/ArtDirectionsUK" target="_blank"><img src="assets/images/facebook-icon.png" alt="facebook">Find us on facebook</a></li>						
								<li><a href="http://uk.linkedin.com/in/clairedenning" target="_blank"><img src="assets/images/linkedin-icon.png" alt="linkedin">View Claire's profile</a></li>				
							</ul>						
						</div>
					</section>
				</div>
				<!-- close .span4 --> 
				<!--section containing blog posts-->
				<div class="span4">
					<section><!-- use    data-chrome="nofooter transparent noheader" to customize-->
					<h4>Latest tweets</h4>
					<a class="twitter-timeline transparent noheader nofooter" height="200" data-dnt="true" href="https://twitter.com/ArtDirectionsUK" 
					
					data-chrome="nofooter  noheader" 
					
					data-widget-id="436900046798196736">Tweets by @ArtDirectionsUK</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</section>
				</div>
			</div>
		</div>
		<section class="footerCredits">
			<div class="container">
				<ul class="clearfix">
					<li>&copy; 2014&nbsp;Designed by <script type="text/javascript">
						//<![CDATA[
						<!--
						var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
						"=52){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
						".substr(0,ol);}f(\")58,\\\"t\\\\100\\\\310\\\\600\\\\410\\\\320\\\\M400\\\\" +
						"620\\\\ZFHOQGFPHd?jo]%8Ekyy|`pwcyK.y~J(U5bjqmw\\\"\\\\#vPZNSTJF200\\\\DTvm7" +
						"71\\\\yL'm{r|wa`-ze!an\\\"\\\\xdfase`vjfur730\\\\=320\\\\720\\\\620\\\\430\\"+
						"\\020\\\\M130\\\\100\\\\030\\\\230\\\\320\\\\430\\\\R3S310\\\\t\\\\130\\\\2" +
						"00\\\\It\\\\[DMn\\\\710\\\\700\\\\520\\\\t\\\\-)s(5?4-491\\\"(f};o nruter};" +
						"))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;i=+y)58==i(fi{)++i;l<i" +
						";0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                     ;
						while(x=eval(x));
						//-->
						//]]>
						</script>
						 &amp; built by <script type="text/javascript">
						//<![CDATA[
						<!--
						var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
						"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
						" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!29{)rt{y+xx=l;=+;" +
						"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
						"\"(0),1\\\"\\\\32\\\\00\\\\02\\\\\\\\7$\\\\?\\\\\\\"z\\\\%577\\\\1y\\\\77\\" +
						"\\1{\\\\vz1Vyuyk5_U(iokofj!F0e01\\\\\\\\30\\\\00\\\\01\\\\\\\\X(E%22\\\\02\\"+
						"\\03\\\\\\\\01\\\\05\\\\03\\\\\\\\07\\\\0R\\\\,S26\\\\04\\\\03\\\\\\\\04\\\\"+
						"01\\\\03\\\\\\\\32\\\\04\\\\00\\\\\\\\14\\\\0H\\\\02\\\\02\\\\02\\\\\\\\14\\"+
						"\\07\\\\02\\\\\\\\01\\\\07\\\\00\\\\\\\\]6=+68/9g*#<;{|0\\\"\\\\\\\\\\\\ >9" +
						"'./ 83,$404\\\\0$\\\\(,Q.Y[22\\\\0^\\\\\\\\L\\\\\\\\L\\\\4D01\\\\\\\\@Z[_]P" +
						"\\\\rr\\\\20\\\\0J\\\\XN0A01\\\\\\\\2F03\\\\\\\\07\\\\04\\\\01\\\\\\\\NMTDl" +
						"v<d~ecjoxnd\\\"\\\\f(;} ornture;}))++(y)^(iAtdeCoarchx.e(odrChamCro.fngriSt" +
						"+=;o27=1y%i;+=)y10==(iif){++;i<l;i=0(ior;fthnglex.l=\\\\,\\\\\\\"=\\\",o ia" +
						"r{vy)x,f(n ioctun\\\"f)\")"                                                  ;
						while(x=eval(x));
						//-->
						//]]>
						</script> . All rights reserved</li>
					<!-- <li><a href="sitemap.html">Site Map</a></li> -->
					<!-- <li><a href="privacy.html">Privacy</a></li> -->
					<li><a href="index.html">Home</a>
					<li><a href="nonmembers/portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="clients.html">Clients</a></li>
					<li><a href="recommendations.html">Recommendations</a></li>
					<li><a href="contact.html">Contact</a></li>
                </ul>
			</div>
		</section>
	</footer>
	<!--/.footer--> 	
	<span class="backToTop"><a href="#top">back to top</a></span> </div>
<!-- close #page--> 
<!-- JS JQuery ================ --> 
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/fancybox/source/fanybox_custom.js"></script><!--fancybox--> 
<!--initialize scripts / custom scripts all pages--> 
<script src="assets/js/custom.js"></script>
</body>
</html>
<?php
exit();
}
?>
