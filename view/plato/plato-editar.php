<h1 class="page-header">
    <?php echo $pla->id_plato != null ? $pla->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=plato">plato</a></li>
  <li class="active"><?php echo $pla->id_plato != null ? $pla->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-plato" action="?c=plato&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_plato" value="<?php echo $pla->id_plato; ?>" />

    <div class="row">
<div class="col-md-6">
   <div class="form-group">
        <label>Id plato</label>
        <input type="text" name="id_plato" value="<?php echo $pla->id_plato; ?>" class="form-control" placeholder="Ingrese el nombre del plato." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>
    </div>

    <div class="col-md-6">
<div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $pla->nombre; ?>" class="form-control" placeholder="Ingrese el nombre del plato." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Ingredientes</label>
        <input type="text" name="ingredientes" value="<?php echo $pla->ingredientes; ?>" class="form-control" placeholder="Ingrese los ingredientes que lleva el plato." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Descricpición</label>
        <input type="text" name="descripcion" value="<?php echo $pla->descripcion; ?>" class="form-control" placeholder="Ingrese la descripción del plato." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
<div class="form-group">
        <label>precio</label>
        <input type="float" name="precio" value="<?php echo $pla->precio; ?>" class="form-control" placeholder="Ingrese lel precio del plato." required data-validacion-tipo="requerido|min:10" />
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>img_plato </label>
        <input type="text" name="img_plato" value="<?php echo $pla->img_plato; ?>" class="form-control" placeholder="Ingrese la imagen del plato." data-validacion-tipo="requerido|min:10" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Id menú </label>
        <select name="id_menu" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_menu() as $r){ ?>
                <option value="<?php echo $r->id_menu; ?>"><?php echo $r->categoria; ?></option>
            <?Php } ?>
        </select>
        </div>
        </div>


    <hr />

    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=plato" class="btn btn-danger">Volver</a>
    </div>
</form>


