INSERT INTO page_list (alias, page_title, page_content, status)
VALUES (
    'glowna',
    'Strona główna',
    '<section aria-labelledby="zegar-naglowek">
    <h2 id="zegar-naglowek">Aktualna data i godzina</h2>

    <p id="clock" aria-live="polite">
        Ładowanie daty i godziny...
    </p>

    <button type="button" id="clock-start">Start</button>
    <button type="button" id="clock-stop">Stop</button>
</section>

<h2>Nasze produkty</h2>
<div>
    <label for="product-search">Szukaj produktu:</label>
    <input
        type="search"
        id="product-search"
        placeholder="Wpisz nazwę produktu..."
    >
    <p id="filter-count" aria-live="polite"></p>
    <p id="filter-empty" hidden>Nie znaleziono produktów.</p>
</div>

<section aria-label="Katalog produktów">
    <article class="karta">
        <h3>Telewizor Samsung UE55U8092HU</h3>
        <a href="index.php?idp=produkt">
            <img src="img/telewizor.webp"
                 alt="Telewizor Samsung UE55U8092HU"
                 width="1500" height="1000">
        </a>
        <p>Telewizor Smart TV 4K.</p>
        <p>Cena: 2 999,00 zł</p>
    </article>

    <article class="karta">
        <h3>Słuchawki JLab GO Lux ANC</h3>
        <img src="img/sluchawki.webp"
             alt="Słuchawki bezprzewodowe JLab GO Lux ANC w kolorze grafitowym"
             width="1100" height="1100">
        <p>Bezprzewodowe słuchawki nauszne z aktywną redukcją hałasu.</p>
        <p>Cena: 169,99 zł</p>
    </article>

    <article class="karta">
        <h3>Termorobot MPM TRM-01</h3>
        <img src="img/termorobot.webp"
             alt="Termorobot kuchenny MPM TRM-01"
             width="1200" height="1704">
        <p>Wielofunkcyjne urządzenie kuchenne.</p>
        <p>Cena: 1 895,00 zł</p>
    </article>
</section>

<section id="lab3-demo">
    <h2>Demonstracja animacji jQuery</h2>

    <div class="animation-container">
        <button type="button" class="animated-box" id="animation-a">
            Animacja A
        </button>

        <button type="button" class="animated-box" id="animation-b">
            Animacja B
        </button>

        <button type="button" class="animated-box" id="animation-c">
            Animacja C
        </button>
    </div>

    <p id="animation-status" role="status">
        Liczba powiększeń: 0
    </p>

    <button type="button" id="animation-reset">
        Resetuj A i C
    </button>

    <div class="server-check">
        <button type="button" id="server-check-button">
            Sprawdź serwer
        </button>

        <p id="server-check-result" role="status">
            Brak sprawdzenia serwera.
        </p>
    </div>
</section>',
    1
);

INSERT INTO page_list (alias, page_title, page_content, status)
VALUES (
    'produkt',
    'Telewizor Samsung UE55U8092HU',
    '<h2>Telewizor Samsung UE55U8092HU</h2>

<img src="img/telewizor.webp"
     alt="Telewizor Samsung UE55U8092HU"
     width="1500" height="1000">

<p>Telewizor Smart TV 4K.</p>
<p>Cena: <strong>2 999,00 zł</strong></p>

<h3>Opis produktu</h3>
<p>Telewizor Samsung UE55U8092HU pozwala oglądać filmy, seriale i programy. Dzięki funkcjom Smart TV umożliwia
    korzystanie z aplikacji internetowych. <strong>Rozdzielczość 4K</strong> zapewnia szczegółowy obraz.</p>

<h3>Najważniejsze cechy</h3>
<ul>
    <li>Rozdzielczość obrazu 4K UHD.</li>
    <li>Funkcje Smart TV i dostęp do aplikacji internetowych.</li>
    <li>Ekran o przekątnej 55 cali.</li>
</ul>

<p><a href="index.php?idp=kontakt">Zapytaj o produkt</a></p>

<table>
    <caption>Parametry techniczne telewizora Samsung UE55U8092HU</caption>
    <thead>
        <tr>
            <th scope="col">Parametr</th>
            <th scope="col">Wartość</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Producent</td>
            <td>Samsung</td>
        </tr>
        <tr>
            <td>Przekątna ekranu</td>
            <td>55 cali</td>
        </tr>
        <tr>
            <td>Rozdzielczość</td>
            <td>4K UHD</td>
        </tr>
    </tbody>
</table>',
    1
);

