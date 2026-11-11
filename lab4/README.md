# Projekt WWW — laboratoria 1, 2, 3 i 4

## Opis projektu

Projekt przedstawia prostą stronę internetową sklepu RTV AGD. Zawiera stronę główną z katalogiem produktów, strony szczegółów produktu i kontaktową oraz katalog produktów obsługiwany przez PHP.

W ramach laboratorium 1 przygotowano strukturę stron w semantycznym HTML oraz responsywny wygląd przy użyciu CSS.

W ramach laboratorium 2 dodano funkcje JavaScript: przełączanie motywu z zapamiętywaniem ustawienia, filtrowanie produktów, zegar oraz dynamiczną wycenę i walidację formularza kontaktowego.

W ramach laboratorium 3 wykorzystano bibliotekę jQuery 4.0.0 do tworzenia animacji elementów strony. Przygotowano trzy niezależne animacje, obsługę klawiatury, resetowanie animacji oraz uwzględnienie preferencji ograniczenia ruchu użytkownika. Dodatkowo skonfigurowano lokalny serwer Apache z obsługą PHP oraz komunikację AJAX.

W ramach laboratorium 4 przygotowano katalog produktów obsługiwany przez PHP. Dodano filtrowanie produktów metodą GET, formularz wyboru produktu metodą POST, walidację danych po stronie serwera oraz zapisywanie ostatniego wyboru w sesji.

## Struktura projektu

- `index.html` — strona główna z katalogiem produktów i demonstracją animacji.
- `lab4.php` — katalog produktów obsługiwany przez PHP.
- `status.php` — skrypt PHP zwracający odpowiedź serwera.
- `html/produkt.html` — strona ze szczegółami produktu.
- `html/kontakt.html` — strona kontaktowa z formularzem.
- `includes/naglowek.php` — fragment nagłówka strony dołączany przez PHP.
- `includes/produkty.php` — dane produktów zapisane w tablicy PHP.
- `css/style.css` — arkusz stylów CSS odpowiedzialny za wygląd i układ responsywny.
- `js/main.js` — funkcje JavaScript obsługujące interakcje z laboratoriów 1 i 2.
- `js/lab3.js` — funkcje jQuery oraz komunikacja AJAX przygotowane w laboratorium 3.
- `vendor/jquery-4.0.0.min.js` — lokalna biblioteka jQuery w wersji 4.0.0.
- `img/` — grafiki wykorzystywane na stronach.
- `TESTY.md` — opis przeprowadzonych testów, oczekiwanych wyników i zaobserwowanych rezultatów.
- `README.md` — opis projektu, jego funkcjonalności i instrukcja uruchomienia.

## Funkcjonalności

### Laboratorium 1 — HTML i CSS

- Semantyczna struktura HTML i wspólna nawigacja między stronami.
- Responsywny układ dostosowany do różnych szerokości ekranu.
- Formularz kontaktowy z podstawową walidacją HTML.

### Laboratorium 2 — JavaScript

- Przełączanie jasnego i ciemnego motywu z zapamiętywaniem wyboru w `localStorage`.
- Filtrowanie produktów na podstawie wpisanej nazwy.
- Zegar z przyciskami Start i Stop.
- Dynamiczna wycena produktu zależna od wybranej liczby sztuk.
- Walidacja wiadomości i wyświetlanie podsumowania zapytania na stronie.

Formularz kontaktowy służy do lokalnego podglądu zapytania. Dane nie są wysyłane na serwer ani przesyłane e-mailem.

### Laboratorium 3 — jQuery

- Animacja A — przełączanie rozmiaru elementu między 160 × 90 px a 240 × 130 px.
- Animacja B — powiększanie elementu po najechaniu kursorem lub uzyskaniu fokusu klawiatury.
- Animacja C — stopniowe powiększanie elementu o 20 px szerokości i 10 px wysokości przy każdym zaakceptowanym kliknięciu.
- Ograniczenie Animacji C do pięciu powiększeń.
- Przycisk resetujący Animacje A i C.
- Zatrzymywanie trwających animacji przed rozpoczęciem kolejnych.
- Obsługa preferencji `prefers-reduced-motion`, pozwalająca wyłączyć płynne animacje.

### Laboratorium 3 — PHP i AJAX

- Konfiguracja lokalnego serwera Apache z obsługą PHP za pomocą XAMPP.
- Skrypt `status.php` zwracający odpowiedź tekstową „PHP działa”.
- Wysyłanie zapytań AJAX metodą GET.
- Wyświetlanie odpowiedzi serwera bez przeładowania strony.
- Obsługa błędów połączenia, w tym błędu 404.
- Ustawienie limitu czasu oczekiwania na odpowiedź serwera (`timeout: 5000`).
- Weryfikacja komunikacji w narzędziach deweloperskich przeglądarki (Network).

### Laboratorium 4 — PHP, formularze i sesja

