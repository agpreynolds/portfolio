<?php 

$id = 'portfolio';
$title = 'Portfolio of Work';
include('includes/start.php'); 

?>

<section id="portfolio" class="wrapper">
	<article id="fyp">
		<header>
			<h3>Semantic Recipe Finder</h3>
		</header>

		<div class="img"><img src="/media/images/portfolio/thepeahensnest.png"></div>

		<p>My final year project</p>

		<a class="more">See More</a>
		<a href="http://cookbook.agpreyolds.co.uk" target="_blank">View Project</a>
	</article>
	<article id="webgl">
		<header>
			<h3>Webgl Globe Animation</h3>
		</header>

		<div class="img"><img src="/media/images/portfolio/globe.png"></div>

		<p>A 3D animation of a globe orbited by a satellite created in Webgl</p>

		<a class="more">See More</a>
		<a href="http://webgl.agpreyolds.co.uk" target="_blank">View Project</a>
	</article>
	<article id="websockets">
		<header>
			<h3>Real Time Sports Results</h3>
		</header>

		<div class="img"><img src="/media/images/portfolio/thepeahensnest.png"></div>

		<p>Using websockets to update sports scores in real time</p>

		<a class="more">See More</a>
		<a href="http://sportsball.agpreyolds.co.uk" target="_blank">View Project</a>
	</article>
	<article id="thepeahensnest">
		<header>
			<h3>The Peahen's Nest</h3>
		</header>

		<div class="img"><img src="/media/images/portfolio/thepeahensnest.png"></div>

		<p>Placeholder website for a friend starting a new business</p>

		<a class="more">See More</a>
		<a href="http://thepeahensnest.co.uk" target="_blank">View Project</a>
	</article>
	<article id="pubhack2">
		<header>
			<h3>First World Problems</h3>
		</header>

		<div class="img"><img src="/media/images/portfolio/thepeahensnest.png"></div>

		<p>Web application following twitter hashtag #firstworldproblems and suggesting related real world news articles</p>

		<a class="more">See More</a>
		<a href="http://pubhack.agpreynolds.co.uk" target="_blank">View Project</a>
	</article>
</section>

<?php include('includes/footer.php'); ?>