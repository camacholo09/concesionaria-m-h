<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $modelo = htmlspecialchars($_POST['modelo']);
    $fecha = htmlspecialchars($_POST['fecha']);

    // Simula almacenamiento o envío de correo (aquí podrías conectarte a una base de datos o enviar email)
    echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Cita Agendada</title>";
    echo "<link rel='stylesheet' href='estilo.css'></head><body><header><h1>M&H JDM Motors</h1></header>";
    echo "<section class='formulario'><h2>¡Gracias por agendar tu cita, $nombre!</h2>";
    echo "<p>Te esperamos el <strong>$fecha</strong> para revisar el modelo <strong>$modelo</strong>.</p>";
    echo "<p>Hemos enviado una confirmación a <strong>$correo</strong>.</p></section>";
    echo "<footer><p>&copy; 2025 M&H JDM Motors</p></footer></body></html>";
} else {
    header("Location: index.html");
    exit();
}
?>
