<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/logo/favicon.ico">

    <title>
        KP-IF-05A
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="container">
            <div class="text-center">
                <p class="lead text"><h2>KP-IF-07</h2></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="center img-fluid" src="../assets/images/KP-IF-07.png" width="300" alt="Card image cap">
                </div>
                <div class="col">
                    <form method="post" action="{{route('kp-7.kp7') }}">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>

                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" required>

                                    <label for="tempatKp">Nama Tempat KP</label>
                                    <input type="text" class="form-control" id="tempatKp" name="tempatKp" required>

                                    <label for="dosenKp">Dosen KP</label>
                                    <input type="text" class="form-control" id="dosenKp" name="dosenKp" required>

                                    <label for="nipDosenKp">NIP Dosen KP</label>
                                    <input type="text" class="form-control" id="nipDosenKp" name="nipDosenKp" required>

                                    <label for="tanggalMulai">Tanggal Mulai (Tanggal Bulan)</label>
                                    <input type="text" class="form-control" id="tanggalMulai" name="tanggalMulai" required>
                                    
                                    <label for="tanggalSelesai">Tanggal Selesai</label>
                                    <input type="text" class="form-control" id="tanggalSelesai" name="tanggalSelesai" required>

                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Download</button>
                        <a href="/" class="btn btn-secondary my-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p>&copy; M. F. Atthaariq - 2022</p>
        </div>
    </footer>
</body>
</html>