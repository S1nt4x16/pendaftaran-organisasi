<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran | Kopasus IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <style>
                    #background-video {
                        width: 120vw;
                        height: 120vh;
                        object-fit: cover;
                        position: fixed;
                        left: 0;
                        right: 0;
                        top: 0;
                        bottom: 0;
                        z-index: -1;
                    }

                    .scroller {
                        height: 1.2em;
                        line-height: 1.2em;
                        position: relative;
                        overflow: hidden;
                        text-align:center;
                    }
                    .scroller > span {
                        position: relative;
                        top: 0;
                        animation: slide 5s infinite;
                        font-weight: bold;
                        
                    }
                    @keyframes slide {
                        0% {
                            top: 0;
                        }
                        25% {
                            top: -1.2em;
                        }
                        50% {
                            top: -2.4em;
                        }
                        75% {
                            top: -3.6em;
                        }
                    }

                    a:link { text-decoration: none; }
                    a:visited { text-decoration: none; }
                    a:hover { text-decoration: none; }
                    a:active { text-decoration: none; }
                    input:-webkit-autofill,
                    input:-webkit-autofill:hover, 
                    input:-webkit-autofill:focus, 
                    input:-webkit-autofill:active{
                        -webkit-box-shadow: 0 0 0 30px black inset !important;
                    }
                    input:-webkit-autofill{
                        -webkit-text-fill-color: #68f3f8  !important;
                    }

                </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center align-items-center">
                <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                    <source src="videos/bg1.mp4" type="video/mp4">
                </video>
    
            <div class="card" style="background-color:black;">
                <div class="card-header">

                    <center>
                    <h1 style="font-family:garamond;color:white"><b>Form Pendaftaran Kopasus IT</b></h1>
                    </center>
                    
                    <h1>
                    <div class="scroller" style="font-family:garamond;color:white;">
                                <span>
                                    <b>KOPASUS IT</b><br>
                                    <b>RPL</b><br>
                                    <b>TKJ</b><br>
                                    <b>MM</b>
                                </span>
                            </div>
                    </h1>
                    <hr style="color:#68f3f8;opacity:70%;">

                    <center>
                        <div class="col-4" style="margin-top:30px;">
                            <a href="http://127.0.0.1:8000/login" style="color:#68f3f8;"><i class="fas fa-plus"></i>Login</a>
                        </div>
                    </center>

                    <br>

                    @include('layouts.message')

                </div>
                
                    <div class="card-body">
                        <form action="{{ url('store') }}" method="post" style="color:black;">
                            @csrf
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" style="background-color:black;color:#68f3f8;font-family:courier new" placeholder="Masukkan Nama Lengkap Anda" required autofocus>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" style="background-color:black;color:#68f3f8;font-family:courier new" placeholder="Tempat Lahir" place required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" style="background-color:black;font-family:courier new;color:#68f3f8;" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="mb-2">
                                <label  style="font-family:courier new;color:#68f3f8;" for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="agama" class="form-label">Agama</label>
                                <select class="form-select" name="agama" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($agama as $a)
                                    <option value="{{ $a->id }}">{{ $a->agama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="kelas" class="form-label">Kelas</label>
                                <select class="form-select" name="kelas" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="divisi" class="form-label">Divisi</label>
                                <select class="form-select" name="divisi" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($divisi as $d)
                                    <option value="{{ $d->id }}">{{ $d->divisi }} ({{ $d->divisi_lengkap }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="izin_ortu" class="form-label">Izin Ortu</label>
                                <select class="form-select" name="izin_ortu" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($izinOrtu as $i)
                                    <option value="{{ $i->id }}">{{ $i->izin_ortu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="walas" class="form-label">Walas</label>
                                <select class="form-select" name="walas" style="background-color:black;font-family:courier new;color:#68f3f8;" aria-label="Default select example" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($walas as $w)
                                    <option value="{{ $w->id }}">{{ $w->walas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="alasan" class="form-label">Alasan</label>
                                <input type="text" name="alasan" class="form-control" style="background-color:black;font-family:courier new;color:#68f3f8;" placeholder="Alasan Memasuki Kopasus IT" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="hp_siswa" class="form-label">Nomor Hp Siswa</label>
                                <input type="text" name="hp_siswa" class="form-control" style="background-color:black;font-family:courier new;color:#68f3f8;" placeholder="Nomor Hp Siswa" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="hp_ortu" class="form-label">Nomor Hp Orang Tua</label>
                                <input type="text" name="hp_ortu" class="form-control" style="background-color:black;font-family:courier new;color:#68f3f8;" placeholder="Nomor Hp Orang Tua" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="akun_ig" class="form-label">Akun IG</label>
                                <input type="text" name="akun_ig" class="form-control" style="background-color:black;font-family:courier new;color:#68f3f8;" placeholder="Akun Instagram (Wajib Memfollow Instagtam Kopasus IT)" required>
                            </div>
                            <div class="mt-4">
                                <input  type="reset" class="btn btn-md btn-dark">
                                <button type="submit" name="simpan" class="btn btn-md btn-dark" style="color:#68f3f8;">Simpan</button>
                            </div>
                        </form>
                    </div>    
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>