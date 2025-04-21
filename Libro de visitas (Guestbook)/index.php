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
            if (file_exists($path)) {
                $lines = file($path);
                foreach($lines as $line) {
                    echo nl2br(htmlspecialchars($line)) . "<br>";
                }
            } else {
                echo "Aun no hay mensajes";
            }
        ?>
    </div>
</body>
</html>