<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM cliente ORDER BY id_cliente";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_cliente, nombre, apellido, correo_electronico, direccion, fecha_nacimiento, identificacion, contrasena FROM cliente WHERE id_cliente LIKE '%".$q."%' OR nombre LIKE  '%".$q."%' OR apellido LIKE  '%".$q."%' OR correo_electronico LIKE  '%".$q."%' OR direccion LIKE '%".$q."%' OR fecha_nacimiento LIKE '%".$q."%' OR identificacion LIKE '%".$q."%' OR contrasena LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>Número id cliente</th>	
				<th class='title-table'>Nombre </th>	
				<th class='title-table'>Apellido</th>	
				
        <th class='title-table'>Identificacion</th> 
      
				
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_cliente']."</td>
  		<td>".$fila['nombre']."</td>
  		<td>".$fila['apellido']."</td>
      <td>".$fila['identificacion']."</td>


     
  		</tr>";
      
  	}

 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }

  echo $salida;
  $mysqli->close();

 ?>


