<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #1d1313;
            color: #ffffff;
        }

        .navbar {
            background-color: #e2e2e2;
        }

        .card {
            background-color: #f55299;
            border: none;
        }

        .table th,
        .table td {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">Data Buku Tamu</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Buku Tamu</h5>
                <table class="table table-bordered table-dark mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Asal</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                            <th>Jumlah</th>
                            <th>Materi</th>
                            <th>Permohonan</th>
                            <th>Pendamping</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaju as $tamu)
                            <tr>
                                <td>1</td>
                                <td>{{ $tamu->nama }}</td>
                                <td>{{ $tamu->asal }}</td>
                                <td>{{ $tamu->tanggal }}</td>
                                <td>{{ $tamu->tujuan }}</td>
                                <td>{{ $tamu->jumlah }}</td>
                                <td>{{ $tamu->materi }}</td>
                                <td><button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $tamu->id }}"><i
                                            class="text-danger bi bi-search-heart-fill"></i></button></td>
                                <td><button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#safa{{ $tamu->id }}"><i
                                            class="text-danger bi bi-search-heart-fill"></i></button></td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @foreach ($pengaju as $modal)
        <div class="modal fade" id="exampleModal{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog bg-dark">
                <div class="modal-content bg-dark">
                    <div class="modal-body">
                        <img src="{{ asset('permohonan/' . $modal->permohonan) }}"
                            class="img-fluid rounded mx-auto d-block" alt="foto tamu">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="safa{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-dark">
                        <img src="{{ asset('permohonan/' . $modal->pendamping) }}"
                            class="img-fluid rounded mx-auto d-block" alt="foto tamu">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
