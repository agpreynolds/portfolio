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
		<link rel="stylesheet" type="text/css" href="/css/<?php echo $id; ?>.css">
		<script type="text/javascript" src="/js/lib/jQuery_v1.10.2.js"></script>
		<script type="text/javascript" src="/js/<?php echo $id; ?>.js"></script>
	</head>
	<body>
		<header>
			<h1>Alex Reynolds</h1>
			<?php include ('nav.html'); ?>
			<h2><?php echo $title; ?></h2>
		</header>