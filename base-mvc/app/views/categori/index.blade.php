@extends('layout.main')
@section('content')
<style>
    tbody,tr,td{
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
        <td></td>
       
    </tr>
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green">{{$_SESSION['success']}}</span><br>
    @endif
    
    <a class="a" href="{{BASE_URL.'add-category'}}">thêm sản phẩm</a>
        @foreach ($categoris as $pr)
    <tr>
       
        <td>
           {{$pr->id}}
        </td>
        <td>
        {{$pr->name}}
        </td>
        <td>
            <a href="{{route("edit-category/".$pr->id)}}">cập nhật</a>
            <a onclick="return confirm('bạn có muốn xóa không')" href="{{route('delete-category/'.$pr->id)}}">xóa</a>
            <!-- {{ route('delete-product/'.$pr->id) }} -->
        </td>
    </tr>
    @endforeach
</table>
@endsection