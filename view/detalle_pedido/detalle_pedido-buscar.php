<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM detalle_pedido ORDER BY id";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_pedido, id_vale, id, cantidad_plato  FROM detalle_pedido WHERE id LIKE '%".$q."%' OR id_pedido LIKE  '%".$q."%' OR id_plato LIKE  '%".$q."%' OR cantidad_platos LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Id pedido</th>	
				<th class='title-table'>Id plato </th>	
				<th class='title-table'>Id</th>	
				<th class='title-table'>Cantidad plato</th>	
				
				
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_pedido']."</td>
  		<td>".$fila['id_plato']."</td>
		  <td>".$fila['id']."</td>
		  <td>".$fila['cantidad_plato']."</td>
  		
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


