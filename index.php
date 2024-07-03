<?php

//    const NOMBRE = 'Toni';
//    $age = 25;
//
//    define('LOGO', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png');
//
//    $output = "I am ".NOMBRE . " and I'm  " . $age . " years old";
//    $isDev = true;
//    $isOld = $age > 45;
//
//    $outputAge = match (true) {
//        $age < 2 => "Eres un bebe, " . NOMBRE,
//        $age < 10 => "Eres un nene, " . NOMBRE,
//        $age < 20 => "Eres un adolescente, " . NOMBRE,
//        $age < 40 => "Eres un adulto, " . NOMBRE,
//        $age > 60 => "Eres un adulto viejo, " . NOMBRE,
//        default => "Hueles mas a madera que a fruta, " . NOMBRE,
//    };
//
//    $bestLanguages = ["PHP", "Javascript", "Python", 1, 5];
//    $bestLanguages[] = "Java"; // Agrega un elemento al final del array sin la necesidad de recurrir a un metodo.
//    $bestLanguages[2] = "C#"; // Agrega un elemento al indice del array seleccionado sin la necesidad de recurrir a un metodo.

const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <title>The Next Marvel Movie</title>
    <meta name="description" content="The Next Marvel Movie" />
    <meta name="viewport" content="width=device=width, initial-scale=1.0" />
    <!-- Centered viewport -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
        <img src="<?= htmlspecialchars($data["poster_url"]); ?>" width="300" alt="Poster" class="center-image"
             style="border-radius: 16px"
        />
    </section>

    <hgroup>
        <h3><?= htmlspecialchars($data["title"]); ?> premieres in <?= htmlspecialchars($data["days_until"]); ?> days</h3>
        <p>Release date: <?= htmlspecialchars($data["release_date"]); ?></p>
        <p>The next movie is: <?= htmlspecialchars($data["following_production"]["title"]); ?></p>
    </hgroup>
</main>

<!--<ul>-->
<!--    --><?php //foreach ($bestLanguages as $key => $language) : ?>
<!--        <li>--><?php //= $key . " - " . $language ?><!--</li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!---->
<!--<img src="--><?php //= LOGO ?><!--" alt="PHP" width="200">-->
<!---->
<!--<h1>-->
<?php //=
//$output;
//?>
<!--</h1>-->
<!---->
<?php //if ($isOld) :?>
<!--    <h2>Eres viejo, lo siento</h2>-->
<?php //elseif ($isDev) : ?>
<!--    <h2>No eres viejo, pero eres dev. Estas jodido</h2>-->
<?php //else : ?>
<!--    <h2>Eres joven, felicidades</h2>-->
<?php //endif;?>
<!---->
<!--<h2>-->
<?php //= $outputAge ?>
<!--</h2>-->

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        margin: 0;
        height: 100vh;
    }

    .center-image {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
