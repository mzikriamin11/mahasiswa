<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //menampilkan data mahasiswa
    public function index()
    {
        $dosens = Dosen::orderBy('created_at', 'DESC')->get();
        return view('dosen.index', compact('dosens'));
    }

    //menampilkan form untuk membuat mahasiswa baru
    public function create()
    {
        return view('dosen.create');
    }

    //menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:dosens,nidn|max:10',
            'jabatan' => 'required|in:Dosen,Lektor,Guru Besar',
            'email' => 'required|string|max:255|unique:dosens',
            'telepon' => 'required|max:13',
            
        ]);

        //simpan data ke database
        Dosen::create($request->all());

        //redirect ke halaman index dengan pesan sukses
        return redirect()->route('dosen.index')
        ->with('success', 'Data berhasil ditambahkan!');
    }
    
 public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
    $request->validate([
        'nama' => 'required',
        'nidn' => 'required',
        'jabatan' => 'required',
        'email' => 'required',
        'telepon' => 'required',
       
    ]);

    $dosen->update($request->all());

        return redirect()->route('dosen.index')
                     ->with('success', 'Data dosen berhasil diupdate');
    }
    
    public function destroy(Dosen $dosen)
    {
    $dosen->delete();
    return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus');
    }
     

}
