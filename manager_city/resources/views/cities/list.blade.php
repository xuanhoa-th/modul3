@extends('home')
@section('main')
   <div class="container">
       <div class="col-12 mt-4">
           <h1>Danh sach tỉnh thành</h1>
       </div>
       <a class="btn btn-primary" href="{{route('cities.create')}}">Thêm mới</a>
       <div class="col-6">

           <form class="navbar-form navbar-left" action="{{'cities.search'}}">

               @csrf

               <div class="row">

                   <div class="col-8">

                       <div class="form-group">

                           <input type="text" class="form-control"  name="keyword" placeholder="Search">

                       </div>

                   </div>

                   <div class="col-4">

                       <button type="submit" class="btn btn-default">Tìm kiếm</button>

                   </div>

               </div>

           </form>

       </div>
       <table class="table">
           <thead>
           <tr>
               <th scope="col">STT</th>
               <th scope="col">Tên tỉnh</th>
               <th></th>
               <th></th>

           </tr>
           </thead>
           <tbody>
           @forelse($cities as $key =>$item)
           <tr>
               <td scope="row">{{$item->id}}</td>
               <td scope="row">{{$item->name}}</td>
               <td><a class=" btn btn-success " href="{{route('cities.edit',$item->id)}}" >Sua</a></td>
               <td><a class=" btn btn-secondary " onclick="return confirm('Bạn chắc chắn muốn xóa?')">xoa</a></td>

           </tr>

           @empty
           <p>khong du lieu</p>
           @endforelse

           </tbody>
       </table>
       {{ $cities->links() }}


   </div>
@stop