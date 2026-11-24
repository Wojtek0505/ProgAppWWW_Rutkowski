# TESTY — projekt WWW

Przeglądarka: Google Chrome 155.0.8059.80 (Oficjalna wersja) (64-bitowa).

## 1. Struktura HTML

### Test 1 — index.html

Oczekiwany wynik: brak błędów i ostrzeżeń walidacji HTML.

Zaobserwowany wynik: walidator Nu HTML Checker wyświetlił komunikat „Document checking completed. No errors or warnings to show.” Użyto parsera HTML.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 2 — produkt.html

Oczekiwany wynik: brak błędów i ostrzeżeń walidacji HTML.

Zaobserwowany wynik: walidator Nu HTML Checker nie wykrył błędów ani ostrzeżeń.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 3 — kontakt.html

Oczekiwany wynik: brak błędów i ostrzeżeń walidacji HTML.

Zaobserwowany wynik: walidator Nu HTML Checker nie wykrył błędów ani ostrzeżeń.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 4 — wyłączenie CSS

Oczekiwany wynik: po wyłączeniu CSS nagłówki i treści pozostają czytelne, a elementy dokumentu występują w logicznej kolejności.

Zaobserwowany wynik: nagłówek RTV AGD znajdował się na początku, menu pod nagłówkiem, produkty wyświetlały się kolejno wraz z tytułami, opisami i cenami, a stopka „WWW — projekt” znajdowała się na końcu.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Struktura dokumentu pozostała czytelna bez stylów CSS.

## 2. Widoki responsywne

### Test 5 — szerokość 375 px

Oczekiwany wynik: produkty wyświetlają się w jednej kolumnie, formularz mieści się na ekranie, a obrazy zachowują proporcje.

Zaobserwowany wynik: produkty wyświetlały się jeden pod drugim, pole formularza mieściło się na ekranie, a zdjęcia zachowywały prawidłowe proporcje.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 6 — szerokość 1280 px

Oczekiwany wynik: produkty wyświetlają się w trzech kolumnach, formularz mieści się na ekranie, a obrazy zachowują proporcje.

Zaobserwowany wynik: produkty wyświetlały się w trzech kolumnach, formularz nie był ucięty, a zdjęcia zachowywały prawidłowe proporcje.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 7 — zmiana szerokości przez granicę 768 px

Oczekiwany wynik: poniżej 768 px produkty wyświetlają się w jednej kolumnie, a od 768 px w trzech kolumnach.

Zaobserwowany wynik: przy 767 px widoczna była jedna kolumna, a przy 768 px i 800 px trzy kolumny.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Układ zmieniał się zgodnie z założeniami responsywności.

## 3. Obsługa klawiaturą

### Test 8 — Tab i Shift+Tab

Oczekiwany wynik: fokus przechodzi przez elementy menu w logicznej kolejności i jest widoczny. Shift+Tab pozwala wrócić do poprzedniego elementu.

Zaobserwowany wynik: fokus przechodził kolejno przez linki Katalog, Produkt i Kontakt. Shift+Tab cofał fokus do poprzedniego linku, a zaznaczenie było widoczne.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 9 — aktywowanie linku klawiszem Enter

Oczekiwany wynik: naciśnięcie Enter na zaznaczonym linku otwiera przypisaną mu stronę.

Zaobserwowany wynik: po zaznaczeniu linku „Produkt” i naciśnięciu Enter otworzyła się strona produkt.html.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 10 — kliknięcie etykiety formularza

Oczekiwany wynik: kliknięcie etykiety aktywuje odpowiadające jej pole formularza.

Zaobserwowany wynik: kliknięcie etykiety adresu e-mail aktywowało pole e-mail.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

## 4. Walidacja formularza

### Test 11 — pusty formularz

Oczekiwany wynik: przeglądarka zatrzymuje wysyłanie formularza i wskazuje wymagane pole.

Zaobserwowany wynik: formularz nie został wysłany. Przeglądarka wskazała puste pole adresu e-mail.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Walidacja wymaganych pól działa prawidłowo.

### Test 12 — błędny adres e-mail

Oczekiwany wynik: przeglądarka zatrzymuje wysyłanie formularza i wskazuje nieprawidłowy adres e-mail.

Zaobserwowany wynik: formularz nie został wysłany, ponieważ adres „abc” nie zawierał znaku @.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Walidacja adresu e-mail działa prawidłowo.

### Test 13 — liczba sztuk 0

Oczekiwany wynik: przeglądarka zatrzymuje wysyłanie formularza, ponieważ liczba sztuk musi wynosić co najmniej 1.

Zaobserwowany wynik: przeglądarka wyświetliła komunikat „Wartość mniejsza niż 1”.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Walidacja minimalnej liczby sztuk działa prawidłowo.

### Test 14 — liczba sztuk 6

Oczekiwany wynik: przeglądarka zatrzymuje wysyłanie formularza, ponieważ dozwolony zakres liczby sztuk wynosi od 1 do 5.

Zaobserwowany wynik: przeglądarka wyświetliła komunikat, że wartość jest za duża.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Walidacja maksymalnej liczby sztuk działa prawidłowo.

### Test 15 — wiadomość krótsza niż 10 znaków

Oczekiwany wynik: przeglądarka zatrzymuje wysyłanie formularza, ponieważ wiadomość musi mieć co najmniej 10 znaków.

Zaobserwowany wynik: formularz nie został wysłany, ponieważ wiadomość „Hej” była krótsza niż wymagane 10 znaków.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Walidacja minimalnej długości wiadomości działa prawidłowo.

### Test 16 — wysłanie formularza po dodaniu JavaScriptu

Oczekiwany wynik: po poprawnym wypełnieniu formularza JavaScript przechwytuje zdarzenie `submit`, zatrzymuje domyślne wysyłanie formularza i wyświetla podsumowanie zapytania na stronie.

Zaobserwowany wynik: po kliknięciu przycisku „Sprawdź zapytanie” pojawiło się podsumowanie zawierające nazwę produktu, liczbę sztuk, łączną cenę i wiadomość. Adres URL nie został zmieniony przez wysłanie formularza.

