<?php

if (isset($form->messages)) {
	echo "<ul>";

	foreach ($form->messages as $message) {
		echo "<li>{$message}</li>";
	}
	
	echo "</ul>";
}

?>