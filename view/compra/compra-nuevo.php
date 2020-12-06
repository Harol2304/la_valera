<h3 class="page-header">
    Nuevo Registro
</h3>

<ol class="breadcrumb">
  <li><a href="?c=compra">compra</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-compra" action="?c=compra&a=Guardar" method="post" enctype="multipart/form-data">

<div class="row">
      

    <div class="col-md-6">
    <div class="form-group">
        <label>Fecha_compra</label>
        <input type="date" name="fecha_compra" value="<?php echo $com->fecha_compra; ?>" class="form-control" placeholder="Ingresela fecha de la compra." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Hora_compra </label>
        <input type="time" name="hora_compra" value="<?php echo $com->hora_compra; ?>" class="form-control" placeholder="Ingrese la hora de la compra.." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
        <label> Valor vale</label>
        <input type="number" name="valor_vale" value="<?php echo $com->valor_vale; ?>" class="form-control" placeholder="Ingrese el valor del vale." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Estado</label>
    <select name="estado"  class="form-control" id="Texto3" required>
            <option value="">--seleccione estadoo--</option>
            <option>Pendiente</option>
            <option>Pagado</option>
            <option>Vencido</option>
            <option>Redimido</option>
        </select>
    </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label>Id valera</label>
          <select name="id_valera" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_valeras() as $r){ ?>
                <option value="<?php echo $r->id_valera; ?>" ><?php echo $r->id_valera; ?></option>
              <?Php } ?>
          </select>
        </div>
      </div>

    <div class="col-md-6">
        <div class="form-group">
          <label>Id empleado</label>
          <select name="id_empleado" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_empleados() as $r){ ?>
                <option value="<?php echo $r->id_empleado; ?>" ><?php echo $r->nombre.' '.$r->apellido; ?></option>
              <?Php } ?>
          </select>
        </div>
      </div>


    <hr />

    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=compra" class="btn btn-danger">Volver</a>
    </div>
</form>