@extends('layout.main')
@section('content')
<table>
    <tr>
        <td>id</td>
        <td>tên sản phẩm</td>
       
    </tr>
    <a href="?url=editAdd">thêm sản phẩm</a>
        @foreach ($comments as $pr)
    <tr>
       
        <td>
           {{$pr->id}}
        </td>
        <td>
        {{$pr->comment}}
        </td>
    </tr>
    @endforeach
</table>
@endsection