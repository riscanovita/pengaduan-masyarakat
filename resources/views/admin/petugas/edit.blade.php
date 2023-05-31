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
    <a href="#" class="text-gray">Edit Petugas</a>
@endsection


@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Edit Petugas
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" id="nama_petugas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" value="{{ $petugas->username }}" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">No Telp</label>
                        <input type="number" value="{{ $petugas->telp }}" name="telp" id="telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <div class="input-group mb-3">
                            <select name="level" id="level" class="custom-select">
                                @if ($petugas->level == 'admin')
                                    <option selected value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                @else
                                    <option value="admin">Admin</option>
                                    <option selecetd value="petugas">Petugas</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <button type="sumbit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
