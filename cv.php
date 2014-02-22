<?php 

$id = 'cv';
$title = 'CV';
include('includes/start.php'); 

?>

<section id="cv" class="wrapper">
	<article class="container" id="work">
		<header>
			<h3>Experience</h3>
		</header>
		<article id="esteeLauder2">
			<header>
				<div>
					<h3>Undergraduate Engineer</h3>
					<h4>Estee Lauder Companies</h4>
					<p class="dates">September 2013 - Present</p>
				</div>
				<img src="/media/images/lauder.png" alt="Estee Lauder Companies">
			</header>
		</article>
		<article id="esteeLauder1">
			<header>
				<div>
					<h3>Undergraduate Placement Student</h3>
					<h4>Estee Lauder Companies</h4>
					<p class="dates">September 2012 - September 2013</p>
				</div>
				<img src="/media/images/lauder.png" alt="Estee Lauder Companies">
			</header>
		</article>
	</article>

	<article class="container" id="education">
		<header>
			<h3>Qualifications</h3>
		</header>
		<article id="portsmouth">
			<header>
				<h3>University of Portsmouth</h3>
				<h4>BSc (Hons) Web Technologies</h4>
				<p class="dates">September 2010 - Present</p>
			</header>
		</article>
		<article id="sixth">
			<header>
				<h3>Collingwood College</h3>
				<p class="dates">September 2003 - 2010</p>
			</header>
			<section class="results content-collapsed">
				<article>
					<header>
						<h4>A Levels</h4>
					</header>
					<ul>
						<li>Applied ICT - A</li>
						<li>Business Studies - B</li>
						<li>Maths - C</li>
					</ul>
				</article>
				<article>
					<header>
						<h4>AS Levels</h4>
					</header>
					<ul>
						<li>Computing - B</li>
						<li>Economics - D</li>
					</ul>
				</article>
				<article>
					<header>
						<h4>GCSE's</h4>
					</header>
					<ul>
						<li>Science 			- A*</li>
						<li>Maths 				- A</li>
						<li>Business Studies 	- A</li>
						<li>Religious Studies 	- A</li>
						<li>Geography		 	- B</li>
						<li>English Language	- B</li>
						<li>English Literature	- B</li>
						<li>Food Technology		- B</li>
						<li>ECDL ICT Double Award	</li>
					</ul>
				</article>
			</section>
		</article>
	</article>
</section>

<?php include('includes/footer.html'); ?>