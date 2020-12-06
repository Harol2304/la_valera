<h3 class="page-header">
    Redimir 
</h3>

<ol class="breadcrumb">
  <li><a href="?c=Valera">redimir platos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Id valera</label>
          <input  type="number" name="id_valera" value="<?php echo $ultimo_id; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" readonly />
        </div>
      </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>cantidad_vales</label>
          <input  type="number" name="cantidad_vales" value="<?php echo $val->cantidad_vales; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

    <div class="col-md-6">
        <div class="form-group">
          <label>Cliente</label>
          <select name="id_cliente" class="form-control" required>
            <option value="">--Seleccionar--</option>
              <?php foreach($this->model->Listar_clientes() as $r){ ?>
                <option value="<?php echo $r->id_cliente; ?>" ><?php echo $r->nombre.' '.$r->apellido; ?></option>
              <?Php } ?>
          </select>
        </div>
      </div>
    
   

    <hr />

    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=valera" class="btn btn-danger">Volver</a>
    </div>
</form>
