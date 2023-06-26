@extends('layout')
@section('title','Przychodnia dentystyczna')

@section('content')
    <div class="container">
        @if (auth()->check())
        <div class="jumbotron text-center">
            <h1 class="display-4">Witaj, {{ auth()->user()->name }}</h1>
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
                                <button class="btn btn-dark">Zaakceptuj</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <form action="/appointment/{{$appointment->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
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
                            <a href="/users/{{$doctor->id}}/edit" class="btn btn-primary">Edytuj</a>
                        </td>
                        <td>
                            <form action="/users/{{$doctor->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Usuń
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/users/create" class="btn btn-dark">Dodaj nowego lekarza do listy</a>
            @endif
        </div>
        @else
        <div class="jumbotron text-center">
            <h1 class="display-4 nazwa">Witaj w naszym gabinecie dentystycznym</h1>
            <p class="lead">Zadbamy o twoje zdrowie i piękny uśmiech</p>
        </div>
        @endif
    </div>
@endsection
