@extends('master')
@section('main')
    <div class="col-12 col-md-12">
        <div class="row">

            <div class="container">
                <div class="col-12">
                    <h1>Thêm mới Blog</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('admin.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tác giả</label>
                            <input type="text" class="form-control" name="name"  required>
                        </div>
                        <div class="form-group">
                            <label>Tên tiêu đề</label>
                            <input type="text" class="form-control" name="title" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Miêu tả</label>
                            <input type="text" class="form-control" name="content1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung</label>
                            <textarea  class="form-control" rows="9" cols="70" name="content2"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
