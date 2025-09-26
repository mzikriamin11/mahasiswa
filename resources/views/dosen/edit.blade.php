@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Dosen</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ old('nama', $dosen->nama) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>NIDN</label>
                    <input type="text" name="nidn" value="{{ old('nidn', $dosen->nidn) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Jabatan</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jabatan" value="Dosen"
                            {{ $dosen->jabatan == 'Dosen' ? 'checked' : '' }}
                            class="form-check-input">
                        <label class="form-check-label">Dosen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jabatan" value="Lektor"
                            {{ $dosen->jabatan == 'Lektor' ? 'checked' : '' }}
                            class="form-check-input">
                        <label class="form-check-label">Lektor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jabatan" value="Guru Besar"
                            {{ $dosen->jabatan == 'Guru Besar' ? 'checked' : '' }}
                            class="form-check-input">
                        <label class="form-check-label">Guru Besar</label>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ old('email', $dosen->email) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Telepon</label>
                    <input type="number" name="telepon" value="{{ old('telepon', $dosen->telepon) }}" class="form-control">
                </div>

               

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection