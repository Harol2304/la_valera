<!DOCTYPE html>
<html lang="es">
	<head>
		<title>La valera. </title>

        <meta charset="utf-8" />
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="librerias/css/bootstrap.min.css" />
        <link rel="stylesheet" href="librerias/css/style.css" />
        <link rel="stylesheet" href="librerias/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="librerias/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="librerias/datatables/dataTables.boostrap.css">
	</head>
  <!-- copiar esto -->
  <main class="ejemplo">
    <!-- Navigation Bar -->
  <!-- Notes Modal -->

    <div class="ejemplo">
      <img src="./img/lavalerablanco.png" align="left" >
  <!-- Desplegable para -->
  <div class="dropdown" align="right">
      <a  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      </svg>

      </a>
      <div class="dropdown-menu mt-5" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="?c=Cliente&a=Crud&id_cliente=<?php echo $sesion->id; ?>">Editar perfil</a>
        <a class="dropdown-item" href="index.php?c=login">Salir</a>
      </div>
    </div>

      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
      </svg>

      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
        <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
      </svg>

      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
    
  </main>
  


        <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>
            <li> <a href="index.html"></a>
            </li>
          </ul> 
        </div>
        <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>
            <li> <a href="index.html"></a>
            </li>
          </ul> 
        </div>
      </nav>
    <!-- hasta aqui -->
  <body>
    <div class="container box">
   