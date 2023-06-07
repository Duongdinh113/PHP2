@extends('layout.main')
@section('content')
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
        <td>giá</td>
    </tr>
    <tr>
        <a href="?url=editAdd">thêm sản phẩm</a>
        @foreach ($products as $pr)
        <td>
           {{$pr->id}}
        </td>
        <td>
        {{$pr->ten_sp}}
        </td>
        <td>
        {{$pr->gia}}
        </td>
        @endforeach
    </tr>
</table>
@endsection