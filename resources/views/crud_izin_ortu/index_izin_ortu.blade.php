@extends('layouts.main')
@section('title')
Welcome To Master Data Izin Ortu
@endsection
@section('breadcrumb')
Table Master Izin Orang Tua
@endsection

@section('content')
<div class="card">
    <div class="card-header">
       <a href="{{ url('/izin_ortu/create') }}" class="btn btn-primary">Create</a>
    </div>
    <div class="card-body">
    <table id="table-izin-ortu">
        <thead>
               <tr>
                   <th>No</th>
                   <th>Izin Orang Tua</th>
                   <th>Created Date</th>
                   <th>Action</th>
               </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($izin_ortu as $io)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $io->izin_ortu }}</td>
                <td>{{ $io->created_at }}</td>
                <td>
                    <a href="{{ url('/izin_ortu/edit/'.$io->id) }}" class="btn btn-success">Edit</a> 
                        <button type="button" class="btn btn-danger" data-coreui-toggle="modal" data-coreui-target="#hapus" data-coreui-name="{{ $io->izin_ortu }}" data-coreui-url="{{ url('izin_ortu/delete/'.$io->id) }}">Delete</button>
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
@endsection

@section('footer')
<script>
$(document).ready( function () {
    $('#table-izin-ortu').DataTable();
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

