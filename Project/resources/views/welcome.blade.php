<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Gabinet Dentystyczny</title>
</head>

<body>
    <div class="container">
        @if (auth()->check())
        <div class="jumbotron text-center">
            <h1 class="display-4">Witaj, {{ auth()->user()->name }}</h1>
            <form class="inline" method="POST" action="/logout">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">
                    Wyloguj się
                </button>
            </form>
            <h2>Wizyty</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data</th>
                        <th scope="col">Status</th>
                        <th scope="col">Zabieg</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{$appointment->patient_name}}</td>
                        <td>{{$appointment->patient_surname}}</td>
                        <td>{{$appointment->patient_email}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->status}}</td>
                        <td>{{$appointment->treatment->name}}</td>
                        @if ($appointment->status === "pending")
                        <td>
                            <form action="/appointment/{{$appointment->id}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <button>Zaakceptuj</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <form action="/appointment/{{$appointment->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    Usuń
                                </button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (auth()->user()->role ==="admin")
            <h2>Zarządzaj lekarzami</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nr_telefonu</th>
                        <th scope="col">Edytuj</th>
                        <th scope="col">Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->last_name}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->phone_number}}</td>
                        <td>
                            <a href="/users/{{$doctor->id}}/edit">Edytuj</a>
                        </td>
                        <td>
                            <form action="/users/{{$doctor->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Usuń
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/users/create">Dodaj nowego lekarza do listy</a>
            @endif
        </div>
        @else
        <div class="jumbotron text-center">
            <h1 class="display-4">Witaj w naszym gabinecie dentystycznym</h1>
            <p class="lead">Zadbamy o twoje zdrowie i piękny uśmiech</p>
            <a href="/make-appointment" class="btn btn-primary btn-lg">Umów wizytę</a>
            <p>Jesteś doktorem?</p>
            <a href="/login" class="btn btn-primary btn-lg">Zaloguj się</a>
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>