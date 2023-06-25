<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabinet Dentystyczny</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
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
                <a href="/">Powrót</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>