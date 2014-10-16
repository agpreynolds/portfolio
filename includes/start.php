<?php

	function __autoload($class_name) {
		$includePath = include($_SERVER['DOCUMENT_ROOT'] . '/php/' . $class_name . '.php');		
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alex Reynolds - <?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap-sticky-footer.css">
		<link rel="stylesheet" type="text/css" href="/css/global.css">
		<link rel="stylesheet" type="text/css" href="/css/overlay.css">
		<link rel="stylesheet" type="text/css" href="/css/<?php echo $id; ?>.css">
		<script type="text/javascript" src="/js/lib/jQuery.js"></script>
		<script type="text/javascript" src="/packages/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/lib/jQuery_ext.js"></script>
		<script type="text/javascript" src="/js/lib/analytics.js"></script>
		<script type="text/javascript" src="/js/overlay.js"></script>
		<script type="text/javascript" src="/js/<?php echo $id; ?>.js"></script>
	</head>
	<body>
		<header>
			<?php include ('nav.php'); ?>

			<div class="jumbotron">
				<h1><?php echo $title; ?></h1>
			</div>
			
		</header>