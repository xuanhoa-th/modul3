<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index(){
        $cities = City::paginate(6);

        return view('cities.list', compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(Request $request){
        $city = new City();

        $city->name  = $request->input('name');
        $city->save();

//        tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('cities.index');
    }

    public function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function upload(Request $request, $id){

        $city = City::findOrFail($id);
        $city->name  = $request->input('name');
        $city->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach tinh
        dd('ok');
//        return redirect()->route('cities.index');
    }

    public function destroy($id){
        $city = City::findOrFail($id);

        //xoa khach hang thuoc tinh thanh nay
        $city->customers()->delete();
        $city->delete();

        //cap nhat xong quay ve trang danh sach tinh thanh
        return redirect()->route('cities.index');
    }

    public function search(Request $request)

    {

        $keyword = $request->input('keyword');

        if (!$keyword) {

            return redirect()->route('cities.index');

        }

        $city = City::where('name', 'LIKE', '%' . $keyword . '%')

            ->paginate(6);

        return view('cities.index', compact('city'));


    }

}