Poprawka lub wyjaśnienie: wykorzystano `event.preventDefault()`. Formularz służy do lokalnego podglądu zapytania i nie wysyła wiadomości na serwer ani e-mailem.

## 5. Eksperyment z atrybutem name

### Test 17 — usunięcie name z pola e-mail

Oczekiwany wynik: po usunięciu `name="email"` wartość adresu e-mail nie zostanie przekazana w parametrach formularza, mimo pozostawienia `id` i etykiety.

Zaobserwowany wynik: po wysłaniu formularza w adresie URL pojawiły się parametry produkt, ilosc i wiadomosc. Parametr email nie wystąpił.

Poprawka lub wyjaśnienie: atrybut `name` określa nazwę parametru przekazywanego podczas wysyłania formularza. Atrybut `id` służy m.in. do powiązania pola z etykietą, ale sam nie powoduje przesłania wartości. Po teście przywrócono `name="email"`.

## 6. Metoda wysyłania formularza

### Test 18 — sprawdzenie metody GET w DevTools

Oczekiwany wynik: w narzędziach deweloperskich, w karcie Network, widoczne jest żądanie formularza z metodą GET.

Zaobserwowany wynik: w kodzie formularza znajduje się `method="get"`. Podczas testu z Lab 1 parametry pojawiły się w adresie URL, co potwierdzało działanie metody GET. Nie udało się odnaleźć żądania na liście Network.

Poprawka lub wyjaśnienie: test wykonano przed dodaniem obsługi formularza w JavaScript. W aktualnej wersji formularz przechwytuje zdarzenie `submit` i nie wysyła danych metodą GET. Wartość parametru `method` określa sposób wysyłania danych formularza, jeśli domyślna obsługa wysyłania nie zostanie przechwycona przez JavaScript.

## 7. Funkcje JavaScript — Lab 2

### Test 19 — przełączanie motywu

Oczekiwany wynik: kliknięcie przycisku przełącza stronę między jasnym i ciemnym motywem. Stan przycisku `aria-pressed` oraz atrybut `data-theme` są aktualizowane.

Zaobserwowany wynik: przełączanie motywu działa prawidłowo.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 20 — zapamiętywanie motywu

Oczekiwany wynik: po odświeżeniu strony zostaje przywrócony wcześniej wybrany motyw.

Zaobserwowany wynik: wybrany motyw jest zachowywany po odświeżeniu strony.

Poprawka lub wyjaśnienie: wykorzystano `localStorage`.

### Test 21 — filtrowanie produktów

Oczekiwany wynik: wpisanie fragmentu nazwy pokazuje pasujące produkty, a pozostałe ukrywa. Licznik aktualizuje się, a dla braku wyników pojawia się odpowiedni komunikat.

Zaobserwowany wynik: wyszukiwanie produktów działa prawidłowo. Dla zapytania bez wyników pojawia się komunikat o braku produktów, a po wyczyszczeniu pola produkty ponownie się wyświetlają.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 22 — zegar Start/Stop

Oczekiwany wynik: przycisk Start uruchamia aktualizację zegara, a Stop zatrzymuje aktualizację. Wielokrotne kliknięcie Start nie powinno uruchamiać kilku interwałów jednocześnie.

Zaobserwowany wynik: zegar działa po uruchomieniu i zatrzymaniu. Zabezpieczenie przed wielokrotnym uruchomieniem interwału działa prawidłowo.

Poprawka lub wyjaśnienie: wykorzystano `setInterval()` i `clearInterval()`.

### Test 23 — wycena produktu

Oczekiwany wynik: zmiana produktu lub liczby sztuk aktualizuje wycenę. Dozwolony zakres wynosi od 1 do 5 sztuk.

Zaobserwowany wynik: wycena aktualizuje się po zmianie produktu i liczby sztuk. Dla nieprawidłowej liczby sztuk wyświetlany jest komunikat o błędzie.

Poprawka lub wyjaśnienie: cenę oblicza się na podstawie danych produktów zapisanych w JavaScript.

### Test 24 — walidacja wiadomości

Oczekiwany wynik: wiadomość krótsza niż 10 znaków lub składająca się wyłącznie ze spacji nie przechodzi walidacji. Wiadomość o prawidłowej długości może zostać zaakceptowana.

Zaobserwowany wynik: zbyt krótka wiadomość i wiadomość składająca się ze spacji są odrzucane. Po wpisaniu poprawnej wiadomości walidacja długości przechodzi prawidłowo.

Poprawka lub wyjaśnienie: wykorzystano `trim()` i sprawdzanie długości wiadomości.

### Test 25 — podsumowanie zapytania

Oczekiwany wynik: po poprawnym wypełnieniu formularza na stronie pojawia się podsumowanie z produktem, liczbą sztuk, łączną ceną i wiadomością. Dane nie są wysyłane ani zapisywane na serwerze.

Zaobserwowany wynik: podsumowanie wyświetla prawidłowe dane. Dla telewizora Samsung UE55U8092HU i jednej sztuki wyświetlono cenę 2999,00 zł.

Poprawka lub wyjaśnienie: formularz przechwytuje zdarzenie `submit` i używa `event.preventDefault()`.

### Test 26 — bezpieczne wyświetlanie wiadomości

Oczekiwany wynik: tekst przypominający kod HTML lub JavaScript jest wyświetlany jako zwykły tekst i nie jest wykonywany.

Zaobserwowany wynik: wpis `<script>alert(1)</script>` został wyświetlony jako tekst. Nie pojawiło się okno `alert`.

Poprawka lub wyjaśnienie: do wyświetlania wiadomości użyto `textContent`.

## 8. Animacje jQuery — Lab 3

### Test 27 — animacja A: przełączanie rozmiaru

Oczekiwany wynik: kliknięcie przycisku zmienia jego rozmiar z 160 × 90 px na 240 × 130 px. Kolejne kliknięcie przywraca rozmiar początkowy.

