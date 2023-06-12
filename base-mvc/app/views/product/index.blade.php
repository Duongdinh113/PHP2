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
        <td>giá</td>
        <td></td>
    </tr>
    <a href="{{BASE_URL.'add-Product'}}">thêm sản phẩm</a><br>
    <!-- @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif -->
    @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    @foreach ($products as $pr)
   
    <tr>
        
        <td>
           {{$pr->id}}
        </td>
        <td>
        {{$pr->ten_sp}}
        </td>
        <td>
        {{$pr->gia}}
        </td>
        <td>
            <a href="{{route("detail-product/".$pr->id)}}">cập nhật</a>
            <a onclick="return confirm('ban co muon xoa khong')" href="{{ route('delete-product/'.$pr->id) }}">xóa</a>
        </td>
    
    </tr>

    @endforeach

</table>
@endsection