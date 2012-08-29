<?php
require($_SERVER['DOCUMENT_ROOT'] . "/includes/database-connect.php");
	
//Start session
session_start();
$logged_in = false;

//Check whether the session variable SESS_MEMBER_ID is present or not
if (trim($_SESSION['SESS_USERNAME']) != '') {
	$logged_in = true;
}
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
		 More info: h5bp.com/i/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<link type="text/css" rel="stylesheet" href="app/css/h5bp-style.css" />
	<link type="text/css" rel="stylesheet" href="app/css/ui-lightness/jquery-ui-1.8.23.custom.css" />
	<link type="text/css" rel="stylesheet" href="app/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="app/css/style.css" />