Zaobserwowany wynik: przycisk zmienia rozmiar po kliknięciu. Kolejne kliknięcia przełączają go między dwoma rozmiarami.

Poprawka lub wyjaśnienie: wykorzystano zmienną `isExpanded`, która przechowuje aktualny stan animacji.

### Test 28 — animacja B: reakcja na kursor i fokus

Oczekiwany wynik: najechanie kursorem lub uzyskanie fokusu klawiatury powoduje powiększenie przycisku do 220 × 120 px. Przycisk zmniejsza się dopiero wtedy, gdy kursor nie znajduje się nad nim i nie ma on fokusu.

Zaobserwowany wynik: animacja działa prawidłowo zarówno po najechaniu kursorem, jak i po przejściu do przycisku klawiszem Tab.

Poprawka lub wyjaśnienie: wykorzystano zdarzenia `mouseenter`, `mouseleave`, `focus` i `blur`. Stan powiększenia jest ustalany na podstawie zmiennych `isHovered` i `isFocused`.

### Test 29 — animacja C: stopniowe powiększanie

Oczekiwany wynik: każde zaakceptowane kliknięcie zwiększa szerokość przycisku o 20 px, a wysokość o 10 px. Po pięciu powiększeniach przycisk osiąga rozmiar 260 × 140 px. Kolejne kliknięcia nie powodują zmian.

Zaobserwowany wynik: przycisk zwiększa rozmiar po kolejnych kliknięciach. Po osiągnięciu pięciu powiększeń dalsze kliknięcia nie zmieniają jego wymiarów. Licznik prawidłowo pokazuje liczbę powiększeń.

Poprawka lub wyjaśnienie: wykorzystano zmienną `stepsC`, która przechowuje liczbę wykonanych powiększeń.

### Test 30 — szybkie klikanie animacji A

Oczekiwany wynik: po dziesięciu szybkich kliknięciach przycisk powinien zakończyć działanie w stanie początkowym, bez oczekujących animacji w kolejce.

Zaobserwowany wynik: po dziesięciu szybkich kliknięciach przycisk wrócił do rozmiaru 160 × 90 px.

Poprawka lub wyjaśnienie: przed rozpoczęciem kolejnej animacji wykorzystano `.stop(true, false)`, aby zatrzymać poprzednią animację i wyczyścić kolejkę.

### Test 31 — resetowanie animacji A i C

Oczekiwany wynik: kliknięcie przycisku resetowania zatrzymuje animacje A i C, przywraca im rozmiar 160 × 90 px, zeruje licznik C oraz przywraca początkowy stan A.

Zaobserwowany wynik: resetowanie działa prawidłowo. Oba przyciski wracają do początkowych wymiarów, a licznik C zostaje wyzerowany.

Poprawka lub wyjaśnienie: wykorzystano metody `.stop()` i `.css()` oraz przywrócono wartości zmiennych przechowujących stan animacji.

### Test 32 — resetowanie podczas trwającej animacji

Oczekiwany wynik: kliknięcie resetowania podczas trwającej animacji A lub C powinno natychmiast zatrzymać animację i przywrócić początkowy rozmiar przycisku.

Zaobserwowany wynik: resetowanie podczas animacji A i C działa prawidłowo. Przyciski natychmiast wracają do rozmiaru 160 × 90 px.

Poprawka lub wyjaśnienie: zastosowano zatrzymanie aktualnej animacji przed przywróceniem wymiarów.

### Test 33 — ograniczenie animacji przez prefers-reduced-motion

Oczekiwany wynik: po włączeniu preferencji ograniczenia ruchu animacje powinny zmieniać rozmiar elementów natychmiast, bez płynnych przejść. Funkcjonalność przycisków powinna pozostać dostępna.

Zaobserwowany wynik: po ustawieniu emulacji `prefers-reduced-motion: reduce` w narzędziach deweloperskich animacje zmieniały rozmiar elementów natychmiast. Po przywróceniu `No emulation` animacje ponownie działały płynnie.

Poprawka lub wyjaśnienie: wykorzystano `window.matchMedia()` oraz właściwość `$.fx.off` biblioteki jQuery.

## 9. Komunikacja AJAX i PHP — Lab 3

### Test 34 — poprawne zapytanie AJAX

Oczekiwany wynik: po kliknięciu przycisku „Sprawdź serwer” JavaScript wysyła zapytanie AJAX metodą GET do pliku `status.php`. Serwer zwraca odpowiedź „PHP działa”, bez przeładowania strony.

Zaobserwowany wynik: po kliknięciu przycisku pojawił się komunikat „PHP działa”. W DevTools → Network widoczne było żądanie do `http://localhost/lab3/status.php` z metodą GET i statusem 200 OK. W zakładce Response widoczna była odpowiedź „PHP działa”.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Komunikacja AJAX z serwerem działa prawidłowo.

### Test 35 — obsługa błędu 404

Oczekiwany wynik: w przypadku braku pliku `status.php` aplikacja powinna wykryć błąd żądania i wyświetlić komunikat „Nie udało się połączyć z serwerem.”.

Zaobserwowany wynik: po tymczasowej zmianie nazwy pliku `status.php` na `status-test.php` i kliknięciu przycisku „Sprawdź serwer” pojawił się komunikat o błędzie połączenia.

Poprawka lub wyjaśnienie: wykorzystano obsługę błędów zapytania AJAX. Po zakończeniu testu przywrócono pierwotną nazwę pliku `status.php`. Ponowne sprawdzenie zakończyło się poprawną odpowiedzią.

### Test 36 — timeout zapytania AJAX

Oczekiwany wynik: po przekroczeniu ustawionego limitu czasu oczekiwania aplikacja powinna przerwać zapytanie i wyświetlić komunikat o błędzie połączenia.

Zaobserwowany wynik: podczas pierwszej próby z ograniczeniem prędkości sieci do 3G odpowiedź PHP dotarła po około 2 sekundach. Następnie tymczasowo zmieniono wartość `timeout` z 5000 ms na 1000 ms. Żądanie zostało anulowane, a aplikacja wyświetliła komunikat „Nie udało się połączyć z serwerem.”.

