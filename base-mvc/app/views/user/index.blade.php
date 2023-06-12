@extends('layout.main')
@section('content')
<style>
    tbody,tr,td{
        border: 1px double black;
    }
</style>
    <table>
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green">{{$_SESSION['success']}}</span><br>
    @endif
        <a href="{{route('add-user')}}"><button>Thêm người dùng</button></a>
        <tr>
            <td>id</td>
            <td>tên tài khoản</td>
            <td>mật khẩu</td>
            <td></td>
        </tr>
        @foreach($users as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->password}}</td>
            <td>
            <a href="{{route("edit-user/".$list->id)}}"><button>cập nhật</button></a>
            <a onclick="return confirm('bạn có muốn xóa không')" href="{{route('delete-user/'.$list->id)}}"><button>xóa</button></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection