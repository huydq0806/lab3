<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('books.*','name')
        ->limit(20)
        ->orderByDesc('id')
        ->get();
        return view('books.index', compact('books'));
    }

    public function create(){
        $categories = DB::table('categories')
        ->get();
        return view('books.create', compact('categories'));
    }


    // Luwu dữ liệu của foem create
    public function store(Request $request){
        // $data = $request->except('_token');
        // Hoắc
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];

        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }

    // Xóa sách
    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }

    // Hiển thị form edit
    public function edit($id){
        $book = DB::table('books')
        ->where('id', $id)
        ->first();

        $categories = DB::table('categories')
        ->get();
        return view('books.edit', compact('book', 'categories'));
    }

    // cập nhật đữ liệu
    public function update(Request $request){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];

        DB::table('books')->where('id', $request['id'])->update($data);
        return redirect()->route('book.index');
    }
}
