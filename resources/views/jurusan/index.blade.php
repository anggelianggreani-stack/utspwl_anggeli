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
            <a href="/4"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
        </div>
        <table style="width:90%; margin:auto;" class="table table-striped table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Kode Jurusan</th>
                <th>Aksi</th>
            </tr>
                
            @foreach ($jurusan as $nomor => $j)
            <tr>
                <td>{{$nomor + 1}}</td>
                <td>{{ $j->nama_jurusan }}</td>
                <td>{{ $j->kode_jurusan }}</td>
                <td>
                    <div class="d-flex gap-2">
                    <form action="{{ action([App\Http\Controllers\JurusanController::class, 'destroy'], [$j->id]) }}" method="post">
                    @csrf
                    @method('DELETE') 
                        <button class="btn btn-danger">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\JurusanController::class, 'edit'], [$j->id]) }}" method="post">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </table>
    </body>
</html>