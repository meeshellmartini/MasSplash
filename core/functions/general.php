<?php

function email ($to, $subject, $body){
	mail($to, $subject, $body, 'From: email_power@MasSplash.com');

}

function logged_in_redirect(){
	if(logged_in() === true){
		header('Location: index.php');
		exit();
	}
}


function protect_page(){
	if(logged_in() === false){
		header('Location: restricted.php');
		exit();
	}
}

function array_sanitize($item) {
	$item = mysql_real_escape_string($item);
}

function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {

	// Implode converts arrays into strings, appends first argument if multiple.
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>