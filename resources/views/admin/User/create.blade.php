@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Anggota</h1>
<form action="{{ route('admin.anggota.store') }}" method="POST"
class="bg-white p-6 rounded shadow w-1/2">
@csrf
<label>NIS</label>
<input type="text" name="nis" class="border w-full p-2 mb-3">
<label>Nama</label>
<input type="text" name="nama" class="border w-full p-2 mb-3">
<label>Kelas</label>
<input type="text" name="kelas" class="border w-full p-2 mb-3">
<label>Jurusan</label>
<input type="text" name="jurusan" class="border w-full p-2 mb-3">
<button class="bg-green-600 text-white px-4 py-2
rounded">Simpan</button>
</form>
@endsection