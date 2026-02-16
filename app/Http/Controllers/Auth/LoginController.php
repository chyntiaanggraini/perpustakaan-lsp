<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserRole;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show(){
return view('auth.login');
}

public function login($request){

if (! Auth::attempt($request->validated())){
return back()->withErrors([
'username' => 'username or password incorrect'
]);
}

$user = Auth::user();

// Redirect based on user role
if ($user->role === UserRole::SISWA) {
return redirect('/siswa/dashboard');
}

return redirect('/dashboard');
}
}
