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
        <h2 class="mt-4">Utwórz nową wizytę</h2>
        <form method="POST" action="/appointment">
            @csrf
            <div class="mb-3">
                <label for="patient_name" class="form-label">Imię pacjenta</label>
                <input type="text" class="form-control" id="patient_name" name="patient_name" required>
            </div>
            <div class="mb-3">
                <label for="patient_surname" class="form-label">Nazwisko pacjenta</label>
                <input type="text" class="form-control" id="patient_surname" name="patient_surname" required>
            </div>
            <div class="mb-3">
                <label for="patient_email" class="form-label">Email pacjenta</label>
                <input type="email" class="form-control" id="patient_email" name="patient_email" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data wizyty</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="doctor_id" class="form-label">Lekarz</label>
                <select class="form-select" id="doctor_id" name="user_id" required>
                    @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="treatment_id" class="form-label">Zabieg</label>
                <select class="form-select" id="treatment_id" name="treatment_id" required>
                    @foreach ($treatments as $treatment)
                    <option value="{{ $treatment->id }}">{{ $treatment->name }} ({{$treatment->price}}zł)</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Utwórz</button>
        </form>
        <a href="/">Powrót</a>
    </div>

    <!-- Dodaj skrypty Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>