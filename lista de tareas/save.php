<?php 
require_once './functions/functions.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tarea_agregada = sanitizeInput($_POST['tarea']);

    if ($tarea_agregada) {
        $date = date('Y-m-d H:i:s');

        $entry = "[$date] $tarea_agregada\n";
        $path = 'data/tareas.txt';
        file_put_contents($path, $entry, FILE_APPEND);
    }
}

header('Location: index.php');
exit;
?>