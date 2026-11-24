# Projekt WWW — laboratoria 1, 2, 3, 4, 5 i 6

**Aktualna wersja projektu: v1.5**

## Opis projektu

Projekt przedstawia prostą stronę internetową sklepu RTV AGD. Zawiera stronę główną, podstrony dotyczące produktu i kontaktu, stronę z materiałami wideo oraz katalog produktów obsługiwany przez PHP.

W ramach laboratorium 1 przygotowano strukturę stron w semantycznym HTML oraz responsywny wygląd przy użyciu CSS.

W ramach laboratorium 2 dodano funkcje JavaScript: przełączanie motywu z zapamiętywaniem ustawienia, filtrowanie produktów, zegar oraz dynamiczną wycenę i walidację formularza kontaktowego.

W ramach laboratorium 3 wykorzystano bibliotekę jQuery 4.0.0 do tworzenia animacji elementów strony. Przygotowano trzy niezależne animacje, obsługę klawiatury, resetowanie animacji oraz uwzględnienie preferencji ograniczenia ruchu użytkownika. Dodatkowo skonfigurowano lokalny serwer Apache z obsługą PHP oraz komunikację AJAX.

W ramach laboratorium 4 przygotowano katalog produktów obsługiwany przez PHP. Dodano filtrowanie produktów metodą GET, formularz wyboru produktu metodą POST, walidację danych po stronie serwera oraz zapisywanie ostatniego wyboru w sesji.

W ramach laboratorium 5 przebudowano strukturę strony, wprowadzając wspólny szablon PHP. Główne elementy strony, takie jak nagłówek, menu, sekcja główna i stopka, znajdują się w pliku `index.php`. Zawartość poszczególnych podstron została oddzielona od wspólnego szablonu i umieszczona w osobnych plikach HTML w katalogu `html/`. Dołączanie treści odbywa się za pomocą instrukcji `include`. Dodano również dynamiczne ładowanie podstron na podstawie parametru GET `idp`, mapę dostępnych podstron, dynamiczne menu oraz obsługę błędów HTTP 404 i 500. Przygotowano także podstronę z trzema filmami YouTube powiązanymi z produktami sklepu.

Laboratorium 6 rozwija projekt z laboratorium 5. Jego celem jest przygotowanie prostego systemu CMS, w którym treści podstron są przechowywane w bazie danych MariaDB i odczytywane przez PHP za pomocą PDO. W ramach dotychczasowych prac utworzono bazę danych `moja_strona` z tabelą `page_list`, przeniesiono do niej treści podstron oraz przygotowano bezpieczne połączenie z bazą danych z wykorzystaniem PDO. Dodano funkcję pobierającą opublikowane podstrony na podstawie aliasu, dynamiczne menu oraz obsługę błędów HTTP 404 i 500. Zachowano dotychczasowe funkcjonalności projektu, a jego aktualna wersja to v1.5.

## Struktura projektu

- `index.php` — główny plik strony zawierający wspólny szablon HTML, nagłówek, dynamiczne menu, sekcję główną i stopkę.
- `lab4.php` — niezależny katalog produktów obsługiwany przez PHP.
- `status.php` — skrypt PHP zwracający odpowiedź serwera dla komunikacji AJAX.
- `html/` — katalog zawierający dotychczasowe pliki HTML, z których treści zostały przeniesione do bazy danych w ramach laboratorium 6.
- `cfg.php` — lokalna konfiguracja połączenia z bazą danych za pomocą PDO, zawierająca dane dostępowe.
- `cfg.example.php` — przykładowa konfiguracja połączenia z bazą danych bez rzeczywistych danych dostępowych.
- `showpage.php` — funkcja pobierająca opublikowaną podstronę z bazy danych na podstawie aliasu.
- `sql/schema.sql` — definicja struktury bazy danych i tabeli `page_list`.
- `sql/seed.sql` — początkowe dane podstron przeniesione do bazy danych.
- `admin/admin.php` — wstępny szkielet panelu administracyjnego CMS.
- `includes/naglowek.php` — fragment nagłówka wykorzystywany przez katalog PHP.
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

