<?php

session_start ();

$redirect = $_GET['uri'];

setcookie( "user_auth", 'SET' );	

header ( 'location: /' . $redirect );
?>