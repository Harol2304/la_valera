<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM valera ORDER BY id_valera";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_valera, cantidad_vales FROM valera WHERE id_valera LIKE '%".$q."%' OR cantidad_vales LIKE  '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Número id valera</th>	
				<th class='title-table'>Cantidad de vales</th>				
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_valera']."</td>
  		<td>".$fila['cantidad_vales']."</td>
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


