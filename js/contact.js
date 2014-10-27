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
			$('.errors,.success').hide().empty();

			$(contact.containers).each(function(index,item)
			{
				var _this = $(item);

				_this.removeClass('has-error');				

				if (_this.find('input,textarea').val() == '')
				{					
					var error = "Please enter a value for field: <strong>" + _this.find('label').html() + "</strong>";

					_this.addClass('has-error');
					$('.errors').append($('<p>').html(error));
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
						$('.success').append($('<p>').html(item));
					});
					
					$('.success').show();
				})
			}
			else
			{
				$('.errors').show();
			}

		});
	}
}

$(document).ready(contact.init);