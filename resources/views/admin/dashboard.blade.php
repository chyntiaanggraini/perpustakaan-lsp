@extends('admin.layout')
@section('content')
<div class="w-full h-full p-8 bg-[#f8f9fa] font-sans">
<!-- Dashboard Header -->
<div class="flex flex-col md:flex-row justify-between
items-start md:items-center mb-10 gap-4">

<div>
<h1 class="text-3xl font-bold text-gray-900

tracking-tight">Hello, {{ auth()->user()->username ?? 'Admin' }}</h1>

<p class="text-gray-500 mt-2 text-base">Track library

progress here. You are doing great!</p>

</div>
<div class="flex items-center gap-3 bg-white px-5 py-3

rounded-2xl shadow-sm border border-gray-100">

<span class="text-gray-900 font-medium">{{ date('d M,

Y') }}</span>

<div class="bg-gray-100 p-2 rounded-xl">
<svg class="w-5 h-5 text-gray-600" fill="none"
stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5
21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002
2z"></path></svg>
</div>
</div>
</div>
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4
gap-6">

<!-- Total Users -->
<div class="bg-white p-6 rounded-3xl

shadow-[0_2px_20px_rgb(0,0,0,0.04)] border border-gray-100
hover:shadow-lg transition-shadow duration-300">

<div class="flex items-center justify-between mb-6">
<div class="bg-blue-50 p-3.5 rounded-2xl">
<svg class="w-7 h-7 text-blue-600" fill="none"
stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15
21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4
0 018 0z"></path></svg>
</div>
<!-- Slight trend badge simulation -->
<span class="text-xs font-semibold text-green-600

bg-green-50 px-2.5 py-1 rounded-full">+Active</span>

</div>
<div>
<span class="block text-gray-500 text-sm font-medium

mb-1">Total Users</span>

<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold text-gray-900">{{

$userCount }}</span>
</div>
</div>

</div>
<!-- Total Anggota -->
<div class="bg-white p-6 rounded-3xl

shadow-[0_2px_20px_rgb(0,0,0,0.04)] border border-gray-100
hover:shadow-lg transition-shadow duration-300">

<div class="flex items-center justify-between mb-6">
<div class="bg-purple-50 p-3.5 rounded-2xl">
<svg class="w-7 h-7 text-purple-600" fill="none"
stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0
002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0c0
.884-.896 1.625-2 1.956M15 6V5a2 2 0 10-4 0v1m4 0c.896.331 1.787 1.072
1.787 1.956M10 6A6.004 6.004 0 014 9.175M5 14h.01M5 11h.01M5 17h.01M9
14h.01M9 11h.01M9 17h.01M16 11h.01"></path></svg>

</div>
<span class="text-xs font-semibold text-purple-600

bg-purple-50 px-2.5 py-1 rounded-full">Members</span>

</div>
<div>
<span class="block text-gray-500 text-sm font-medium

mb-1">Total Anggota</span>

<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold text-gray-900">{{

$anggotaCount }}</span>
</div>
</div>
</div>
<!-- Total Books -->
<div class="bg-white p-6 rounded-3xl

shadow-[0_2px_20px_rgb(0,0,0,0.04)] border border-gray-100
hover:shadow-lg transition-shadow duration-300">

<div class="flex items-center justify-between mb-6">
<div class="bg-orange-50 p-3.5 rounded-2xl">
<svg class="w-7 h-7 text-orange-600"
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path
stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12
6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168
18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5
16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5
18c-1.746 0-3.332.477-4.5 1.253"></path></svg>

</div>
<span class="text-xs font-semibold text-orange-600

bg-orange-50 px-2.5 py-1 rounded-full">Collection</span>

</div>

<div>
<span class="block text-gray-500 text-sm font-medium

mb-1">Total Books</span>

<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold text-gray-900">{{

$bookCount }}</span>
</div>
</div>
</div>
<!-- Total Orders -->
<div class="bg-white p-6 rounded-3xl

shadow-[0_2px_20px_rgb(0,0,0,0.04)] border border-gray-100
hover:shadow-lg transition-shadow duration-300">

<div class="flex items-center justify-between mb-6">
<div class="bg-emerald-50 p-3.5 rounded-2xl">
<svg class="w-7 h-7 text-emerald-600"
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path
stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16
11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>

</div>
<span class="text-xs font-semibold text-emerald-600

bg-emerald-50 px-2.5 py-1 rounded-full">Transactions</span>

</div>
<div>
<span class="block text-gray-500 text-sm font-medium

mb-1">Total Orders</span>

<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold text-gray-900">{{

$orderCount }}</span>
</div>
</div>
</div>
</div>
</div>
@endsection