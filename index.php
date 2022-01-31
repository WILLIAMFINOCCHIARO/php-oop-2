<?php
require __DIR__ . '/classes/Movie.php';

$films = [
    new Movie("Quasi Amici", "Commedia", "François Cluzet e Omar Sy", "Olivier Nakache e Éric Toledano", 112, "2011", 10),

    new Movie("Blow", "Biografico drammatico", "Johnny Depp e Penelope Cruz", "Ted Demme", 124, "2001", 8)
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
    <h1>Film</h1>
    <?php foreach ($films as $film) { ?>
        <div>
            <h2><?php echo $film->getTitolo() ?></h2>
            <ul>
                <li><strong>Genere:</strong> <?php echo $film->getGenere() ?></li>
                <li><strong>Attori:</strong> <?php echo $film->getAttori() ?></li>
                <li><strong>Regista:</strong> <?php echo $film->getRegista() ?></li>
                <li><strong>Durata:</strong> <?php echo $film->getDurata() ?></li>
                <li><strong>Anno:</strong> <?php echo $film->getAnno() ?></li>
                <li><strong>Prezzo:</strong> <?php echo $film->getPrezzo() ?>&euro;</li>
            </ul>
        </div>
    <?php } ?>
</body>

</html>