@extends('layouts.app')

@section('content')
 
    <div class="container mt-5"> 
        <h2>Form Input Data Matakulliah</h2> 
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
 
        <form action="{{ route('matakuliah.store') }}" method="POST"> 
            @csrf 

              <div class="mb-3"> 
                <label for="kode_mk" class="form-label">Kode Matakuliah</label> 
              <input type="text" class="form-control" id="kode_mk" name="kode_mk" required> 
            </div> 
            <div class="mb-3"> 
                <label for="nama_mk" class="form-label">Nama Matakuliah</label> 
             <input type="text" class="form-control" id="nama_mk" name="nama_mk" required> 
            </div> 
                   
            <div class="mb-3"> 
                <label for="sks" class="form-label">Jumlah SKS</label> 
                <input type="text" class="form-control" id="sks" name="sks"  
                 required> 
            </div> 
            <div class="mb-3"> 
                <label for="semester" class="form-label"> 
                Semester</label> 
                <select class="form-select" id="semester"  
                name="semester" required> 
                    <option value="">Pilih Semester</option> 
                    @for ($semester = 1; $semester <= 8; $semester++) 
                        <option value="{{ $semester }}">{{ $semester }}</option> 
                        @endfor 
                </select> 
            </div> 
           
            <button type="submit" class="btn btn-primary">Simpan</button> 
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">  
            Kembali</a> 
        </form> 
    </div> 

@endsection