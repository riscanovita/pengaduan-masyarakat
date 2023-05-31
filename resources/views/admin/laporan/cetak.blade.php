<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
</head>
<body>
<div class="text-center">
    <h5>Laporan Pengaduan Mayarakat</h5>
    <h6>Sampaikan laporan Anda langsung kepada pemerintah berwenang</h6>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $key => $value)
                    <tr>
                        <td>{{ $key += 1 }}</td>
                        <td>{{ $value->tgl_pengaduan->format('d F Y') }}</td>
                        <td>{{ $value->isi_laporan }}</td>
                        <td>{{ $value->status == '0' ? 'Pending' : ucwords($value->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
