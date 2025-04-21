<?php
$name = "Helger";
$age = 41;
$isDev = true;
$newAge = $age + '1';
$concatAge = $age . '1';

$output = "Hola $name";
$output .= ", con una edad de $age";

$isOld = $age > 40;
if ($isOld) {
    echo "<h2>Eres viejo, lo siento </h2>";
}else if ($isDev){
    echo "<h2>No  eres viejo, pero eres Dev. Estas jodido </h2>";
}else {
    echo "<h2>Eres joven, felicidades </h2>";
}

define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png')
?>

<?php
$bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
$bestLanguages[3] = "Java";
$bestLanguages[] = "TypeScript";

$persons = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["PHP", "Python", "JavaScript"]
];

$persons["name"] = "Helger";
$persons["languages"][] = "Java"

?>
<ul>
    // key -> Indice de cada elemento.
    <?php foreach ($bestLanguages as $key => $language) :?>
        <li> <?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>



<h1>
    <?= $output?>
</h1>
<img src="<?= LOGO_URL?>" width="200">

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        font-family: cursive;
    }
</style>