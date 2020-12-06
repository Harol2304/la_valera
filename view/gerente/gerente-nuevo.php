<h3 class="page-header">
    Nuevo Gerente
</h3>

<ol class="breadcrumb">
  <li><a href="?c=Gerente">Gerente</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-gerente" action="?c=Gerente&a=Guardar" method="post" enctype="multipart/form-data">

<div class="row">
<div class="col-md-6">
   <div class="form-group">
<div class="form-group">
        <label>Id gerente</label>
        <input type="number" name="id_gerente" value="<?php echo $ger->id_gerente; ?>" class="form-control" placeholder="Ingrese el nombre del gerente." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>
    </div>
    

    <div class="col-md-6">
<div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $ger->nombre; ?>" class="form-control" placeholder="Ingrese el nombre del gerente." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $ger->apellido; ?>" class="form-control" placeholder="Ingrese el apellido del gerente." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Telefono </label>
        <input type="number" name="Telefono" value="<?php echo $ger->telefono; ?>" class="form-control" placeholder="Ingrese el teléfono del gerente." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Correo electronico</label>
        <input type="text" name="correo_electronico" value="<?php echo $ger->correo_electronico; ?>" class="form-control" placeholder="Ingrese el correo electronico del gerente." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Identificacion</label>
        <input type="number" name="identificacion" value="<?php echo $ger->identificacion; ?>" class="form-control" placeholder="Ingrese la identificación del gerente." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>
  
    <div class="col-md-6">
    <div class="form-group">
        <label>Contraseña</label>
        <input type="text" name="contrasena" value="<?php echo $ger->contrasena; ?>" class="form-control" placeholder="Ingrese la Contraseña del gerente." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Id Menú</label>
        <input type="number" name="id_menu" value="<?php echo $ger->id_menu; ?>" class="form-control" placeholder="Ingrese el Id del menu." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>


    <hr />

    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=gerente" class="btn btn-danger">Volver</a>
    </div>
</form>
