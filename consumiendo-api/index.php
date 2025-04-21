<?php 
declare(strict_types=1); // A nivel de archivo y arriba de todo
const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url): array 
{
    $result = file_get_contents($url); // Si solo quieres hacer un GET a una API.
    $data = json_decode($result, true);
    return $data;
}

function get_until_message (int $days): string
{
    return match (true) {
        $days === 0 => "Hoy se estrena 🥳",
        $days === 1 => "Mañana se estrena 🚀",
        $days < 7   => "Este semana se estrena 🤭",
        $days < 30  => "Este mes se estrena 📅",
        default     => "$days hasta el estreno 📆",
    };
}

$data = get_data(API_URL);
$untilMessage = get_until_message($data['days_until']);
?>

<head>
    <meta charset="utf-8">
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" >
</head>

<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>"
         width="300" 
         alt="Poster de <?= $data["title"]; ?>"
         style="border-radius: 19px;">
    </section>
    <hgroup>
        <h3><?= $data["title"] ?> - <?= $untilMessage ?> </h3>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>La siguiente pelicula es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>
</main>

<style>

    body {
        display: grid;
        place-content: center;
        font-family: cursive;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    img {
        box-shadow: 0 0 8px rgba(255, 255, 255, 0.7);
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>