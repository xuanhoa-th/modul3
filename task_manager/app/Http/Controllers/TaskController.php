<?php


namespace App\Http\Controllers;



class TaskController
{
    public function index(){
        dd('ok index');
//        return view('tasks.index');
    }
    public function create(){

        return view('create');
    }
    public function store(){
        dd('ok store');
//        return view('tasks.store');
    }
    public function show(){
        dd('ok show');
//        return view('tasks.show');
    }
    public function edit(){
        dd('ok edit');
//        return view('tasks.edit');
    }
    public function update(){
        dd('ok update');
//        return view('tasks.update');
    }
    public function destroy(){
        dd('ok destroy');
//        return view('tasks.destroy');
    }


}
