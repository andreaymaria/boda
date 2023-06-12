<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $acompanyantes = $_POST["acompanyantes"];
    $arribada = $_POST["arribada"];
    $alergias = $_POST["alergias"];

    // Configurar el correo electrónico
    $destinatario = "lluc.kaicecn@example.com";
    $asunto = "Formulario de contacto";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellido: $apellido\n";
    $mensaje .= "Acompanyantes: $acompanyantes\n";
    $mensaje .= "Arribada: $arribada\n";
    $mensaje .= "Alergias: $alergias\n";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirigir al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
}
?>

