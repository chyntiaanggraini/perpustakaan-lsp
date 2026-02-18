@extends('admin.layout')
@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Anggota</h1>

<form action="{{ route('admin.anggota.update',$anggota->id) }}"
method="POST" class="bg-white p-6 rounded shadow w-1/2">
@csrf @method('PUT')
<label>NIS</label>
<input type="text" name="nis" value="{{ $anggota->nis }}" class="border
w-full p-2 mb-3">
<label>Nama</label>
<input type="text" name="nama" value="{{ $anggota->nama }}"
class="border w-full p-2 mb-3">
<label>Kelas</label>
<input type="text" name="kelas" value="{{ $anggota->kelas }}"
class="border w-full p-2 mb-3">
<label>Jurusan</label>
<input type="text" name="jurusan" value="{{ $anggota->jurusan }}"
class="border w-full p-2 mb-3">
<button class="bg-yellow-500 text-white px-4 py-2
rounded">Update</button>
</form>
@endsection