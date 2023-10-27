    <?php
    // Recibe los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['Email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];
    // Configura los datos del correo electrónico
    $destinatario = 'somospipecol@gmail.com'; //Aquí debes sustituir tu@email.com por tu email
    $asunto = "$asunto";
    $cuerpo = "Nombre: $nombre\nMensaje: \n$mensaje";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    // Envía el correo electrónico
    mail($destinatario, $asunto, $cuerpo, $headers);
    // Redirige al usuario a una página de confirmación
    header('Location: confirmacion.html'); // confirmacion.html debe existir
    ?>