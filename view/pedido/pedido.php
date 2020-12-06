




<h4 class="page-header">Pedido.</h4>

<div class="well well-sm text-right">

<?php if($sesion->rol != "empleado"){ ?> 
<a class="btn btn-danger" href="?c=Pedido&a=Nuevo">+ pedido</a> 
<?php } ?>
   
</div>

<table class="table table-hover table-striped table-bordered" id="tabla">
    <thead class="bg bg-warning">
        <tr>
        <th >Id pedido.</th>
        <th >Cliente.</th>
        
         <th >Id valera.</th>
            <th >Total a pagar.</th>
            <th >Plato.</th>
            <th >Cantidad.</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nombre = "";
        $cantidad_plato = "";
        foreach($this->model->Listar() as $r): ?>  
        <tr> 
        <td><?php echo $r->id_pedido; ?></td>
        <td>
            <?php echo $r->nom_cliente.' '.$r->ape_cliente; ?></td>
            
            <td><?php echo $r->id_compra; ?></td>
            <td><?php echo $r->total; ?></td>
            <?php 
            foreach($this->model->Obtener_platos($r->id_pedido) as $r){   
                $nombre.= $r->nombre.'<br>';
                $cantidad_plato.= $r->cantidad_plato.'<br>';
            } ?> 
            <td><?php echo $nombre; ?></td>
            <td><?php echo $cantidad_plato;  ?></td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Pedido&a=Eliminar&id_pedido=<?php echo $r->id_pedido; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
            <td> 
            <a href="?c=Pedido&a=Crud&id_pedido=<?php echo $r->id_pedido; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
        </td>
      
            
        </tr>
    <?php endforeach; ?>   
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger" href="menu2.php">Menú</a>
</div>
