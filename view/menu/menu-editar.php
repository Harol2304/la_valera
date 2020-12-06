<h1 class="page-header">
    <?php echo $mnu->id_menu != null ? : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=menu">Menu</a></li>
  <li class="active"><?php echo $mnu->id_menu != null ? : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-menu" action="?c=Menu&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_menu" value="<?php echo $mnu->id_menu; ?>" />

    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label>Menú</label>
        <input type="number" name="id_menu" value="<?php echo $mnu->id_menu; ?>" class="form-control" placeholder="Ingrese la categoria del menú." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

      <div class="col-md-6">
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $mnu->categoria; ?>" class="form-control" placeholder="Ingrese la categoria del menú." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label>gerente</label>
          <select name="id_gerente" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_gerentes() as $r){ ?>
                <option value="<?php echo $r->id_gerente; ?>" ><?php echo $r->nombre.' '.$r->apellido; ?></option>
              <?Php } ?>
          </select>
        </div>
      </div>

      


    <hr />

    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=menu" class="btn btn-danger">Volver</a>
    </div>
</form>


