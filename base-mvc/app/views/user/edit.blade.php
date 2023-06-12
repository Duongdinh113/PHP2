@extends('layout.main')
@section('content')
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green;">{{$_SESSION['success']}}</span>
@endif
 <form action="{{route("update-user/".$user->id)}}" method="post">
    <input type="text" value="{{$user->name}}" name="name" id="">
    <input type="text" value="{{$user->password}}" name="pass" id="">
    <input type="submit" name="btn" value="sửa" id="">
 </form>
@endsection
