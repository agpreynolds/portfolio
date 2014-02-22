<?php 

$title = 'Contact Me';
$id = 'contact';

include('includes/start.php'); 

$form = new contact($_POST);
?>

<section id="contact" class="wrapper">
	<p>If you would like to get in touch, you can do so by using the form below</p>
	<form name="contact" method="post" action="contact.php">
		<?php include('includes/messages.php'); ?>
		<label for="email">*Email Address</label>
		<input type="email" name="email" placeholder="Email Address"/>
		
		<label for="subject">*Subject</label>
		<input type="text" name="subject" placeholder="Subject"/>
		
		<label for="message">*Please Enter Your Message</label>
		<textarea name="message" placeholder="Enter Message..."></textarea>

		<input type="submit" value="Send Message"/>
	</form>
</section>

<?php include('includes/footer.php'); ?>