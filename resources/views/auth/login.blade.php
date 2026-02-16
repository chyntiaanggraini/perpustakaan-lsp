<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'Dasboard') }}</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link
href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
rel="stylesheet" />
<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6
lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6
not-has-[nav]:hidden">
<nav class="flex items-center justify-end gap-4">
<a
href="{{ url('/dashboard') }}"
class="inline-block px-5 py-1.5
dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border
text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm
text-sm leading-normal"
>
Dashboard
</a>
<a
href="/login"

class="inline-block px-5 py-1.5
dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent
hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm
leading-normal"
>
Log in
</a>

<a
href="/register"

class="inline-block px-5 py-1.5
dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border
text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm
text-sm leading-normal">
Register
</a>
</nav>
</header>
<div class="flex items-center justify-center w-full
transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
<main class=" w-full max-w-[400px]">
<div class="bg-white dark:bg-[#161615] p-6 lg:p-8
shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]
dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]" style="border-radius: 12px;">

<!-- Success Messages -->
@if (session('success'))
<div class="mb-4 p-4 bg-green-50
dark:bg-green-900/20 border border-green-200 dark:border-green-800
rounded-lg">
<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-green-400"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M10
18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586
7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
clip-rule="evenodd" />
</svg>
</div>

<div class="ml-3">

<p class="text-sm font-medium
text-green-800 dark:text-green-200">{{ session('success') }}</p>
</div>
</div>
</div>
@endif
<!-- General Error Messages -->
@if (session('error'))
<div class="mb-4 p-4 bg-red-50 dark:bg-red-900/20
border border-red-200 dark:border-red-800 rounded-lg">
<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-red-400"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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

<div class="mb-4 p-4 bg-red-50 dark:bg-red-900/20
border border-red-200 dark:border-red-800 rounded-lg">
<div class="flex items-start">
<div class="shrink-0">
<svg class="h-5 w-5 text-red-400"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
<div class="mt-2 text-sm text-red-700
dark:text-red-300">
<ul class="list-disc list-inside
space-y-1">
@foreach($users as $user)
    <p>{{ $user->name }}</p>
@endforeach

</ul>
</div>
</div>
</div>
</div>
@endif
<!-- Header -->
<div class="mb-6">
<h2 class="text-[24px] font-medium text-[#1b1b18]
dark:text-[#EDEDEC] mb-1">Welcome back</h2>
<p class="text-sm text-[#706f6c]
dark:text-[#A1A09A]">Sign in to your account to continue</p>
</div>
<!-- Form -->
<form method="post">
@csrf
<!-- Username Field -->
<div class="mb-4">
<label for="username" class="block text-sm
font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
Username

</label>
<input

type="text"
id="username"
name="username"
value="{{ old('username') }}"

class="w-full px-3 py-2 bg-[#FDFDFC]
dark:bg-[#0a0a0a] border @error('username') border-red-500
dark:border-red-600 @else border-[#e3e3e0] dark:border-[#3E3E3A] @enderror
text-[#1b1b18] dark:text-[#EDEDEC] text-sm focus:border-[#1b1b18]
dark:focus:border-[#eeeeec] transition-all outline-none"
style="border-radius: 8px;"
placeholder="Username"

required

>

@error('username')

<p class="mt-1 text-sm text-[#F53003]
dark:text-[#FF4433]">{{ $message }}</p>
@enderror
</div>
<!-- Password Field -->
<div class="mb-6">
<label for="password" class="block text-sm
font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
Password
</label>
<input

type="password"
id="password"
name="password"
class="w-full px-3 py-2 bg-[#FDFDFC]
dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A]
text-[#1b1b18] dark:text-[#EDEDEC] text-sm focus:border-[#1b1b18]
dark:focus:border-[#eeeeec] transition-all outline-none"
style="border-radius: 8px;"
placeholder="••••••••"

required

>

@error('password')

<p class="mt-1 text-sm text-[#F53003]
dark:text-[#FF4433]">{{ $message }}</p>
@enderror
</div>
<!-- Submit Button -->
<button
type="submit"

class="w-full px-4 py-2 bg-[#1b1b18]
dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] text-sm font-medium
hover:bg-black dark:hover:bg-white transition-all"
style="border-radius: 8px;"
>
Sign in
</button>
<!-- Register Link -->
<p class="text-sm text-center text-[#706f6c]
dark:text-[#A1A09A] mb-2 mt-4 py-2">
Don't have an account?
<a href="/register" class="text-[#1b1b18]
dark:text-[#EDEDEC] font-medium hover:underline">
Sign up
</a>
</p>
</form>
</div>
</main>
</div>
@if (Route::has('login'))
<div class="h-14.5 hidden lg:block"></div>
@endif
</body>
</html>