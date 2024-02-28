<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <div class="mt-5 container w-75 border rounded bg-">
        <h1 class="text-center my-2">Tambah data</h1>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="Judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="Judul" id="Judul">
            </div>
            <div class="mb-3">
                <label for="Penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="Penulis" id="Penulis">
            </div>
            <div class="mb-3">
                <label for="Penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="Penerbit" id="Penerbit">
            </div>
            <div class="mb-3">
                <label for="TahunTerbit" class="form-label">Tahun terbit</label>
                <input type="number" class="form-control" name="TahunTerbit" id="TahunTerbit">
            </div>
            <div class="mb-3">
                <select name="" id="">
                    <option value=""></option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
