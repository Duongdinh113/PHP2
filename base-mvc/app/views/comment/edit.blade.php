@extends('layout.main')
@section('content')
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green;">{{$_SESSION['success']}}</span>
@endif
 <form action="{{route("update-comment/".$comment->id)}}" method="post">
    <input type="text" value="{{$comment->comment}}" name="comment" id="">
    <input type="submit" name="btn" value="sửa" id="">
 </form>
@endsection
