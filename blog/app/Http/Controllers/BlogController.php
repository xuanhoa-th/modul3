<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function create(){

        return view('create');
    }
    public function store(Request $request){

        $blog = new Blog();
        $blog->name     = $request->input('name');
        $blog->title    = $request->input('title');
        $blog->content1   = $request->input('content1');
        $blog->content2   = $request->input('content2');

        $blog->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('welcome');
    }
    public function index(){
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    public function edit($id){
        $blogs = Blog::findOrFail($id);
        return view('edit', compact('blogs'));
    }
    public function update(Request $request, $id){
        $blogs = Blog::findOrFail($id);
        $blogs->name     = $request->input('name');
        $blogs->title    = $request->input('title');
        $blogs->content1      = $request->input('content1');
        $blogs->content2     = $request->input('content2');
        $blogs->save();


        Session::flash('success', 'Cập nhật thành công');

        return redirect()->route('admin.index');
    }

    public function destroy($id){
        $blogs = Blog::findOrFail($id);
        $blogs->delete();


        Session::flash('success', 'Xóa thành công');


        return redirect()->route('admin.index');
    }




}