Poprawka lub wyjaśnienie: test potwierdził działanie limitu czasu oczekiwania. Po zakończeniu testu przywrócono wartość `timeout: 5000` i ustawienie sieciowe `No throttling`. Ponownie sprawdzono działanie PHP — odpowiedź „PHP działa” została odebrana prawidłowo.

## 10. Katalog PHP — Lab 4

### Test 37 — wyświetlanie katalogu PHP

Oczekiwany wynik: strona `lab4.php` wyświetla produkty pobrane z osobnego pliku `includes/produkty.php`. Każdy produkt zawiera nazwę, kategorię, stan magazynowy i informację o dostępności.

Zaobserwowany wynik: katalog wyświetlił wszystkie cztery produkty. Dane produktów zostały poprawnie odczytane z osobnego pliku PHP.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek.

### Test 38 — filtrowanie produktów metodą GET

Oczekiwany wynik: wybranie kategorii `ksiazki` powoduje wyświetlenie wyłącznie produktów należących do tej kategorii.

Zaobserwowany wynik: po wejściu na adres `lab4.php?kategoria=ksiazki` wyświetlił się wyłącznie poradnik obsługi i konserwacji sprzętu AGD.

Poprawka lub wyjaśnienie: wykorzystano parametr `$_GET['kategoria']` do filtrowania produktów.

### Test 39 — nieprawidłowa kategoria GET

Oczekiwany wynik: przekazanie nieznanej kategorii powoduje wyświetlenie wszystkich produktów oraz komunikatu o nieprawidłowej kategorii.

Zaobserwowany wynik: po wejściu na adres `lab4.php?kategoria=nieznana` wyświetliły się wszystkie cztery produkty oraz komunikat „Nieprawidłowa kategoria. Wyświetlono wszystkie produkty.”.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Nieprawidłowe wartości GET są odrzucane.

### Test 40 — parametr GET w postaci tablicy

Oczekiwany wynik: przekazanie parametru kategorii w postaci tablicy nie powoduje błędu PHP. Wyświetlane są wszystkie produkty i komunikat o nieprawidłowej kategorii.

Zaobserwowany wynik: po wejściu na adres `lab4.php?kategoria[]=ksiazki` wyświetliły się wszystkie cztery produkty oraz komunikat o nieprawidłowej kategorii.

Poprawka lub wyjaśnienie: wykorzystano sprawdzenie `is_string()`, aby odrzucić tablicę zamiast pojedynczej wartości tekstowej.

### Test 41 — poprawny zapis wyboru produktu metodą POST

Oczekiwany wynik: po wybraniu istniejącego produktu i prawidłowej liczby sztuk dane zostają zapisane w sesji. Następuje przekierowanie do strony katalogu.

Zaobserwowany wynik: po wybraniu Termorobota MPM TRM-01 i liczby 4 wybór został zapisany i wyświetlony w sekcji „Ostatni zapisany wybór”.

Poprawka lub wyjaśnienie: dane zapisano w `$_SESSION['ostatni_wybor']`.

### Test 42 — przekroczenie stanu magazynowego

Oczekiwany wynik: próba zamówienia większej liczby sztuk niż dostępna w magazynie zostaje odrzucona.

Zaobserwowany wynik: po wybraniu słuchawek JLab GO Lux ANC, których stan magazynowy wynosi 1, i podaniu liczby 2 pojawił się komunikat „Wybrana liczba sztuk przekracza stan magazynowy.”.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Serwer sprawdza stan magazynowy niezależnie od zakresu liczby sztuk w formularzu.

### Test 43 — walidacja nieprawidłowych ilości POST

Oczekiwany wynik: serwer odrzuca wartości 0, 6, 2.5 oraz 2abc. Liczba sztuk musi być liczbą całkowitą z zakresu od 1 do 5.

Zaobserwowany wynik: wartość 0 i 6 zostały odrzucone komunikatem „Liczba sztuk musi wynosić od 1 do 5.”. Wartości 2.5 i 2abc zostały odrzucone komunikatem „Produkt i liczba sztuk muszą być liczbami całkowitymi.”.

Poprawka lub wyjaśnienie: wykorzystano `FILTER_VALIDATE_INT` oraz dodatkowe sprawdzenie zakresu liczby sztuk.

### Test 44 — brak wymaganego pola POST

Oczekiwany wynik: usunięcie atrybutu `name` z pola ilości powoduje odrzucenie formularza.

Zaobserwowany wynik: po usunięciu `name="ilosc"` formularz został odrzucony. Pojawił się komunikat „Nie przesłano prawidłowych danych formularza.”.

Poprawka lub wyjaśnienie: serwer sprawdza obecność wymaganych pól w `$_POST`.

### Test 45 — pole POST przesłane jako tablica

Oczekiwany wynik: zmiana nazwy pola na `ilosc[]` powoduje odrzucenie formularza.

Zaobserwowany wynik: po zmianie `name="ilosc"` na `name="ilosc[]"` pojawił się komunikat „Nie przesłano prawidłowych danych formularza.”.

Poprawka lub wyjaśnienie: wykorzystano `is_string()`, aby odrzucić dane przesłane w postaci tablicy.

### Test 46 — wybór nieistniejącego produktu

Oczekiwany wynik: przesłanie identyfikatora produktu, który nie istnieje w katalogu, zostaje odrzucone.

Zaobserwowany wynik: po zmianie wartości identyfikatora produktu na `999` pojawił się komunikat „Wybrany produkt nie istnieje.”.

Poprawka lub wyjaśnienie: serwer wyszukuje produkt w tablicy `$produkty` i odrzuca nieznane identyfikatory.

### Test 47 — zachowanie poprzedniego wyboru po błędzie

Oczekiwany wynik: nieprawidłowe dane POST nie nadpisują wcześniej zapisanego wyboru w sesji.

