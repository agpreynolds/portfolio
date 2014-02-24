var portfolio = portfolio || {
	init : function() {
		var self = portfolio;

		self.setupDom();
		self.setupEvents();
	},
	setupDom : function() {
		this.container = $('#portfolio');
		this.articles = this.container.find('article');
		this.moreLinks = this.articles.find('.more');
	},
	setupEvents : function() {
		this.moreLinks.bind('click',function(evt){
			evt.preventDefault();
			overlay.init({
				'id' : 'test',
				'data' : { id : this.id },
				'path' : '/includes/portfolio_more.php'
			});
		});
	},
}

$(document).ready(portfolio.init);