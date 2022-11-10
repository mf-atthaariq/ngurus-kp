<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/logo/favicon.ico">

    <title>
        KP-IF-04
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/
            height: 40px;
            background: #d3d3d3;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="container">
            <div class="text-center">
                <p class="lead text"><h2>KP-IF-04</h2></p>
            </div>
        </div>
        <form method="post" action="{{route('kp-4.kp4') }}">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>

                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                        
                        <label for="judul">Judul Kerja Praktek</label>
                        <input type="textarea" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="col">
                        <label for="pemlap">Nama Pembimbing Lapangan</label>
                        <input type="text" class="form-control" id="pemlap" name="pemlap" required>
                        
                        <label for="nipPemlap">NIP Pembimbing Lapangan</label>
                        <input type="text" class="form-control" id="nipPemlap" name="nipPemlap" required>

                        <label for="jabatan">Jabatan Pembimbing Lapangan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        
                        <label for="alamat">Alamat Kantor</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>

                        <label for="noHp">Nomor HP Pembimbing Lapangan</label>
                        <input type="text" class="form-control" id="noHp" name="noHp" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="lokasiKp">Lokasi Kantor (Kab/Kota)</label>
                        <input type="text" class="form-control" id="lokasiKp" name="lokasiKp" required>
                    </div>
                    <div class="col">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/" class="btn btn-secondary my-2">Kembali</a>
        </form>
    </main>
    <footer class="text-muted" id="footer">
        <p>&copy; M. F. Atthaariq - 2022</p>
    </div>
    </footer>
</body>
</html>