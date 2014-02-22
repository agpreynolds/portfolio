var cv = cv || {
	init : function() {
		var self = cv;

		self.setupDom();
		self.setupEvents();
	},
	setupDom : function() {
		this.container = $('#cv');
		this.collapsedNodes = this.container.find('.content-collapsed');
		this.toggleLinks = this.collapsedNodes.find('article header');
	},
	setupEvents : function() {
		this.toggleLinks.bind('click',function(){
			$(this).siblings().slideToggle();
		});
	}
}

$(document).ready(cv.init);