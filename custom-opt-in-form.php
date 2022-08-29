<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head lang="en">
	<title>Sign up for Feb 28th Event!</title>
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
	<script>if(Function('/*@cc_on return 10===document.documentMode@*/')()){document.documentElement.className='ie10';}</script>
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<!--[if gte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie-only.css">
	<![endif]-->

</head>

<body id="rsvp-form">

	<!-- Begin MailChimp Signup Form -->
	<div id="mailchimp">

		<div id="close-button"><a href="index2.php" target="_self"><img src="images/opt-in-close-btn.svg" width="45px" hei="45px"></a></div>

		<div id="event">
			<div id="event-photo"><img src="images/brooklynbridge_sml.png" width="360" height="240"></div>
			<h2>Business Networking Event with Robert Dienes and Marc Weiss. Wine, Cheese, Hors d'oeuvres on the terrace.</h2>
			<h3>Thursday, April 27th, 2017<br>6pm to 9pm</h3>
		</div>



		<form id="rsvpSignup" method="post" action="action.php" class="validate" novalidate>
		  
			<h2 class="form-heading">Enter your information<br>to reserve your place</h2>

			<label id="one"></label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-mail">

			<label id="two"></label>
			<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">

			<label id="three"></label>
			<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name">

			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

			<a href="thank-you-page2.php" target="_self"><input type="submit" value="R.S.V.P. Now" name="subscribe" class="button"></a>
			
		</form>
	</div>


	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>


</body>
</html>