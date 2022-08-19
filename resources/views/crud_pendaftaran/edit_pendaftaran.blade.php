@extends('layouts.main')
@section('title')
Welcome To Edit Pendaftaran
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Edit Pendaftaran
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/pendaftaran/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $pf->nama_lengkap }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $pf->tempat_lahir }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $pf->tanggal_lahir }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example" required>
                                <option value="">--Pilih--</option>
                                <option value="L" {{ $pf->jenis_kelamin=='L' ? 'selected' : '' }}>L</option>
                                <option value="P" {{ $pf->jenis_kelamin=='P' ? 'selected' : '' }}>P</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($agama as $a)
                                <option value="{{ $a->id }}" {{ $pf->id_agama == $a->id ? 'selected' : '' }}>{{ $a->agama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($kelas as $k)
                                <option value="{{ $k->id }}" {{ $pf->id_kelas == $k->id ? 'selected' : '' }}>{{ $k->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="walas" class="form-label">Wali Kelas</label>
                            <select class="form-select" name="walas" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($walas as $w)
                                <option value="{{ $w->id }}" {{ $pf->id_walas == $w->id ? 'selected' : '' }}>{{ $w->walas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select class="form-select" name="divisi" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($divisi as $d)
                                <option value="{{ $d->id }}" {{ $pf->id_divisi == $d->id ? 'selected' : '' }}>{{ $d->divisi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alasan</label>
                            <input type="text" class="form-control" name="alasan" value="{{ $pf->alasan }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2">
                            <label for="izin_ortu" class="form-label">Izin Ortu</label>
                            <select class="form-select" name="izin_ortu" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($izinOrtu as $io)
                                <option value="{{ $io->id }}" {{ $pf->id_izin_ortu == $io->id ? 'selected' : '' }}>{{ $io->izin_ortu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Hp Siswa</label>
                            <input type="text" class="form-control" name="hp_siswa" value="{{ $pf->hp_siswa }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Hp Orang Tua</label>
                            <input type="text" class="form-control" name="hp_ortu" value="{{ $pf->hp_ortu }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Akun IG</label>
                            <input type="text" class="form-control" name="akun_ig" value="{{ $pf->akun_ig }}" id="exampleInputPassword1">
                        </div>
                        <div>
                            <input type="reset" class="btn btn-md btn-warning">
                            <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>   
    </div>
</div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                        crossorigin="anonymous"></script>
@endsection