@extends('layout.main')
@section('content')
<style>
    tbody,tr,td{
        border: 1px solid black;
    }
</style>
  <!-- @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif -->
  
<a href="{{BASE_URL.'add-comment'}}">thêm sản phẩm</a>
@if(isset($_SESSION['status']))
    <span style="color: red;">{{$_SESSION['status']}}</span>
@endif
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
        <td>tổng giá</td>
        <td>trạng thái</td>
        <td></td>
       
    </tr>
        @foreach ($carts as $list)
    <tr>
       
        <td>
        {{$list->id}}
        </td>
        <td>
        {{$list->name}}
        </td>
        <td>
        {{$list->total}}
        </td>
        <td>
        {{$list->status}}
        </td>
        <td>
            <form action="{{BASE_URL.'order-confirmation/'.$list->id}}" method="post">
                <input hidden type="text" name="dxl" value="{{$list->status}}" id="">
                <input hidden type="text" name="tc" value="đặt hàng thành công" id="">
                <input type="submit" value="xác nhận đơn" name="btn" id="">
            </form>
            <form action="">
                <input hidden type="text" name="" value="hủy đơn" id="">
                
                <input type="submit" value="xác nhận huy" name="" id="">
            </form>
        </td>
        </td>
    </tr>
    @endforeach
</table>
@endsection