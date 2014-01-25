var global = global || {};

var global = {
	init : function() {
		$('#home').center();
		$(window).resize(function(){
			$('#home').center();
		});
	}
}

$(document).ready(global.init);

