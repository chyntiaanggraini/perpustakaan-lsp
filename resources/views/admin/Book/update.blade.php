@extends('admin.layout')
@section('content')
<div class="max-w-2xl mx-auto">
<!-- Header -->
<div class="mb-6">
<h1 class="text-2xl font-bold text-slate-800">Update Book

Data</h1>

<p class="text-slate-500 text-sm mt-1">update the details of

the book data.</p>
</div>
<!-- Form Card -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm
overflow-hidden">

<form action="{{ url('books/' . $book->id) }}" method="POST"

class="p-6 space-y-6">
@csrf
@method('PUT')
<!-- Validation Errors -->
@if ($errors->any())
<div class="p-4 bg-red-50 border border-red-100

rounded-lg">

<div class="flex items-start gap-3">
<svg class="h-5 w-5 text-red-500 mt-0.5"

fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938
4h13.856c1.54 0 2.502-1.667 1.732-3L13.732
4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />

</svg>
<div>
<h3 class="text-sm font-medium
text-red-800">Please correct the following errors:</h3>

<ul class="mt-1 list-disc list-inside

text-sm text-red-700">

@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
</div>
</div>
@endif
<!-- Book Name -->
<div class="space-y-1">
<label for="nama" class="block text-sm font-medium

text-slate-700">

Book Name
</label>
<input
type="text"
name="nama"
id="nama"
value="{{ $book->nama}}"
placeholder="e.g. The Great Gatsby"
class="w-full px-4 py-2.5 bg-white border
border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1
focus:ring-slate-800 outline-none transition-all
placeholder:text-gray-400 text-slate-800"

required
>
</div>
<!-- Author & Publisher Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Author -->
<div class="space-y-1">
<label for="pengarang" class="block text-sm

font-medium text-slate-700">
Author
</label>
<input
type="text"
name="pengarang"
id="pengarang"
value="{{ $book->pengarang }}"
placeholder="e.g. F. Scott Fitzgerald"
class="w-full px-4 py-2.5 bg-white border
border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1

focus:ring-slate-800 outline-none transition-all
placeholder:text-gray-400 text-slate-800"
required
>
</div>
<!-- Publisher -->
<div class="space-y-1">
<label for="penerbit" class="block text-sm

font-medium text-slate-700">

Publisher
</label>
<input
type="text"
name="penerbit"
id="penerbit"
value="{{ $book->penerbit }}"
placeholder="e.g. Scribner"
class="w-full px-4 py-2.5 bg-white border
border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1
focus:ring-slate-800 outline-none transition-all
placeholder:text-gray-400 text-slate-800"
required
>
</div>
</div>
<!-- Year & Stock Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Year -->
<div class="space-y-1">
<label for="tahun_terbit" class="block text-sm

font-medium text-slate-700">

Year Published
</label>
<input
type="number"
name="tahun_terbit"
id="tahun_terbit"
value="{{ $book->tahun_terbit }}"
min="1900"
max="{{ date('Y') + 1 }}"
placeholder="e.g. 1925"
class="w-full px-4 py-2.5 bg-white border
border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1
focus:ring-slate-800 outline-none transition-all

placeholder:text-gray-400 text-slate-800"
required
>
</div>
<!-- Stock -->
<div class="space-y-1">
<label for="stock" class="block text-sm

font-medium text-slate-700">
Stock
</label>
<div class="relative">
<input
type="number"
name="stock"
id="stock"
value="{{ $book->stock }}"
min="0"
placeholder="0"
class="w-full px-4 py-2.5 bg-white
border border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1
focus:ring-slate-800 outline-none transition-all
placeholder:text-gray-400 text-slate-800"
required
>
<div class="absolute inset-y-0 right-0 pr-4

flex items-center pointer-events-none text-gray-400 text-sm">

copies
</div>
</div>
</div>
</div>
<!-- Form Actions -->
<div class="pt-4 flex items-center justify-end gap-3

border-t border-gray-50">
<a
href="{{ url('/books') }}"
class="px-4 py-2 text-sm font-medium
text-slate-600 bg-white border border-gray-300 rounded-lg
hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2
focus:ring-slate-500 transition-all"

>
Cancel
</a>
<button

type="submit"
class="px-6 py-2 text-sm font-medium text-white

bg-slate-900 rounded-lg hover:bg-slate-800 focus:outline-none
focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 shadow-sm
shadow-slate-900/10 transition-all"

>
Save Book
</button>
</div>
</form>
</div>
</div>
@endsection