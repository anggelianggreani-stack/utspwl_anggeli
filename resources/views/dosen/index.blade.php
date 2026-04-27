<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @include('components.boostrap')
</head>
    <body>
       <div class="text-center mt-3">
        <div style="text-align: center;">
            <a href="/3"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
        </div>
</div>

<div class="neo-table">

    <table style="width:90%; margin:auto;" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Jurusan</th>
                <th>Nama Lengkap</th>
                <th>NIP</th>
                <th>NIDN</th>
                <th>Pendidikan Terakhir</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dosen as $nomor => $d)
            <tr>
                <td>{{ $nomor + 1 }}</td>
                <td>{{ $d->jurusan_id }}</td>
                <td>{{ $d->fullname }}</td>
                <td>{{ $d->NIP }}</td>
                <td>{{ $d->NIDN }}</td>
                <td>{{ $d->pendidikan_terakhir }}</td>
                <td>{{ $d->tanggal_lahir }}</td>
                <td>{{ $d->tempat_lahir }}</td>
                <td>{{ $d->alamat }}</td>

                <td>
                    <div class="d-flex justify-content-center gap-2">
                    <form action="{{ action([App\Http\Controllers\DosenController::class, 'destroy'], [$d->id]) }}" method="post">
                    @csrf
                    @method('DELETE') 
                        <button class="btn btn-danger">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\DosenController::class, 'edit'], [$d->id]) }}" method="post">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

    </body>
</html>