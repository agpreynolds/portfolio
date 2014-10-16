<?php 

$title = 'Contact Me';
$id = 'contact';

include('includes/start.php'); 

$form = new contact($_POST);
?>

<section id="contact" class="container">


	<form class="form-horizontal" role="form" name="contact" method="post" action="contact.php">

		<p>If you would like to get in touch, you can do so by using the form below</p>

		<?php include('includes/messages.php'); ?>
		
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
		</div>

		<div class="form-group">
			<label for="subject" class="col-sm-2 control-label">Subject</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="subject" placeholder="Subject">
			</div>
		</div>
				
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<textarea name="message" class="form-control" rows="5" placeholder="Enter Message..."></textarea>			  
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input class="btn btn-default" type="submit" value="Send Message"/>
			</div>
		</div>

	</form>
  
</section>

<?php include('includes/footer.php'); ?>