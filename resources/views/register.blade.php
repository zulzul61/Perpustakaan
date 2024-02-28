<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="mt-3 container w-50 border rounded">
        <h1>Register</h1>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama lengkap</label>
                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>
            <div class="mb-3">
                <button class="btn btn-info w-100" type="submit">Submit</button>
            </div>
            <div class="mb-3">
                <a href="/login">Sudah register?</a>
            </div>
        </form>
    </div>
</body>
</html>
