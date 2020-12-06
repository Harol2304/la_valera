<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM empleado ORDER BY id_empleado";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_empleado, nombre, apellido, correo_electronico, direccion, identificacion, contrasena FROM empleado WHERE id_empleado LIKE '%".$q."%' OR nombre LIKE  '%".$q."%' OR apellido LIKE  '%".$q."%' OR correo_electronico LIKE  '%".$q."%' OR direccion LIKE '%".$q."%' OR identificacion LIKE '%".$q."%' OR contrasena LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Número id empleado</th>	
				<th class='title-table'>Nombre </th>	
				<th class='title-table'>Apellido</th>	
				<th class='title-table'>Correo electronico</th>	
				<th class='title-table'>Dirección</th>
				<th class='title-table'>Telefono</th>
				<th class='title-table'>Identificacion</th> 
				<th class='title-table'>Contrasena</th>  
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_empleado']."</td>
  		<td>".$fila['nombre']."</td>
  		<td>".$fila['apellido']."</td>
  		<td>".$fila['correo_electronico']."</td>
	  <td>".$fila['direccion']."</td>
	  <td>".$fila['telefono']."</td>
      <td>".$fila['identificacion']."</td>
      <td>".$fila['contrasena']."</td>
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>

