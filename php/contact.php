<?php

class contact {
	private $config;
	private $formData;
	public $messages;

	public function contact($formData) {
		if (!$formData) { return; }

		$this->formData = $formData;
		$this->config = require($_SERVER['DOCUMENT_ROOT'] . '/php/configuration/contact.php');

		$this->messages = array();

		if (!$this->formData['email']) {
			$this->messages[] = 'Please enter your email';
		}
		if (!$this->formData['subject']) {
			$this->messages[] = "Please enter a subject";
		}
		if (!$this->formData['message']) {
			$this->messages[] = "Please enter a message";
		}
		
		if (!$this->messages) {
			$this->send();
		}
	}
	private function send() {
		$sent = new emailer(
			$this->config['mail'],
			$this->formData['subject'],
			$this->formData['message'],
			$this->formData['email']
		);

		if ($sent) {
			$this->messages[] = "Message sent successfully";
		}
		else {
			$this->messages[] = "System error";
		}
	}
}

?>