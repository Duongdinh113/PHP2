@extends('layout.main')
@section('content')
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
       
    </tr>
    <a href="{{BASE_URL.'add-category'}}">thêm sản phẩm</a>
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
            <a href="">xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection