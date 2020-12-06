
<ol class="breadcrumb">
  <li><a href="?c=pedido">Pedido</a></li>
</ol>

<form id="frm-pedido" action="?c=Pedido&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_pedido" value="<?php echo $ped->id_pedido; ?>" />
    <h4 class="text-center">Detalles</h4>
    <hr>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label>Id pedido</label>
          <input  type="number" name="id_pedido" value="<?php echo $ped->id_pedido; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" readonly />
        </div>
    </div>
  

      <div class="col-md-6">
        <div class="form-group">
          <label>id_valera</label>
          <input  type="number" name="id_compra" value="<?php echo $ped->id_compra; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <?php if($sesion->rol != "cliente"){ ?> 
      <div class="col-md-6">
        <div class="form-group">
          <label>Total</label>
          <input  type="number" name="total" value="<?php echo $ped->total; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>
      <?php } ?>

      <div class="col-md-6">
        <div class="form-group">
          <label>Cliente</label>
          <select name="id_cliente" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_clientes() as $r){ ?>
                <option value="<?php echo $r->id_cliente; ?>" <?php echo ($r->id_cliente == $ped->id_cliente) ? 'selected': ''; ?> ><?php echo $r->nombre.' '.$r->apellido; ?></option>
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
<h4 class="text-center">Platos</h4>
<hr>
<div>
  <div>
    <div class="form-group">
      <select name="plato" class="col-3 form-control plato"  onchange="plato(this)">
        <option value="">-- Seleccionar --</option>
        <?php foreach($platos as $plt){ ?>
          <option value="?c=Pedido&a=Mas_plato&id_pedido=<?php echo $ped->id_pedido."&id_plato=".$plt->id_plato; ?>" ><?php echo $plt->nombre; ?></option>
        <?Php } ?> 
      </select>
      <script>
        function plato(select) {
          if (confirm('¿Desea agregar el plato?')) {
            var cant = parseInt(prompt("Ingrese cantidad", "1"));
            if (isNaN(cant)){
              alert('Debe ser solo números');
              $('.plato').val("");
            } else {
              location = ($('.plato').val() + '&cantidad=' + cant);
            }
          } else {
            $('.plato').val("");
          }
        }
      </script>
    </div>
  </div>
  <div id="mainContainer">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <?php foreach($detal as $r): ?>           
              <div class="col-lg-3">
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
                          <p><?php echo $r->categoria; ?></p>
                          <p>Cantidad x<?php echo $r->cantidad_plato; ?></p>
                          <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Pedido&a=Eliminar_plato&id=<?php echo $r->id."&id_pedido=".$ped->id_pedido; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                      </div>

                  </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
