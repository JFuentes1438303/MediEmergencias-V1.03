<?php 

	$db = new mysqli('localhost','root','','itms_emergencias');

	if($db->connect_error){
		    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
	}

?>