- Przechowywanie danych produktów w tablicy PHP w osobnym pliku `includes/produkty.php`.
- Dołączanie plików PHP za pomocą `include` i `require_once`.
- Wyświetlanie produktów przy użyciu pętli `while`.
- Określanie dostępności produktów na podstawie stanu magazynowego.
- Przypisywanie czytelnych nazw kategoriom za pomocą instrukcji `switch`.
- Generowanie listy dostępnych ilości od 1 do 5 przy użyciu pętli `for`.
- Filtrowanie katalogu produktów metodą GET. Obsługiwane kategorie to wszystkie produkty, książki i akcesoria.
- Wybór produktu i liczby sztuk za pomocą formularza przesyłanego metodą POST.
- Walidacja danych po stronie serwera, obejmująca sprawdzanie typów danych, identyfikatora produktu, zakresu ilości i stanu magazynowego.
- Zwracanie kodu HTTP 400 w przypadku nieprawidłowych danych formularza.
- Zapisywanie poprawnego wyboru produktu i liczby sztuk w sesji PHP.
- Przekierowanie po poprawnym przesłaniu formularza za pomocą kodu HTTP 303, aby uniknąć ponownego wysyłania formularza przy odświeżeniu strony.
- Zabezpieczanie wyświetlanego tekstu za pomocą `htmlspecialchars()`.

## Wymagania

- Przeglądarka internetowa, np. Google Chrome.
- XAMPP z serwerem Apache i obsługą PHP.
- jQuery 4.0.0 dołączone lokalnie w katalogu `vendor/`.

## Uruchomienie projektu

1. Zainstaluj i uruchom XAMPP Control Panel.
2. Uruchom serwer Apache przyciskiem Start.
3. Upewnij się, że katalog główny Apache wskazuje na folder `www`.
4. Otwórz przeglądarkę i przejdź pod adres odpowiedniego laboratorium, np.:

   - `http://localhost/lab3/` — laboratorium 3.
   - `http://localhost/lab4/` — laboratorium 4.
   - `http://localhost/lab4/lab4.php` — bezpośrednio katalog produktów PHP.

5. Aby zakończyć działanie serwera, kliknij Stop przy Apache w XAMPP Control Panel.

**Uwaga:** Projekt jest skonfigurowany do pracy lokalnej. Apache korzysta bezpośrednio z folderu `www`, dzięki czemu zmiany zapisane w PyCharm są dostępne bez kopiowania plików do katalogu `htdocs`.

## Schemat działania katalogu PHP

1. Rozpoczęcie sesji za pomocą `session_start()`.
2. Wczytanie danych produktów z pliku `includes/produkty.php` za pomocą `require_once`.
3. Odczytanie i sprawdzenie parametru GET odpowiedzialnego za filtrowanie kategorii.
4. Sprawdzenie, czy przesłano formularz metodą POST.
5. Weryfikacja danych formularza: produktu, ilości, poprawności identyfikatora i dostępności magazynowej.
6. W przypadku błędu wyświetlenie komunikatu i zwrócenie kodu HTTP 400.
7. W przypadku poprawnych danych zapisanie wyboru w sesji i przekierowanie do katalogu kodem HTTP 303.
8. Wyświetlenie produktów, formularzy oraz ostatniego zapisanego wyboru.

### Dane, formularze i sesja

Dane produktów znajdują się w pliku `includes/produkty.php`. Dzięki temu można oddzielić dane od kodu odpowiedzialnego za wyświetlanie katalogu.

Formularz filtrowania korzysta z metody GET. Wybrana kategoria jest przekazywana w adresie strony i nie zmienia zapisanego wyboru użytkownika.

Formularz wyboru produktu korzysta z metody POST. Dane są sprawdzane po stronie serwera przed zapisaniem ich w sesji. Sesja jest aktualizowana wyłącznie wtedy, gdy wszystkie dane są poprawne. Nieprawidłowe przesłanie formularza nie nadpisuje poprzedniego wyboru.

Limit liczby sztuk jest sprawdzany po stronie PHP. Zmiana limitu wymaga dostosowania zarówno walidacji ilości, jak i generowania opcji formularza.

`require_once` służy do wczytania pliku z danymi produktów, ponieważ jest on niezbędny do działania katalogu i powinien zostać dołączony tylko raz. `include` służy do dołączenia fragmentu nagłówka strony.

## Testy

Przeprowadzone testy opisano w pliku `TESTY.md`. Dokument zawiera oczekiwane i zaobserwowane wyniki sprawdzeń dotyczących struktury HTML, responsywności, dostępności, JavaScript, jQuery, komunikacji AJAX oraz katalogu PHP.

## Źródła grafik

Grafiki produktów wykorzystane w projekcie pochodzą ze stron produktowych RTV EURO AGD:

- Telewizor Samsung UE55U8092HU — https://www.euro.com.pl/telewizory-led-lcd-plazmowe/samsung-telewizor-ue55u8092hu.bhtml
- Słuchawki JLab GO Lux ANC — https://www.euro.com.pl/sluchawki/jlab-go-lux-anc-nauszne-bluetooth-5-4-grafitowy.bhtml
- Robot kuchenny MPM TRM-01 — https://www.euro.com.pl/roboty-wieloczynnosciowe/mpm-trm-01.bhtml