<?php
require_once __DIR__ . '/showpage.php';

$identyfikatorProjektu = 'sklep-demo';

$blad = null;
$kodBledu = null;
$wybranaPodstrona = null;
$menuPodstrony = [];

try {
    require_once __DIR__ . '/cfg.php';
} catch (PDOException $e) {
    error_log($e->getMessage());

    $kodBledu = 500;
    $blad = 'Wystąpił błąd serwera. Spróbuj ponownie później.';
}

$idp = $_GET['idp'] ?? 'glowna';

if ($idp === '') {
    $idp = 'glowna';
}

if ($kodBledu !== 500) {
    try {
        if (
            !is_string($idp) ||
            !preg_match('/^[a-z0-9-]{1,20}$/', $idp)
        ) {
            $kodBledu = 404;
            $blad = 'Błąd 404 — nie znaleziono podstrony.';
        } else {
            $wybranaPodstrona = PokazPodstrone($pdo, $idp);

            if ($wybranaPodstrona === null) {
                $kodBledu = 404;
                $blad = 'Błąd 404 — nie znaleziono podstrony.';
            }
        }

        $sqlMenu = "SELECT alias, page_title
                    FROM page_list
                    WHERE status = 1
                    ORDER BY id";

        $stmtMenu = $pdo->query($sqlMenu);
        $menuPodstrony = $stmtMenu->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        error_log($e->getMessage());

        $kodBledu = 500;
        $blad = 'Wystąpił błąd serwera. Spróbuj ponownie później.';
        $wybranaPodstrona = null;
        $menuPodstrony = [];
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

    <title>RTV AGD — <?= htmlspecialchars($wybranaPodstrona['page_title'] ?? 'Błąd', ENT_QUOTES, 'UTF-8') ?></title>

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
        <?php foreach ($menuPodstrony as $danePodstrony): ?>
            <li>
                <a href="index.php?idp=<?= htmlspecialchars($danePodstrony['alias'], ENT_QUOTES, 'UTF-8') ?>"
                    <?= $idp === $danePodstrony['alias'] ? 'aria-current="page"' : '' ?>>
                    <?= htmlspecialchars($danePodstrony['page_title'], ENT_QUOTES, 'UTF-8') ?>
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

            <?= $wybranaPodstrona['page_content'] ?>

        <?php endif; ?>
</main>

<footer>
    <p>WWW — projekt: <?php echo $identyfikatorProjektu; ?> | wersja v1.5</p>
</footer>

</body>
</html>
