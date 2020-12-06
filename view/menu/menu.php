
<h3 class="page-header">Menu</h3>

<div class="well well-sm text-right">
<?php if($sesion->rol != "cliente"){ ?>  
       <a class="btn btn-danger"  href="?c=Menu&a=Nuevo">+ Menu</a>
       <?php } ?>
   
    
       </div>

       <table class="table table-hover table-striped table-bordered" id="tabla">
    <thead class="bg bg-primary">
        <tr>
            <th >Menú</th>
            <th >Categoría</th>
            <th >Gerente</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_menu; ?></td>
            <td><?php echo $r->categoria; ?></td>
           <td><?php echo $r->nom_gerente.' '.$r->ape_gerente; ?></td>
            
           <?php if($sesion->rol != "cliente"){ ?>  
            <td> 
                <a href="?c=Menu&a=Crud&id_menu=<?php echo $r->id_menu; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <?php } ?>
          
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    
    <a class="btn btn-danger"  href="menu2.php">Menú</a>
</div>

