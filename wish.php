<?php
	$params = array();
	$params = $_POST;
	
	if($params['wish'] != "") {
		mail("nullsleep@gmail.com", "~ Incoming Wish ~", $params['wish']);
	}
?>