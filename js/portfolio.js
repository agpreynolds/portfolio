/*

	** Portfolio JS **
	Alex Reynolds

	Simple jQuery based slideshow for switching between articles in portfolio

	Properties
	* portfolio.current - The current selected article

	Methods
	* refresh() - Shows next item in list
	* previous() - Shows previous article


*/

var portfolio = portfolio || {
	init : function() {
		var self = portfolio;

		self.setupDom();
		self.setupEvents();
		self.refresh();
	},
	setupDom : function() {
		this.container = $('#portfolio');
		this.articles = this.container.find('article').hide();
		this.previousNode = this.container.find('.previous');
		this.nextNode = this.container.find('.next');
	},
	setupEvents : function() {
		this.previousNode.bind('click',this.previous);
		this.nextNode.bind('click',this.refresh);
	},
	refresh : function() {
		var self = portfolio;
		
		if (self.current) {
			//Hide the currently shown article
			$(self.current).hide();

			//Push it to the back of the articles array
			self.articles.push(self.current);			
		}
		
		//Set the first item as current
		self.current = self.articles.splice(0,1);
		
		//Show the new article
		$(self.current).show();
	},
	previous : function() {
		$(this.current).hide();
		this.articles.unshift(this.current);
		this.current = this.articles.pop();
		$(this.current).show();
	}
}

// $(document).ready(portfolio.init);