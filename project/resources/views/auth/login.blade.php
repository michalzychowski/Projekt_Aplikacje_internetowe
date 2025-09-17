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
        background-image: url("/image/background2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(5px);
    }
</style>

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Logowanie</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/authenticate">
                    @csrf
                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" class="form-control" id="login-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="login-password">Hasło</label>
                        <input type="password" class="form-control" id="login-password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
                </form>
                <a href="/" class="btn btn-info">Powrót</a>
            </div>
        </div>
    </div>
@endsection
