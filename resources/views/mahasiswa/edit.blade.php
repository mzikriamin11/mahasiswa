@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"
                            {{ $mahasiswa->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}
                            class="form-check-input">
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="Perempuan"
                            {{ $mahasiswa->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}
                            class="form-check-input">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Program Studi</label>
                    <input type="text" name="prodi" value="{{ old('prodi', $mahasiswa->prodi) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Tahun Angkatan</label>
                    <input type="number" name="tahun_angkatan" value="{{ old('tahun_angkatan', $mahasiswa->tahun_angkatan) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection