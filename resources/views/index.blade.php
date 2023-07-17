<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran | Kopasus IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('coreui/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/vendors/@coreui/icons/css/free.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
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
                <video id="background-video" 
                  autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                    <source src="videos/3.mp4" type="video/mp4">
                </video>
    
            <div class="card" style="background-color:black;">
                <div class="card-header">

                    <center>
                    <h1 style="font-family:garamond;color:white">
                    <b>Form Pendaftaran Kopasus IT</b></h1>
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
                    @include('layouts.message')
                </div>
                
                    <div class="card-body">
                        <form action="{{ url('store') }}" method="post" style="color:black;" id="formDaftar">
                            @csrf
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="nama_lengkap" 
                                    class="form-label">
                                    Nama Lengkap
                                </label>
                                <input type="text" id="name" name="nama_lengkap" class="form-control"
                                    style="background-color:black;color:#68f3f8;font-family:courier new" 
                                    placeholder="Masukkan Nama Lengkap Anda" required autofocus>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="tempat_lahir" class="form-label">
                                    Tempat Lahir
                                </label>
                                <input type="text" id="tmp" name="tempat_lahir" class="form-control" 
                                    style="background-color:black;color:#68f3f8;font-family:courier new" 
                                    placeholder="Tempat Lahir" place required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" for="tanggal_lahir" 
                                    class="form-label">
                                    Tanggal Lahir
                                </label>
                                <input type="date" name="tanggal_lahir" id="tgl" class="form-control"
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="mb-2">
                                <label  style="font-family:courier new;color:#68f3f8;" 
                                    for="jenis_kelamin" class="form-label">
                                    Jenis Kelamin
                                </label>
                                <select class="form-select" name="jenis_kelamin" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="jkl" required>
                                    <option value="" selected>--Pilih--</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="agama" class="form-label">
                                    Agama
                                </label>
                                <select class="form-select" name="agama" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="ag" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($agama as $a)
                                    <option value="{{ $a->id }}">{{ $a->agama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="kelas" class="form-label">
                                    Kelas
                                </label>
                                <select class="form-select" name="kelas" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="kl">
                                    <option value="" selected>--Bisa Kosong--</option>
                                    @foreach($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="divisi" class="form-label">
                                    Divisi
                                </label>
                                <select class="form-select" name="divisi" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="dv" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($divisi as $d)
                                    <option value="{{ $d->id }}">
                                        {{ $d->divisi }} ({{ $d->divisi_lengkap }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="izin_ortu" class="form-label">Izin Ortu</label>
                                <select class="form-select" name="izin_ortu" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="iz" required>
                                    <option value="" selected>--Pilih--</option>
                                    @foreach($izinOrtu as $i)
                                    <option value="{{ $i->id }}">{{ $i->izin_ortu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="walas" class="form-label">Walas</label>
                                <select class="form-select" name="walas" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    aria-label="Default select example" id="wl">
                                    <option value="" selected>--Bisa Kosong--</option>
                                    @foreach($walas as $w)
                                    <option value="{{ $w->id }}">{{ $w->walas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="alasan" class="form-label">Alasan</label>
                                <input type="text" name="alasan" id="al" class="form-control" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    placeholder="Alasan Memasuki Kopasus IT" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="hp_siswa" class="form-label">Nomor Hp Siswa</label>
                                <input type="text" name="hp_siswa" id="hpsiswa" class="form-control" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    placeholder="Nomor Hp Siswa (Nomor Whatsapp)" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="hp_ortu" class="form-label">Nomor Hp Orang Tua</label>
                                <input type="text" name="hp_ortu" id="hportu" class="form-control" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    placeholder="Nomor Hp Orang Tua" required>
                            </div>
                            <div class="mb-2">
                                <label style="font-family:courier new;color:#68f3f8;" 
                                    for="akun_ig" class="form-label">Akun IG</label>
                                <input type="text" name="akun_ig" id="ig" class="form-control" 
                                    style="background-color:black;font-family:courier new;color:#68f3f8;" 
                                    placeholder="Akun Instagram (Wajib Memfollow Instagram Kopasus IT)" required>
                            </div>
                            <div class="mt-4">
                                <input  type="reset" class="btn btn-md btn-dark">
                                <button type="button" id="btn" class="btn btn-md btn-dark" onclick="OnInput()" style="color:#68f3f8;">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>    
            </div>
        </div>
    </div>

    <div class="modal fade" id="konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Data</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div id="results"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button id="yes" class="btn btn-success">Yes</button>
                </div>
          </div>
        </div>
      </div>

    <script>
        
    </script>

        <script src="{{ asset('coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></scrip>
        <script src="{{ asset('coreui/vendors/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>

                var name = null;
                var tmp = null;
                var tgl = null;
                var jkl = null;
                var ag = null;
                var kl = null;
                var dv = null;
                var iz = null;
                var wl = null;
                var al = null;
                var hpsiswa = null;
                var hportu = null;
                var ig = null;
            
               

            $("#btn").click(function(){

                name = $('#name').val();
                tmp = $("#tmp").val();
                tgl = $("#tgl").val();
                jkl = $("#jkl option:selected").text();
                ag = $("#ag option:selected").text();
                kl = $("#kl option:selected").text();
                dv = $("#dv option:selected").text();
                iz = $("#iz option:selected").text();
                wl = $("#wl option:selected").text();
                al = $("#al").val();
                hpsiswa = $("#hpsiswa").val();
                hportu = $("#hportu").val();
                ig = $("#ig").val();

                $("#results").html("<div class='alert alert-success'>Nama Lengkap : " + name + "</div>" +
                    "<div class='alert alert-success'>Tempat Lahir : " + tmp + "</div>" +
                    "<div class='alert alert-success'>Tanggal Lahir : " + tgl + "</div>" +
                    "<div class='alert alert-success'>Jenis Kelamin : " + jkl + "</div>" +
                    "<div class='alert alert-success'>Agama : " + ag + "</div>" +
                    "<div class='alert alert-success'>Kelas : " + kl + "</div>" +
                    "<div class='alert alert-success'>Divisi : " + dv + "</div>" +
                    "<div class='alert alert-success'>Izin Orang Tua : " + iz + "</div>" +
                    "<div class='alert alert-success'>Walikelas : " + wl + "</div>" +
                    "<div class='alert alert-success'>Alasan : " + al + "</div>" +
                    "<div class='alert alert-success'>Nomor HP Siswa : " + hpsiswa + "</div>" +
                    "<div class='alert alert-success'>Nomor HP Orang Tua : " + hportu + "</div>" +
                    "<div class='alert alert-success'>Akun Instagram : " + ig + "</div>" 
                )
            })

        </script>

        <script>
            $("#yes").click(function() {
                $('#formDaftar').submit();
            });
        </script>

        <script>
        function OnInput() 
        {

            tgl = $("#tgl").val();
            jkl = $("#jkl").val();
            ag = $("#ag option:selected").text();
            dv = $("#dv option:selected").text();
            iz = $("#iz option:selected").text();
            var x = document.forms["formDaftar"]["name", jkl , "tmp", "jkl", "al", "hpsiswa", "hportu", iz , dv , ag , "ig"].value;

            if( x == "" )
            {
            
            Swal.fire({
                title: 'Error!',
                text: 'Masukan Data Dengan Lengkap!',
                icon: 'error',
                confirmButtonText: 'Ok'

            })

            } if ( tgl == "" )

            {
                
            Swal.fire({
                title: 'Error!',
                text: 'Masukan Data!',
                icon: 'error',
                confirmButtonText: 'Ok'
            })

            } else {

            $('#konfirmasi').modal('show');
            }

        }
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>