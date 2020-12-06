
<ol class="breadcrumb">
  <li><a href="?c=pedido">Pedido</a></li>
  <li class="active"><?php echo $ped->id_pedido != null ? $ped->id_cliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-pedido" action="?c=Pedido&a=Guardar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_pedido" value="<?php echo $ped->id_pedido; ?>" />
    <h4 class="text-center">Detalles</h4>
    <hr>
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Id pedido</label>
            <input  type="number" name="id_pedido" value="<?php echo $ultimo_id; ?>" class="form-control" placeholder="Ingrese el id" required data-validacion-tipo="requerido|min:20" readonly />
          </div>
        </div>


      <div class="col-md-6">
        <div class="form-group">
          <label>id vale</label>
          <input  type="number" name="id_compra" value="<?php echo $ped->id_compra; ?>" class="form-control" placeholder="Ingrese el id de id_compra" required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Total</label>
          <input  type="number" name="total" value="<?php echo $ped->total; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" readonly/>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Cliente</label>
          <select name="id_cliente" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_clientes() as $r){ ?>
                <option value="<?php echo $r->id_cliente; ?>" ><?php echo $r->nombre.' '.$r->apellido; ?></option>
              <?Php } ?>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="">
          <button class="btn btn-success">Guardar</button>
          <a href="index.php?c=pedido" class="btn btn-danger">Volver</a>
        </div>
      </div>
    </div>
</form>



