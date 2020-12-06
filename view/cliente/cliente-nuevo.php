<h3 class="page-header">
    Bienvenido a la valera.
</h3>
 
<ol class="breadcrumb">
  <li><a href="?c=Cliente">Cliente</a></li>
  <li class="active">Nuevo cliente</li>
</ol>

<form id="frm-cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">

<div class="row">
    

    <div class="col-md-6">
    <div class="form-group">
      <label>Nombre</label>
        <input  type="text" name="nombre"  class="form-control" placeholder="Ingrese su nombre." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido"  class="form-control" placeholder="Ingrese su apellido." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Identificacion</label>
        <input type="number" name="identificacion" value="<?php echo $cli->identificacion; ?>" class="form-control" placeholder="Ingrese su identificación." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Dirección </label>
        <input type="text" name="direccion"  class="form-control" placeholder="Ingrese su direeción." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Telefono </label>
        <input type="number" name="telefono" value="<?php echo $cli->telefono; ?>" class="form-control" placeholder="Ingrese su número de telefono." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Correo electronico</label>
        <input type="email" name="correo_electronico"  class="form-control" placeholder="Ingrese su correo electronico." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $cli->fecha_nacimiento; ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    


    <hr />

    
    <div class="text-right">
     <button class="btn btn-success" >Registrarse.</button>     .
    </div>
</form>