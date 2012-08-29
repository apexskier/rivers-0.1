<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
?>
	<title>Error</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
</head>
<body>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
		 chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<h3>Register</h3>
<form id="register" name="register" method="post" action="http://rivers.camlittle.com/scripts/register.php">
	<p><label name="fname">First Name</label><br>
	<input type="text" name="fname" required></p>
	<p><label name="lname">Last Name</label><br>
	<input type="text" name="lname" required></p>
	
	<p><label name="email">Email</label><br>
	<input type="email" name="email" required></p>
	
	<p><label name="username">Username</label><br>
	<input type="text" name="username" required></p>
	
	<p><label name="password">Password</label><br>
	<input type="password" name="password" required></p>
	<p><label name="cpassword">Confirm Password</label><br>
	<input type="password" name="cpassword" required></p>
	<p><small>Password must be longer than 8 characters.</small></p>
	
	<?php
		require($_SERVER['DOCUMENT_ROOT'] . "/includes/recaptchalib.php");
		$publickey = "6Lfe0tUSAAAAACJW64aO2_fowRUsjV-zsahPZePZ"; // you got this from the signup page
		echo recaptcha_get_html($publickey);
	?>
	
	<p><input type="submit" name="Submit" value="Sign up!"></p>
</form>

<!-- JavaScript at the bottom for fast page loading -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script type="text/javascript" src="js/libs/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/libs/jquery-ui-1.8.23.custom.min.js"></script>

<!-- scripts concatenated and minified via build script -->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/end.php"); ?>