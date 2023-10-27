<?php

require 'database.php';
session_start();
$mensaje = "";

if(isset($_SESSION['user__id'])){
    header('location: /PIPE');
}

//validar que la persona esté registrada

if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    $conexion = new PDO("mysql:host=localhost;dbname=PIPE;charset=utf8", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $conexion->prepare("SELECT id, email, contrasena FROM usuarios WHERE email = :email");
    $consulta->bindParam(':email', $_POST['email']);
    $consulta->execute();
    $resultados = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($resultados !== false && password_verify($_POST['contrasena'], $resultados['contrasena'])) {
        $_SESSION['user_id'] = $resultados['id'];
        header('location: admin/appy.php');
        exit();
    } else {
        $mensaje = "Lo sentimos, las credenciales ingresadas son incorrectas";
        header("refresh:5;url= login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PIPE | Iniciar sesión</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login-registro.css">
    <link rel="shortcut icon" href="assets/imgs/logopipe.png">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"> <img src="assets/imgs/login.jpg" width="90%"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                                    </div>
                                    <form action="login.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                            name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="contrasena" id="exampleInputPassword" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Ingresar" class="btn btn-primary btn-user btn-block volver">
                                        <a href="index.php" class="btn btn-primary btn-user btn-block">Volver</a>
                                        <br>
                                        <?php if(!empty($mensaje)):?>
                                            <p class="mensaje"><?= $mensaje?></p>
                                        <?php endif; ?>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="admin/forgot-password.html">Olvidé mi contraseña</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="registro.php">¿No tienes una cuenta? ¡Crea una!</a>
                                    </div>
                                </div>
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