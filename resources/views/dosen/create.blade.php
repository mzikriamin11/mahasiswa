@extends('layouts.app')

@section('content')
 
    <div class="container mt-5"> 
        <h2>Form Input Data Dosen</h2> 
        <hr> 
 
        @if ($errors->any()) 
        <div class="alert alert-danger"> 
            <strong>Whoops!</strong> Terjadi kesalahan input.<br><br> 
            <ul> 
                @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
                @endforeach 
            </ul> 
        </div> 
        @endif 
 
        <form action="{{ route('dosen.store') }}" method="POST"> 
            @csrf 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama</label> 
             <input type="text" class="form-control" id="nama" name="nama" required> 
            </div> 
            <div class="mb-3"> 
                <label for="nidn" class="form-label">NIDN</label> 
              <input type="text" class="form-control" id="nidn" name="nidn" required> 
            </div> 
            <div class="mb-3">
                  <label class="form-label">Jabatan</label><br> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio"  
                     name="jabatan" id="dosen" value="Dosen" required> 
                    <label class="form-check-label" for="dosen">Dosen  
                    </label> 
                </div> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio"  
                     name="jabatan" id="lektor" value="Lektor"> 
                    <label class="form-check-label"  
                     for="lektor">Lektor</label> 
                </div> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio"  
                     name="jabatan" id="guru besar" value="Guru Besar"> 
                    <label class="form-check-label"  
                     for="guru besar">Guru Besar</label> 
                </div> 
            </div> 
            <div class="mb-3"> 
                <label for="email" class="form-label">Email</label> 
                <input type="text" class="form-control" id="email" name="email"  
                 required> 
            </div> 

            <div class="mb-3"> 
                <label for="telepon" class="form-label">Nomor Telepon</label> 
                <input type="text" class="form-control" id="telepon" name="telepon"  
                 required> 
            </div>
        
            <button type="submit" class="btn btn-primary">Simpan</button> 
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">  
            Kembali</a> 
        </form> 
    </div> 

@endsection