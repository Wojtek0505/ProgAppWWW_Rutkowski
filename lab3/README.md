# Projekt WWW — laboratoria 1, 2 i 3

## Opis projektu

Projekt przedstawia prostą stronę internetową sklepu RTV AGD. Zawiera stronę główną z katalogiem produktów, stronę szczegółów produktu oraz stronę kontaktową z formularzem.

W ramach laboratorium 1 przygotowano strukturę stron w semantycznym HTML oraz responsywny wygląd przy użyciu CSS.

W ramach laboratorium 2 dodano funkcje JavaScript: przełączanie motywu z zapamiętywaniem ustawienia, filtrowanie produktów, zegar oraz dynamiczną wycenę i walidację formularza kontaktowego.

W ramach laboratorium 3 wykorzystano bibliotekę jQuery 4.0.0 do tworzenia animacji elementów strony. Przygotowano trzy niezależne animacje, obsługę klawiatury, resetowanie animacji oraz uwzględnienie preferencji ograniczenia ruchu użytkownika. Dodatkowo skonfigurowano lokalny serwer Apache z obsługą PHP oraz komunikację AJAX.

## Struktura projektu

- `index.html` — strona główna z katalogiem produktów i demonstracją animacji.
- `produkt.html` — strona ze szczegółami produktu.
- `kontakt.html` — strona kontaktowa z formularzem.
- `status.php` — skrypt PHP zwracający odpowiedź serwera.
- `css/style.css` — arkusz stylów CSS odpowiedzialny za wygląd i układ responsywny.
- `js/main.js` — funkcje JavaScript obsługujące interakcje z laboratoriów 1 i 2.
- `js/lab3.js` — funkcje jQuery oraz komunikacja AJAX przygotowane w laboratorium 3.
- `vendor/jquery-4.0.0.min.js` — lokalna biblioteka jQuery w wersji 4.0.0.
- `img/` — grafiki wykorzystywane na stronach.
- `TESTY.md` — opis przeprowadzonych testów, oczekiwanych wyników i zaobserwowanych rezultatów.

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

Formularz służy do lokalnego podglądu zapytania. Dane nie są wysyłane na serwer ani przesyłane e-mailem.

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

## Wymagania

- Przeglądarka internetowa, np. Google Chrome.
- XAMPP z serwerem Apache i obsługą PHP.
- jQuery 4.0.0 dołączone lokalnie w katalogu `vendor/`.

## Uruchomienie projektu

1. Zainstaluj i uruchom XAMPP Control Panel.
2. Uruchom serwer Apache przyciskiem Start.
3. Upewnij się, że katalog główny Apache wskazuje na folder projektu `www`.
4. Otwórz przeglądarkę i przejdź pod adres odpowiedniego laboratorium, np.:

   `http://localhost/lab3/`

5. Aby zakończyć działanie serwera, kliknij Stop przy Apache w XAMPP Control Panel.

**Uwaga:** Projekt jest skonfigurowany do pracy lokalnej. Apache korzysta bezpośrednio z folderu `www`, dzięki czemu zmiany zapisane w PyCharm są dostępne bez kopiowania plików do katalogu `htdocs`.

## Źródła grafik

Grafiki produktów wykorzystane w projekcie pochodzą ze stron produktowych RTV EURO AGD:

- Telewizor Samsung UE55U8092HU — https://www.euro.com.pl/telewizory-led-lcd-plazmowe/samsung-telewizor-ue55u8092hu.bhtml
- Słuchawki JLab Go Lux ANC — https://www.euro.com.pl/sluchawki/jlab-go-lux-anc-nauszne-bluetooth-5-4-grafitowy.bhtml
- Robot kuchenny MPM TRM-01 — https://www.euro.com.pl/roboty-wieloczynnosciowe/mpm-trm-01.bhtml