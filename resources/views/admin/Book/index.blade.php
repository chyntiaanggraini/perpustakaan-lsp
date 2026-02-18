@extends('admin.layout')
@section('content')
<div class="w-full h-full p-6 bg-gray-50">
<div class="bg-white rounded-xl shadow-sm border border-gray-100
overflow-hidden">

<!-- Header Section -->
<div class="p-6 flex flex-col md:flex-row justify-between

items-center gap-4 border-b border-gray-100">

<div class="flex items-center gap-4 w-full md:w-auto">
<h1 class="text-xl font-bold

text-gray-800">Books</h1>

<!-- Search Bar -->
<div class="relative flex-1 md:w-64">
<input type="text" placeholder="Search..."
class="w-full pl-10 pr-4 py-2 bg-gray-50 border-transparent rounded-lg
text-sm focus:border-yellow-400 focus:bg-white focus:ring-0
transition-colors">

<svg class="w-4 h-4 text-gray-400 absolute
left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24
24"><path stroke-linecap="round" stroke-linejoin="round"
stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114
0z"></path></svg>

</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto

justify-end">

<!-- Add Button -->
<a href="{{ url('/books/create') }}"

class="bg-[#fbbf24] hover:bg-yellow-500 text-gray-900 px-5 py-2.5
rounded-lg text-sm font-semibold flex items-center gap-2
transition-colors shadow-sm">

<svg class="w-4 h-4" fill="none"

stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M12
4v16m8-8H4"></path></svg>

Add Book
</a>
</div>
</div>
@if (session('success'))

<div class="mb-4 p-4 w-full bg-green-50

border-green-200 ">

<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-green-800"

xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">

<path fill-rule="evenodd" d="M10
18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586
7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
clip-rule="evenodd" />

</svg>
</div>
<div class="ml-3">
<p class="text-sm font-medium

text-green-800 ">{{ session('success') }}</p>
</div>
</div>
</div>
@endif
<!-- General Error Messages -->
@if (session('error'))
<div class="mb-4 p-4 bg-red-50
dark:bg-red-900/20 border border-red-200 dark:border-red-800
rounded-lg">

<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-red-400"

xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">

<path fill-rule="evenodd" d="M10
18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586
10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0
001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707
7.293z" clip-rule="evenodd" />

</svg>
</div>
<div class="ml-3">
<p class="text-sm font-medium

text-red-800 dark:text-red-200">{{ session('error') }}</p>

</div>
</div>
</div>
@endif
<!-- Validation Errors -->
@if ($errors->any())
<div class="mb-4 p-4 bg-red-50
dark:bg-red-900/20 border border-red-200 dark:border-red-800
rounded-lg">

<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-red-400"

xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">

<path fill-rule="evenodd" d="M10
18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586
10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0
001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707
7.293z" clip-rule="evenodd" />

</svg>
</div>
<div class="ml-3 flex-1">
<h3 class="text-sm font-medium

text-red-800 dark:text-red-200">Login Error</h3>

<div class="mt-2 text-sm

text-red-700 dark:text-red-300">

<ul class="list-disc list-inside

space-y-1">
{{-- 
@foreach ($errors->all() as

$error)

<li>{{ $error }}</li>
@endforeach --}}
</ul>
</div>
</div>
</div>
</div>
@endif

<!-- Table Section -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>

<tr class="bg-[#0f172a] text-white text-xs

uppercase tracking-wider">

<th class="p-4 font-semibold

rounded-tl-lg">Id</th>

<th class="p-4 font-semibold">Nama</th>
<th class="p-4 font-semibold">Pengarang</th>
<th class="p-4 font-semibold">Penerbit</th>
<th class="p-4 font-semibold">Stock</th>
<th class="p-4 font-semibold">Tahun

Terbit</th>

<th class="p-4 font-semibold text-center

rounded-tr-lg">Actions</th>
</tr>
</thead>
<tbody class="text-gray-600 text-sm">
@forelse ($books as $book)
<tr class="border-b border-gray-50

hover:bg-gray-50 transition-colors">

<td class="p-4 font-medium

text-gray-900">#{{ $book->id }}</td>

<td class="p-4">{{ $book->nama ?? '-'

}}</td>

<td class="p-4">{{ $book->pengarang ?? '-'

}}</td>

<td class="p-4">
@if($book->penerbit)
<span class="px-2 py-1 bg-blue-50
text-blue-700 rounded text-xs font-medium">{{ $book->penerbit }}</span>

@else
-
@endif
</td>
<td class="p-4">{{ $book->stock ?? '-'

}}</td>

<td class="p-4 font-medium text-gray-700">{{

$book->tahun_terbit }}</td>

<td class="p-4 text-center">
<div class="flex items-center

justify-center gap-3">

<!-- Edit -->
<a href="/books/{{ $book->id
}}/edit" class="text-gray-400 hover:text-yellow-600 transition-colors"
title="Edit">

<svg class="w-5 h-5" fill="none"

stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536
3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732
3.732z"></path></svg>

</a>
<!-- Delete -->
<form action="/books/{{ $book->id
}}" method="POST" onsubmit="return confirm('Are you sure you want to
delete this book?');" class="inline">
@csrf
@method('DELETE')
<button type="submit"
class="text-gray-400 hover:text-red-500 transition-colors"
title="Delete">

<svg class="w-5 h-5"
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path
stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19
7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5
4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>

</button>
</form>
</div>
</td>
</tr>

@empty
<tr>
<td colspan="7" class="p-8 text-center

text-gray-400 bg-gray-50">

<div class="flex flex-col items-center

justify-center">

<svg class="w-12 h-12 text-gray-300
mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path
stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17
20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10
0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7
20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0
11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2
0 014 0z"></path></svg>

<p>No books found</p>
</div>
</td>
</tr>
@endforelse
</tbody>

</table>
</div>
<!-- Footer Section -->
<div class="p-4 border-t border-gray-100 flex flex-col
md:flex-row items-center justify-between text-sm text-gray-500 gap-4">

<div class="flex items-center gap-2">
<span>Rows per page:</span>
<select class="border-gray-200 rounded text-sm
focus:ring-yellow-400 focus:border-yellow-400 bg-gray-50 py-1 pl-2
pr-6">

<option>10</option>
<option>20</option>
<option>50</option>
</select>
</div>
<div class="flex items-center gap-4">
<span class="text-gray-600">Showing <span

class="font-medium text-gray-900">1-{{ count($books) }}</span> of <span
class="font-medium text-gray-900">{{ count($books) }}</span>
records</span>

<div class="flex gap-1">
<button class="p-1 px-2 hover:bg-gray-100
rounded disabled:opacity-50 text-gray-600 font-medium" disabled>

&lt; Previous
</button>
<button class="p-1 px-3 bg-gray-100 rounded

text-gray-900 font-medium">1</button>

<button class="p-1 px-2 hover:bg-gray-100
disabled:opacity-50 rounded text-gray-600 font-medium" disabled>

Next &gt;
</button>
</div>
</div>
</div>
</div>
</div>
@endsection