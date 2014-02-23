<?php 

$id = 'portfolio';
$title = 'Portfolio of Work';
include('includes/start.php');

?>

<section id="portfolio" class="wrapper">
	<?php
		$items = include('php/configuration/portfolio.php');

		foreach ($items as $item) {
			include('includes/portfolio_item.php');
		}
	?>	
</section>

<?php include('includes/footer.php'); ?>