# Projekt - Aplikacje internetowe
## Opis
Projekt na przedmiot "Aplikacje internetowe" na II roku studiów inżynierskich na kierunku Informatyka i ekonometria na UR. Aplikacja została stworzona w celu ułatwienia pracy lekarzom oraz usprawnienia procesu rejestracji pacjentów na wizyty. Pacjent może w prosty sposób umówić wizytę, wybierając termin oraz zabieg, a lekarz ma możliwość zaakceptowania lub odrzucenia zgłoszenia. Dodatkowo administrator ma możliwość zarządzania danymi lekarzy w systemie.  

## Technologie
Projekt został wykonany przy użyciu:
* PHP 8.1
* Laravel 10.0 
* MySQL (baza danych)
* Bootstrap 5.3
* Composer (menedżer pakietów PHP)
* XAMPP / WAMP / MAMP – środowisko lokalne (Apache + MySQL + PHP)
* Visual Studio Code 

## Wymagania
Do uruchomienia projektu potrzebne są:
* Zainstalowane środowisko PHP (np. XAMPP/WAMP/MAMP)
* Zainstalowany Composer
* Baza danych MySQL
* (opcjonalnie) Visual Studio Code lub inne IDE

## Instrukcja uruchomienia
1. Zainstaluj wymagane komponenty
2. Sklonuj repozytorium komendą `git clone https://github.com/michalzychowski/Projekt_Aplikacje_internetowe.git`
3. Wejdź do katalogu projektu i zainstaluj zależności: `composer install`
4. Skopiuj plik .env.example i zmień jego nazwę na .env. Uzupełnij dane dotyczące bazy danych (host, login, hasło).
5. Wygeneruj klucz aplikacji: `php artisan key:generate`
6. Uruchom migracje i seedy, aby przygotować bazę danych: `php artisan migrate --seed`
7. Uruchom serwer developerski: `php artisan serve`
8. Otwórz przeglądarkę i przejdź do http://localhost:8000

## Licencja
Projekt jest dostępny na licencji [MIT](LICENSE).
