<?php

	$serverName = "192.168.1.250";
	$connectionInfo = array("Database"=>"adPINTURAS2020SADEC", "UID"=>"sa", "PWD"=>"M78o03e09p56*","CharacterSet"=>"UTF-8");

	$conn = sqlsrv_connect($serverName,$connectionInfo);

	if ($conn) {
		
		echo "Conexion exitosa";

	}else{

		echo "Fallo en la conexion";
		die(print_r(sqlsrv_errors(),true));

	}



?>