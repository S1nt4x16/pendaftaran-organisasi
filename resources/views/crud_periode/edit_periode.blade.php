@extends('layouts.main')
@section('title')
Welcome To Edit Periode
@endsection

@section('content')
    
<div class="card">
    <div class="card-header">
        <h3>
            Edit Periode
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/periode/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Periode</label>
                            <input type="text" class="form-control" name="periode" value="{{ $p->periode }}" 
                                max="{{ now()->addYear(3)->format('Y') }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" required>
                            <label for="exampleInputPassword1" class="form-label">Aktif</label>
                            <select class="form-select" name="aktif" aria-label="Default select example" required>
                                <option value="">--Pilih--</option>
                                <option value="Y" {{ $p->aktif=='Y' ? 'selected' : '' }}>Y</option>
                                <option value="N" {{ $p->aktif=='N' ? 'selected' : '' }}>N</option>
                            </select>
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
