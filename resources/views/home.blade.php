@extends('layouts.main')
@section('title')
    Welcome To Home
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Pendaftar</h3>
    
                            <p>Jumlah Pendaftar Saat Ini</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-university"></i>
                        </div>
                        {{ $pendaftaran_jml }}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Periode<sup style="font-size: 20px"></sup></h3>
    
                            <p>Periode Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="mb-2">
                            <p>{{ $periode->periode }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>Divisi<sup style="font-size: 20px"></sup></h3>
    
                            <p>Jumlah Pendaftar Per Dvisi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="mb-2">
                            <p style="color: white">1.) RPL/Rekayasa Perangkat Lunak = {{ $divisi_jml_rpl }}</p>
                            <p style="color: white">2.) TKJ/Teknik Komputer Dan Jaringan = {{ $divisi_jml_tkj }}</p>
                            <p style="color: white">3.) MM/MultiMedia = {{ $divisi_jml_mm }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Jumlah Siswa<sup style="font-size: 20px"></sup></h3>
    
                            <p>Jumlah Siswa Laki-laki Dan Perempuan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="mb-2">
                            <p>1.) Laki-laki = {{ $laki }}</p>
                            <p>1.) Perempuan = {{ $perempuan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Agama<sup style="font-size: 20px"></sup></h3>
    
                            <p>Jumlah Agama Tiap Pendaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="mb-2">
                            <p>1.) Islam = {{ $islam }}</p>
                            <p>2.) Protestan = {{ $protestan }}</p>
                            <p>3.) Katholik = {{ $katholik }}</p>
                            <p>4.) Hindu = {{ $hindu }}</p>
                            <p>5.) Buddha = {{ $buddha }}</p>
                            <p>6.) Konghucu = {{ $konghucu }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Izin Orang Tua<sup style="font-size: 20px"></sup></h3>
    
                            <p>Perizinan Terkait Orang Tua</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="mb-2">
                            <p>1.) Diizikan = {{ $ya }}</p>
                            <p>2.) Tidak Diizinkan  = {{ $tidak }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- ./col -->
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
@endsection