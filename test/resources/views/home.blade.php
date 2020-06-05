@extends('master')
@section('main')
<h2>Trang home</h2>
@if(isset($demo))
    {{$demo}}
@else
    <p></p>
@endif
@stop
