<?php
	require_once 'connection.php';
	$link = mysqli_connect( $host, $user, $password, $database ) or die( "Помилка " . mysqli_error( $link ) );
	$sql = $query;	
	$link->set_charset("utf8");
	$result = mysqli_query( $link, $sql ) or die( "Помилка " . mysqli_error( $link ) ); 
	mysqli_close( $link );
?>