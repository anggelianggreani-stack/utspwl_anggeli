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
        <div style="text-align: center;">
            <a href="/2"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
        </div>
        <table style="width:90%; margin:auto;" class="table table-striped table-hover">
            <thead>
                <th>No</th>
                <th>ID Jurusan</th>
                <th>ID Dosen</th>
                <th>Nama Matkul</th>
                <th>Kode Matkul</th>
                <th>SKS</th>

                <th class="text-center">Aksi</th>
            </thead>
            @foreach ($matkul as $nomor => $m)
            <tr>
                <td>{{$nomor + 1}}</td>
                <td>{{$m->jurusan_id}}</td>
                <td>{{$m->dosen_id}}</td>
                <td>{{$m->nama_mk}}</td>
                <td>{{$m->kode_mk}}</td>
                <td>{{$m->sks}}</td>


                
                 <td>
                    <div class="d-flex justify-content-center gap-2">
                    <form action="{{ action([App\Http\Controllers\MatkulController::class, 'destroy'], [$m->id]) }}" method="post">
                    @csrf
                    @method('DELETE') 
                        <button class="btn btn-danger">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\MatkulController::class, 'edit'], [$m->id]) }}" method="post">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </table>
    </body>
</html>