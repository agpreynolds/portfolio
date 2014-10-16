<?php 

$id = 'portfolio';
$title = 'Portfolio of Work';
include('includes/start.php');

?>

<section id="portfolio" class="container">
	<?php
		$maxItems = 3;
		$items = include('php/configuration/portfolio.php');

		$count = 1;

		foreach ($items as $id => $item) {
			echo ($count == 1) ? "<section class='row'>" : '';
			
			include('includes/portfolio_item.php');


			if ( $count == $maxItems ) {
				echo "</section>\n" ;
				$count = 1;				
			}
			else {
				$count++;				
			} 
		}

		if ($count != 1) {
			echo "</section>\n" ;
		}
	?>	
</section>

<?php include('includes/footer.php'); ?>