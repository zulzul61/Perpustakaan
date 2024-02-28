<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <title>Admin</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            halo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/kategori-buku" class="dropdown-item">Daftar Kategori</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Laporan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                </ul>
            </div>
            <form action="/album/cari" method="GET">
                {{-- <div class="d-flex">
              <input type="text" class="form-control me-2" value="{{old('cari')}}" >
              <button class="btn btn-light" id="cari" type="submit">cari</button>
            </div> --}}
            </form>
        </div>
    </nav>





    <div class="mx-5 my-3">
        <a href="/create" class="btn btn-success">+Data</a>

        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModaloye">
            +User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModaloye" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
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
                                <div>
                                    <select class="form-select" aria-label="Default select example" name="role">
                                        <option selected>Pilih role</option>
                                        <option value="">admin</option>
                                        <option value="">petugas</option>
                                        <option value="">peminjam  </option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            @csrf
                            <div>
                                <label for="NamaKategori" class="form-label">Tambah Kategori</label>
                                <input type="text" class="form-control"name="NamaKategori" id="NamaKategori">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5">
        <table class="table table-bordered  text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Status buku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($buku->count() > 0)
                    @foreach ($buku as $bk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $bk->Judul }}</td>
                            <td>{{ $bk->Penulis }}</td>
                            <td>{{ $bk->Penerbit }}</td>
                            <td>{{ $bk->TahunTerbit }}</td>
                            <td>{{ $bk->status }}</td>
                            <td>
                                <a href="{{ url('update', $bk->id) }}" class="btn btn-info">Update</a>
                                <a href="{{ url('delete', $bk->id) }}" class="btn btn-warning"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data buku?')">Delete</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#example">
                                    kategori
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="example" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Buku</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/home/{{ $bk->id }}" method="post">
                                                    @csrf
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected name="kategori">Kategori</option>
                                                        @foreach ($kategori as $ktg)
                                                            <option value="">{{ $ktg->NamaKategori }}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" value="{{ $bk->id }}"
                                                        name="BukuId">
                                                    <input type="hidden" value="{{ $ktg->id }}"
                                                        name="KategoriId">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="table-light">
                        <td class="text-center" colspan="7">Tidak ada data yang ditampilkan</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
