@extends('layouts.main')
@section('title')
Welcome To Edit Divisi
@endsection

@section('content')
    
<div class="card">
    <div class="card-header">
        <h3>
            Edit Divisi
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    <form action="{{ url('/divisi/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Divisi</label>
            <input type="text" class="form-control" name="divisi" value="{{ $dv->divisi }}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Divisi</label>
            <input type="text" class="form-control" name="divisi_lengkap" value="{{ $dv->divisi_lengkap }}" id="exampleInputPassword1">
        </div>
        <div>
            <input type="reset" class="btn btn-md btn-warning">
            <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
@endsection