Zaobserwowany wynik: po wykonaniu prób z nieprawidłowymi ilościami, brakiem pola, tablicą i nieistniejącym produktem w sekcji „Ostatni zapisany wybór” nadal widniał Termorobot MPM TRM-01 w liczbie 4 sztuk.

Poprawka lub wyjaśnienie: zapis w sesji następuje wyłącznie po poprawnej walidacji danych.

### Test 48 — przekierowanie po poprawnym POST

Oczekiwany wynik: po poprawnym wysłaniu formularza serwer zwraca kod HTTP 303, a następnie przeglądarka wykonuje żądanie GET zakończone kodem 200 OK.

Zaobserwowany wynik: w DevTools → Network widoczne były dwa żądania: POST `lab4.php` ze statusem 303 See Other oraz GET `lab4.php` ze statusem 200 OK.

Poprawka lub wyjaśnienie: wykorzystano `header('Location: lab4.php', true, 303)` oraz `exit`. Mechanizm zapobiega ponownemu wysłaniu formularza po odświeżeniu strony.

### Test 49 — kod HTTP 400 dla błędnego POST

Oczekiwany wynik: przesłanie nieprawidłowych danych formularza powoduje zwrócenie przez serwer kodu HTTP 400 Bad Request.

Zaobserwowany wynik: po przesłaniu nieprawidłowej ilości w DevTools → Network widoczna była odpowiedź 400 Bad Request.

Poprawka lub wyjaśnienie: wykorzystano `http_response_code(400)` przy nieprawidłowych danych.

### Test 50 — nowa sesja przeglądarki

Oczekiwany wynik: otwarcie katalogu w nowej sesji przeglądarki nie wyświetla wyboru zapisanego w innej sesji.

Zaobserwowany wynik: po otwarciu katalogu w oknie incognito pojawił się komunikat „Nie zapisano jeszcze żadnego wyboru.”.

Poprawka lub wyjaśnienie: wybór produktu jest przechowywany w sesji użytkownika.

### Test 51 — bezpieczne wyświetlanie nazw produktów

Oczekiwany wynik: nazwa produktu zawierająca znaczniki HTML jest wyświetlana jako zwykły tekst, a znaczniki nie są interpretowane przez przeglądarkę.

Zaobserwowany wynik: po tymczasowej zmianie nazwy produktu na `<b>Test</b>` tekst został wyświetlony dosłownie, bez pogrubienia.

Poprawka lub wyjaśnienie: wykorzystano `htmlspecialchars()` z kodowaniem UTF-8. Po zakończeniu testu przywrócono oryginalną nazwę produktu.

### Test 52 — działanie strony głównej i podstron po zmianie struktury

Oczekiwany wynik: po przeniesieniu podstron do folderu `html` strona główna, podstrony, style CSS, obrazy i funkcje JavaScript nadal działają prawidłowo.

Zaobserwowany wynik: strona główna oraz podstrony Produkt i Kontakt otwierały się prawidłowo. Wygląd strony, obrazy, animacje jQuery i funkcja „Sprawdź serwer” działały poprawnie.

Poprawka lub wyjaśnienie: poprawiono ścieżki do przeniesionych podstron i zasobów.

### Test 53 — link do katalogu PHP

Oczekiwany wynik: w menu strony głównej znajduje się dodatkowy link „Katalog PHP”, który otwiera plik `lab4.php`.

Zaobserwowany wynik: dodano czwartą pozycję menu „Katalog PHP”. Kliknięcie linku poprawnie otworzyło katalog PHP.

Poprawka lub wyjaśnienie: dodano odnośnik `href="lab4.php"` w menu nawigacyjnym pliku `index.php`.

### *Test 54 — niezależna zmiana limitu liczby sztuk*

Oczekiwany wynik: po tymczasowej zmianie limitu maksymalnej liczby sztuk z 5 na 4 serwer odrzuca próbę zamówienia 5 sztuk, nawet jeśli taka opcja zostanie ręcznie dodana do formularza. Zamówienie 4 sztuk powinno zostać zaakceptowane.

Zaobserwowany wynik: po zmianie limitu na 4 i ręcznym dodaniu opcji 5 do formularza próba zamówienia 5 sztuk została odrzucona komunikatem „Liczba sztuk musi wynosić od 1 do 4.”. Następnie zamówienie 4 sztuk zostało zaakceptowane i zapisane w sesji.

Poprawka lub wyjaśnienie: test potwierdził, że limit jest sprawdzany po stronie PHP, a nie tylko przez opcje dostępne w formularzu. Po zakończeniu testu należy przywrócić pierwotny limit 5 sztuk w walidacji PHP i generowaniu opcji formularza.

## 11. Wspólny szablon PHP — Lab 5, Zadanie 1

### Test 55 — wyświetlanie strony głównej ze wspólnego szablonu

Oczekiwany wynik: po otwarciu pliku `index.php` wyświetla się strona główna zawierająca wspólny nagłówek, menu nawigacyjne, treść główną oraz stopkę.

Zaobserwowany wynik: strona główna wyświetliła się prawidłowo. Nagłówek, menu, zawartość strony głównej oraz stopka zostały poprawnie wyświetlone.

Poprawka lub wyjaśnienie: zawartość strony głównej została przeniesiona do pliku `html/glowna.html` i dołączona do wspólnego szablonu za pomocą instrukcji `include`.

### Test 56 — identyfikator projektu w stopce

Oczekiwany wynik: stopka wyświetla identyfikator projektu pobrany ze zmiennej PHP zadeklarowanej w pliku `index.php`.

Zaobserwowany wynik: w stopce pojawił się tekst „WWW — projekt: sklep-demo”.

Poprawka lub wyjaśnienie: identyfikator projektu przechowywany jest w zmiennej `$identyfikatorProjektu`, a następnie wyświetlany za pomocą instrukcji `echo`.

### Test 57 — przechodzenie między stroną główną a katalogiem PHP

Oczekiwany wynik: link „Katalog PHP” w menu strony głównej otwiera plik `lab4.php`. Link powrotny z katalogu PHP prowadzi do nowego pliku `index.php`.

