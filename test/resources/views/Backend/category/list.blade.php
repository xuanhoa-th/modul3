
@extends('Backend.master')
@section('main')
    <div class="container">

        <h2>Danh sach  danh muc</h2>
        <div class="row">
            <div class="col-md-5">
                <form class="form-group" method="post" action="{{route('add-category')}}">
                    @csrf
                    <h3>Them moi</h3>
                    <label for="">ten danh muc</label>
                    <input type="text" name="name" id="" class="form-control">
                    <button type="submit" class="btb btn-danger"> Them moi </button>

                </form>
            </div>
            <div class="col-md-7">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                    <tr>
                        <th>STT</th>
                        <th> ten</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td>dsf</td>
                        <td>sdf</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
