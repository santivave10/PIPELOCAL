<?php

require 'database.php';
$mensaje = '';

//agregar informacion BD

if(!empty($_POST['email']) && !empty($_POST['contrasena']) && !empty($_POST['nombre'])){
  $sql = "INSERT INTO usuarios (email, contrasena, nombre) VALUES (:email,:contrasena,:nombre);";
  $stmt = $conexion->prepare($sql);
  $stmt->bindparam(':email',$_POST['email']); 
  $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
  $stmt->bindparam(':contrasena', $contrasena);
  $stmt->bindparam(':nombre',$_POST['nombre']);
  if($stmt->execute()){
    $mensaje = "Su usuario ha sido registrado, Redireccionando...";
    header("refresh:3;url= login.php");
  }else{
    $mensaje = "Lo sentimos, no se ha logrado registrar el usuario";
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>PIPE | Registro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="shortcut icon" href="assets/imgs/logopipe.png">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login-registro.css">
    <style>
    .mensaje{
        color: black;
    }
</style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"><img src="assets/imgs/registro.jpg" width="85%"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta</h1>
                            </div>
                            <form action="registro.php" method="post" class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="email" placeholder="Correo electrónico" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        name="contrasena" id="exampleInputPassword" placeholder="Contraseña" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        name="nombre" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <input type="submit" value="Registrarse" class="btn btn-primary btn-user btn-block">
                                <a href="index.php" class="btn btn-primary btn-user btn-block volver">Volver</a>
                                </br>
                                <?php if(!empty($mensaje)):?>
                                    <p class="mensaje"><?= $mensaje?></p>
                                <?php endif; ?>
                                <br>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>