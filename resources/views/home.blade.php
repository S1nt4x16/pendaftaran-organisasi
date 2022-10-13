@extends('layouts.main')
@section('title')
Welcome To Home
@endsection
@section('breadcrumb')
Dashboard
@endsection

@section('content')
<style>
.jumlah {
    width: 375px ;
    margin-top:20px;
    background-color: #E26868;
}

.periode {
    height: 290px;
}

.agama {
    margin-top: 20px;
    margin-left: 10px;
    width: 375px;
}

.ortu {
    margin-top: 20px;
    margin-left: 18px;
    width: 375px;
    background-color: #68f3f8;;
}

.pen {
    opacity: 100%;
}
</style>
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-light pen">
                        <div class="card-header">
                            <h3>Pendaftar</h3>
                        </div>
                        <div class="card-body mb-4">
                            <p>Jumlah Pendaftar Saat Ini</p>
                            <canvas id="myChart" width="200px" height="80px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-light periode">
                        <div class="card-header mb-4">
                            <h3>Periode</h3>
                        </div>
                        <div class="card-body mb-4">
                            <p>Periode Aktif</p>
                            <p><b>- {{ $periode->periode }}</b></p>
                            <p>Jumlah Anggota Aktif</p>
                            <p><b>- {{ $jml_pendaftaran }}</b></p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <div class="card-header">
                                <h3>Divisi</h3>
                            </div>
                            <div class="card-body mb-4">
                                <p>Jumlah Pendaftar Per Divisi</p>
                                <canvas id="myChart1" width="200px" height="80px"></canvas>
                            </div>
                        </div>
                    </div>

                <div class="row">
                <div class="col-lg-4">
                        <div class="card bg-light jumlah">
                            <div class="card-header">
                                <h3>Jumlah Siswa</h3>
                            </div>
                            <div class="card-body mb-4">
                                <p>Jumlah Siswa Laki-laki Dan Perempuan</p>
                                <canvas id="myChart2" width="200px" height="85px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-light agama">
                            <div class="card-header">
                                <h3>Agama</h3>
                            </div>
                            <div class="card-body mb-4">
                            <p>Jumlah Agama Tiap Pendaftar</p>
                            <canvas id="myChart3" width="200px" height="85px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-light ortu">
                            <div class="card-header">
                                <h3>Izin Orang Tua</h3>
                            </div>
                            <div class="card-body mb-4">
                            <p>Perizinan Terkait Orang Tua</p>
                                <canvas id="myChart4" width="200px" height="85px"></canvas>
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
                fill:true,
                tension: 0.6,
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
            labels: [
                @foreach($divisi as $d)
                    '{{ $d->divisi }}',
                @endforeach
            ],
            datasets: [{
                label: 'Divisi Calon Anggota Kopasus IT',
                data: [{{ $divisi_jml_rpl }}, {{ $divisi_jml_tkj }}, {{ $divisi_jml_mm }}],
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
                fill:true,
                tension: 0.6,
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
            labels: ['Laki-Laki', 'Perempuan'],
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
                fill:true,
                tension: 0.6,
                // segment: {
                //     borderColor: ctx => up(ctx, 'rgba(75, 192, 192, 1)') || down(ctx, 'rgba(255, 26, 104, 1)'),
                //     backgroundColor: ctx => up(ctx, 'rgba(75, 192, 192, 1)') || down(ctx, 'rgba(255, 26, 104, 1)'),
                // }
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

    const ctxxxx = document.getElementById('myChart3').getContext('2d');
    const myChart3 = new Chart(ctxxxx, {
        type: 'line',
        data: {
            labels: [
                @foreach($agama as $a)
                    '{{ $a->agama }}',
                @endforeach
            ],
            datasets: [{
                label: 'Agama Calon Anggota Kopasus IT',
                data: [{{ $islam }}, {{ $katholik }}, {{ $protestan }}, {{ $hindu }}, {{ $buddha }}, {{ $konghucu }}],
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
                fill:true,
                tension: 0.6,
                // segment: {
                //     borderColor: ctx => up(ctx, 'rgba(75, 192, 192, 1)') || down(ctx, 'rgba(255, 26, 104, 1)'),
                //     backgroundColor: ctx => up(ctx, 'rgba(75, 192, 192, 1)') || down(ctx, 'rgba(255, 26, 104, 1)'),
                // }
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

    const ctxxxxx = document.getElementById('myChart4').getContext('2d');
    const myChart4 = new Chart(ctxxxxx, {
        type: 'line',
        data: {
            labels: [
                @foreach($izin_ortu as $i)
                    '{{ $i->izin_ortu }}',
                @endforeach
            ],
            datasets: [{
                label: 'Perizinan Calon Anggota Kopasus IT',
                data: [{{ $ya }}, {{ $tidak }},],
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
                fill:true,
                tension: 0.6,
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