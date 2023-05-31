@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Petugas')

@section('content')
<a href="{{ route('petugas.create') }}" class="btn btn-purple mb-2">Tambah Petugas</a>
<table id="petugasTable" class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Telp</th>
            <th>Level</th>
            <th class="text-center">Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($petugas as $key => $value)
        <tr>
            <td>{{ $key += 1 }}</td>
            <td>{{ $value->nama_petugas }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->telp}}</td>
            <td>{{ $value->level }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('petugas.edit', $value->id_petugas) }}" class="btn btn-warning btn-sm d-inline mr-1">Edit</a>
                    <form action="{{ route('petugas.destroy', $value->id_petugas) }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger btn-sm d-inline" type="submit" value="Hapus" onclick="return confirm('Yakin Ingin Menghapus?')">
                </form>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#petugasTable').DataTable();
    });
</script>
@endsection
