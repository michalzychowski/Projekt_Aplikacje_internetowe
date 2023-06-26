@extends('users.layout')
@section('title', 'Przychodnia dentystyczna')

@section('content')
    <div class="container">
        <h2 class="mt-4">Utwórz doktora</h2>
        <form method="POST" action="/users">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Nazwisko</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Nr telefonu</label>
                <input type="tel" class="form-control" id="tel" name="phone_number" value="" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
@endsection
