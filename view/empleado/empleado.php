
<h3 class="page-header">Empleado</h3>

<div class="well well-sm text-right">
       <a class="btn btn-danger"href="?c=Empleado&a=Nuevo">+ Empleado</a>
    
   
       </div>

       <table class="table table-hover table-striped table-bordered" id="tabla">
    <thead class="bg bg-warning">
        <tr>
        <th >Empleado</th>
            <th >Nombre</th>
            <th>Apellido</th>
            
            <th>Identificación</th>
            <th>Direccion</th>
            <th>Corre electronico</th>
            <th>Telefono</th>
           
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
        <td><?php echo $r->id_empleado; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
      
            <td><?php echo $r->identificacion; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->correo_electronico; ?></td>
            <td><?php echo $r->telefono; ?></td>
            
            
            <td>
                <a href="?c=Empleado&a=Crud&id_empleado=<?php echo $r->id_empleado; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Empleado&a=Eliminar&id_empleado=<?php echo $r->id_empleado; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger"href="menu2.php">Menú</a>
</div>

