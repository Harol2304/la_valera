<?php

  $alert = '';
  session_start();
  session_destroy();
  if (!empty($_SESSION['active'])) {
    header('location:./model/database.php');
  }else {
     if (!empty($_POST)) {
      
      if (empty($_POST['correo_electronico']) || empty($_POST['contrasena'])) {
        $alert = 'Ingrese su correo electronico y su contraseña';
   }else {
    require_once "./model/database.php";
    $user = mysqli_real_escape_string($conection,$_POST['correo_electronico']);
     $pass = md5(mysqli_real_escape_string($conection,$_POST['contrasena']));

     $query = mysqli_query($conection,"SELECT * FROM 
      ( SELECT `id_gerente` as 'id', `correo_electronico`,`contrasena` FROM `gerente` 
      UNION SELECT `id_cliente`, `correo_electronico`,`contrasena` FROM `cliente` 
       UNION SELECT `id_empleado`, `correo_electronico`, `contrasena` FROM `empleado` ) 
    `login` WHERE `correo_electronico` = ? and `contrasena` = ?");
      mysqli_close($conection);
      $result = mysqli_num_rows($query);

        
     }
    }
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>

	<title>La valera</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/view/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

       
           <!-- <form  action="?c=Login&a=ingreso" method="post" enctype="multipart/form-data"> -->
               

		<div class="container-login100">
			<div class="wrap-login100">

			
				<form  id="frm-login" action="?c=Login&a=ingreso" method="post" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						<img src="view/login/images/logo_1.png">
					</span>
					
					<div class="wrap-input100 validate-input" >
						<input type="text" class="form-control" name="correo_electronico" data-validate = "Valid email is required: ex@abc.xyz" />
						<span class="label-input100">Email</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input type="password" class="form-control" name="contrasena" data-validate="Contraseña is required"/>
						<span class="label-input100">Contraseña</span>
					</div>

					<div><a href="index.php?c=Login&a=restablecer" ><span>Olvide mi contraseña</span></a></div>
					<hr>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>

					<hr>
						<div>
							<a href="?c=Cliente&a=Nuevo" class="txt1">	Crear cuenta nueva?                     </a>
							
						</div>

				</form>

				<div class="login100-more" style="background-image: url('view/login/images/opcion2.jpg');"></div>
				
			</div>
		
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="view/view/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="view/view/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="view/view/login/vendor/bootstrap/js/popper.js"></script>
	<script src="view/view/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="view/view/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="view/view/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="view/view/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="view/view/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>