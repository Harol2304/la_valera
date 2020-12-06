<h1 class="page-header">Platos</h1>

<div class="well well-sm text-right">
       
    
   
    <a class="btn btn-danger" href="?c=plato">Volver</a>
</div>


<div id="mainContainer">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default my_panel shadow">
                <div class="panel-body">
                    <?php  if ($pla->img_plato == ""){ ?>
                        <img src="https://cdn.pixabay.com/photo/2017/08/18/18/56/knife-and-fork-2656027_960_720.jpg" alt="" class="img-responsive center-block" />
                    <?php }else{ ?>
                        <img src="<?php echo $pla->img_plato; ?>" href="../view/plato/plato.php" alt="" class="img-responsive center-block" />
                    <?php } ?>
                </div>
                <div class="panel-footer">
                    <h3><?php echo $pla->nombre; ?></h3>
                    <h4><?php echo $pla->ingredientes; ?></h4>
                    <h5><?php echo $pla->descripcion; ?></h5>
                    <h3><?php echo $pla->precio; ?></h3>
                    <p><?php echo $pla->categoria; ?></p>
                    <?php if($sesion->rol != "gerente" || $sesion->rol != "empleado"  ){ ?>
                        <a href="?c=Plato&a=Crud&id_plato=<?php echo $pla->id_plato; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Plato&a=Eliminar&id_plato=<?php echo $r->id_plato; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="well well-sm text-left">
    <a class="btn btn-success" href="?c=plato&a=consul">Consultar</a>
</div>