Zaobserwowany wynik: przechodzenie między stroną główną a katalogiem PHP działa prawidłowo. Obie strony otwierają się poprawnie.

Poprawka lub wyjaśnienie: link powrotny został zaktualizowany z `index.html` na `index.php`. Katalog PHP zachował niezależne działanie.

## 12. Dynamiczne podstrony PHP — Lab 5, Zadanie 2

### Test 58 — Wyświetlanie strony głównej
- **Cel:** Sprawdzenie domyślnego ładowania strony głównej.
- **Czynności:** Otworzenie `http://localhost/lab5/index.php`.
- **Oczekiwany wynik:** Wyświetla się strona główna z odpowiednim tytułem i menu.
- **Wynik:** Pozytywny.

### Test 59 — Przełączanie podstron
- **Cel:** Sprawdzenie dynamicznego ładowania podstron.
- **Czynności:** Przejście kolejno na strony Produkt i Kontakt za pomocą menu.
- **Oczekiwany wynik:** Każda podstrona wyświetla właściwą zawartość, tytuł i aktywny element menu.
- **Wynik:** Pozytywny.

### Test 60 — Nieistniejący identyfikator podstrony
- **Cel:** Sprawdzenie obsługi nieznanego identyfikatora.
- **Czynności:** Otwarcie `index.php?idp=nieistniejaca`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu błędu 404 — nie znaleziono podstrony.
- **Wynik:** Pozytywny.

### Test 61 — Identyfikator w postaci tablicy
- **Cel:** Sprawdzenie obsługi nieprawidłowego typu parametru `idp`.
- **Czynności:** Otwarcie `index.php?idp[]=produkt`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu błędu 404 bez ostrzeżeń PHP.
- **Wynik:** Pozytywny.

### Test 62 — Próba manipulacji ścieżką
- **Cel:** Sprawdzenie zabezpieczenia przed dostępem do plików spoza mapy podstron.
- **Czynności:** Otwarcie `index.php?idp=..%2Fstatus.php`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu błędu 404.
- **Wynik:** Pozytywny.

### Test 63 — Brak pliku podstrony
- **Cel:** Sprawdzenie obsługi brakującego pliku HTML.
- **Czynności:** Tymczasowa zmiana ścieżki pliku podstrony Produkt na nieistniejący plik i otwarcie `index.php?idp=produkt`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu błędu 500 — plik podstrony jest niedostępny.
- **Wynik:** Pozytywny.

### Test 64 — Przywrócenie poprawnej ścieżki
- **Cel:** Sprawdzenie działania podstrony po przywróceniu prawidłowej ścieżki pliku.
- **Czynności:** Przywrócenie ścieżki `html/produkt.html` i ponowne otwarcie `index.php?idp=produkt`.
- **Oczekiwany wynik:** Poprawne wyświetlenie strony Produkt.
- **Wynik:** Pozytywny.


## 13. Filmy YouTube i końcowe testy — Lab 5, Zadanie 3

### Test 65 — Pusty parametr idp

- **Cel:** Sprawdzenie obsługi pustego parametru identyfikującego podstronę.
- **Czynności:** Otwarcie `index.php?idp=`.
- **Oczekiwany wynik:** Wyświetlenie strony głównej, tak samo jak przy braku parametru `idp`.
- **Wynik:** Pozytywny.

### Test 66 — Wyświetlanie błędu 404 we wspólnym szablonie

- **Cel:** Sprawdzenie wyglądu i obsługi błędu 404.
- **Czynności:** Otwarcie `index.php?idp=nieistniejaca` i sprawdzenie linku powrotnego.
- **Oczekiwany wynik:** Wyświetlenie komunikatu 404 we wspólnym szablonie strony, wraz z linkiem powrotu do strony głównej.
- **Wynik:** Pozytywny. Komunikat wyświetla się w motywie RTV AGD, a link powrotu działa prawidłowo.

### Test 67 — Wyświetlanie trzech filmów YouTube

- **Cel:** Sprawdzenie poprawnego osadzenia materiałów wideo.
- **Czynności:** Otwarcie `index.php?idp=filmy`, uruchomienie trzech filmów dotyczących produktów Samsung, JLab i MPM oraz sprawdzenie linków do YouTube.
- **Oczekiwany wynik:** Wszystkie trzy filmy są widoczne i można je odtwarzać. Linki prowadzą do odpowiednich materiałów na YouTube.
- **Wynik:** Pozytywny.

### Test 68 — Responsywność podstrony z filmami

- **Cel:** Sprawdzenie poprawnego wyświetlania filmów na małych ekranach.
- **Czynności:** Ustawienie szerokości 360 px w narzędziach deweloperskich przeglądarki oraz otwarcie strony na telefonie.
- **Oczekiwany wynik:** Filmy mieszczą się w szerokości ekranu, a strona nie posiada poziomego przewijania.
- **Wynik:** Pozytywny. Strona działa prawidłowo przy szerokości 360 px oraz na telefonie.

### Test 69 — Obsługa strony z filmami za pomocą klawiatury

- **Cel:** Sprawdzenie dostępności linków przy użyciu klawiatury.
- **Czynności:** Przechodzenie między elementami strony za pomocą klawisza Tab i aktywowanie linków klawiszem Enter.
- **Oczekiwany wynik:** Możliwość przejścia do linków pod wszystkimi filmami i ich aktywowania.
- **Wynik:** Pozytywny. Wszystkie linki można osiągnąć za pomocą klawisza Tab.

### Test 70 — Brak pliku z filmami

- **Cel:** Sprawdzenie obsługi błędu 500 dla brakującej podstrony.
- **Czynności:** Tymczasowa zmiana ścieżki `html/filmy.html` w mapie podstron na nieistniejący plik i otwarcie `index.php?idp=filmy`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu błędu 500 we wspólnym szablonie, bez ujawniania ścieżki systemowej.
- **Wynik:** Pozytywny. Wyświetlony został komunikat o niedostępności pliku.

### Test 71 — Przywrócenie pliku z filmami

