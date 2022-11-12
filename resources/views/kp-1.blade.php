<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/logo/favicon.ico">

    <title>
        KP-IF-01
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="container">
            <div class="text-center">
                <p class="lead text"><h2>KP-IF-01</h2></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="center img-fluid" src="../assets/images/KP-IF-01.png" width="300" alt="Card image cap">
                </div>
                <div class="col">
                    <form method="post" action="{{route('kp-1.kp1') }}">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>

                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" required>

                                    <label for="sks">Jumlah SKS yang telah ditempuh</label>
                                    <input type="text" class="form-control" id="sks" name="sks" required>

                                    <label for="ipk">IPK Sekarang</label>
                                    <input type="text" class="form-control" id="ipk" name="ipk" required>

                                    <label for="dosenpa">Dosen PA</label>
                                    <input type="text" class="form-control" id="dosenpa" name="dosenpa" required>
                                    
                                    <label for="nip">NIP Dosen PA</label>
                                    <input type="text" class="form-control" id="nip" name="nip" required>

                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
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