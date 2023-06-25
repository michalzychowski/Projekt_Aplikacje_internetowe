<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Tworzenie dwóch lekarzy
        $doctor1 = User::create([
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'phone_number' => '123456789',
            'role' => 'doctor',
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'last_name' => 'Smith',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone_number' => '987654321',
            'role' => 'admin',
        ]);

        // Tworzenie dwóch zabiegów
        $treatment1 = Treatment::create([
            'name' => 'Badania lekarskie + raport o stanie zębów',
            'price' => 50.00,
        ]);

        $treatment2 = Treatment::create([
            'name' => 'Wizyta adaptacyjna dziecka do 5 lat',
            'price' => 110.00,
        ]);

        $treatment3 = Treatment::create([
            'name' => 'Wizyta kontrolna po 6 m-cach',
            'price' => 50.00,
        ]);

        $treatment4 = Treatment::create([
            'name' => 'Konsultacja lekarza specjalisty',
            'price' => 100.00,
        ]);

        $treatment5 = Treatment::create([
            'name' => 'Wypełnienie w zębie stałym',
            'price' => 250.00,
        ]);

        $treatment6 = Treatment::create([
            'name' => 'Wypełnienie w zębie mlecznym',
            'price' => 190.00,
        ]);

        $treatment7 = Treatment::create([
            'name' => 'Odbudowa zęba stałego',
            'price' => 400.00,
        ]);

        $treatment8 = Treatment::create([
            'name' => 'Opatrunek',
            'price' => 150.00,
        ]);

        $treatment9 = Treatment::create([
            'name' => 'Licówka kompozytowa',
            'price' => 900.00,
        ]);
        $treatment10 = Treatment::create([
            'name' => 'Dewitalizacja (zatrucie) zęba',
            'price' => 170.00,
        ]);

        $treatment11 = Treatment::create([
            'name' => 'Leczenie kanałowe zęba 1 kanałowego jednowizytowe',
            'price' => 900.00,
        ]);

        $treatment12 = Treatment::create([
            'name' => 'Leczenie kanałowe zęba 2 kanałowego jednowizytowe',
            'price' => 1000.00,
        ]);

        $treatment13 = Treatment::create([
            'name' => 'Leczenie kanałowe zęba 3 kanałowego jednowizytowe',
            'price' => 1100.00,
        ]);

        $treatment14 = Treatment::create([
            'name' => 'Leczenie kanałowe zęba 4 kanałowego jednowizytowe',
            'price' => 1200.00,
        ]);

        $treatment15 = Treatment::create([
            'name' => 'Dopłata do leczenia u specjalisty',
            'price' => 300.00,
        ]);

        $treatment16 = Treatment::create([
            'name' => 'Reendo zęba 1 kanałowego',
            'price' => 1000.00,
        ]);

        $treatment17 = Treatment::create([
            'name' => 'Reendo zęba 2 kanałowego',
            'price' => 1100.00,
        ]);

        $treatment18 = Treatment::create([
            'name' => 'Reendo zęba 3 kanałowego',
            'price' => 1200.00,
        ]);

        $treatment19 = Treatment::create([
            'name' => 'Reendo zęba 4 kanałowego',
            'price' => 1300.00,
        ]);

        $treatment20 = Treatment::create([
            'name' => 'Dopłata do leczenia u specjalisty',
            'price' => 300.00,
        ]);
        $treatment21 = Treatment::create([
            'name' => 'Wybielanie zębów martwych za 1 ząb',
            'price' => 400.00,
        ]);

        $treatment22 = Treatment::create([
            'name' => 'Wybielanie zębów żywych',
            'price' => 1200.00,
        ]);

        $treatment23 = Treatment::create([
            'name' => 'Korona porcelanowa na metalu',
            'price' => 1500.00,
        ]);

        $treatment24 = Treatment::create([
            'name' => 'Punkt mostu porcelana na metalu',
            'price' => 1500.00,
        ]);

        $treatment25 = Treatment::create([
            'name' => 'Korona tymczasowa',
            'price' => 330.00,
        ]);

        $treatment26 = Treatment::create([
            'name' => 'Wkład koronowo-korzeniowy',
            'price' => 800.00,
        ]);

        $treatment27 = Treatment::create([
            'name' => 'Proteza całkowita',
            'price' => 1800.00,
        ]);

        $treatment28 = Treatment::create([
            'name' => 'Proteza częściowa',
            'price' => 1400.00,
        ]);

        $treatment29 = Treatment::create([
            'name' => 'Proteza szkieletowa',
            'price' => 2500.00,
        ]);

        $treatment30 = Treatment::create([
            'name' => 'Proteza szkieletowa na zatrzaskach',
            'price' => 3000.00,
        ]);

        $treatment31 = Treatment::create([
            'name' => 'Nakład / endokorona',
            'price' => 900.00,
        ]);

        $treatment32 = Treatment::create([
            'name' => 'Korona pełnoceramiczna',
            'price' => 2200.00,
        ]);

        $treatment33 = Treatment::create([
            'name' => 'Skan protetyczny / Wyciski diagnostyczne',
            'price' => 200.00,
        ]);
        $treatment34 = Treatment::create([
            'name' => 'Usuniecie zęba stałego',
            'price' => 300.00,
        ]);

        $treatment35 = Treatment::create([
            'name' => 'Usunięcie zęba mlecznego',
            'price' => 250.00,
        ]);

        $treatment36 = Treatment::create([
            'name' => 'Usunięcie zęba chirurgicznie',
            'price' => 1000.00,
        ]);

        $treatment37 = Treatment::create([
            'name' => 'Szycie chirurgiczne',
            'price' => 120.00,
        ]);

        $treatment38 = Treatment::create([
            'name' => 'Podcięcie wędzidełka',
            'price' => 350.00,
        ]);

        $treatment39 = Treatment::create([
            'name' => 'Resekcje wierzchołka korzenia',
            'price' => 1700.00,
        ]);

        $treatment40 = Treatment::create([
            'name' => 'Zamknięcie połączenia ustno-zatokowego',
            'price' => 500.00,
        ]);

        $treatment41 = Treatment::create([
            'name' => 'Konsultacja implantologiczna',
            'price' => 100.00,
        ]);

        $treatment42 = Treatment::create([
            'name' => 'Implant – część chirurgiczna',
            'price' => 4000.00,
        ]);

        $treatment43 = Treatment::create([
            'name' => 'Odbudowa na implancie',
            'price' => 4500.00,
        ]);

        $treatment44 = Treatment::create([
            'name' => 'Uzupełnienie ubytków kości (augmentacja)',
            'price' => 2000.00,
        ]);

        $treatment45 = Treatment::create([
            'name' => 'Podniesienie dna zatoki',
            'price' => 3700.00,
        ]);
        $treatment46 = Treatment::create([
            'name' => 'Kiretaż zamknięty 1/4 łuku (3-4 zęby)',
            'price' => 400.00,
        ]);

        $treatment47 = Treatment::create([
            'name' => 'Kiretaż otwarty 1/4 łuku (3-4 zęby)',
            'price' => 600.00,
        ]);

        $treatment48 = Treatment::create([
            'name' => 'Vector całość jamy ustnej',
            'price' => 600.00,
        ]);

        $treatment49 = Treatment::create([
            'name' => 'Vector 1 łuk',
            'price' => 400.00,
        ]);

        $treatment50 = Treatment::create([
            'name' => 'Wydłużenie korony klinicznej z ostetomia',
            'price' => 1200.00,
        ]);

        $treatment51 = Treatment::create([
            'name' => 'Płukanie kieszonek dziąsłowych + założenie leku za 1 ząb',
            'price' => 100.00,
        ]);

        $treatment52 = Treatment::create([
            'name' => 'Szynowanie zębów rozchwianych Fiber Splint za 1 ząb',
            'price' => 250.00,
        ]);

        $treatment53 = Treatment::create([
            'name' => 'Fluoryzacja pozabiegowa',
            'price' => 100.00,
        ]);

        $treatment54 = Treatment::create([
            'name' => 'Lakowanie zębów za 1 ząb',
            'price' => 150.00,
        ]);

        $treatment55 = Treatment::create([
            'name' => 'Lakowanie zębów poszerzone za 1 ząb',
            'price' => 200.00,
        ]);

        $treatment56 = Treatment::create([
            'name' => 'Lakierowanie zębów stałych',
            'price' => 180.00,
        ]);

        $treatment57 = Treatment::create([
            'name' => 'Lakierowanie zębów mlecznych',
            'price' => 140.00,
        ]);

        $treatment58 = Treatment::create([
            'name' => 'Usunięcie kamienia nad i poddziąsłowego za 1 łuk',
            'price' => 150.00,
        ]);

        $treatment59 = Treatment::create([
            'name' => 'Piaskowanie osadów za 1 łuk',
            'price' => 150.00,
        ]);

        $treatment60 = Treatment::create([
            'name' => 'Konsultacja',
            'price' => 150.00,
        ]);

        $treatment61 = Treatment::create([
            'name' => 'Konsultacja z wyciskami',
            'price' => 220.00,
        ]);

        $treatment62 = Treatment::create([
            'name' => 'Plan leczenia',
            'price' => 300.00,
        ]);

        $treatment63 = Treatment::create([
            'name' => 'Scan ortodontyczny',
            'price' => 200.00,
        ]);

        $treatment64 = Treatment::create([
            'name' => 'Pakiet diagnostyczny',
            'price' => 240.00,
        ]);

        $treatment65 = Treatment::create([
            'name' => 'Przerzut podniebienny',
            'price' => 500.00,
        ]);

        $treatment66 = Treatment::create([
            'name' => 'Aparat stały metalowy 1 łuk',
            'price' => 2300.00,
        ]);

        $treatment67 = Treatment::create([
            'name' => 'Aparat stały metalowy 2 łuki',
            'price' => 4600.00,
        ]);

        $treatment68 = Treatment::create([
            'name' => 'Aparat stały samoligaturujący 1 łuk',
            'price' => 3000.00,
        ]);

        $treatment69 = Treatment::create([
            'name' => 'Aparat stały samoligaturujący 2 łuki',
            'price' => 6000.00,
        ]);

        $treatment70 = Treatment::create([
            'name' => 'Aparat stały estetyczny 1 łuk',
            'price' => 3800.00,
        ]);

        $treatment71 = Treatment::create([
            'name' => 'Aparat stały estetyczny 2 łuki',
            'price' => 7600.00,
        ]);

        $treatment72 = Treatment::create([
            'name' => 'Aparat stały samoligaturujący estetyczny 1 łuk',
            'price' => 3800.00,
        ]);

        $treatment73 = Treatment::create([
            'name' => 'Aparat stały samoligaturujący estetyczny 2 łuki',
            'price' => 7600.00,
        ]);

        $treatment74 = Treatment::create([
            'name' => 'Wizyta z aktywacją (kontrola z aparatem stałym)',
            'price' => 250.00,
        ]);

        $treatment75 = Treatment::create([
            'name' => 'Zdjęcie aparatu stałego + retencja 1 łuk',
            'price' => 800.00,
        ]);

        $treatment76 = Treatment::create([
            'name' => 'Aparat zdejmowany',
            'price' => 1300.00,
        ]);

        $treatment77 = Treatment::create([
            'name' => 'Wizyta z aparatem zdejmowanym',
            'price' => 200.00,
        ]);

        $treatment78 = Treatment::create([
            'name' => 'Naprawa aparatu zdejmowanego',
            'price' => 300.00,
        ]);

        $treatment79 = Treatment::create([
            'name' => 'Deprogramator',
            'price' => 450.00,
        ]);
        $treatment80 = Treatment::create([
            'name' => 'Badanie i diagnostyka bólów i trzasków w stawnie skroniowo-żuchwowym',
            'price' => 500.00,
        ]);

        $treatment81 = Treatment::create([
            'name' => 'Deprogramator Koisa',
            'price' => 450.00,
        ]);

        $treatment82 = Treatment::create([
            'name' => 'Szyna neuromięśniowa',
            'price' => 850.00,
        ]);

        $treatment83 = Treatment::create([
            'name' => 'Zdjęcie wewnątrzustne cyfrowe',
            'price' => 40.00,
        ]);

        $treatment84 = Treatment::create([
            'name' => 'Zdjęcie pantomograficzne cyfrowe',
            'price' => 100.00,
        ]);

        $treatment85 = Treatment::create([
            'name' => 'Zdjęcie cefalometryczne cyfrowe',
            'price' => 100.00,
        ]);

        $treatment86 = Treatment::create([
            'name' => 'Zdjęcie zgryzowe cyfrowe jedna część',
            'price' => 60.00,
        ]);

        $treatment87 = Treatment::create([
            'name' => 'CBCT',
            'price' => 280.00,
        ]);

        $treatment88 = Treatment::create([
            'name' => 'Tomografia szczęka+żuchwa',
            'price' => 280.00,
        ]);

        $treatment89 = Treatment::create([
            'name' => 'Tomografia szczęka',
            'price' => 200.00,
        ]);

        $treatment90 = Treatment::create([
            'name' => 'Tomografia żuchwa',
            'price' => 200.00,
        ]);

        $treatment91 = Treatment::create([
            'name' => 'Tomografia wycinka 5×5',
            'price' => 170.00,
        ]);

        $treatment92 = Treatment::create([
            'name' => 'Tomografia zatok szczękowych',
            'price' => 220.00,
        ]);

        $treatment93 = Treatment::create([
            'name' => 'Znieczulenie',
            'price' => 50.00,
        ]);

        $treatment94 = Treatment::create([
            'name' => '1 strona wyciągu lub odpisu dokumentacji medycznej',
            'price' => 9.00,
        ]);

        $treatment95 = Treatment::create([
            'name' => '1 strona kopii dokumentacji medycznej',
            'price' => 0.35,
        ]);

        $treatment96 = Treatment::create([
            'name' => 'Wyciąg, odpis lub kopia na elektronicznym nośniku danych',
            'price' => 1.90,
        ]);


        // Tworzenie dwóch wizyt, jedna dla każdego lekarza
        $appointment1 = Appointment::create([
            'date' => '2023-06-20',
            'status' => 'confirmed',
            'user_id' => $doctor1->id,
            'patient_name'=> 'Pavel',
            'patient_surname'=> 'Stano',
            'patient_email'=> 'stano@gmail.com',
            'treatment_id' => $treatment2->id,
        ]);

        $appointment2 = Appointment::create([
            'date' => '2023-06-21',
            'status' => 'pending',
            'patient_name'=> 'Pavel',
            'patient_surname'=> 'Doe',
            'patient_email'=> 'doe12@gmail.com',
            'user_id' => $admin->id,
            'treatment_id' => $treatment1->id,
        ]);
    }
}