### Laboratorium 5 — PHP, wspólny szablon i podstrony

- Zmiana pliku `index.html` na `index.php`, umożliwiająca wykorzystanie PHP do budowania strony.
- Utworzenie wspólnego szablonu zawierającego nagłówek, menu, sekcję główną i stopkę.
- Przeniesienie zawartości strony głównej do osobnego pliku `html/glowna.html`.
- Oddzielenie treści podstron od wspólnego szablonu poprzez usunięcie powtarzających się elementów HTML z plików `produkt.html` i `kontakt.html`.
- Dołączanie zawartości plików HTML do wspólnego szablonu za pomocą instrukcji `include`.
- Wykorzystanie stałej `__DIR__` do określania ścieżek do dołączanych plików.
- Przeniesienie wspólnych odwołań do arkusza CSS i skryptów JavaScript do pliku `index.php`.
- Dodanie zmiennej PHP przechowującej identyfikator projektu, wyświetlany następnie w stopce.
- Zachowanie niezależnego działania katalogu PHP `lab4.php` oraz skryptu AJAX `status.php`.
- Zdefiniowanie mapy dostępnych podstron w tablicy PHP `$podstrony`, zawierającej identyfikatory, tytuły i ścieżki do plików.
- Wykorzystanie parametru GET `idp` do dynamicznego wyboru wyświetlanej podstrony. Domyślnie ładowana jest strona główna.
- Dynamiczne generowanie elementów menu nawigacyjnego na podstawie zdefiniowanej mapy.
- Zmiana tytułu dokumentu HTML zależnie od wybranej podstrony.
- Wyróżnianie aktualnie wybranej pozycji menu za pomocą atrybutu `aria-current`.
- Sprawdzanie poprawności identyfikatora podstrony oraz typu przekazanego parametru.
- Zwracanie kodu HTTP 404 dla nieznanych identyfikatorów i nieprawidłowych parametrów.
- Sprawdzanie istnienia i dostępności pliku podstrony za pomocą `is_file()` i `is_readable()`.
- Zwracanie kodu HTTP 500, gdy plik podstrony nie istnieje lub nie jest dostępny.
- Wyświetlanie komunikatów błędów we wspólnym szablonie, bez ujawniania ścieżek systemowych.
- Zabezpieczanie wyświetlanych wartości za pomocą `htmlspecialchars()` z kodowaniem UTF-8.
- Dodanie podstrony `html/filmy.html` zawierającej trzy filmy YouTube powiązane z produktami sklepu.
- Osadzenie filmów za pomocą elementów `iframe` oraz dodanie linków umożliwiających otwarcie materiałów bezpośrednio w serwisie YouTube.
- Zastosowanie proporcji obrazu 16:9 i minimalnej wysokości odtwarzaczy wynoszącej 200 px.
- Dostosowanie odtwarzaczy do urządzeń mobilnych i różnych szerokości ekranu.

### *Laboratorium 6 — PHP, baza danych i podstawy CMS*

Laboratorium 6 rozwija projekt z laboratorium 5. Treści podstron zostały przeniesione z osobnych plików HTML do bazy danych `moja_strona`. Wspólny szablon PHP pobiera opublikowane treści z tabeli `page_list` za pomocą PDO. Podstrony są identyfikowane na podstawie aliasów, a menu generowane dynamicznie na podstawie opublikowanych rekordów.

#### *Wykonane etapy*

**Zadanie 1 — przygotowanie projektu**

- Skopiowanie kompletnego projektu Lab 5 do katalogu `lab6/`.
- Zachowanie dotychczasowych funkcjonalności, w tym katalogu PHP, sesji, komunikacji AJAX, animacji i podstrony z filmami.
- Zmiana oznaczenia wersji projektu w stopce na `v1.5`.
- Utworzenie wstępnego panelu `admin/admin.php` z komunikatem „Panel CMS w przygotowaniu” i linkiem powrotnym do strony głównej.

**Zadanie 2 — baza danych i migracja treści**

