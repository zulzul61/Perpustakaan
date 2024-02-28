<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pinjam</title>
</head>
<body>
    <h1>Halo mau pinjam ya</h1>

    <div class="container border rounded p-3">
        <form action="{{url('rent',$buku->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" value="{{Auth::user()->namaLengkap}}">
                <input type="hidden" value="{{Auth::user()->id}}" name="UserId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Judul buku yang akan dipinjam</label>
                <input type="text" class="form-control" name="" id="" value="{{$buku->Judul}}">
                <input type="hidden" value="{{$buku->id}}" name="BukuId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Peminjaman</label>
                <input type="text" class="form-control" name="TanggalPeminjaman" id="" value="{{$date}}">
            </div>
            <div class="mb-3">
                <label for="TanggalHarusKembali" class="form-label">Tanggal Harus Mengembalikan</label>
                <input type="text" class="form-control" value="{{$dateBack}}" name="TanggalHarusKembali" id="TanggalHarusKembali">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info">Pinjam</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
