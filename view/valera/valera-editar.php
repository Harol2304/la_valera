<h1 class="page-header">
    <?php echo $vlr->id_valera != null ? $vlr->plato : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=valera">Valera</a></li>
  <li class="active"><?php echo $vlr->id_valera != null ? $vlr->plato : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-valera" action="?c=Valera&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_valera" value="<?php echo $vlr->id_valera; ?>" />

    <div class="form-group">
        <label>plato</label>
        <select name="id_plato" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_platos() as $r){ ?>
                <option value="<?php echo $r->id_plato; ?>" <?php echo($r->id_plato == $vlr->id_plato) ? 'selected' : ''; ?> ><?php echo $r->nombre ?></option>
            <?Php } ?>
        </select>
    </div>

    <div class="form-group">
        <label>pedido</label>
        <select name="id_pedido" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_pedidos() as $r){ ?>
                <option value="<?php echo $r->id_pedido; ?>" ><?php echo ' Pedido: ' .$r->id_pedido.' del cliente: '.$r->id_cliente; ?></option>
            <?Php } ?>
        </select>
    </div>


    <div class="form-group">
        <label>Cantidad de platos</label>
        <input type="number" name="cantidad_platos" value="<?php echo $vlr->cantidad_platos; ?>" class="form-control" placeholder="Ingrese la cantidad de vales." required />
    </div>

    <div class="form-group">
        <label>Pago en efectivo</label>
        <input type="text" name="efectivo" value="<?php echo $vlr->efectivo; ?>" class="form-control" placeholder="Si no tiene vales, ingrese el pago en efectivo" />
    </div>

    <div class="form-group">
        <label>Pago en val</label>
        <select name="id_vale" class="form-control" required>
            <option value="">--Seleccionar--</option>
            <?php foreach($this->model->Listar_vales() as $r){ ?>
                <option value="<?php echo $r->id_vale; ?>" <?php echo($r->id_vale == $vlr->id_vale) ? 'selected' : ''; ?> ><?php echo 'Cliente: '.$r->nom_cliente.' '.$r->ape_cliente.'. Cantidad de vales: '.$r->cantidad; ?></option>
            <?Php } ?>
        </select>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option value="En proceso">En proceso</option>
            <option value="Cancelado">Cancelado</option>
        </select>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=valera" class="btn btn-danger">Volver</a>
    </div>
</form>


