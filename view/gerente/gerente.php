
<h1 class="page-header">Gerente</h1>

<div class="well well-sm text-right">
       <a class="btn btn-success" href="?c=Gerente&a=Nuevo">Nuevo Gerente</a>
    
   
    <a class="btn btn-danger" href="menu2.html">Volver</a>
    </div>

<table class="table table-hover " id="tabla">
    <thead class="bg bg-warning">
        <tr>
            <th >Id gerente</th>
            <th>Nombre</th>
            <th >Apellido</th>
            <th >Correo electronico</th>
            <th>Telefono</th>
            <th>Identificacion</th>
            <th>Contrasena</th>
            <th>Id menu</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_gerente; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->correo_electronico; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->identificacion; ?></td>
            <td><?php echo $r->contrasena; ?></td>
            <td><?php echo $r->id_menu; ?></td>
            <td>
                <a href="?c=Gerente&a=Crud&id_gerente=<?php echo $r->id_gerente; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    <a class="btn btn-success" href="index.html">Inicio</a>
    <a class="btn btn-success" href="menu.php">Menú</a>
    <a class="btn btn-success" href="?c=Gerente&a=consul">Consultar</a>
</div>

