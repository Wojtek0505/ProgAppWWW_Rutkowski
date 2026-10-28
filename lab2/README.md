# Projekt WWW — laboratoria 1 i 2

## Opis projektu

Projekt przedstawia prostą stronę internetową sklepu RTV AGD. Zawiera stronę główną z katalogiem produktów, stronę szczegółów produktu oraz stronę kontaktową z formularzem.

W ramach laboratorium 1 przygotowano strukturę stron w semantycznym HTML oraz responsywny wygląd przy użyciu CSS. W ramach laboratorium 2 dodano funkcje JavaScript: przełączanie motywu z zapamiętywaniem ustawienia, filtrowanie produktów, zegar oraz dynamiczną wycenę i walidację formularza kontaktowego.

## Struktura projektu

- `index.html` — strona główna z katalogiem produktów.
- `produkt.html` — strona ze szczegółami produktu.
- `kontakt.html` — strona kontaktowa z formularzem.
- `css/style.css` — arkusz stylów CSS odpowiedzialny za wygląd i układ responsywny.
- `js/main.js` — funkcje JavaScript obsługujące interakcje na stronach.
- `img/` — grafiki wykorzystywane na stronach.
- `TESTY.md` — opis przeprowadzonych testów, oczekiwanych wyników i zaobserwowanych rezultatów.

## Funkcjonalności

- Semantyczna struktura HTML i wspólna nawigacja między stronami.
- Responsywny układ dostosowany do różnych szerokości ekranu.
- Formularz kontaktowy z podstawową walidacją HTML.
- Przełączanie jasnego i ciemnego motywu z zapamiętywaniem wyboru w `localStorage`.
- Filtrowanie produktów na podstawie wpisanej nazwy.
- Zegar z przyciskami Start i Stop.
- Dynamiczna wycena produktu zależna od wybranej liczby sztuk.
- Walidacja wiadomości i wyświetlanie podsumowania zapytania na stronie.

Formularz służy do lokalnego podglądu zapytania. Dane nie są wysyłane na serwer ani przesyłane e-mailem.

## Wymagania

- Przeglądarka internetowa, np. Google Chrome.
- Python 3 zainstalowany na komputerze, potrzebny do uruchomienia lokalnego serwera HTTP.

## Uruchomienie projektu

1. Pobierz repozytorium lub skopiuj katalog projektu na komputer.
2. Otwórz terminal w katalogu zawierającym pliki `index.html`, `produkt.html` i `kontakt.html`.
3. Uruchom lokalny serwer HTTP poleceniem:

   `python -m http.server 8000`

4. Otwórz przeglądarkę i przejdź pod adres:

   `http://localhost:8000/`

5. Aby zakończyć działanie serwera, wróć do terminala i naciśnij `Ctrl+C`.

## Źródła grafik

Grafiki produktów wykorzystane w projekcie pochodzą ze stron produktowych RTV EURO AGD:

- Telewizor Samsung UE55U8092HU — https://www.euro.com.pl/telewizory-led-lcd-plazmowe/samsung-telewizor-ue55u8092hu.bhtml
- Słuchawki JLab Go Lux ANC — https://www.euro.com.pl/sluchawki/jlab-go-lux-anc-nauszne-bluetooth-5-4-grafitowy.bhtml
- Robot kuchenny MPM TRM-01 — https://www.euro.com.pl/roboty-wieloczynnosciowe/mpm-trm-01.bhtml