<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
public function index()
{
$books = Book::all();
return view('admin.Book.index', compact('books'));
}

public function create(Request $request)
{
if($request->isMethod('get')){
return view('admin.Book.create');
}
if($request->isMethod('post')){
$validate = $request->validate([
'nama' => 'required',
'pengarang' => 'required',
'penerbit' => 'required',
'stock' => 'required',
'tahun_terbit' => 'required'
]);
Book::create($validate);
return redirect('/books')->with('success' , 'Book has been
Created');

}
}
public function edit(string $id)
{
$book = Book::findOrFail($id);
return view('admin.Book.update' , compact('book'));
}

public function update(Request $request, string $id)
{
$book = Book::findOrFail($id);
$data = $request->validate([
'nama' => 'required|unique:books,nama,' . $id,
'penerbit' => 'required',
'pengarang' => 'required',
'stock' => 'required',
'tahun_terbit' => 'required'
]);
$book->update($data);
return redirect('/books')->with('success', 'Berhasil update
data');
}

public function destroy(string $id)
{
Book::destroy($id);
return redirect('/books')->with('success','Berhasil hapus
data');
}
}