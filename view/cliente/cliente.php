<?php 
session_start();
if(!isset($_SESSION['id_cliente'])){
    header('location: index.php?c=login');
}
$cliente = $_SESSION['id_cliente'];
foreach ($cliente as $cli){
?>


<h3 class="page-header">Cliente</h3>

<div class="well well-sm text-right">
    
   
</div>
<table class="table table-hover table-striped table-bordered" id="tabla">

    <thead class="bg bg-warning">
        <tr>
            <th >Nombre</th>
            <th>Apellido</th>
            <th >Identificación</th>
            <th>Id cliente</th>
            <th >Dirección</th>
            <th>Telefono</th>
            <th >Correo electronico</th>
            <th>Fecha nacimiento</th>
           
            
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->identificacion; ?></td>
            <td><?php echo $r->id_cliente; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->correo_electronico; ?></td>
            <td><?php echo $r->fecha_nacimiento; ?></td>
            
            
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger" href="menu2.php">Menú</a>
    <a class="btn btn-danger" href="?c=Cliente&a=consul">Consultar</a>
    </div>

<?php } ?>

