<?php 

$id = 'cv';
$title = 'CV';
include('includes/start.php'); 

?>

<script id="tmpl-cv" type="text/x-handlebars-template">

	<header>
		<h2>Experience</h2>
	</header>

	{{#each jobs}}

		<article>
			<header class="row">
				<div class="col-md-8">
					<h3>{{startDate}} - {{endDate}}</h3>
					<h4>{{company}}, {{location}}</h4>
					<h5>{{jobTitle}}</h5>
				</div>
				
				{{#if image}}
					<img class="col-md-4" src="/media/images/{{image}}" alt="{{company}}">
				{{/if}}
			</header>

			{{#if roles}}

				<header>
					<h4>Achievements and Responsibilities
				</header>

				<ul>

				{{#each roles}}

					<li>{{this}}</li>

				{{/each}}

				</ul>

			{{/if}}

			{{#if training}}

				<header>
					<h4>Training Courses</h4>
				</header>

				<ul>

				{{#each training}}
					<li>{{name}}, {{provider}}</li>
				{{/each}}

				</ul>

			{{/if}}
		</article>
		
	{{/each}}

	<header>
		<h2>Education</h2>
	</header>

	{{#each education}}

		<article>
			<header class="row">
				<div class="col-md-8">
					<h3>{{startDate}} - {{endDate}}</h3>
					<h4>{{institution}}</h4>
					
					{{#if qualification}}
						<h5>{{qualification}}</h5>
					{{/if}}
				</div>
				
				{{#if image}}
					<img class="col-md-4" src="/media/images/{{image}}" alt="{{company}}">
				{{/if}}
			</header>

			{{#if results}}

				<a class="more btn-link">See Results</a>
				<section class="results collapse">
					{{#each results}}
					
						<article>						
							<header>
								<h6>{{name}}</h6>
							</header>
							<ul>
								{{#each items}}
									<li>
									{{name}} 
									{{#if grade}}
										- {{grade}}
									{{/if}}
									</li>
								{{/each}}							
							</ul>
						</article>

					{{/each}}
				</section>

			{{/if}}
		</article>
		
	{{/each}}

</script>

<section id="cv"></section>

<?php include('includes/footer.php'); ?>