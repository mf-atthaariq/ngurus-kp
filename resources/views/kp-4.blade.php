<head>
    <title>
        NgurusKP
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h2>KP-IF-01</h2>
    <form method="post" action="{{route('kp-4.kp4') }}">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">

                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="col">
                    <label for="dosenpa">Dosen PA</label>
                    <input type="text" class="form-control" id="dosenpa" name="dosenpa">
                    
                    <label for="nip">NIP Dosen PA</label>
                    <input type="text" class="form-control" id="nip" name="nip">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="sks">Jumlah SKS yang telah ditempuh</label>
                    <input type="text" class="form-control" id="sks" name="sks">

                    <label for="ipk">IPK Sekarang</label>
                    <input type="text" class="form-control" id="ipk" name="ipk">
                </div>
                <div class="col">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
