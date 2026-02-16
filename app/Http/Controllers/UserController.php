<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use Illuminate\Http\Request;
class AnggotaController extends Controller
{
public function index()
{
$anggota = Anggota::latest()->get();
return view('admin.anggota.index', compact('anggota'));
}
public function create()
{
return view('admin.anggota.create');

}
public function store(Request $request)
{
$request->validate([
'nis' => 'required|unique:anggotas',
'nama' => 'required',
'kelas' => 'required',
'jurusan' => 'required'
]);
Anggota::create($request->all());

return
redirect()->route('admin.anggota.index')->with('success','Anggota
ditambahkan');
}
public function edit(Anggota $anggota)
{
return view('admin.anggota.edit', compact('anggota'));
}
public function update(Request $request, Anggota $anggota)
{
$anggota->update($request->all());

return

redirect()->route('admin.anggota.index')->with('success','Data
diperbarui');
}
public function destroy(Anggota $anggota)
{
$anggota->delete();
return back()->with('success','Data dihapus');
}
}
