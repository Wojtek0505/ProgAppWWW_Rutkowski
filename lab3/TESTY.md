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