@extends('layout')
@section('title', 'Przychodnia dentystyczna')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nazwa zabiegu</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Badania, kontrole i konsultacje</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Badania lekarskie + raport o stanie zębów</td>
                    <td>50 – 100 zł</td>
                </tr>
                <tr>
                    <td>Wizyta adaptacyjna dziecka do 5 lat</td>
                    <td>110 zł</td>
                </tr>
                <tr>
                    <td>Wizyta kontrolna po 6 m-cach</td>
                    <td>50 zł</td>
                </tr>
                <tr>
                    <td>Konsultacja lekarza specjalisty</td>
                    <td>100 – 200 zł</td>
                </tr>
                <tr>
                    <td>Leczenia zachowawcze</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Wypełnienie w zębie stałym</td>
                    <td>250 – 500 zł</td>
                </tr>
                <tr>
                    <td>Wypełnienie w zębie mlecznym</td>
                    <td>190 – 230 zł</td>
                </tr>
                <tr>
                    <td>Odbudowa zęba stałego</td>
                    <td>400 – 700 zł</td>
                </tr>
                <tr>
                    <td>Opatrunek</td>
                    <td>150 zł</td>
                </tr>
                <tr>
                    <td>Licówka kompozytowa</td>
                    <td>900 zł</td>
                </tr>
                <tr>
                    <td>Leczenie endodontyczne</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Dewitalizacja (zatrucie) zęba</td>
                    <td>170 zł</td>
                </tr>
                <tr>
                    <td>Leczenie kanałowe zęba 1 kanałowego jednowizytowe</td>
                    <td>900 zł</td>
                </tr>
                <tr>
                    <td>Leczenie kanałowe zęba 2 kanałowego jednowizytowe</td>
                    <td>1000 zł</td>
                </tr>
                <tr>
                    <td>Leczenie kanałowe zęba 3 kanałowego jednowizytowe</td>
                    <td>1100 zł</td>
                </tr>
                <tr>
                    <td>Leczenie kanałowe zęba 4 kanałowego jednowizytowe</td>
                    <td>1200 zł</td>
                </tr>
                <tr>
                    <td>Dopłata do leczenie u specjalisty</td>
                    <td>100 – 300 zł</td>
                </tr>
                <tr>
                    <td>Leczenie kanałowe – reendo (powtórne leczenie kanałowe)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Reendo zęba 1 kanałowego</td>
                    <td>1000 zł</td>
                </tr>
                <tr>
                    <td>Reendo zęba 2 kanałowego</td>
                    <td>1100 zł</td>
                </tr>
                <tr>
                    <td>Reendo zęba 3 kanałowego</td>
                    <td>1200 zł</td>
                </tr>
                <tr>
                    <td>Reendo zęba 4 kanałowego</td>
                    <td>1300 zł</td>
                </tr>
                <tr>
                    <td>Dopłata do leczenie u specjalisty</td>
                    <td>100 – 300 zł</td>
                </tr>
                <tr>
                    <td>Stomatologia estetyczna</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Wybielanie zębów martwych za 1 ząb</td>
                    <td>400 zł</td>
                </tr>
                <tr>
                    <td>Wybielanie zębów żywych</td>
                    <td>1200 zł</td>
                </tr>
                <tr>
                    <td>Protetyka</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Korona porcelanowa na metalu</td>
                    <td>1500 zł</td>
                </tr>
                <tr>
                    <td>Punkt mostu porcelana na metalu</td>
                    <td>1500 zł</td>
                </tr>
                <tr>
                    <td>Korona tymczasowa</td>
                    <td>170 – 330 zł</td>
                </tr>
                <tr>
                    <td>Wkład koronowo-korzeniowy</td>
                    <td>700 – 800 zł</td>
                </tr>
                <tr>
                    <td>Proteza całkowita</td>
                    <td>1800 zł</td>
                </tr>
                <tr>
                    <td>Proteza częściowa</td>
                    <td>1400 zł</td>
                </tr>
                <tr>
                    <td>Proteza szkieletowa</td>
                    <td>2500 zł</td>
                </tr>
                <tr>
                    <td>Proteza szkieletowa na zatrzaskach</td>
                    <td>2900 – 3000 zł</td>
                </tr>
                <tr>
                    <td>Nakład / endokorona</td>
                    <td>900 zł</td>
                </tr>
                <tr>
                    <td>Korona pełnoceramiczna</td>
                    <td>2200 zł</td>
                </tr>
                <tr>
                    <td>Skan protetyczny / Wyciski diagnostyczne</td>
                    <td>200 zł</td>
                </tr>
                <tr>
                    <td>Chirurgia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Usuniecie zęba stałego</td>
                    <td>250 – 300 zł</td>
                </tr>
                <tr>
                    <td>Usunięcie zęba mlecznego</td>
                    <td>180 – 250 zł</td>
                </tr>
                <tr>
                    <td>Usunięcie zęba chirurgicznie</td>
                    <td>500 – 1000 zł</td>
                </tr>
                <tr>
                    <td>Szycie chirurgiczne</td>
                    <td>60 – 120 zł</td>
                </tr>
                <tr>
                    <td>Podcięcie wędzidełka</td>
                    <td>350 zł</td>
                </tr>
                <tr>
                    <td>Resekcje wierzchołka korzenia</td>
                    <td>1500 – 1700 zł</td>
                </tr>
                <tr>
                    <td>Zamknięcie połączenia ustno-zatokowego</td>
                    <td>500 zł</td>
                </tr>
                <tr>
                    <td>Implantologia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Konsultacja implantologiczna</td>
                    <td>100 zł</td>
                </tr>
                <tr>
                    <td>Implant – część chirurgiczna</td>
                    <td>3500 – 4000 zł</td>
                </tr>
                <tr>
                    <td>Odbudowa na implancie</td>
                    <td>3100 – 4500 zł</td>
                </tr>
                <tr>
                    <td>Uzupełnienie ubytków kości (augmentacja)</td>
                    <td>500 – 2000 zł</td>
                </tr>
                <tr>
                    <td>Podniesienie dna zatoki</td>
                    <td>2200 – 3700 zł</td>
                </tr>
                <tr>
                    <td>Periodontologia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Kiretaż zamknięty 1/4 łuku (3-4 zęby)</td>
                    <td>400 zł</td>
                </tr>
                <tr>
                    <td>Kiretaż otwarty 1/4 łuku (3-4 zęby)</td>
                    <td>600 zł</td>
                </tr>
                <tr>
                    <td>Vector całość jamy ustnej</td>
                    <td>600 zł</td>
                </tr>
                <tr>
                    <td>Vector 1 łuk</td>
                    <td>400 zł</td>
                </tr>
                <tr>
                    <td>Wydłużenie korony klinicznej z ostetomia</td>
                    <td>1200 zł</td>
                </tr>
                <tr>
                    <td>Płukanie kieszonek dziąsłowych + założenie leku za 1 ząb</td>
                    <td>50 – 100 zł</td>
                </tr>
                <tr>
                    <td>Szynowanie zębów rozchwianych Fiber Splint za 1 ząb</td>
                    <td>250 zł</td>
                </tr>
                <tr>
                    <td>Profilaktyka</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Fluoryzacja pozabiegowa</td>
                    <td>80 - 100 zł</td>
                </tr>
                <tr>
                    <td>Lakowanie zębów za 1 ząb</td>
                    <td>150 zł</td>
                </tr>
                <tr>
                    <td>Lakowanie zębów poszerzone za 1 ząb</td>
                    <td>200 zł</td>
                </tr>
                <tr>
                    <td>Lakierowanie zębów stałych</td>
                    <td>180 zł</td>
                </tr>
                <tr>
                    <td>Lakierowanie zębów mlecznych</td>
                    <td>140 zł</td>
                </tr>
                <tr>
                    <td>Usunięcie kamienia nad i poddziąsłowego za 1 łuk</td>
                    <td>110 - 150 zł</td>
                </tr>
                <tr>
                    <td>Piaskowanie osadów za 1 łuk</td>
                    <td>110 - 150 zł</td>
                </tr>
                <tr>
                    <td>Ortodoncja</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Konsultacja</td>
                    <td>100 - 150 zł</td>
                </tr>
                <tr>
                    <td>Konsultacja z wyciskami</td>
                    <td>150 - 220 zł</td>
                </tr>
                <tr>
                    <td>Plan leczenia</td>
                    <td>150 - 300 zł</td>
                </tr>
                <tr>
                    <td>Scan ortodontyczny</td>
                    <td>200 zł</td>
                </tr>
                <tr>
                    <td>Pakiet diagnostyczny</td>
                    <td>240 zł</td>
                </tr>
                <tr>
                    <td>Przerzut podniebienny</td>
                    <td>500 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały metalowy 1 łuk</td>
                    <td>2300 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały metalowy 2 łuki</td>
                    <td>4600 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały samoligaturujący 1 łuk</td>
                    <td>2700 - 3000 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały samoligaturujący 2 łuki</td>
                    <td>5400 - 6000 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały estetyczny 1 łuk</td>
                    <td>3500 - 3800 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały estetyczny 2 łuki</td>
                    <td>7000 - 7600 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały samoligaturujący estetyczny 1 łuk</td>
                    <td>3500 - 3800 zł</td>
                </tr>
                <tr>
                    <td>Aparat stały samoligaturujący estetyczny 2 łuki</td>
                    <td>7000 - 7600 zł</td>
                </tr>
                <tr>
                    <td>Wizyta z aktywacją (kontrola z aparatem stałym)</td>
                    <td>200 - 250 zł</td>
                </tr>
                <tr>
                    <td>Zdjęcie aparatu stałego + retencja 1 łuk</td>
                    <td>700 - 800 zł</td>
                </tr>
                <tr>
                    <td>Aparat zdejmowany</td>
                    <td>800 - 1300 zł</td>
                </tr>
                <tr>
                    <td>Wizyta z aparatem zdejmowanym</td>
                    <td>120 - 200 zł</td>
                </tr>
                <tr>
                    <td>Naprawa aparatu zdejmowanego</td>
                    <td>200 - 300 zł</td>
                </tr>
                <tr>
                    <td>Deprogramator</td>
                    <td>450 zł</td>
                </tr>
                <tr>
                    <td>Rehabilitacja narządu żucia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Badanie i diagnostyka bólów i trzasków w stawnie skroniowo-żuchwowym</td>
                    <td>500 zł</td>
                </tr>
                <tr>
                    <td>Deprogramator Koisa</td>
                    <td>450 zł</td>
                </tr>
                <tr>
                    <td>Szyna neuromięśniowa</td>
                    <td>750 - 850 zł</td>
                </tr>
                <tr>
                    <td>Diagnostyka RTG</td>
                    <td></td>
                </tr>
                <tr>
                    <td>zdjęcie wewnątrzustne cyfrowe</td>
                    <td>40 zł</td>
                </tr>
                <tr>
                    <td>zdjęcie pantomograficzne cyfrowe</td>
                    <td>100 zł</td>
                </tr>
                <tr>
                    <td>zdjęcie cefalometryczne cyfrowe</td>
                    <td>100 zł</td>
                </tr>
                <tr>
                    <td>zdjęcie zgryzowe cyfrowe jedna część</td>
                    <td>60 zł</td>
                </tr>
                <tr>
                    <td>CBCT</td>
                    <td>170 - 280 zł</td>
                </tr>
                <tr>
                    <td>Tomografia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>tomografia szczęka+żuchwa</td>
                    <td>280 zł</td>
                </tr>
                <tr>
                    <td>tomografia szczęka</td>
                    <td>200 zł</td>
                </tr>
                <tr>
                    <td>tomografia żuchwa</td>
                    <td>200 zł</td>
                </tr>
                <tr>
                    <td>tomografia wycinka 5×5</td>
                    <td>170 zł</td>
                </tr>
                <tr>
                    <td>tomografia zatok szczękowych</td>
                    <td>220 zł</td>
                </tr>
                <tr>
                    <td>Znieczulenia</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Znieczulenie</td>
                    <td>50 zł</td>
                </tr>
                <tr>
                    <td>Opłata za udostępnienie dokumentacji medycznej</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1 strona wyciągu lub odpisu dokumentacji medycznej</td>
                    <td>9,00 zł</td>
                </tr>
                <tr>
                    <td>1 strona kopii dokumentacji medycznej</td>
                    <td>0,35 zł</td>
                </tr>
                <tr>
                    <td>wyciąg, odpis lub kopia na elektronicznym nośniku danych</td>
                    <td>1,90 zł</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
