@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Masyarakat')

@section('content')
<table id="masyarakatTable" class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Telp</th>
            <th class="text-center">Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($masyarakat as $key => $value)
        <tr>
            <td>{{ $key += 1 }}</td>
            <td>{{ $value->nik}}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->telp }}</td>
            <td class="text-center"><a href="{{ route('masyarakat.show', $value->nik) }}" class="btn btn-outline-info btn-sm">Lihat</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#masyarakatTable').DataTable();
    });
</script>
@endsection
