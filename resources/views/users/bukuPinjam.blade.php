<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            width: 250px;
            height: 210px;
        }

        .card,
        span {
            display: block;
        }
    </style>
    <title>Buku dipinjam</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            halo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pinjaman">Buku dipinjam</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-start row p-1 g-3">
            {{-- foreach --}}
            @foreach ($pinjam as $pj)
                <div class="card col-4 ">
                    <div class="card-body">
                        <span>{{ $pj->buku->Judul }}</span>
                        <span>{{ $pj->TanggalPeminjaman }}</span>
                        <span>{{ $pj->StatusPeminjaman }}</span>
                        <a href="/kembali/{{$pj->id}}" class="btn btn-info btn-sm">kembali</a>
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            kembali
                        </button> --}}
                    </div>
                </div>



                <!-- Modal -->
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Mengembalikan Buku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/kembali/{{$pj->id}}" method="post">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="" class="form-label">Judul</label>
                                        <input type="text" class="form-control" value="{{$pj->buku->Judul}}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Tanggal Peminjaman</label>
                                        <input type="text" class="form-control" value="{{$pj->TanggalPeminjaman}}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Tanggal Harus Kembali</label>
                                        <input type="text" class="form-control" value="{{$pj->TanggalHarusKembali}}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Tanggal Pengembalian</label>
                                        <input type="text" class="form-control" value="{{$date}}">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm"><a href="/kembali/{{$pj->id}}" class="btn btn-primary btn-sm">Kembalikan buku</a></button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            @endforeach
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
