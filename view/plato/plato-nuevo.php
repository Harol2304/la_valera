<h3 class="page-header">
    Nuevo Registro
</h3>

<ol class="breadcrumb">
  <li><a href="?c=plato">Plato</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-plato" action="?c=plato&a=Guardar" method="post" enctype="multipart/form-data">


<div class="row">
    <div class="col-md-6">
<div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre"  class="form-control" placeholder="Ingrese el nombre del plato." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Ingredientes</label>
        <input type="text" name="ingredientes"  class="form-control" placeholder="Ingrese los ingredientes que lleva el plato." required data-validacion-tipo="requerido|min:100" />
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label>Descricpición</label>
        <input type="text" name="descripcion"  class="form-control" placeholder="Ingrese la descripción del plato." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
<div class="form-group">
        <label>precio</label>
        <input type="float" name="precio"  class="form-control" placeholder="Ingrese lel precio del plato." required data-validacion-tipo="requerido|min:10" />
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
 
        <div class="col-md-6">
    <div class="form-group">
        <label>img_plato </label>
        <input type="text" name="img_plato"  class="form-control" placeholder="Ingrese la imagen del plato." data-validacion-tipo="requerido|min:10" />
    </div>
    </div>
    


    
    <hr />
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=plato" class="btn btn-danger">Volver</a>
    </div>
</form>
