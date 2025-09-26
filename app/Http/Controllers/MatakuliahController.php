<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
     //menampilkan data dosen
    public function index()
    {
        $matakuliahs = Matakuliah::orderBy('created_at', 'DESC')->get();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    //menampilkan form untuk membuat matakuilah baru
    public function create()
    {
        return view('matakuliah.create');
    }

    //menyimpan data matakulliah baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|string|max:20|unique:matakuliahs,kode_mk|max:10',
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
           
            
        ]);

        //simpan data ke database
        Matakuliah::create($request->all());

        //redirect ke halaman index dengan pesan sukses
        return redirect()->route('matakuliah.index')
        ->with('success', 'Data berhasil ditambahkan!');
    }
    
 public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
    $request->validate([
        'kode_mk' => 'required',
        'nama_mk' => 'required',
        'sks' => 'required',
       'semester' => 'required',
       
    ]);

    $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')
                     ->with('success', 'Data Matakulliah berhasil diupdate');
    }
    
    public function destroy(Matakuliah $matakuliah)
    {
    $matakuliah->delete();
    return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus');
    }
     
}
