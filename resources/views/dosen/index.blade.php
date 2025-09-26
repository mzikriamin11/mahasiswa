@extends('layouts.app')

@section('content')


  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Dosen
                            </div>
                            <div class="card-body">
                                        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb
3">Tambah Data Dosen</a> 
 
        @if (session('success')) 
        <div class="alert alert-success"> 
            {{ session('success') }} 
        </div> 
        @endif 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>No</th> 
                                            <th>Nama</th> 
                                            <th>NIDN</th> 
                                            <th>Jabatan</th> 
                                            <th>Email</th> 
                                            <th>Telepon</th> 
                                            <th>Action</th>  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th> 
                                            <th>Nama</th> 
                                            <th>NIDN</th> 
                                            <th>Jabatan</th> 
                                            <th>Email</th> 
                                            <th>Telepon</th>  
                                             <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($dosens as $dosen) 
                <tr> 
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $dosen->nama }}</td> 
                    <td>{{ $dosen->nidn }}</td> 
                    <td>{{ $dosen->jabatan }}</td> 
                    <td>{{ $dosen->email }}</td> 
                    <td>{{ $dosen->telepon }}</td> 
                  
                       <td>
                            <!-- Tombol Edit -->
                             <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
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
                        