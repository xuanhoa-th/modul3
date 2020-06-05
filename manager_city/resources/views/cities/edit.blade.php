@extends('home')
@section('main')
    <div class="container">
        <div class="col-12 mt-4">
            <h1>Edit tỉnh thành</h1>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('cities.store')}}">
            @csrf
            <div class="form-group mt-5">
                <label for="exampleInputEmail1">Ten tinh</label>
                <input type="text" class="form-control" name="name" value="{{$city->name}}">
            </div>

            <button type="submit" class="btn btn-primary">Cap nhap</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>



    </div>
@stop