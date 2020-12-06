
<h3 class="page-header">Plato</h3>

<div class="well well-sm text-right"> 

<?php if( $sesion->rol != "gerente" ){ ?>
    <a class="btn btn-danger" href="?c=Pedido&a=Nuevo">+ pedido</a> 
    <?php } ?>
    

    <?php if($sesion->rol != "cliente" ){ ?>
        <a class="btn btn-danger" href="?c=Plato&a=Nuevo">+ Plato</a>
    <?php } ?>

   
   

</div>
<table class="table table-hover " id="tabla">

<div id="mainContainer">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <?php foreach($this->model->Listar() as $r): ?>
            <div class="col-sm-3">
                <div class="panel panel-default my_panel shadow">
                    <div class="panel-body">
                        <?php  if ($r->img_plato == ""){ ?>
                            <img src="https://cdn.pixabay.com/photo/2017/08/18/18/56/knife-and-fork-2656027_960_720.jpg" alt="" class="img-responsive center-block" />
                        <?php }else{ ?>
                            <img src="<?php echo $r->img_plato; ?>" href="../view/plato/plato.php" alt="" class="img-responsive center-block" />
                        <?php } ?>
                    </div>
                    <div class="panel-footer">
                        <h3><?php echo $r->nombre; ?></h3>
                        
                        <h3><?php echo $r->precio; ?></h3>
                        <?php if( $sesion->rol != "cliente"){ ?> 
                            <a href="?c=Plato&a=Crud&id_plato=<?php echo $r->id_plato; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Plato&a=Eliminar&id_plato=<?php echo $r->id_plato; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        <?php } ?>
                        <hr>
                        <a href="?c=Plato&a=completo&id_plato=<?php echo $r->id_plato; ?>" >ver más</a>

                    </div>

                </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<div class="well well-sm text-left">
    <a class="btn btn-danger" href="menu2.php">Menú</a>
</div>















