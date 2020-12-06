<?php

 $mysqli = new mysqli("localhost","root","","valera");
 $salida="";
 $query = "SELECT * FROM plato ORDER BY id_plato";

 if(isset($_POST['consulta'])){
 	$q= $mysqli->real_escape_string($_POST['consulta']);
 	$query = "SELECT id_plato, nombre, ingredientes, descripcion, precio, img_plato, id_menu, id_pedido FROM plato WHERE id_plato LIKE '%".$q."%' OR nombre LIKE  '%".$q."%' OR ingredientes LIKE  '%".$q."%' OR descripcion LIKE  '%".$q."%' OR precio LIKE '%".$q."%' OR img_plato LIKE '%".$q."%' OR id_menu LIKE '%".$q."%' OR id_pedido LIKE '%".$q."%'";
 }
  $resultado = $mysqli->query($query);
  $salida="";
  if($resultado->num_rows>0){
  	$salida.="<table class='table table-striped table-hover' id='table'>
  	<thead class='table-dark'>
			<tr>
				<th class='title-table'>id plato</th>	
				<th class='title-table'>Nombre </th>	
				<th class='title-table'>Ingredientes</th>	
				<th class='title-table'>descripcion</th>	
				<th class='title-table'>precio</th>
				<th class='title-table'>img plato</th>
				<th class='title-table'>id menu</th> 
				<th class='title-table'>id pedido</th>  
			</tr>
		</thead>";
	  
  	while($fila = $resultado->fetch_assoc()){
  		$salida.="<tr>
  		
  		<td>".$fila['id_plato']."</td>
  		<td>".$fila['nombre']."</td>
  		<td>".$fila['ingredientes']."</td>
  		<td>".$fila['descricpion']."</td>
	  <td>".$fila['precio']."</td>
	  <td>".$fila['img_plato']."</td>
      <td>".$fila['id_menu']."</td>
      <td>".$fila['id_pedido']."</td>
  		</tr>";
  	}
 $salida.="</tbody></table>";

  }else{
  	$salida.="No se encuentran datos en el sistema.";
  }
  echo $salida;
  $mysqli->close();
 ?>


