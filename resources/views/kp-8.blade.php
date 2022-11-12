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
                <p class="lead text"><h2>KP-IF-08</h2></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="center img-fluid" src="../assets/images/KP-IF-08.png" width="300" alt="Card image cap">
                </div>
                <div class="col">
                    <form method="post" action="{{route('kp-8.kp8') }}">
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

                                    <label for="tanggalMulai">Tanggal Mulai</label>
                                    <input type="text" class="form-control" id="tanggalMulai" name="tanggalMulai" required>
                                    
                                    <label for="tanggalSelesai">Tanggal Selesai</label>
                                    <input type="text" class="form-control" id="tanggalSelesai" name="tanggalSelesai" required>

                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>

                                    <label for="sks">Total SKS yang telah ditempuh</label>
                                    <input type="text" class="form-control" id="sks" name="sks" required>
                                    
                                    <label for="ipk">IPK</label>
                                    <input type="text" class="form-control" id="ipk" name="ipk" required>

                                    <label for="bulan">Bulan Seminar KP</label>
                                    <select class="form-control" id="bulan" name="bulan" required>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>

                                    <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" id="tahun" name="tahun" required>
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