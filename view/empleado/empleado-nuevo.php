<h3 class="page-header">
    Nuevo Registro
</h3>

<ol class="breadcrumb">
  <li><a href="?c=Empleado">Empleado</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

  
<form id="frm-empleado" action="?c=Empleado&a=Guardar"method="post" enctype="multipart/form-data">

<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Nombre</label>
          <input  type="text" name="nombre"  class="form-control" placeholder="Ingrese el nombre del empleado." required data-validacion-tipo="requerido|min:20" />
     </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-group">
          <label>Apellido</label>
          <input  type="text" name="apellido"  class="form-control" placeholder="Ingrese el apellido del empleado." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Telefono</label>
          <input  type="number" name="telefono" value="<?php echo $emp->telefono; ?>" class="form-control" placeholder="Ingrese el numero del telefono." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Dirección</label>
          <input  type="text" name="direccion"  class="form-control" placeholder="Ingrese la dirección del empleado." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      
      <div class="col-md-6">
        <div class="form-group">
          <label>Correo_electronico</label>
          <input  type="email" name="correo_electronico"  class="form-control" placeholder="Ingrese el correo electronico del empleado." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Identificación</label>
          <input  type="number" name="identificacion" value="<?php echo $emp->identificacion; ?>" class="form-control" placeholder="Ingrese el número de identificación del empleado." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Número valera</label>
          <input  type="number" name="id_valera" value="<?php echo $emp->id_valera; ?>" class="form-control" placeholder="Ingrese el id de la valera." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>




    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=empleado" class="btn btn-danger">Volver</a>
    </div>
</form>
