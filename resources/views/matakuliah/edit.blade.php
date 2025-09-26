@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Matakuliah</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
           <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label>Kode Matakuliah</label>
        <input type="text" name="kode_mk" value="{{ old('kode_mk', $matakuliah->kode_mk) }}" 
               class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Nama Matakuliah</label>
        <input type="text" name="nama_mk" value="{{ old('nama_mk', $matakuliah->nama_mk) }}"  
               class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Jumlah SKS</label>
        <input type="number" name="sks" value="{{ old('sks', $matakuliah->sks) }}" 
               class="form-control" min="1" max="6" required>
    </div>

    <div class="mb-3"> 
        <label for="semester" class="form-label">Semester</label> 
        <select class="form-select" id="semester" name="semester" required> 
            @for ($semester = 1; $semester <= 8; $semester++) 
                <option value="{{ $semester }}" 
                    {{ old('semester', $matakuliah->semester) == $semester ? 'selected' : '' }}>
                    {{ $semester }}
                </option> 
            @endfor 
        </select> 
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
</form>

        </div>
    </div>
</div>
@endsection