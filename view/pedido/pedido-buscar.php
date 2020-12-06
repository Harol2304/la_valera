<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM pedido ORDER BY id_pedido";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_pedido, id_vale, id_cliente, nombre  FROM pedido WHERE id_pedido LIKE '%".$q."%' OR id_vale LIKE  '%".$q."%' OR id_cliente LIKE  '%".$q."%' OR nombre LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Id pedido</th>	
				<th class='title-table'>Id Vale </th>	
				<th class='title-table'>Id cliente</th>	
				<th class='title-table'>Nombre plato</th>	
				
				
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_pedido']."</td>
  		<td>".$fila['id_vale']."</td>
		  <td>".$fila['id_cliente']."</td>
		  <td>".$fila['nombre']."</td>
  		
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


