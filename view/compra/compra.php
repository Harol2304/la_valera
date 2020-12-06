
<h3 class="page-header">Vales</h3>

<div class="well well-sm text-right">
<?php if($sesion->rol != "cliente"){ ?> 
       <a class="btn btn-danger"href="?c=compra&a=Nuevo">+ Vales</a>
       <?php } ?>
   
       </div>
<table class="table table-hover table-striped table-bordered" id="tabla">

    <thead class="bg bg-warning">
        <tr>
            <th >Id vale</th>
            <th>Fecha compra</th>
            <th >Hora compra</th>
            <th >Valor vale</th>
            <th>Estado</th>
            <th>id valera</th>
            <th >Id empleado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_compra; ?></td>
            <td><?php echo $r->fecha_compra; ?></td>
            <td><?php echo $r->hora_compra; ?></td>
            <td><?php echo $r->valor_vale; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td><?php echo $r->id_valera; ?></td>
            <td><?php echo $r->id_empleado ?></td>

           
            <td>
                <a href="?c=Compra&a=Crud&id_compra=<?php echo $r->id_compra; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
           
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger" href="menu2.php">Menú</a>
</div>
