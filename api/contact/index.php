<?php

include($_SERVER['DOCUMENT_ROOT'] . '/php/contact.php');		
include($_SERVER['DOCUMENT_ROOT'] . '/php/emailer.php');		

$form = new contact($_POST);

?>