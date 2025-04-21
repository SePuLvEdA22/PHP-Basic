<?php
require_once './includes/functions.php';
// $_SERVER("REQUEST_METHOD" === "POST") -> Solo ejecuta el codigo si el formulario fue enviado por post.
// trim() -> Elimina espacios al inicio y al final del texto.
/*
htmlspecialchars() -> Protege contra XSS (Cross-Site Scripting). Si alguien intenta escribir <script>,
se mostrara como texto, no como codigo.
*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = sanitizeInput($_POST['nombre']);
    $mensaje = sanitizeInput($_POST['mensaje']);

    // ($nombre && $mensaaje) -> Asegura que no se guarden datos vacios.
    if ($nombre && $mensaje) {
        $date = date('Y-m-d H:i:s'); // Captura la hora actual para saber cuando se publico el mensaje.

        /*
        Crea una cadena de texto que representa un mensaje del libro de visitas, con el formato:
            "[fecha y hora] nombre Dice: mensaje"
        y al final agrega un salto de linea para que cada mensaje se guarde en una linea por separado. 
        */
        $entry = "[$date] $nombre Dice: $mensaje\n";

        // Escribe el nuevo mensaje al final del archivo 'messages.txt'.
        file_put_contents('messages.txt', $entry, FILE_APPEND);
    }
}

/*
Redirige al usuario de vuelta la formulario, para evitar que recargue la pagina y duplique mensajes
*/
header('Location: index.php');
exit; // Termina la ejecucion del script.