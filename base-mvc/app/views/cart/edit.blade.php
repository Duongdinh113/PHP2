@extends('layout.main')
@section('content')
<!-- @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif -->
    <form action="{{route("edit-cart/".$cart->id)}}" method="post">
    <!-- {{BASE_URL.'edit-product/'.$product->id}} -->
    <table>
    
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="{{cart->name}}" name="name"/></td>
        </tr>
        <tr>
            <td>Đơn giá</td>
            <td><input type="text" value="{{cart->total}}" name="total"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="nut" value="sửa"/></td>
        </tr>
    </table>
  
    </form>
@endsection