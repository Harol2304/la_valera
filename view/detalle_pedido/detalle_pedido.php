
<h3 class="page-header">Detalle Pedido.</h3>

<div class="well well-sm text-right">

<?php if($sesion->rol != "empleado"){ ?>
<a class="btn btn-danger" href="?c=Detalle_pedido&a=Nuevo">+ pedido</a> 
<?php } ?>
   
    
   
</div>

<table class="table table-hover ">
    <thead class="bg bg-warning">
        <tr>
            <th >Plato.</th>
            <th>Id pedido.</th>
            <th >Id.</th>
            <th >Cantidad plato.</th>
        
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nom_plato  ; ?></td>
            <td><?php echo $r->id_pedido; ?></td>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->cantidad_plato; ?></td>
            
            <?php if($sesion->rol != "empleado" || $sesion->rol != "cliente" ){ ?> 
                <td> 
                <a href="?c=Detalle_pedido&a=Crud&id=<?php echo $r->id; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
           <?php } ?>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger" href="menu2.php">Menú</a>
    <a class="btn btn-danger" href="?c=Detalle_pedido&a=consul">Consultar</a>
</div>

