<?php
$identyfikatorProjektu = 'sklep-demo';

$podstrony = [
    'glowna' => [
        'tytul' => 'Strona główna',
        'plik' => __DIR__ . '/html/glowna.html'
    ],
    'produkt' => [
        'tytul' => 'Produkt',
        'plik' => __DIR__ . '/html/produkt.html'
    ],
    'kontakt' => [
        'tytul' => 'Kontakt',
        'plik' => __DIR__ . '/html/kontakt.html'
    ],
    'filmy' => [
        'tytul' => 'Filmy',
        'plik' => __DIR__ . '/html/filmy.html'
    ]
];

$idp = $_GET['idp'] ?? 'glowna';

if ($idp === '') {
    $idp = 'glowna';
}

$blad = null;
$kodBledu = null;
$wybranaPodstrona = null;
$plikPodstrony = null;

if (!is_string($idp) || !isset($podstrony[$idp])) {
    $kodBledu = 404;
    $blad = 'Błąd 404 — nie znaleziono podstrony.';
} else {
    $wybranaPodstrona = $podstrony[$idp];
    $plikPodstrony = $wybranaPodstrona['plik'];

    if (!is_file($plikPodstrony) || !is_readable($plikPodstrony)) {
        $kodBledu = 500;
        $blad = 'Błąd 500 — plik podstrony jest niedostępny.';
    }
}

if ($kodBledu !== null) {
    http_response_code($kodBledu);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RTV AGD — <?= htmlspecialchars($wybranaPodstrona['tytul'] ?? 'Błąd', ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="stylesheet" href="css/style.css">

    <script src="vendor/jquery-4.0.0.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/lab3.js" defer></script>
</head>

<body>

<header>
    <h1>RTV AGD</h1>

    <button type="button" id="theme-toggle" aria-pressed="false">
        Tryb ciemny
    </button>

    <p>Sprzęt elektroniczny i urządzenia do Twojego domu</p>
</header>

<nav>
    <ul>
        <?php foreach ($podstrony as $identyfikator => $danePodstrony): ?>
            <li>
                <a href="index.php?idp=<?= htmlspecialchars($identyfikator, ENT_QUOTES, 'UTF-8') ?>"
                   <?= $idp === $identyfikator ? 'aria-current="page"' : '' ?>>
                    <?= htmlspecialchars($danePodstrony['tytul'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            </li>
        <?php endforeach; ?>

        <li>
            <a href="lab4.php">Katalog PHP</a>
        </li>
    </ul>
</nav>

<main>
    <?php if ($blad !== null): ?>

        <section>
            <h2><?= htmlspecialchars($blad, ENT_QUOTES, 'UTF-8') ?></h2>

            <?php if ($kodBledu === 404): ?>
                <p>
                    <a href="index.php">Wróć na stronę główną</a>
                </p>
            <?php endif; ?>
        </section>

    <?php else: ?>

        <?php include $plikPodstrony; ?>

    <?php endif; ?>
</main>

<footer>
    <p>WWW — projekt: <?php echo $identyfikatorProjektu; ?></p>
</footer>

</body>
</html>
