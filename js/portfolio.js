var portfolio_items = [
	{
		name: 'The Peahen\'s Nest',
		image: 'thepeahensnest.png',
		abstract: 'Wordpress site developed for a small business',
		content: "<p>The Peahen's Nest is a new start up business selling hand painted fashion and homeware textiles.</p><p>The site was built based on a set of provided designs and a iterative feedback process with the business owner. The site has been built with Wordpress and training has been provided where possible to enable maintenance to be performed on the site without a developers input.</p>",
		uri: 'http://thepeahensnest.co.uk'		
	},
	{
		name: 'Semantic Recipe Finder',
		image: 'fyp.png',
		abstract: 'My final year project',
		content: "<p>My final year project is to build an application which can be used to upload and search for recipes.</p><p>The application has been built using PHP with the front end developed using HTML, CSS and JavaScript including jQuery.</p>",
		uri:'http://cookbook.agpreynolds.co.uk',
		tags: [
			'HTML','CSS','JavaScript','jQuery','PHP','Sparql','Turtle','MySQL','ARC2'
		],
		gitUser: 'palacealex',
		gitRepo: 'cookbook'
	},
	{
		name: 'Webgl Globe Animation',
		image: 'globe.png',
		abstract: 'A 3D animation of a globe orbited by a satellite created in Webgl',
		content: "<p>This animation was originally created for a coursework submission. It uses the JavaScript Webgl API to render the 3D elements.</p><p>The brief was to create an animation with the following elements:</p><ul><li>A Sphere, textured with the image of the earth</li><li>The sphere should rotate slowly on its axis</li><li>A cube, coloured grey on the side facing the sphere and golden on each of the others</li><li>The cube should orbit the sphere at a speed and distance which can be customised at run time</li><li>The scene should be lit by a directional light from above</li><li>The user should be able to control the scene by zooming in/out and rotating the scene</li></ul><p>All of these requirements were successfully implemented resulting in a first class mark for the assignment. I plan to re-visit the project to make the animation full screen and enhance the interactivity.</p>",
		uri: 'http://webgl.agpreynolds.co.uk',
		tags: [
			'HTML','CSS','JavaScript','Webgl'
		],
		gitUser: 'palacealex',
		gitRepo: 'webgl_globe'
	},
	{
		name: 'Real Time Sports Results',
		image: 'scores.png',
		abstract: 'Using websockets to update sports scores in real time',
		content: "<p>This application was created as part of a group research project into the use of websockets compared to http polling in communicating real time data.</p><p>I would like to recognise <a href='http://alasdairsmith.org' target='_blank'>Alasdair Smith</a> for his contribution to the project</p>",
		uri: 'http://sportsball.agpreynolds.co.uk',
		gitUser: '40thieves',
		gitRepo: 'sportsball'
	},
	{
		name: 'First World Problems',
		image: 'pubhack.png',
		abstract: 'Web application following twitter hashtag #firstworldproblems and suggesting related real world news articles',
		content: "<p>This simple application was actually created as during the <a href='http://pubhack.co.uk'>Pubhack</a> event</p><p>The application makes use of the twitter and google feed API's to suggest 'reality check' news stories for people who post their first world problems on twitter.</p>",
		uri: 'http://pubhack.agpreynolds.co.uk',
		gitUser: 'palacealex',
		gitRepo: 'pubhack'
	},
	{
		name: 'Awkward Situations',
		image: '',
		abstract: "This is an application which enables users to have a message texted to their phone with a randomly generated excuse for escaping an awkward situation",
		content: "This is an application which enables users to have a message texted to their phone with a randomly generated excuse for escaping an awkward situation",
		uri: 'http://awks.agpreynolds.co.uk',
		gitUser: 'ggowen',
		gitRepo: 'awkroulette'
	}
];

var portfolio = portfolio || {
	init : function() {
		var self = portfolio;

		self.setupDom();
		self.setupEvents();
	},
	setupDom : function() {
		this.templates = {
			items:  Handlebars.compile($('#tmpl-portfolio-items').html()),
			feature: Handlebars.compile($('#tmpl-feature').html())
		};		

		$('#items').html(this.templates.items(portfolio_items));

		this.container = $('#portfolio');
		this.articles = this.container.find('article');
		this.moreLinks = this.articles.find('.more');
	},
	setupEvents : function() {
		this.moreLinks.bind('click',function(evt){
			$('#feature').show().html(portfolio.templates.feature(portfolio_items[this.getAttribute('data-index')]));

			// $(this).closest('.item').removeClass('col-md-6');


			// evt.preventDefault();
			// overlay.init({
			// 	'id' : 'test',
			// 	'data' : { id : this.id },
			// 	'path' : '/includes/portfolio_more.php'
			// });
		});
	},
}

$(document).ready(portfolio.init);