@extends('layouts.main')
@section('title')
Welcome To Master Data Pendaftaran
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('excelexport') }}" class="btn btn-success">Download Data</a>
        <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Import</a>
    </div>
    <div class="card-body">
    <table id="table-pendaftaran">
        <thead>
                   <th>No</th>
                   <th>Periode</th>
                   <th>No Pendaftaran</th>
                   <th>Nama</th>
                   <th>Divisi</th>
                   <th>Update</th>
                   <th>Action</th>
               </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($pendaftaran as $pf)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pf->periode }}</td>
                <td>{{ $pf->id_no }}</td>
                <td>{{ $pf->nama_lengkap}}</td>
                <td>{{ $pf->divisi }}</td>
                <td>{{ $pf->updated_at ?? $pf->created_at }}</td>
                <td>
                    <a href="{{ url('/pendaftaran/edit/'.$pf->id) }}" class="btn btn-success">Edit</a> 
                    <button type="button" class="btn btn-danger" data-coreui-toggle="modal" data-coreui-target="#hapus" data-coreui-name="{{ $pf->nama_lengkap }}" data-coreui-url="{{ url('pendaftaran/delete/'.$pf->id) }}">Delete</button>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post" id="form-hapus">
            @csrf
            @method('delete')
            <div class="modal-body">
                <p id="tanya"></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<script>
$(document).ready( function () {
    $('#table-pendaftaran').DataTable();
} );
</script>

<script>
const hapus = document.getElementById('hapus')
hapus.addEventListener('show.coreui.modal', event => {
  const button = event.relatedTarget
  const name = button.getAttribute('data-coreui-name')
  const url = button.getAttribute('data-coreui-url')
  const title = hapus.querySelector('.modal-title')
  const tanya = hapus.querySelector('.modal-body #tanya')
  const formHapus = hapus.querySelector('#form-hapus')

  title.textContent = 'Hapus ' + name 
  tanya.textContent = 'Yakin Akan Menghapus ' + name + ' ?'
  formHapus.action = url
})
</script>
@endsection


