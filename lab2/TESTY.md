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