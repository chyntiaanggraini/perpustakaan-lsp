<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anggota;
use App\Models\Book;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
{
$userCount = User::all()->count();
$anggotaCount = anggota::all()->count();
$bookCount = Book::all()->count();
$orderCount = Order::all()->count();
return view('admin.Dashboard', compact('userCount',
'anggotaCount', 'bookCount', 'orderCount'));
}
}
