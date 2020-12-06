<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM menu ORDER BY id_menu";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_menu FROM menu WHERE id_menu  LIKE  '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Número id menú</th>	
				<th class='title-table'>Categoría</th>	
								
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
		  $salida.="
		<tr>
			<td>".$fila['id_menu']."</td>
			<td>".$fila['categoria']."</td>
			
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