- **Cel:** Sprawdzenie działania podstrony po przywróceniu prawidłowej ścieżki.
- **Czynności:** Przywrócenie ścieżki `html/filmy.html` i ponowne otwarcie `index.php?idp=filmy`.
- **Oczekiwany wynik:** Poprawne wyświetlenie wszystkich trzech filmów.
- **Wynik:** Pozytywny.

### Test 72 — Zachowanie sesji i przekierowanie formularza

- **Cel:** Sprawdzenie zachowania zapisanego wyboru produktu oraz prawidłowego działania formularza katalogu po przejściu między podstronami.
- **Czynności:** Zapisanie wyboru produktu w katalogu PHP, przejście na stronę główną i podstronę Filmy, a następnie ponowne otwarcie katalogu. Sprawdzenie w zakładce Network przekierowania po wysłaniu formularza.
- **Oczekiwany wynik:** Zapisany wybór pozostaje widoczny, a formularz wykonuje przekierowanie HTTP 303, po którym następuje żądanie GET z kodem 200.
- **Wynik:** Pozytywny. Wybór został zachowany, a w zakładce Network zaobserwowano odpowiedzi 303 i 200.

## 14. Baza danych i konfiguracja PDO — Lab 6, Zadania 1–3

### Test 73 — Kopia projektu Lab 5

- **Cel:** Sprawdzenie poprawnego utworzenia projektu Lab 6 na podstawie Lab 5.
- **Czynności:** Otwarcie `http://localhost/lab6/` i sprawdzenie strony głównej, podstron, katalogu produktów, filtrowania, sesji, obrazów, stylów, animacji i filmów.
- **Oczekiwany wynik:** Projekt działa tak jak w Lab 5, a dotychczasowe funkcjonalności zostały zachowane.
- **Wynik:** Pozytywny. Dotychczasowe funkcjonalności projektu działają prawidłowo.

### Test 74 — Utworzenie panelu CMS

- **Cel:** Sprawdzenie dostępności przygotowanego pliku panelu administracyjnego.
- **Czynności:** Otwarcie `http://localhost/lab6/admin/admin.php`.
- **Oczekiwany wynik:** Wyświetlenie komunikatu „Panel CMS w przygotowaniu” oraz linku powrotu do strony głównej.
- **Wynik:** Pozytywny.

### Test 75 — Utworzenie bazy danych i migracja treści

- **Cel:** Sprawdzenie poprawnego utworzenia bazy danych i tabeli oraz przeniesienia dotychczasowych treści.
- **Czynności:** Otwarcie bazy `moja_strona` w phpMyAdmin i sprawdzenie tabeli `page_list`.
- **Oczekiwany wynik:** Tabela zawiera pięć rekordów: stronę główną, produkt, kontakt, filmy oraz stronę testową. Cztery rekordy mają status `1`, a jeden status `0`.
- **Wynik:** Pozytywny. Wszystkie pięć rekordów zostało zaimportowanych prawidłowo.

### Test 76 — Połączenie z bazą danych za pomocą PDO

- **Cel:** Sprawdzenie dostępności rozszerzenia PDO MySQL oraz poprawności konfiguracji połączenia.
- **Czynności:** Sprawdzenie rozszerzeń PHP za pomocą `php -m` z użyciem pełnej ścieżki do interpretera oraz wykonanie testowego zapytania z pliku `cfg.php`.
- **Oczekiwany wynik:** Dostępne są rozszerzenia `PDO` i `pdo_mysql`. Połączenie z bazą danych działa, a zapytanie zwraca liczbę pięciu rekordów.
- **Wynik:** Pozytywny. Połączenie PDO działa, liczba rekordów: 5.

### Test 77 — Ochrona plików konfiguracyjnych przez .gitignore

- **Cel:** Sprawdzenie, czy pliki zawierające dane dostępowe nie zostaną przypadkowo dodane do repozytorium.
- **Czynności:** W katalogu głównym projektu wykonanie polecenia `git check-ignore hasla.txt lab6/cfg.php`.
- **Oczekiwany wynik:** Git wskazuje oba pliki jako ignorowane. Plik `lab6/cfg.example.php` pozostaje dostępny do śledzenia w repozytorium i nie zawiera prawdziwych danych dostępowych.
- **Wynik:** Pozytywny. Pliki `hasla.txt` i `lab6/cfg.php` są ignorowane, a `cfg.example.php` nie jest objęty regułą ignorowania.

## 15. Dynamiczny CMS i obsługa błędów — Lab 6, Zadania 4–5

### Test 78 — Dynamiczne menu i tytuł podstrony

- **Cel:** Sprawdzenie pobierania nazw podstron bezpośrednio z bazy danych.
- **Czynności:** Zmieniono `page_title` rekordu `produkt` w phpMyAdmin. Następnie sprawdzono menu i tytuł strony po odświeżeniu.
- **Oczekiwany wynik:** Zmieniona nazwa pojawia się automatycznie w menu i tytule dokumentu.
- **Wynik:** Pozytywny. Zmiana została wyświetlona prawidłowo. Przywrócono oryginalną nazwę.

### Test 79 — Dynamiczna treść podstrony

- **Cel:** Sprawdzenie pobierania treści podstrony z bazy danych.
- **Czynności:** Zmieniono nagłówek `h2` w polu `page_content` rekordu `produkt` i sprawdzono wyświetlaną stronę.
- **Oczekiwany wynik:** Zmieniona treść pojawia się bez konieczności edycji plików PHP.
- **Wynik:** Pozytywny. Zmiana została wyświetlona prawidłowo. Przywrócono oryginalną treść.

### Test 80 — Ukrywanie nieopublikowanej podstrony

- **Cel:** Sprawdzenie, czy podstrony ze statusem `0` są niedostępne dla użytkowników.
- **Czynności:** Otworzono `index.php?idp=strona-testowa`.
- **Oczekiwany wynik:** Podstrona nie jest dostępna, a serwer zwraca błąd 404.
- **Wynik:** Pozytywny. Wyświetlono błąd 404.

### Test 81 — Nieznany alias

