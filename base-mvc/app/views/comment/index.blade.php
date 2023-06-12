@extends('layout.main')
@section('content')
<style>
    tbody,tr,td{
        border: 1px solid black;
    }
</style>
  @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
  
<a href="{{BASE_URL.'add-comment'}}">thêm sản phẩm</a>
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
        <td></td>
       
    </tr>
 
        @foreach ($comments as $pr)
    <tr>
       
        <td>
           {{$pr->id}}
        </td>
        <td>
        {{$pr->comment}}
        </td>
        <td>
            <a href="{{route('edit-comment/'.$pr->id)}}">cập nhật</a>
            <a onclick="return confirm('bạn có muốn xóa không')" href="{{route('delete-comment/'.$pr->id)}}">xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection