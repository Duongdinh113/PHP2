@extends('layout.main')

@section('content')
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
<form action="{{BASE_URL.'post-category'}}" method="post">
    <input type="text" name="name" id="">
    <input type="submit" name="btn">
</form>
@endsection
