
<h3 class="page-header">Valera.</h3>

<div class="well well-sm text-right">


   
    
   
</div>

<table class="table table-hover table-striped table-bordered" id="tabla">
    <thead class="bg bg-warning">
        <tr>
            <th >Id Valera.</th>
            <th>Cantidad de vales.</th>
            <th >Cliente.</th>
            <?php if( $sesion->rol != "cliente" ){ ?> 
            <th></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_valera; ?></td>
            <td><?php echo $r->cantidad_vales; ?></td>
            <td><?php echo $r->nom_cliente.' '.$r->ape_cliente; ?></td>
            
            <?php if( $sesion->rol != "cliente" ){ ?> 
                <td> 
                <a href="?c=Pedido&a=Crud&id_pedido=<?php echo $r->id_pedido; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
           <?php } ?>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger" href="menu2.php">Menú</a>
</div>
