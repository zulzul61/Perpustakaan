<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>form Kembali</title>
</head>
<body>
    <div class="container border rounded my-5 pt-2">
        <h1 class="text-center my-2">Kembalikan Buku</h1>
        <form action="{{url('kembali',$pinjam->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" name="" value="{{$pinjam->buku->Judul}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Peminjaman</label>
                <input type="text" class="form-control" name="" value="{{$pinjam->TanggalPeminjaman}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Harus Kembali</label>
                <input type="text" class="form-control" name="" value="{{$pinjam->TanggalHarusKembali}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" name="" value="{{$date}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info w-100">Kembalikan Buku</button>
            </div>
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>
