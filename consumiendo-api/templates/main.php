<main>
    <section>
        <img src="<?= $poster_url; ?>" width="300" 
         alt="Poster de <?= $title; ?>"
         style="border-radius: 19px;">
    </section>

    <hgroup>
        <h3><?= $title; ?> - <?= $until_message ?> </h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>La siguiente pelicula es: <?= $following_production ?></p>
    </hgroup>
</main>