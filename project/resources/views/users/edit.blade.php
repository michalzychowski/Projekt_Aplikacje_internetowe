@extends('users.layout')
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
        background-image: url("/image/background2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(5px);
    }
</style>

@section('content')

    <body>
        <div class="container">
            <h2 class="mt-4">Edytuj dane doktora {{ $user->name }}</h2>
            <form method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Imię</label>
                    <input type="text" class="form-control" id="name" name="name" value={{ $user->name }}
                        required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Nazwisko</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value={{ $user->last_name }}
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value={{ $user->email }}
                        required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Nr telefonu</label>
                    <input type="tel" class="form-control" id="tel" name="phone_number"
                        value={{ $user->phone_number }} required>
                </div>
                <button type="submit" class="btn btn-primary">Zapisz</button>
            </form>
        </div>
    @endsection
