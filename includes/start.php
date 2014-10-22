<?php

	function __autoload($class_name) {
		$includePath = include($_SERVER['DOCUMENT_ROOT'] . '/php/' . $class_name . '.php');		
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alex Reynolds - <?php echo $title; ?></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="/css/global.css">		
		<link rel="stylesheet" type="text/css" href="/css/<?php echo $id; ?>.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js"></script>		
		<script type="text/javascript" src="/js/lib/analytics.js"></script>		
		<script type="text/javascript" src="/js/<?php echo $id; ?>.js"></script>
	</head>
	<body class="container-fluid">
		<header>
			<?php include ('nav.php'); ?>

			<h1><?php echo $title; ?></h1>
		</header>