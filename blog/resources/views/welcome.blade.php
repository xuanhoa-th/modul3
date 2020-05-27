@extends('master')
@section('main')
<div class="container">
    <br>

        @forelse($blogs as $key =>$item)
    <div class="card" style="width: 80%;" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
        <div class="card-body">
           <h5 class="card-title" >{{$item->title}}</h5>
            <p class="card-text">{{$item->content1}}</p>
           <div class="row">
               <div class="col-md-6 mb-2 text-muted">{{$item->name}}</div>
               <div class="col-md-6 mb-2 text-muted text-right">{{$item->created_at}}</div>

           </div>
        </div>
        <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center  ">
                        <h5 class="modal-title " id="exampleModalLongTitle{{$item->id}}">{{$item->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{$item->content2}}
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('admin.edit', $item->id)}}" class="btn btn-outline-warning">sua</a>
                        <a href="{{route('admin.destroy', $item->id)}}" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xoa</a>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br>
    @empty
        <p>Không có dữ liệu</p>
    @endforelse




</div>

@stop
