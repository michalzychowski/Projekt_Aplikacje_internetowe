<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gabinet Dentystyczny</title>
    <!-- Dodaj link do pliku CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Edytuj dane doktora {{$user->name}}</h2>
        <form method="POST" action="/users/{{$user->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input type="text" class="form-control" id="name" name="name" value={{$user->name}} required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Nazwisko</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value={{$user->last_name}}
                required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value={{$user->email}} required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Nr telefonu</label>
                <input type="tel" class="form-control" id="tel" name="phone_number" value={{$user->phone_number}}
                required>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>

    <!-- Dodaj skrypty Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>