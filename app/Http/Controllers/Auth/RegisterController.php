<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Anggota;
use App\Enums\UserRole;

class RegisterController extends Controller
{
    public function show(){
return view('auth.register');
}

public function register(Request $request){
try {

// validasi request dari frontend
$anggotaValidated = $request->validate([
'nis' => 'required|numeric|unique:anggotas,nis',
'nama' => 'required|string|max:50',
'kelas' => 'required|string|max:20',
'jurusan' => 'required|string|max:20',
], [
'nis.required' => 'NIS wajib diisi.',
'nis.numeric' => 'NIS harus berupa angka.',
'nis.unique' => 'NIS sudah terdaftar. Silahkan gunakan NIS
lain.',
'nama.required' => 'Nama wajib diisi.',
'nama.string' => 'Nama harus berupa teks.',
'nama.max' => 'Nama maksimal 50 karakter.',
'kelas.required' => 'Kelas wajib diisi.',
'kelas.string' => 'Kelas harus berupa teks.',
'kelas.max' => 'Kelas maksimal 20 karakter.',
'jurusan.required' => 'Jurusan wajib diisi.',
'jurusan.string' => 'Jurusan harus berupa teks.',
'jurusan.max' => 'Jurusan maksimal 20 karakter.',
]);

Log::info('Anggota validation passed', ['data' =>
$anggotaValidated]);

// logic untuk buat anggota
$anggota = anggota::create($anggotaValidated);
Log::info('Anggota created successfully', ['anggota_id' =>
$anggota->id]);

// validasi field ketika user login
$userValidated = $request->validate([
'username' => 'required|string|max:50|unique:users,username',
'password' => 'required|min:8',
], [
'username.required' => 'Username wajib diisi.',
'username.string' => 'Username harus berupa teks.',
'username.max' => 'Username maksimal 50 karakter.',
'username.unique' => 'Username sudah digunakan. Silahkan pilih
username lain.',
'password.required' => 'Password wajib diisi.',
'password.min' => 'Password minimal 8 karakter.',
]);

Log::info('User validation passed');

// tambahkan role siswa (tidak ada di field karena default siswa)
$userValidated['role'] = UserRole::SISWA->value;
$userValidated['anggota_id'] = $anggota->id;

// buat row user
$user = User::create($userValidated);
Log::info('User created successfully', [
'user_id' => $user->id,
'username' => $user->username
]);

//kembali ke login jika berhasil.

return redirect('/login')->with('success', 'Register berhasil.
Silahkan login.');

} catch (\Exception $e) {

// kembali ke register jika ada error
return back()
->withInput($request->except('password'))
->with('error', 'Terjadi kesalahan saat registrasi: ' .
$e->getMessage());
}
}
}
