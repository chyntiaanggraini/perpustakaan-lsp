@extends('layouts.app')
@section('content')
<div class="flex justify-between mb-4">
<h1 class="text-2xl font-bold">Data Anggota</h1>
<a href="{{ route('admin.anggota.create') }}" class="bg-blue-600
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
@forelse($anggota as $i => $a)
<tr class="border-t">
<td class="p-3">{{ $i+1 }}</td>
<td>{{ $a->nis }}</td>
<td>{{ $a->nama }}</td>
<td>{{ $a->kelas }}</td>
<td>{{ $a->jurusan }}</td>
<td class="space-x-2">
<a href="{{ route('admin.anggota.edit',$a->id) }}" class="bg-yellow-400
px-2 py-1 rounded">Edit</a>
<form action="{{ route('admin.anggota.destroy',$a->id) }}"
method="POST" class="inline">
@csrf @method('DELETE')
<button onclick="return confirm('Hapus?')" class="bg-red-500 text-white
px-2 py-1 rounded">Hapus</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center p-4">Belum ada anggota</td></tr>

@endforelse
</tbody>
</table>
@endsection