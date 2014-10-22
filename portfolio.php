<?php 

$id = 'portfolio';
$title = 'Portfolio of Work';
include('includes/start.php');	
 			
?>
<script type="text/javascript">
	//var portfolio_items = <?php echo json_encode(include('php/configuration/portfolio.php')); ?>
</script>

<script id="tmpl-feature" type="text/x-handlebars-template">	
		
	<header>
		<h1>{{name}}</h1>
	</header>

	<div class="media">
		<img src="/media/images/portfolio/{{image}}">

		{{#if gitRepo}}
			<section class="git">
				<iframe src="http://ghbtns.com/github-btn.html?user={{gitUser}}&repo={{gitRepo}}&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
				<iframe src="http://ghbtns.com/github-btn.html?user={{gitUser}}&repo={{gitRepo}}&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>
		  	</section>
	  	{{/if}}
	</div>
	
	<p>{{{content}}}</p>
	
	<a href="{{uri}}" class="btn btn-primary pull-right" target="_blank">View Project</a>
	

</script>

<script id="tmpl-portfolio-items" type="text/x-handlebars-template">

	{{#each .}}
		<article id="{{@index}}" class="panel item col-md-6">
			<header>
				<h3>{{name}}</h3>
			</header>

			<div class="img"><img src="/media/images/portfolio/{{image}}"></div>

			<p>
				{{abstract}}... <a data-index="{{@index}}" class="more btn-link">See More</a>
			</p>
			
			<a href="{{uri}}" class="btn btn-primary" target="_blank">View Project</a>
			
		</article>
	{{/each}}

</script>

<section id="portfolio">
	<section id="feature" class="jumbotron" style="display:none"></section>
	<section id="items" class="row"></section>
</section>

<?php include('includes/footer.php'); ?>