INSERT INTO page_list (alias, page_title, page_content, status)
VALUES (
    'kontakt',
    'Kontakt',
    '<h2>Kontakt</h2>

<p>
    Masz pytania dotyczące naszych produktów?
    Wypełnij formularz zapytania.
</p>

<p>
    Formularz demonstracyjny. Dane pojawią się w adresie strony;
    zapytanie nie zostanie zapisane ani wysłane e-mailem.
</p>

<form action="index.php" method="get">
    <input type="hidden" name="idp" value="kontakt">

    <label for="email">E-mail (pole obowiązkowe):</label>
    <input type="email" id="email" name="email" required>

    <label for="produkt">Produkt (pole obowiązkowe):</label>
    <select id="produkt" name="produkt" required>
        <option value="">Wybierz produkt</option>
        <option value="telewizor">Telewizor Samsung UE55U8092HU</option>
        <option value="sluchawki">Słuchawki JLab GO Lux ANC</option>
        <option value="termorobot">Termorobot MPM TRM-01</option>
    </select>

    <label for="ilosc">Liczba sztuk (od 1 do 5, pole obowiązkowe):</label>
    <input type="number" id="ilosc" name="ilosc"
           required min="1" max="5" step="1">

    <label for="wiadomosc">
        Wiadomość (od 10 do 500 znaków, pole obowiązkowe):
    </label>
    <textarea id="wiadomosc" name="wiadomosc"
              required minlength="10" maxlength="500"></textarea>

    <button type="submit">Sprawdź zapytanie</button>

    <p id="quote-preview" aria-live="polite">
        Wybierz produkt i liczbę sztuk, aby zobaczyć wycenę.
    </p>

    <p id="form-error" role="alert" hidden></p>

    <section id="form-summary" aria-live="polite" hidden>
        <h3>Podsumowanie zapytania</h3>
        <p id="summary-product"></p>
        <p id="summary-quantity"></p>
        <p id="summary-price"></p>
        <p id="summary-message"></p>
    </section>
</form>',
    1
);

INSERT INTO page_list (alias, page_title, page_content, status)
VALUES (
    'filmy',
    'Filmy o naszych produktach',
    '<section class="filmy">
    <h2>Filmy o naszych produktach</h2>

    <article class="film">
        <h3>Telewizor Samsung Crystal UHD 4K</h3>

        <iframe
            src="https://www.youtube.com/embed/En8ytBnAV1w"
            title="Recenzja telewizora Samsung Crystal UHD 4K"
            width="100%"
            style="aspect-ratio: 16 / 9; min-height: 200px;"
            allowfullscreen>
        </iframe>

        <p>
            <a href="https://www.youtube.com/watch?v=En8ytBnAV1w"
               target="_blank"
               rel="noopener noreferrer">
                Otwórz film na YouTube
            </a>
        </p>
    </article>

    <article class="film">
        <h3>Słuchawki bezprzewodowe JLab GO Lux ANC</h3>

        <iframe
            src="https://www.youtube.com/embed/fWQGaGFR4dU"
            title="Recenzja słuchawek JLab GO Lux ANC"
            width="100%"
            style="aspect-ratio: 16 / 9; min-height: 200px;"
            allowfullscreen>
        </iframe>

        <p>
            <a href="https://www.youtube.com/watch?v=fWQGaGFR4dU"
               target="_blank"
               rel="noopener noreferrer">
                Otwórz film na YouTube
            </a>
        </p>
    </article>

    <article class="film">
        <h3>Robot kuchenny MPM Perfecto TRM-01</h3>

        <iframe
            src="https://www.youtube.com/embed/XAFluJAYUTw"
            title="Prezentacja robota kuchennego MPM Perfecto TRM-01"
            width="100%"
            style="aspect-ratio: 16 / 9; min-height: 200px;"
            allowfullscreen>
        </iframe>

        <p>
            <a href="https://www.youtube.com/watch?v=XAFluJAYUTw"
               target="_blank"
               rel="noopener noreferrer">
                Otwórz film na YouTube
            </a>
        </p>
    </article>
</section>',
    1
);

INSERT INTO page_list (alias, page_title, page_content, status)
VALUES (
    'strona-testowa',
    'Strona testowa',
    '<h2>Strona w przygotowaniu</h2>
    <p>Ta podstrona nie została jeszcze opublikowana.</p>',
    0
);