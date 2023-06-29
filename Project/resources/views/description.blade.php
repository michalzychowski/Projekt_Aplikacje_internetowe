@extends('layout')
@section('title', 'Przychodnia dentystyczna')

<style>
    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url("/image/background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(5px);
    }
</style>

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">O nas</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        Witaj w naszej ekskluzywnej przychodni dentystycznej, gdzie tworzymy uśmiechy, które promieniują
                        pewnością siebie i zdrowiem. Nasza elegancka przychodnia dentystyczna to miejsce, w którym
                        połączenie
                        profesjonalizmu, nowoczesnej technologii i relaksującej atmosfery sprawiają, że Twoja wizyta staje
                        się
                        nie tylko komfortowym doświadczeniem, ale również przyjemnością.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        Już od momentu, gdy przekroczysz nasze progi, zostaniesz powitany przez nasz przyjazny personel,
                        którego głównym celem jest zapewnienie Ci wyjątkowej opieki. Nasz doświadczony zespół dentystów,
                        wyposażony w najnowocześniejsze narzędzia i techniki, podejdzie do Twoich potrzeb z indywidualnym
                        podejściem, dbając o Twoje zdrowie jamy ustnej w najwyższym stopniu.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        Nasze nowoczesne gabinety dentystyczne są zaprojektowane tak, aby zapewnić Ci maksymalną wygodę i
                        bezpieczeństwo podczas zabiegów. Zastosowane przez nas najnowocześniejsze technologie pozwalają nam
                        osiągnąć doskonałe rezultaty, przy minimalnym dyskomforcie dla Pacjenta. Oferujemy szeroki zakres
                        usług,
                        od rutynowych zabiegów stomatologicznych, takich jak profilaktyka i wypełnienia, aż po bardziej
                        zaawansowane procedury, takie jak implantologia i ortodoncja.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        Nasze wnętrza są urządzone w eleganckim i spokojnym stylu, abyś mógł odprężyć się i poczuć się jak w
                        domu. Zadbaliśmy o każdy detal, by stworzyć harmonijną atmosferę, która pomaga złagodzić wszelkie
                        obawy związane z wizytą u dentysty. Oferujemy także przyjemne dodatki, takie jak aromaterapia i
                        muzyka
                        relaksacyjna, aby uczynić Twoją wizytę jeszcze bardziej relaksującą.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        W naszej przychodni dentystycznej nie tylko dbamy o Twoje zdrowie jamy ustnej, ale również o Twój
                        komfort i satysfakcję. Naszym celem jest zapewnienie Ci najwyższej jakości usług dentystycznych w
                        luksusowym i przyjaznym otoczeniu. Przekonaj się sam, jak przyjemna może być wizyta u dentysty i
                        dołącz do grona naszych zadowolonych Pacjentów, którzy cieszą się pięknym i zdrowym uśmiechem.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
