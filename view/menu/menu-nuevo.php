<h3 class="page-header">
    Nuevo Registro
</h3>

<ol class="breadcrumb">
  <li><a href="?c=Menu">Menu</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-menu" action="?c=Menu&a=Guardar" method="post" enctype="multipart/form-data">


<div class="row">
      <div class="col-md-6">
    <div class="form-group">
        <label>Categoria</label> 
        <input type="text" name="categoria"class="form-control" placeholder="Ingrese la categoria del menú." required data-validacion-tipo="requerido|min:20" />
    </div>
    </div>

    
    <div class="col-md-6">
        <div class="form-group">
          <label>Gerente</label>
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