- Utworzenie bazy danych `moja_strona` z kodowaniem `utf8mb4`.
- Utworzenie tabeli `page_list` zawierającej kolumny `id`, `alias`, `page_title`, `page_content` i `status`.
- Przygotowanie plików `sql/schema.sql` i `sql/seed.sql`.
- Przeniesienie treści strony głównej, produktu, kontaktu i filmów do bazy danych.
- Dodanie dodatkowej strony testowej ze statusem szkicu (`status = 0`).
- Zaimportowanie pięciu rekordów: czterech opublikowanych i jednego nieopublikowanego.

**Zadanie 3 — konfiguracja PDO**

- Sprawdzenie dostępności rozszerzeń PHP `PDO` i `pdo_mysql`.
- Utworzenie użytkownika MySQL `moja_strona_user` z dostępem wyłącznie do odczytu tabeli `moja_strona.page_list`.
- Przygotowanie plików `cfg.php` i `cfg.example.php`.
- Skonfigurowanie połączenia PDO z kodowaniem `utf8mb4`, trybem wyjątków oraz wyłączoną emulacją zapytań przygotowanych.
- Zabezpieczenie lokalnych danych dostępowych przez `.gitignore`.

**Zadanie 4 — pobieranie podstron z bazy danych**

- Przygotowanie pliku `showpage.php` z funkcją `PokazPodstrone($pdo, $alias)`, która pobiera opublikowaną podstronę na podstawie aliasu.
- Zastosowanie zapytań przygotowanych PDO (`prepare()` i `execute()`).
- Obsługa braku parametru `idp` i pustego aliasu przez wyświetlenie strony głównej.
- Walidacja aliasów i obsługa nieprawidłowych parametrów oraz nieistniejących podstron.
- Ukrycie nieopublikowanych podstron przed użytkownikami.

**Zadanie 5 — dynamiczny wspólny szablon i obsługa błędów**

- Przebudowanie pliku `index.php` tak, aby pobierał treści podstron z bazy danych.
- Usunięcie dotychczasowej mapy plików podstron.
- Dynamiczne generowanie menu na podstawie opublikowanych rekordów z tabeli `page_list`.
- Zastosowanie `htmlspecialchars()` do bezpiecznego wyświetlania tytułów i elementów menu.
- Wyróżnianie aktywnej podstrony za pomocą `aria-current`.
- Obsługa błędów HTTP 404 i 500.
- Rejestrowanie szczegółów błędów serwera w lokalnym logu zamiast wyświetlania ich użytkownikowi.
- Zachowanie katalogu produktów jako niezależnej funkcjonalności opartej na pliku `includes/produkty.php`.

#### *Pliki związane z Lab 6*

- `admin/admin.php` — wstępny szkielet panelu CMS.
- `showpage.php` — funkcja pobierająca opublikowane podstrony z bazy danych.
- `sql/schema.sql` — definicja struktury bazy danych.
- `sql/seed.sql` — początkowe dane podstron.
- `cfg.php` — lokalna konfiguracja połączenia PDO, zawierająca dane dostępowe; plik nie jest przeznaczony do publikacji.
- `cfg.example.php` — przykładowa konfiguracja bez rzeczywistych danych dostępowych.

## Wymagania

- Przeglądarka internetowa, np. Google Chrome.
- XAMPP z serwerem Apache i obsługą PHP.
- jQuery 4.0.0 dołączone lokalnie w katalogu `vendor/`.
- MariaDB (do realizacji laboratorium 6).
- Rozszerzenia PHP `PDO` i `pdo_mysql` umożliwiające komunikację z bazą danych.

## Uruchomienie projektu

1. Zainstaluj i uruchom XAMPP Control Panel.
2. Uruchom serwer Apache oraz bazę danych MySQL przyciskami Start.
3. Upewnij się, że katalog główny Apache wskazuje na folder `www`.
4. Otwórz przeglądarkę i przejdź pod adres odpowiedniego laboratorium, np.:

   - `http://localhost/lab3/` — laboratorium 3.
   - `http://localhost/lab4/` — laboratorium 4.
   - `http://localhost/lab5/` — projekt z laboratorium 5.
   - `http://localhost/lab6/` — projekt z laboratorium 6.
   - `http://localhost/lab6/index.php?idp=produkt` — podstrona produktu.
   - `http://localhost/lab6/index.php?idp=kontakt` — podstrona kontaktowa.
   - `http://localhost/lab6/index.php?idp=filmy` — podstrona z filmami.
   - `http://localhost/lab6/lab4.php` — katalog produktów PHP w laboratorium 6.
   - `http://localhost/lab6/status.php` — skrypt obsługujący zapytania AJAX.

