var contact = contact || {
	
	init: function()
	{
		var self = contact;

		self.setupDom();
		self.setupEvents();

	},

	setupDom: function()
	{
		this.form = $('form');

		this.containers = $('.form-group');

	},

	setupEvents: function()
	{
		this.form.bind('submit',function(e)
		{
			e.preventDefault();
			$('.messages').empty();

			$(contact.containers).each(function(index,item)
			{
				var _this = $(item);

				_this.removeClass('has-error');				

				if (_this.find('input,textarea').val() == '')
				{					
					var error = "Please enter a value for field: <strong>" + _this.find('label').html() + "</strong>";

					_this.addClass('has-error');
					$('.messages').append($('<p>').addClass('alert alert-danger').html(error));
				}
			});

			if ($('.has-error').length == 0)
			{
				$.post('/api/contact/',$(this).serialize())
				.done(function(response)
				{
					response = $.parseJSON(response);

					$(response).each(function(index,item)
					{
						$('.messages').append($('<p>').addClass('alert alert-success').html(item));
					});
				})
			}

		});
	}
}

$(document).ready(contact.init);