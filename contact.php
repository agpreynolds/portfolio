<?php 

$title = 'Contact Me';
$id = 'contact';

include('includes/start.php'); 
?>

<section id="contact">


	<form class="form-horizontal" role="form" name="contact" method="post" action="contact.php">

		<p>If you would like to get in touch, you can do so by using the form below</p>

		<div class="messages"></div>		
		
		<div id="email" class="form-group">
			<label for="email" class="col-md-1 control-label">Email</label>
			<div class="col-md-11">
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
		</div>

		<div id="subject" class="form-group">
			<label for="subject" class="col-md-1 control-label">Subject</label>
			<div class="col-md-11">
				<input type="text" class="form-control" name="subject" placeholder="Subject">
			</div>
		</div>
				
		<div id="body" class="form-group">
			<label for="message" class="col-md-1 control-label">Email</label>
			<div class="col-md-11">
				<textarea name="message" class="form-control" rows="5" placeholder="Enter Message..."></textarea>			  
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-offset-1 col-md-11">
				<input class="btn btn-primary" type="submit" value="Send Message"/>
			</div>
		</div>

	</form>
  
</section>

<?php include('includes/footer.php'); ?>