5. Aby zakończyć działanie serwerów, kliknij Stop przy Apache i MySQL w XAMPP Control Panel.

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

## Dane, formularze i sesja

Dane produktów znajdują się w pliku `includes/produkty.php`. Dzięki temu można oddzielić dane od kodu odpowiedzialnego za wyświetlanie katalogu.

Formularz filtrowania korzysta z metody GET. Wybrana kategoria jest przekazywana w adresie strony i nie zmienia zapisanego wyboru użytkownika.

Formularz wyboru produktu korzysta z metody POST. Dane są sprawdzane po stronie serwera przed zapisaniem ich w sesji. Sesja jest aktualizowana wyłącznie wtedy, gdy wszystkie dane są poprawne. Nieprawidłowe przesłanie formularza nie nadpisuje poprzedniego wyboru.

Limit liczby sztuk jest sprawdzany po stronie PHP. Zmiana limitu wymaga dostosowania zarówno walidacji ilości, jak i generowania opcji formularza.

`require_once` służy do wczytania pliku z danymi produktów oraz plików zawierających funkcje i konfigurację potrzebną do działania projektu. Zapobiega wielokrotnemu dołączeniu tego samego pliku.

## *Wspólny szablon PHP*

Plik `index.php` pełni funkcję wspólnego szablonu strony. Zawiera elementy powtarzające się na podstronach, takie jak nagłówek, menu nawigacyjne, sekcja główna i stopka.

W laboratorium 5 treści podstron były przechowywane w osobnych plikach HTML w katalogu `html/`. W laboratorium 6 zostały przeniesione do bazy danych MariaDB w tabeli `page_list`.

Połączenie z bazą danych jest realizowane za pomocą PDO i konfiguracji znajdującej się w pliku `cfg.php`. Funkcja `PokazPodstrone()` z pliku `showpage.php` pobiera treść opublikowanej podstrony na podstawie jej aliasu.

### Podstrona z filmami

Podstrona z filmami jest dostępna pod adresem `index.php?idp=filmy`. Jej treść została przeniesiona do tabeli `page_list` w ramach laboratorium 6.

Strona zawiera trzy materiały wideo związane z produktami prezentowanymi w sklepie. Filmy są osadzone za pomocą elementów `iframe` z wykorzystaniem adresów YouTube Embed.

Każdy odtwarzacz posiada tytuł opisujący materiał oraz osobny link umożliwiający otwarcie filmu bezpośrednio w serwisie YouTube.

Odtwarzacze dostosowują się do szerokości dostępnego obszaru. Zastosowano proporcje obrazu 16:9 oraz minimalną wysokość 200 px. Sprawdzono również działanie strony na urządzeniu mobilnym i obsługę linków za pomocą klawiatury.

## Testy

Przeprowadzone testy opisano w pliku `TESTY.md`. Dokument zawiera oczekiwane i zaobserwowane wyniki sprawdzeń dotyczących struktury HTML, responsywności, dostępności, JavaScript, jQuery, komunikacji AJAX, katalogu PHP, wspólnego szablonu, dynamicznego ładowania podstron oraz osadzonych filmów YouTube.

## Źródła grafik

Grafiki produktów wykorzystane w projekcie pochodzą ze stron produktowych RTV EURO AGD:

- Telewizor Samsung UE55U8092HU — https://www.euro.com.pl/telewizory-led-lcd-plazmowe/samsung-telewizor-ue55u8092hu.bhtml
- Słuchawki JLab GO Lux ANC — https://www.euro.com.pl/sluchawki/jlab-go-lux-anc-nauszne-bluetooth-5-4-grafitowy.bhtml
- Robot kuchenny MPM TRM-01 — https://www.euro.com.pl/roboty-wieloczynnosciowe/mpm-trm-01.bhtml