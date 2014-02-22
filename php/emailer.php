<?php

class emailer {
	public function emailer($to,$subject,$body,$from,$cc,$bcc) {
		if ( !$to || !$subject || !$body || !$from ) {
			return;
		}

		$this->to = $to;
		$this->subject = $subject;
		$this->message = $body;			

		$this->from = "From: " . $from . "\r\n";
		$this->cc = isset($cc) ? "CC: " . $cc . "\r\n" : '';
		$this->bcc = isset($bcc) ? "BCC: " . $bcc . "\r\n" : '';

		$this->additional_parameters = $this->from . $this->cc . $this->bcc;

		$this->send();
	}
	private function send() {
		mail($this->to,$this->subject,$this->message,$this->additional_parameters);
	}
}

?>