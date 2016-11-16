<?php
// handle the variables
$title = $title . ' - TruVdesign';
// set description if not set
if(!isset($desc)) {
	$desc = '';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Caleb Nance - Infinite Web Applications">
		<title><?= $title; ?></title>
		<meta name="description" content="<?= $desc; ?>">
		<!-- Bootstrap -->
		<link href="styles/bootstrap.min.css" rel="stylesheet">
		<!-- FontAwesome -->
		<link href="styles/font-awesome.min.css" rel="stylesheet">
		<!-- SwipeBox -->
		<link href="styles/swipebox.min.css" rel="stylesheet">
		<!-- App Styles -->
		<link href="styles/app.css" rel="stylesheet">
	</head>
	<body ng-app="truvdesign">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
				  <div class="h1-header">TruVdesign</div>
				  <div class="well">
