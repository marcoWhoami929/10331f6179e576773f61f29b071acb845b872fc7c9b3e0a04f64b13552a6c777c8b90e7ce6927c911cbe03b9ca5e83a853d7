<?php 
	
	$cod = $_GET['_num1'];

	if (!empty($cod)) {
		 comprobar($cod);
	}

	function comprobar($cod){
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'matriz');

		$sql = mysqli_query($con,"SELECT * FROM atencionaclientes WHERE folio = '".$cod."'");
		$clientes = array();
		$contar = mysqli_num_rows($sql);
		if ($contar == 0) {
			$clientes[] = array('folio'=> '', 'numeroPartidas' => '', 'numeroUnidades' => '', 'importeTotal' => '', 'resultado' => 0);
		}else{
			while ($row = mysqli_fetch_row($sql)) {
			    $folio = $row[10];
			    $numeroPartidas = $row[17];
			    $numeroUnidades = $row[18];
			    $importe = $row[19];

			    $clientes[] = array('folio' => $folio, 'numeroPartidas'=> $numeroPartidas,'numeroUnidades'=> $numeroUnidades, 'importeTotal'=>$importe,'resultado'=>1);
			}
		}
		$json_string = json_encode($clientes);
		echo $json_string;
	}

?>