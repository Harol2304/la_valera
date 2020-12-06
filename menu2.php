<?php 
session_start();
//validar si hay datos
if(!isset($_SESSION['id'])){
    header('location: index.php?c=login');
}
//$_session contiene la info de los usuario - arreglo
$usu = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:03:18 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Costic Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets1/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets1/css/slick.css" rel="stylesheet">
  <link href="assets1/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="assets1/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  
    <!-- Logo -->
    
     
      <!-- /Apps -->
    
  <!-- Sidebar Right -->
  
  <!-- Main Content -->
  <main class="ejemplo">
    <!-- Navigation Bar -->
  <!-- Notes Modal -->

  <div class="ejemplo">
    <img src="./img/lavalerablanco.png" href="menu2.php" align="left" >
    
  
    <input class="clase20" href="index.php?c=Menu&a=consul" type="text" name="caja_busqueda" id="caja_busqueda"></input> <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>

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

  </div>
</main>

<main class="body-content">
<container>
  <div></div>
  </div>

      <nav class="navbar ms-navbar">
        <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          
        </div>
        <div>
          <hr>
          <hr>
          <hr>
        </div>


        <?php if($usu->rol == "gerente" || $usu->rol == "cliente") { ?>
        <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>
            <li><svg svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-grid-3x3-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
                </svg>          
                <a href="index.php?c=menu"> Menú.</a>
            </li>
          </ul> 
        </div>
        <?php } ?>

        <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>
            <li> <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-sun" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z"/>
                <path fill-rule="evenodd" d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z"/>
                </svg><a href="index.php?c=plato"> Plato .</a>
            </li>
          </ul>  
        </div>

        <?php if($usu->rol == "gerente") { ?>
        <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>

            <li><svg width="1.5em" height="1.5em"viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg> <a href="index.php?c=empleado"> Empleados.</a>
            </li>
          </ul> 
        </div>
        <?php } ?>

        <?php if( $usu->rol == "empleado"   || $usu->rol == "cliente") { ?>
        <div clas s="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <ul>
            <li> <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg><a href="index.php?c=pedido"> Pedido.</a>
            </li>
          </ul> 
        </div>
        <?php } ?>

        
        <?php if($usu->rol == "empleado") { ?>
          <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
            <ul>
              <li><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                </svg> <a href="index.php?c=valera">valera.</a>
              </li>
            </ul> 
          </div>
        <?php } ?>

        <?php if( $usu->rol == "empleado") { ?>
          <div class="fa-barcode" class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
            <ul>
              <li><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                </svg> <a href="index.php?c=compra">Vales.</a>
              </li>
            </ul> 
          </div>
        <?php } ?>


       

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

      
      <div class="ms-content-wrapper" aling-items: center justify-content: center>
        <div class="row">
  
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons"></i>Inicio.</a></li>
                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                
              </ol>
            </nav>
  
            <div class="alert alert-success" role="alert">
              <strong></strong> Bienvenido a la valera.
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>Carne asada</h6>
              </div>
              <div class="ms-panel-body">
                <div class="ms-cropper-container">
                  <img id="zoom-disabled" src="./assets1/img/costic/add-product-2.jpg" alt="cropper">
                </div>
              </div>
            </div>
          </div>
      
      

  
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="row">
              
                <div class="ms-panel">
                  <div class="ms-panel-header">
                    <h6>Productos </h6>
                  </div>
                  <div class="ms-panel-body">
                    <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets1/img/costic/add-product-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets1/img/costic/add-product-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets1/img/costic/add-product-3.jpg" alt="Third slide">
                        </div>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#imagesSlider" data-slide-to="0" class="active"> <img class="d-block w-100" src="assets1/img/costic/add-product-1.jpg" alt="First slide"></li>
                        <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100" src="assets1/img/costic/add-product-2.jpg" alt="Second slide"></li>
                        <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100" src="assets1/img/costic/add-product-3.jpg" alt="Third slide"></li>
                      </ol>
                    </div>
                  </div>
                  
                     
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
  
  
    </main>

      

      

        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>New Resturant Listings</h6>

            </div>
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets1/img/costic/customer-1.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>Hunger House </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Sales</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Details</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Remove</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets1/img/costic/food-1.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets1/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>Food Lounge</h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Sales</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Details</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Remove</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets1/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets1/img/costic/customer-6.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>Delizious </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Sales</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Details</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Remove</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets1/img/costic/food-3.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </div>
  </main>
  <!-- MODALS -->
  <!-- Quick bar -->
  

    <!-- Quick bar Content -->
   
<!-- Global Required Scripts Start -->
<script src="assets1/js/jquery-3.3.1.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/js/perfect-scrollbar.js">
</script>
<script src="assets1/js/jquery-ui.min.js">
</script>
<!-- Global Required Scripts End -->
<!-- Page Specific Scripts Start -->

<script src="assets1/js/Chart.bundle.min.js">
</script>
<script src="assets1/js/widgets.js"> </script>
<script src="assets1/js/clients.js"> </script>
<script src="assets1/js/Chart.Financial.js"> </script>
<script src="assets1/js/d3.v3.min.js">
</script>
<script src="assets1/js/topojson.v1.min.js">
</script>
<script src="assets1/js/datatables.min.js">
</script>
<script src="assets1/js/data-tables.js">
</script>
<!-- Page Specific Scripts Finish -->
<!-- Costic core JavaScript -->
<script src="assets1/js/framework.js"></script>
<!-- Settings -->
<script src="assets1/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:05:48 GMT -->
</html>
