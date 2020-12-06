<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM compra ORDER BY id_compra";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_compra, fecha_compra, hora_compra, cantidad, total_pago, id_valera, id_cliente FROM compra WHERE id_compra LIKE '%".$q."%' OR fecha_compra LIKE  '%".$q."%' OR hora_compra LIKE  '%".$q."%' OR cantidad LIKE '%".$q."%' OR total_pago LIKE '%".$q."%' OR id_valera LIKE '%".$q."%' OR id_cliente LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
		<th class='title-table'>Id compra</th>	
		<th class='title-table'>Fecha compra </th>	
		<th class='title-table'>Hora compra</th>	
		<th class='title-table'>Cantidad</th>	
        <th class='title-table'>Total pago</th>  
        <th class='title-table'>Id valera</th> 
        <th class='title-table'>Id cliente</th> 
     
				
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_compra']."</td>
  		<td>".$fila['fecha_compra']."</td>
  		<td>".$fila['hora_compra']."</td>
  		<td>".$fila['cantidad']."</td>
      <td>".$fila['total_pago']."</td>
      <td>".$fila['id_valera']."</td>
      <td>".$fila['id_cliente']."</td>
      
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


