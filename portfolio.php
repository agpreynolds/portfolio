<?php 

$id = 'portfolio';
$title = 'Portfolio of Work';
include('includes/start.php');	
 			
?>
<script id="tmpl-feature" type="text/x-handlebars-template">	
		
	<header>
		<h2>{{name}}</h2>
	</header>

	<div class="col-md-4">
		<img src="/media/images/portfolio/{{image}}">

		{{#if gitRepo}}
			<section class="git">
				<iframe src="http://ghbtns.com/github-btn.html?user={{gitUser}}&repo={{gitRepo}}&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
				<iframe src="http://ghbtns.com/github-btn.html?user={{gitUser}}&repo={{gitRepo}}&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>
		  	</section>
	  	{{/if}}

	  	{{#if tags}}
			<p class="tags">
				{{#each tags}}
					<a class="tag label btn-info md">{{this}}</a>
				{{/each}}
			</p>
		{{/if}}

	</div>
	
	<div class="col-md-8">
	<p>{{{content}}}</p>
	</div>
	
	<a href="{{uri}}" class="btn btn-primary pull-right" target="_blank">View Project</a>	

</script>

<script id="tmpl-portfolio-items" type="text/x-handlebars-template">

	{{#each .}}
		<article id="{{@index}}" class="panel item col-md-6">
			<header>
				<h3>{{name}}</h3>
			</header>

			<div class="img"><img src="/media/images/portfolio/{{image}}"></div>

			<p>{{abstract}}... <a data-index="{{@index}}" class="more btn-link">See More</a></p>

			{{#if tags}}
				<p class="tags">
					{{#each tags}}
						<a class="tag label btn-info md">{{this}}</a>
					{{/each}}
				</p>
			{{/if}}
			
			<a href="{{uri}}" class="btn btn-primary" target="_blank">View Project</a>
			
		</article>
	{{/each}}

</script>

<section id="portfolio">
	<section class="jumbotron">
		<h1>Portfolio of Work</h1>
		<article id="feature"></article>
	</section>
	<section id="items" class="row"></section>
</section>

<?php include('includes/footer.php'); ?>