<h1 class="page-header">
    <?php echo $cli->nombre != null ?  : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Cliente</a></li>
  <li class="active"><?php echo $cli->id_cliente != null ? $cli->apellido : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Cliente&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_cliente" value="<?php echo $cli->id_cliente; ?>" />
    
   
     
    <div class="row">
    <div class="form-group">
        <label>Cliente</label>
        <input type="number" name="id_cliente" value="<?php echo $cli->id_cliente; ?>" class="form-control" placeholder="Ingrese la identificación del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
      <label>Nombre</label>
        <input  type="text" name="nombre" value="<?php echo $cli->nombre; ?>" class="form-control" placeholder="Ingrese el nombre del cliente." required data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $cli->apellido; ?>" class="form-control" placeholder="Ingrese el apellido del cliente." required data-validacion-tipo="requerido|min:100" />
    </div>


    <div class="form-group">
        <label>Identificacion</label>
        <input type="number" name="identificacion" value="<?php echo $cli->identificacion; ?>" class="form-control" placeholder="Ingrese la identificación del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Dirección </label>
        <input type="text" name="direccion" value="<?php echo $cli->direccion; ?>" class="form-control" placeholder="Ingrese la dirección del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>

     <div class="form-group">
        <label>Telefono </label>
        <input type="number" name="telefono" value="<?php echo $cli->telefono; ?>" class="form-control" placeholder="Ingrese el teléfono del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Correo electronico</label>
        <input type="text" name="correo_electronico" value="<?php echo $cli->correo_electronico; ?>" class="form-control" placeholder="Ingrese el correo electronico del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>

     <div class="form-group">
        <label>Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $cli->fecha_nacimiento; ?>" class="form-control" placeholder="Ingrese la fecha de nacimiento del cliente." required data-validacion-tipo="requerido|min:10" />
    </div>


   


    <hr />
    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=cliente" class="btn btn-danger">Volver</a>
    </div>
</form>


