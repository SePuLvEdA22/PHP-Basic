<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Visitas</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>
<body>
    <h1>Deja tu mensaje</h1>
    <div class="container_form">
        <form action="save.php" method="post">
            <label for="">
                <input type="text" placeholder="Nombre:" name="nombre" required>
            </label>
            <br><br>
            <label for="">
                <textarea name="mensaje"  placeholder="Mensaje:" rows="5" cols="40" required></textarea>
            </label>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <h2>Mensajes anteriores:</h2>
    <div class="mensajes_anteriores">
        <?php 
        $path = './data/messages.txt'; 
            // file_exists($path) -> Verifica si el archivo donde guardamos los mensajes ya existe. 
            if (file_exists($path)) { 
                $lines = file($path); // Carga todas las lineas del archivo en un arreglo (cada linea es un mensaje).
                
                //array_reverse() -> Cambia el orden del arreglo para mostrar los mensajes mas recientes primero.
                foreach(array_reverse($lines) as $line) { 
                    // htmlspecialchars($line) -> Evita que alguien inyecte codigo HTML malicioso.
                    // nl2br() -> Convierte los saltos de linea \n en etiquetas <br> para que se vean en el navegador.
                    echo nl2br(htmlspecialchars($line)) . "<hr>";
                }
            } else {
                echo "Aun no hay mensajes";
            }
        ?>
    </div>
</body>
</html>