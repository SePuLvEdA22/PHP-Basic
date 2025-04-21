<?php
function sanitizeInput($data) {
    $data = trim($data); // Elimina espacios en blanco
    $data = stripslashes($data); // elimina slashes \
    $data = htmlspecialchars($data); // evitima HTML o JS malicioso
    return $data;
}

function saveMessages($name, $message) {
    $date = date('Y-m-d H:i:s');
    // Array asociativo
    $entry = [
        "date" => $date,
        "name" => $name,
        "message" => $message,
    ];

    $file = 'data/messages.json'; // Define la ruta del archivo donde se guardaran los mensajes.
    $message = [];

    /*
    Verifica si el archivo ya existe. Si existe, lee su contenido con file_get_content(), lo convierte de formato
    json a un array PHP utilizando json_decode() (el parametro true asegura que devuelva un array asociativo) y 
    asgina el resultado a $message.
    */
    if (file_exists($file)) {
        $message = json_decode(file_get_contents($file), true);
    }

    // Aniade el nuevo mensaje almacenado en entry al final del array $message.
    $message[] = $entry;

    /*
    Guarda el array actualizado de mensajes en el archivo. Primero convierte el array a formato JSON con 
    json_encode() (Usando la opcion JSON_PRETTY_PRINT para formatear el JSON de manera legible), y luego escribe el 
    resultado en el archivo especificado. 
    */
    file_put_contents($file, json_decode($message, JSON_PRETTY_PRINT));
}