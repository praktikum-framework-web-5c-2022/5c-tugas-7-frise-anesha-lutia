<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function take(Mahasiswa $mahasiswa)
    {
        $ukms = Ukm::get();
        return view('mahasiswa.take', compact('mahasiswa','ukms'));
    }

    public function takeStore(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($mahasiswa->id);
        $ukms = Ukm::find($request->ukm_id);
        $mahasiswa->ukms()->sync($ukms);

        return redirect()->route('mahasiswas.index')->with('message','Berhasil');
    }

    public function kegiatan()
    {
        $ukms = Ukm::get();
        return view('kegiatan',compact('ukms'));
    }

    public function updatemahasiswa(Request $request,$id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index')->with('message', 'Data Mahasiswa Berhasil Diubah');
    }

    public function edit(Mahasiswa $mahasiswa, $id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('message', 'Mahasiswa Berhasil Dihapus');
    }
    public function createmahasiswa(){
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.create',compact('mahasiswa'));
    }
    public function create(){
        return view('mahasiswa.create');
    }
}
