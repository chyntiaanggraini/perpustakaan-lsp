<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\Anggota;
use App\Models\anggota as ModelsAnggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller // ganti jadi UserController yeah
{
public function index()
{
    $users = User::with('anggota')->get();
return view('admin.anggota.index', compact('users'));
}
public function create(Request $request)
{

    //new logic buat anggota 

    //ini method get, return frontend (halaman depan)
    if($request->isMethod('get')){
        return view('admin.anggota.create');
    }

    //kalo ini method post , dia ngirim data ke db buat row baru
    if($request->isMethod('post')){
        
        $request->validate([
        'username'=> 'required',
        'password'=> 'required',
        'nis' => 'required|unique:anggotas',
        'nama' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required'
        ]);

        $userAtr = [
            'username' => $request->username,
            'password'=> Hash::make($request->password),
            'role' => UserRole::SISWA
        ];

        $anggota = anggota::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]); //buat data anggota

        $userAtr['anggota_id'] = $anggota->id; //ambil id anggota buat dijadiin foreign key

        User::create($userAtr); // buat data user dengan relasi ke anggota yang udah dibuat tadi.


        return
        redirect('/users')->with('success','Anggota
        ditambahkan');
    }


}
public function store(Request $request)
{
}
public function edit(Anggota $anggota)
{
return view('admin.anggota.edit', compact('anggota'));
}
public function update(Request $request, Anggota $anggota)
{
$anggota->update($request->all());

return

redirect('/users')->with('success','Data
diperbarui');
}
public function destroy(String $id)
{
  $user = User::findOrFail($id);
  $anggotaId = $user->anggota->id;
  $user->destroy($id);
  ModelsAnggota::destroy($anggotaId);

return back()->with('success','Data dihapus');
}
}
