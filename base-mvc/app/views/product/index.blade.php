@extends('layout.main')
@section('content')
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
        <td>giá</td>
    </tr>
    <a href="{{BASE_URL.'add-Product'}}">thêm sản phẩm</a>
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
       
    </tr>
    @endforeach
</table>
@endsection