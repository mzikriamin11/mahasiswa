@extends('layouts.app')

@section('content')


  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Matakuliah
                            </div>
                            <div class="card-body">
                                        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb
3">Tambah Data Matakuliah</a> 
 
        @if (session('success')) 
        <div class="alert alert-success"> 
            {{ session('success') }} 
        </div> 
        @endif 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>No</th> 
                                            <th>Kode Matakuliah</th> 
                                            <th>Nama Matakuliah</th> 
                                            <th>SKS</th> 
                                            <th>Semester</th> 
                                            <th>Action</th> 
                                            </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>No</th> 
                                            <th>Kode Matakuliah</th> 
                                            <th>Nama Matakuliah</th> 
                                            <th>SKS</th> 
                                            <th>Semester</th> 
                                            <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($matakuliahs as $matakuliah) 
                <tr> 
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $matakuliah->kode_mk }}</td> 
                    <td>{{ $matakuliah->nama_mk }}</td> 
                    <td>{{ $matakuliah->sks }}</td> 
                    <td>{{ $matakuliah->semester }}</td> 
                    
                  
                       <td>
                            <!-- Tombol Edit -->
                             <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>

                </tr> 
                @empty 
                <tr> 
                    <td colspan="7" class="text-center">Belum ada data.</td> 
                </tr> 
                @endforelse 
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection
                        