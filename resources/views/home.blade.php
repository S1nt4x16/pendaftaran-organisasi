@extends('layouts.main')
@section('title')
Welcome To Home
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card bg-info">
                        <div class="card-header">
                            <h3>Pendaftar</h3>
                        </div>
                        <div class="card-body">
                            <p>Jumlah Pendaftar Saat Ini</p>
                            <canvas id="myChart" width="200px" height="125px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-success">
                        <div class="card-header">
                            <h3>Periode</h3>
                        </div>
                        <div class="card-body">
                            <p>Periode Aktif</p>
                            <p><b>- {{ $periode->periode }}</b></p>
                            <p>Jumlah Anggota Aktif</p>
                            <p><b>- {{ $jml_pendaftaran }}</b></p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3">
                        <div class="card bg-secondary">
                            <div class="card-header">
                                <h3>Divisi</h3>
                            </div>
                            <div class="card-body">
                                <p>Jumlah Pendaftar Per Divisi</p>
                                <canvas id="myChart1" width="200px" height="125px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h3>Jumlah Siswa</h3>
                            </div>
                            <div class="card-body">
                                <p>Jumlah Siswa Laki-laki Dan Perempuan</p>
                                <canvas id="myChart2" width="200px" height="125px"></canvas>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-lg-3" style="margin-top:20px;">
                        <div class="card bg-success">
                            <div class="card-header"><h3>Agama</h3></div>
                            <div class="card-body">
                            <p>Jumlah Agama Tiap Pendaftar</p>
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
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h3>Izin Orang Tua</h3>
                            </div>
                            <div class="card-body">
                            <p>Perizinan Terkait Orang Tua</p>
                                <div class="mb-2">
                                    <p>1.) Diizikan = {{ $ya }}</p>
                                    <p>2.) Tidak Diizinkan = {{ $tidak }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('chart.js/dist/chart.min.js') }}"></script>

<script type="text/javascript">
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{{ $periodSub2 }}, {{ $periodSub1 }}, {{ $period }}],
            datasets: [{
                label: 'Pendaftar Calon Anggota Kopasus IT',
                data: [{{ $jml_pendaftaran2 }}, {{ $jml_pendaftaran1 }}, {{ $jml_pendaftaran }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctxx = document.getElementById('myChart1').getContext('2d');
    const myChart1 = new Chart(ctxx, {
        type: 'line',
        data: {
            labels: [{{ $divisi_jml_rpl }}, {{ $divisi_jml_tkjj }}, {{ $divisi_jml_mmm }}],
            datasets: [{
                label: 'Divisi Calon Anggota Kopasus IT',
                data: [{{ $divisi_jml_mm }}, {{ $divisi_jml_tkj }}, {{ $divisi_jml_rpl }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctxxx = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctxxx, {
        type: 'line',
        data: {
            labels: [{{ $periodSub1 }}, {{ $period }}],
            datasets: [{
                label: 'Jenis Kelamin Calon Anggota Kopasus IT',
                data: [{{ $laki }}, {{ $perempuan }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection