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
?>