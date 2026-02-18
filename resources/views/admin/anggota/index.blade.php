@extends('admin.layout')
@section('content')
<div class="flex justify-between mb-4">
<h1 class="text-2xl font-bold">Data Anggota</h1>
<a href="/users/create" class="bg-blue-600
text-white px-4 py-2 rounded">+ Tambah</a>
</div>
<table class="w-full bg-white shadow rounded">
<thead class="bg-gray-200">
<tr>
<th class="p-3">No</th>
<th>NIS</th>
<th>Nama</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@forelse($users as $i => $a)
@if(!$a->isAdmin())
<tr class="border-t">
<td class="p-3">{{ $a->id }}</td>
<td>{{ $a->anggota?->nis }}</td>
<td>{{ $a->anggota?->nama }}</td>
<td>{{ $a->anggota?->kelas }}</td>
<td>{{ $a->anggota?->jurusan }}</td>
<td class="space-x-2">
<a href="#" class="bg-yellow-400
px-2 py-1 rounded">Edit</a>
<form action="/users/{{ $a->id  }}"
method="POST" class="inline">
@csrf @method('DELETE')
<button onclick="return confirm('Hapus?')" class="bg-red-500 text-white
px-2 py-1 rounded">Hapus</button>
</form>
</td>
</tr>
@endif
@empty
<tr><td colspan="6" class="text-center p-4">Belum ada anggota</td></tr>

@endforelse
</tbody>
</table>
@endsection