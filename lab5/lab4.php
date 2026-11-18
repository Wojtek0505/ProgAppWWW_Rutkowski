<?php
session_start();

require_once __DIR__ . '/includes/produkty.php';

$dozwoloneKategorie = ['wszystkie', 'ksiazki', 'akcesoria'];
$wybranaKategoria = 'wszystkie';
$bladFiltrowania = '';

if (isset($_GET['kategoria'])) {
    if (
        is_string($_GET['kategoria']) &&
        in_array($_GET['kategoria'], $dozwoloneKategorie, true)
    ) {
        $wybranaKategoria = $_GET['kategoria'];
    } else {
        $bladFiltrowania = 'Nieprawidłowa kategoria. Wyświetlono wszystkie produkty.';
    }
}

$bladFormularza = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $poprawneDane = true;

    if (
        !isset($_POST['produkt'], $_POST['ilosc']) ||
        !is_string($_POST['produkt']) ||
        !is_string($_POST['ilosc'])
    ) {
        $bladFormularza = 'Nie przesłano prawidłowych danych formularza.';
        $poprawneDane = false;
    }

    if ($poprawneDane) {
        $idProduktu = filter_var($_POST['produkt'], FILTER_VALIDATE_INT);
        $ilosc = filter_var($_POST['ilosc'], FILTER_VALIDATE_INT);

        if ($idProduktu === false || $ilosc === false) {
            $bladFormularza = 'Produkt i liczba sztuk muszą być liczbami całkowitymi.';
            $poprawneDane = false;
        }
    }

    if ($poprawneDane) {
        $wybranyProdukt = null;

        $i = 0;
        while ($i < count($produkty)) {
            if ($produkty[$i]['id'] === $idProduktu) {
                $wybranyProdukt = $produkty[$i];
                break;
            }

            $i++;
        }

        if ($wybranyProdukt === null) {
            $bladFormularza = 'Wybrany produkt nie istnieje.';
            $poprawneDane = false;
        } elseif ($ilosc < 1 || $ilosc > 5) {
            $bladFormularza = 'Liczba sztuk musi wynosić od 1 do 5.';
            $poprawneDane = false;
        } elseif ($ilosc > $wybranyProdukt['stan']) {
            $bladFormularza = 'Wybrana liczba sztuk przekracza stan magazynowy.';
            $poprawneDane = false;
        }
    }

    if ($poprawneDane) {
        $_SESSION['ostatni_wybor'] = [
            'produkt' => $idProduktu,
            'ilosc' => $ilosc
        ];

        header('Location: lab4.php', true, 303);
        exit;
    } else {
        http_response_code(400);
    }
}

$ostatniWybor = null;

if (isset($_SESSION['ostatni_wybor'])) {
    $i = 0;

    while ($i < count($produkty)) {
        if ($produkty[$i]['id'] === $_SESSION['ostatni_wybor']['produkt']) {
            $ostatniWybor = [
                'nazwa' => $produkty[$i]['nazwa'],
                'ilosc' => $_SESSION['ostatni_wybor']['ilosc']
            ];
            break;
        }

        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog PHP | RTV AGD</title>
</head>
<body>

<?php include __DIR__ . '/includes/naglowek.php'; ?>

<main>
    <h2>Katalog produktów PHP</h2>

    <p>Strona korzysta z danych zapisanych w osobnym pliku PHP.</p>

    <h3>Filtr kategorii</h3>

    <form action="lab4.php" method="get">
        <label for="kategoria">Wybierz kategorię:</label>

        <select name="kategoria" id="kategoria">
            <option value="wszystkie"
                <?= $wybranaKategoria === 'wszystkie' ? 'selected' : '' ?>>
                Wszystkie
            </option>

            <option value="ksiazki"
                <?= $wybranaKategoria === 'ksiazki' ? 'selected' : '' ?>>
                Książki
            </option>

            <option value="akcesoria"
                <?= $wybranaKategoria === 'akcesoria' ? 'selected' : '' ?>>
                Akcesoria
            </option>
        </select>

        <button type="submit">Filtruj</button>
    </form>

    <?php if ($bladFiltrowania !== ''): ?>
        <p role="alert">
            <?= htmlspecialchars($bladFiltrowania, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php endif; ?>

    <h3>Lista produktów</h3>

    <?php
    $i = 0;
    $liczbaProduktow = count($produkty);

    while ($i < $liczbaProduktow) {
        $produkt = $produkty[$i];

        if (
            $wybranaKategoria === 'wszystkie' ||
            $produkt['kategoria'] === $wybranaKategoria
        ) {

            if ($produkt['stan'] === 0) {
                $dostepnosc = 'Niedostępny';
            } elseif ($produkt['stan'] <= 5) {
                $dostepnosc = 'Niski stan';
            } else {
                $dostepnosc = 'Dostępny';
            }

            switch ($produkt['kategoria']) {
                case 'ksiazki':
                    $kategoria = 'Książki';
                    break;

                case 'akcesoria':
                    $kategoria = 'Akcesoria';
                    break;

                default:
                    $kategoria = 'Inna kategoria';
                    break;
            }
            ?>

            <article>
                <h4><?= htmlspecialchars($produkt['nazwa'], ENT_QUOTES, 'UTF-8') ?></h4>
                <p>Kategoria: <?= $kategoria ?></p>
                <p>Stan magazynowy: <?= $produkt['stan'] ?></p>
                <p>Dostępność: <?= $dostepnosc ?></p>
            </article>

            <?php
        }

        $i++;
    }
    ?>

    <h3>Wybór produktu</h3>

    <form action="lab4.php" method="post">
        <label for="produkt">Wybierz produkt:</label>

        <select name="produkt" id="produkt" required>
            <option value="">Wybierz produkt</option>

            <?php
            $i = 0;

            while ($i < count($produkty)) {
                $produkt = $produkty[$i];
                ?>

                <option value="<?= $produkt['id'] ?>">
                    <?= htmlspecialchars($produkt['nazwa'], ENT_QUOTES, 'UTF-8') ?>
                    (stan: <?= $produkt['stan'] ?>)
                </option>

                <?php
                $i++;
            }
            ?>
        </select>

        <label for="ilosc">Liczba sztuk:</label>

        <select name="ilosc" id="ilosc" required>
            <option value="">Wybierz ilość</option>

            <?php
            for ($i = 1; $i <= 5; $i++) {
                ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php
            }
            ?>
        </select>

        <button type="submit">Zapisz wybór</button>
    </form>

    <?php if ($bladFormularza !== ''): ?>
        <p role="alert">
            <?= htmlspecialchars($bladFormularza, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php endif; ?>

    <h3>Ostatni zapisany wybór</h3>

    <?php if ($ostatniWybor !== null): ?>
        <p>
            Produkt:
            <?= htmlspecialchars($ostatniWybor['nazwa'], ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Liczba sztuk: <?= $ostatniWybor['ilosc'] ?></p>
    <?php else: ?>
        <p>Nie zapisano jeszcze żadnego wyboru.</p>
    <?php endif; ?>

    <p><a href="index.php">Powrót do strony głównej</a></p>
</main>

</body>
</html>

