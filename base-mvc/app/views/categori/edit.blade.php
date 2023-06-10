@extends('layout.main')
@section('content')
@if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif 
    <form action="{{route("update-category/".$category->id)}}" method="post">
        <input type="text"   value="{{$category->name}}" name="name" id="">
        <input type="submit" value="sửa" name="btn">
    </form>
@endsection