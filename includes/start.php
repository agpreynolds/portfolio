<?php

	function __autoload($class_name) {
		$includePath = include($_SERVER['DOCUMENT_ROOT'] . '/php/' . $class_name . '.php');		
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alex Reynolds - <?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/global.css">
		<link rel="stylesheet" type="text/css" href="/css/overlay.css">
		<link rel="stylesheet" type="text/css" href="/css/<?php echo $id; ?>.css">
		<script type="text/javascript" src="/js/lib/jQuery.js"></script>
		<script type="text/javascript" src="/js/lib/jQuery_ext.js"></script>
		<script type="text/javascript" src="/js/lib/analytics.js"></script>
		<script type="text/javascript" src="/js/overlay.js"></script>
		<script type="text/javascript" src="/js/<?php echo $id; ?>.js"></script>
	</head>
	<body>
		<header>
			<h1><a href="/">Alex Reynolds</a></h1>
			<h2>Web Developer</h2>
			<?php include ('nav.html'); ?>
			<h3><?php echo $title; ?></h3>
		</header>