- **Cel:** Sprawdzenie obsługi aliasu, który nie istnieje w bazie danych.
- **Czynności:** Otworzono `index.php?idp=nieistniejaca`.
- **Oczekiwany wynik:** Wyświetlenie błędu 404.
- **Wynik:** Pozytywny. Serwer zwrócił błąd 404.

### Test 82 — Parametr idp będący tablicą

- **Cel:** Sprawdzenie walidacji parametru `idp`.
- **Czynności:** Otworzono `index.php?idp[]=filmy`.
- **Oczekiwany wynik:** Wyświetlenie błędu 404 bez ostrzeżeń PHP.
- **Wynik:** Pozytywny.

### Test 83 — Próba przejścia do pliku konfiguracyjnego

- **Cel:** Sprawdzenie ochrony przed przekazaniem nieprawidłowego aliasu zawierającego ścieżkę do pliku.
- **Czynności:** Otworzono `index.php?idp=../cfg.php`.
- **Oczekiwany wynik:** Wyświetlenie błędu 404 bez ujawnienia zawartości pliku konfiguracyjnego.
- **Wynik:** Pozytywny.

### Test 84 — Próba SQL Injection

- **Cel:** Sprawdzenie odporności zapytania SQL na próbę wstrzyknięcia kodu.
- **Czynności:** Przekazano parametr odpowiadający wartości `' OR 1=1--`.
- **Oczekiwany wynik:** Wyświetlenie błędu 404. Nie powinny zostać wyświetlone inne podstrony.
- **Wynik:** Pozytywny.

### Test 85 — Obsługa błędu połączenia z bazą danych

- **Cel:** Sprawdzenie zachowania aplikacji w przypadku niedostępności bazy danych.
- **Czynności:** Tymczasowo zmieniono port MySQL w `cfg.php` z 3306 na 3307.
- **Oczekiwany wynik:** Wyświetlenie ogólnego komunikatu o błędzie serwera bez ujawniania danych dostępowych ani szczegółów technicznych.
- **Wynik:** Pozytywny. Wyświetlono ogólny komunikat o błędzie serwera.

### Test 86 — Weryfikacja kodu HTTP 500

- **Cel:** Sprawdzenie, czy awaria połączenia z bazą danych zwraca odpowiedni kod HTTP.
- **Czynności:** Wykonano polecenie `curl.exe -I http://localhost/lab6/` podczas ustawienia nieprawidłowego portu MySQL.
- **Oczekiwany wynik:** Serwer zwraca `HTTP/1.1 500 Internal Server Error`.
- **Wynik:** Pozytywny. Serwer zwrócił kod HTTP 500.

### Test 87 — Przywrócenie połączenia z bazą danych

- **Cel:** Sprawdzenie poprawnego działania aplikacji po usunięciu przyczyny błędu.
- **Czynności:** Przywrócono prawidłowy port MySQL 3306 w `cfg.php`.
- **Oczekiwany wynik:** Strona główna, menu i podstrony ponownie działają prawidłowo.
- **Wynik:** Pozytywny. Połączenie zostało przywrócone, a strona działa prawidłowo.

### Test 88 — Kontrola składni PHP

- **Cel:** Sprawdzenie poprawności składni pliku głównego aplikacji.
- **Czynności:** Wykonano polecenie `php.exe -l index.php`.
- **Oczekiwany wynik:** Brak błędów składni PHP.
- **Wynik:** Pozytywny. `No syntax errors detected in index.php`.

### Test 89 — Dodawanie nowej podstrony do bazy danych

- **Cel:** Sprawdzenie, czy nowa podstrona dodana bezpośrednio do bazy danych jest automatycznie obsługiwana przez CMS.
- **Czynności:** Dodano w phpMyAdmin nowy rekord do tabeli `page_list`, zawierający unikalny alias, tytuł, treść i status `1`. Następnie sprawdzono dostępność podstrony pod jej aliasem.
- **Oczekiwany wynik:** Nowa podstrona wyświetla się prawidłowo, a jej tytuł pojawia się w dynamicznym menu.
- **Wynik:** Pozytywny.

### Test 90 — Kontrola unikalności aliasu

- **Cel:** Sprawdzenie, czy baza danych nie pozwala na dodanie dwóch podstron z takim samym aliasem.
- **Czynności:** Podjęto próbę dodania kolejnego rekordu z aliasem już istniejącym w tabeli `page_list`.
- **Oczekiwany wynik:** Baza danych odrzuca dodanie rekordu z powodu naruszenia ograniczenia `UNIQUE`.
- **Wynik:** Pozytywny. Dodanie rekordu z powtórzonym aliasem zostało odrzucone.

### Test 91 — Publikowanie szkicu

- **Cel:** Sprawdzenie, czy zmiana statusu podstrony z `0` na `1` powoduje jej udostępnienie.
- **Czynności:** Zmieniono status rekordu `strona-testowa` z `0` na `1` w phpMyAdmin. Następnie odświeżono menu i otwarto podstronę.
- **Oczekiwany wynik:** Podstrona pojawia się w menu i jest dostępna pod swoim aliasem.
- **Wynik:** Pozytywny.

### Test 92 — Ponowne ukrycie opublikowanej podstrony

- **Cel:** Sprawdzenie, czy zmiana statusu podstrony z `1` na `0` ponownie blokuje jej dostępność.
- **Czynności:** Przywrócono status `strona-testowa` do wartości `0`, odświeżono menu i ponownie otwarto jej adres.
- **Oczekiwany wynik:** Podstrona znika z menu, a próba jej otwarcia kończy się błędem 404.
- **Wynik:** Pozytywny.

**Podsumowanie:** Wszystkie opisane testy Lab 6 zakończyły się wynikiem pozytywnym. Sprawdzono zachowanie dotychczasowych funkcjonalności projektu, poprawność połączenia z bazą danych, dynamiczne pobieranie treści i menu, obsługę szkiców, walidację aliasów, odporność na nieprawidłowe parametry i próby SQL Injection oraz obsługę błędów połączenia z bazą danych.