<h3 class="page-header">
    Nuevo Pedido
</h3>

<ol class="breadcrumb">
  <li><a href="?c=Detalle_pedido">Pedido</a></li>
  <li class="active">Nuevo Pedido</li>
</ol>

<form id="frm-pedido" action="?c=Detalle_pedido&a=Guardar" method="post" enctype="multipart/form-data">


<div class="row">
<div class="col-md-6">
<div class="form-group">
        <label>Plato</label>
        <select name="id_plato" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_platos() as $r){ ?>
                <option value="<?php echo $r->id_plato; ?>" ><?php echo $r->nombre; ?></option>
            <?Php } ?>
        </select>
    </div>
    </div>
    </div>


<div class="col-md-6">
    <div class="form-group">
        <label>Cantidad de platos</label>
        <input type="number" name="cantidad_plato" value="<?php echo $dped->cantidad_plato; ?>" class="form-control" placeholder="Ingrese la cantidad de platos que desea." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Id pedido.</label>
        <select name="id_pedido" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_pedidos() as $r){ ?>
                <option value="<?php echo $r->id_pedido; ?>" ><?php echo $r->id_pedido; ?></option>
            <?Php } ?>
        </select>
    </div>
    </div>

     

    <hr />

    
    <div class="text-right">
     <button class="btn btn-success" >Guardar</button>
     <a href="index.php?c=detalle_pedido" class="btn btn-danger">Volver</a>
    </div>
</form>
