<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @include ('components.boostrap')
</head>
<body>
    <div class="mt-3 mx-3">
        <form action="{{ action([App\Http\Controllers\KelasController::class, 'store']) }}"  method="post">
            @csrf
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Kode Kelas</label>
                <input type="Text" name="kode_kelas" class="form-control" placeholder="Masukkan Kode Kelas">
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Matkul</label>
                <select id="select" class="form-select">
                <option>-- Pilih Matkul --</option>
                @foreach($matkul as $mk)
                    <option value="{{ $mk->kode_mk }}">{{ $mk->nama_mk }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Kode Dosen</label>
                <input type="Text" name="kode_dosen" class="form-control" placeholder="Masukkan Kode Dosen">
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Dosen Pengajar</label>
                <select id="select" class="form-select">
                <option>-- Pilih Dosen --</option>
                @foreach($dosen as $d)
                    <option value="{{ $d->fullname }}">{{ $d->fullname }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Hari</label>
                <select id="select" class="form-select">
                <option>-- Pilih Hari --</option>
                @foreach($hari as $h)
                    <option value="{{ $h }}">{{ $h }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Jam</label>
                <select id="select" class="form-select">
                <option>-- Pilih Jam --</option>
                @foreach($jam as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Tahun Ajaran</label>
                <input type="Text" name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Ajaran">
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Semester</label>
                <select id="select" class="form-select" name="semester">
                <option>-- Pilih Semester --</option>
                <option value="Ganjil">Ganjil</option>
                <option value="Genap">Genap</option>
                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Ruangan</label>
                <input type="Text" name="ruang_kelas" class="form-control" placeholder="Masukkan Ruangan Kelas">
            </div>
            
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Jumlah Mahasiswa</label>
                <input type="Text" name="jumlah_max" class="form-control" placeholder="Masukkan Jumlah Mahasiswa">
            </div>

            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>