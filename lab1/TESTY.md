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

### Test 16 — poprawne wysłanie formularza

Oczekiwany wynik: formularz zostaje wysłany, a w adresie URL pojawiają się cztery parametry: email, produkt, ilosc i wiadomosc.

Zaobserwowany wynik: formularz został wysłany. W adresie URL pojawiły się parametry email, produkt, ilosc i wiadomosc. Znak @ w adresie e-mail został zakodowany jako %40, a spacje w wiadomości jako +.

Poprawka lub wyjaśnienie: nie było potrzeby wprowadzania poprawek. Parametry formularza są przekazywane w adresie URL.

## 5. Eksperyment z atrybutem name

### Test 17 — usunięcie name z pola e-mail

Oczekiwany wynik: po usunięciu name="email" wartość adresu e-mail nie zostanie przekazana w parametrach formularza, mimo pozostawienia id i etykiety.

Zaobserwowany wynik: po wysłaniu formularza w adresie URL pojawiły się parametry produkt, ilosc i wiadomosc. Parametr email nie wystąpił.

Poprawka lub wyjaśnienie: atrybut name określa nazwę parametru przekazywanego podczas wysyłania formularza. Atrybut id służy m.in. do powiązania pola z etykietą, ale sam nie powoduje przesłania wartości. Po teście przywrócono atrybut name="email".

## 6. Metoda wysyłania formularza

### Test 18 — sprawdzenie metody GET w DevTools

Oczekiwany wynik: w narzędziach deweloperskich, w karcie Network, widoczne jest żądanie formularza z metodą GET.

Zaobserwowany wynik: w kodzie formularza znajduje się method="get". Po wysłaniu formularza parametry pojawiły się w adresie URL, co potwierdza działanie metody GET. Nie udało się odnaleźć żądania na liście Network.

Poprawka lub wyjaśnienie: metoda GET została potwierdzona na podstawie kodu HTML i adresu URL. Wartość parametru method określa sposób wysyłania danych formularza.
