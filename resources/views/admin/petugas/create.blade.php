@extends('layouts.admin')

@section('header', 'Form Tambah Petugas')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }
        .text-gray {
            color: #6c757d;
        }
        .text-gray:hover {
            color: #6c757d;
        }
    </style>
@endsection

@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-gray">/</a>
    <a href="#" class="text-gray">Form Tambah Petugas</a>
@endsection


@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Form Tambah Petugas
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">No Telp</label>
                        <input type="number" name="telp" id="telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <div class="input-group mb-3">
                            <select name="level" id="level" class="custom-select">
                                <option value="petugas" selected>Pilih Level (Default Petugas)</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                    </div>
                    <button type="sumbit" class="btn btn-success" style="width: 100%">KIRIM</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        @if (Session::has('username'))
            <div class="alert alert-danger">
                {{ Session::get('username') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
