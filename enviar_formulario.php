<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Validación simple
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        // Manejar el caso de campos vacíos
        header("Location: error.html"); // Redireccionar a una página de error
        exit();
    }

    // Puedes agregar aquí la lógica para enviar el correo o almacenar la información en una base de datos

    // Ejemplo: enviar un correo
    $destinatario = "johnatan.mora@alu.uclm.es";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpoMensaje = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";
    
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redireccionar a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>
