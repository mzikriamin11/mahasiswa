@extends('layouts.app')

@section('content')


  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Mahasiswa
                            </div>
                            <div class="card-body">
                                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb
3">Tambah Mahasiswa</a> 
 
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
                                            <th>NIM</th> 
                                            <th>Jenis Kelamin</th> 
                                            <th>Prodi</th> 
                                            <th>Angkatan</th> 
                                            <th>Tgl Lahir</th>
                                               <th>Action</th>  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th> 
                                            <th>Nama</th> 
                                            <th>NIM</th> 
                                            <th>Jenis Kelamin</th> 
                                            <th>Prodi</th> 
                                            <th>Angkatan</th> 
                                            <th>Tgl Lahir</th> 
                                             <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($mahasiswas as $mahasiswa) 
                <tr> 
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $mahasiswa->nama }}</td> 
                    <td>{{ $mahasiswa->nim }}</td> 
                    <td>{{ $mahasiswa->jenis_kelamin }}</td> 
                    <td>{{ $mahasiswa->prodi }}</td> 
                    <td>{{ $mahasiswa->tahun_angkatan }}</td> 
                    <td>{{ $mahasiswa->tanggal_lahir }}</td> 
                       <td>
                            <!-- Tombol Edit -->
                             <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
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
                        