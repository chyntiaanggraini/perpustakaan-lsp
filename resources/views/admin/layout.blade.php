<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght
@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-slate-800">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="hidden md:flex flex-col w-64 bg-white border-r
border-gray-100">
<!-- Logo -->
<div class="flex items-center justify-center h-20 border-b

border-gray-50/50">

<a href="#" class="text-xl font-bold tracking-wider

text-slate-900 uppercase">
Perpusz telkom
</a>
</div>
<!-- Navigation -->
<div class="flex-1 overflow-y-auto py-6 px-4 space-y-8

custom-scrollbar">

<!-- Main Menu -->
<div>
<h3 class="px-2 text-xs font-semibold text-gray-400

uppercase tracking-wider mb-3">Main Menu</h3>

<nav class="space-y-1">
<!-- Dashboard -->
<a href="{{ url('/dashboard') }}" class="group

flex items-center px-4 py-3 text-sm font-medium rounded-xl
transition-all duration-200 {{ request()->is('dashboard*') ?
'bg-slate-900 text-white shadow-sm shadow-slate-300/50' :
'text-slate-500 hover:bg-gray-50 hover:text-slate-900' }}">
<svg class="mr-3 h-5 w-5 shrink-0 {{
request()->is('dashboard*') ? 'text-white' : 'text-slate-400
group-hover:text-slate-900' }}" fill="none" viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5
10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h3m-6 0a1 1 0
001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />

</svg>
Dashboard
</a>
<!-- User -->
<a href="{{ url('/users') }}" class="group flex
items-center px-4 py-3 text-sm font-medium rounded-xl transition-all
duration-200 {{ request()->is('users*') ? 'bg-slate-900 text-white
shadow-sm shadow-slate-300/50' : 'text-slate-500 hover:bg-gray-50
hover:text-slate-900' }}">

<svg class="mr-3 h-5 w-5 shrink-0 {{
request()->is('users*') ? 'text-white' : 'text-slate-400
group-hover:text-slate-900' }}" fill="none" viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15
21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4
0 018 0z" />

</svg>
User
</a>
<!-- Book -->
<a href="{{ url('/books') }}" class="group flex
items-center px-4 py-3 text-sm font-medium rounded-xl transition-all
duration-200 {{ request()->is('books*') ? 'bg-slate-900 text-white
shadow-sm shadow-slate-300/50' : 'text-slate-500 hover:bg-gray-50
hover:text-slate-900' }}">

<svg class="mr-3 h-5 w-5 shrink-0 {{
request()->is('books*') ? 'text-white' : 'text-slate-400
group-hover:text-slate-900' }}" fill="none" viewBox="0 0 24 24"

stroke="currentColor">

<path stroke-linecap="round"
stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832
5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5
18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0
3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746
0-3.332.477-4.5 1.253" />

</svg>
Book
</a>
<!-- Orders -->
<a href="{{ url('/orders') }}" class="group flex
items-center px-4 py-3 text-sm font-medium rounded-xl transition-all
duration-200 {{ request()->is('orders*') ? 'bg-slate-900 text-white
shadow-sm shadow-slate-300/50' : 'text-slate-500 hover:bg-gray-50
hover:text-slate-900' }}">

<svg class="mr-3 h-5 w-5 shrink-0 {{
request()->is('orders*') ? 'text-white' : 'text-slate-400
group-hover:text-slate-900' }}" fill="none" viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0
002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9
5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />

</svg>
Orders
</a>
</nav>
</div>
</div>
<!-- Bottom Actions -->
<div class="p-4 border-t border-gray-50/50 space-y-1">
<a href="/logout" class="group flex items-center px-4
py-3 text-sm font-medium text-slate-500 rounded-xl hover:bg-red-50
hover:text-red-600 transition-colors duration-200">

<svg class="mr-3 h-5 w-5 shrink-0 text-slate-400

group-hover:text-red-500" fill="none" viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6
4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

</svg>
Log out

</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-hidden bg-white
md:bg-gray-50">

<!-- Topbar -->
<header class="flex items-center justify-between h-20 px-6

py-4 bg-white border-b border-gray-100/50">

<!-- Mobile Menu Button (Visible on small screens) -->
<button class="md:hidden text-gray-500

focus:outline-none">

<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"

stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />

</svg>
</button>
<!-- Left Side: Date OR Breadcrumbs -->
<div class="hidden md:block">
<!-- Can place breadcrumbs here -->
</div>
<!-- Right Side: Interaction -->
<div class="flex items-center space-x-6">
<!-- Profile Dropdown / Logout Button -->
<div class="relative flex items-center space-x-3

pl-6 border-l border-gray-100">

<div class="flex flex-col items-end">
<span class="text-sm font-semibold
text-slate-800">{{ Auth::user()->username ?? 'Guest User' }}</span>
<span class="text-xs text-gray-400">{{

Auth::user()->role ?? 'Admin'}}</span>
</div>
<div class="h-10 w-10 rounded-full bg-slate-200
flex items-center justify-center overflow-hidden border-2 border-white
shadow-sm">

<!-- Placeholder for user Avatar -->
<span class="font-bold text-slate-500

text-sm">

{{ substr(Auth::user()->username ?? 'G',

0, 1) }}

</span>

</div>
<!-- Topbar Logout Button (Requested

specifically) -->

<a href="/logout" class="ml-2 p-2 text-red-400
hover:text-red-600 hover:bg-red-50 rounded-full transition-colors"
title="Logout">

<svg class="h-5 w-5" fill="none" viewBox="0

0 24 24" stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6
4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

</svg>
</a>
</div>
</div>
</header>
<!-- Page Content -->
<div class="flex-1 overflow-x-hidden overflow-y-auto

bg-gray-50/50 p-6">

@yield('content')
{{ isset($slot) ? $slot : '' }}
</div>
</main>
</div>
</body>
</html>