<!DOCTYPE html>
<?php
//require_once "modelos/conexion-server-comercial.modelo.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESO A DATOS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
      <table class="table table bordered table-responsive">
        <tr>
          <td>Id</td>
          <td>Serie</td>
          <td>Folio</td>
          <td>RFC</td>
          <td>Unidades</td>
          <td>Total</td>
        </tr>

        <?php

            $insertar = "SELECT * FROM dbo.admDocumentos WHERE CFECHA = '2021-01-23' AND CSERIEDOCUMENTO = 'FAND'";
            $ejecutar = sqlsrv_query($conn,$insertar);

            $i = 0;
            while($fila = sqlsrv_fetch_array($ejecutar)){
                $i++;
                echo "<tr align='center'><td>".$fila["CIDDOCUMENTO"]."</td><td>".$fila["CSERIEDOCUMENTO"]."</td><td>".$fila["CFOLIO"]."</td><td>".$fila["CRFC"]."</td><td>".$fila["CTOTALUNIDADES"]."</td><td>".$fila["CTOTAL"]."</td></tr>";
            }
        ?>
      
      </table>

    </div>

</body>
</html>