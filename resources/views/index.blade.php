<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container col-5">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h1>
                    Form Pendaftaran Kopasus IT
                </h1>
                @include('layouts.message')
                <div class="col-4">
                    <a href="http://127.0.0.1:8000/login" class="btn btn-large btn-primary"><i class="fas fa-plus"></i>Login</a>
                </div>
                <hr>
            </div>
            <form action="{{ url('store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required autofocus>
                </div>
                <div class="mb-2">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        @foreach($agama as $a)
                        <option value="{{ $a->id }}">{{ $a->agama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        @foreach($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="divisi" class="form-label">Divisi</label>
                    <select class="form-select" name="divisi" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        @foreach($divisi as $d)
                        <option value="{{ $d->id }}">{{ $d->divisi }} ({{ $d->divisi_lengkap }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="izin_ortu" class="form-label">Izin Ortu</label>
                    <select class="form-select" name="izin_ortu" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        @foreach($izinOrtu as $i)
                        <option value="{{ $i->id }}">{{ $i->izin_ortu }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="walas" class="form-label">Walas</label>
                    <select class="form-select" name="walas" aria-label="Default select example">
                        <option value="" selected>--Pilih--</option>
                        @foreach($walas as $w)
                        <option value="{{ $w->id }}">{{ $w->walas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="alasan" class="form-label">Alasan</label>
                    <input type="text" name="alasan" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="hp_siswa" class="form-label">Nomor Hp Siswa</label>
                    <input type="text" name="hp_siswa" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="hp_ortu" class="form-label">Nomor Hp Orang Tua</label>
                    <input type="text" name="hp_ortu" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="akun_ig" class="form-label">Akun IG</label>
                    <input type="text" name="akun_ig" class="form-control" required>
                </div>
                <div class="mt-3">
                    <input type="reset" class="btn btn-md btn-warning">
                    <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>