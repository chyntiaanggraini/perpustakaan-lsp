@extends('admin.layout')
@section('content')
<div class="max-w-xl mx-auto">
<!-- Header -->
<div class="mb-6">
<h1 class="text-2xl font-bold text-slate-800">Update

Order</h1>

<p class="text-slate-500 text-sm mt-1">Update book borrowing

transaction.</p>
</div>
<!-- Form Card -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm
overflow-hidden">

<form action="{{ url('orders/' . $order->id) }}"

method="POST" class="p-6 space-y-6">

@csrf
@method('PUT')
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
text-red-800">There were errors with your submission</h3>

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
<!-- Anggota (Member) Selection -->
<div class="space-y-1">
<label for="anggota_id" class="block text-sm

font-medium text-slate-700">Member Name</label>

<select name="anggota_id" id="anggota_id"
class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-lg
focus:border-slate-800 focus:ring-1 focus:ring-slate-800 outline-none
transition-all text-slate-800" required>

<option value="" disabled>Select a

Member...</option>

@foreach($anggotas as $anggota)
<option value="{{ $anggota->id }}" {{
(old('anggota_id') ?? $order->anggota_id) == $anggota->id ? 'selected' :
'' }}>{{ $anggota->nama }} ({{ $anggota->kelas }})</option>

@endforeach
</select>
</div>
<!-- Book Selection -->
<div class="space-y-1">
<label for="book_id" class="block text-sm

font-medium text-slate-700">Book Title</label>

<select name="book_id" id="book_id" class="w-full

px-4 py-2.5 bg-white border border-gray-200 rounded-lg
focus:border-slate-800 focus:ring-1 focus:ring-slate-800 outline-none
transition-all text-slate-800" required>

<option value="" disabled>Select a

Book...</option>

@foreach($books as $book)
<option value="{{ $book->id }}" {{

(old('book_id') ?? $order->book_id) == $book->id ? 'selected' : '' }}>{{
$book->nama }} (by {{ $book->pengarang }})</option>

@endforeach
</select>
</div>
<!-- Borrow Date -->
<div class="space-y-1">
<label for="tanggal_pinjam" class="block text-sm

font-medium text-slate-700">Borrow Date</label>

<input type="datetime-local" name="tanggal_pinjam"

id="tanggal_pinjam" value="{{ old('tanggal_pinjam') ??
date('Y-m-d\TH:i', strtotime($order->tanggal_pinjam)) }}" class="w-full
px-4 py-2.5 bg-white border border-gray-200 rounded-lg
focus:border-slate-800 focus:ring-1 focus:ring-slate-800 outline-none
transition-all text-slate-800" required>

</div>
<div class="space-y-1">
<label for="tanggal_kembali" class="block text-sm

font-medium text-slate-700">Return Date</label>

<input type="datetime-local" name="tanggal_kembali"

id="tanggal_kembali" value="{{ old('tanggal_kembali') ??
($order->tanggal_kembali ? date('Y-m-d\TH:i',
strtotime($order->tanggal_kembali)) : '') }}" class="w-full px-4 py-2.5
bg-white border border-gray-200 rounded-lg focus:border-slate-800
focus:ring-1 focus:ring-slate-800 outline-none transition-all
text-slate-800" >
</div>
<!-- Form Actions -->
<div class="pt-4 flex items-center justify-end gap-3

border-t border-gray-50">

<a href="{{ url('/orders') }}" class="px-4 py-2
text-sm font-medium text-slate-600 bg-white border border-gray-300
rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2
focus:ring-offset-2 focus:ring-slate-500 transition-all">Cancel</a>
<button type="submit" class="px-6 py-2 text-sm
font-medium text-white bg-slate-900 rounded-lg hover:bg-slate-800

focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900
shadow-sm shadow-slate-900/10 transition-all">Update Order</button>

</div>
</form>
</div>
</div>
@endsection