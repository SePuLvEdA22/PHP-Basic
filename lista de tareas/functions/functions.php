<?php

function sanitizeInput ($dataInput)
{
    $dataInput = trim($dataInput);
    $dataInput = stripslashes($dataInput);
    $dataInput = htmlspecialchars($dataInput);
    return $dataInput;
}
function read_data ()
{
    $path = "data/tareas.txt";
    if (file_exists($path)) {
        $lines = file($path);

        foreach(array_reverse($lines) as $line) {
            echo nl2br(htmlspecialchars($line));
        }
    } else {
        echo "Aun no hay tareas";
    }
}