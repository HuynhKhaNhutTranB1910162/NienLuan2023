@extends('admin.app')

@section('content')

<table class="table">
    <thead>
    <tr>
        <th style="width: 50px">ID</th>
        <th>Tên Khách Hàng</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Đã đặt hàng</th>
        {{-- <th>Giá sale</th>
        <th>Active</th>
        <th>Update</th>--}}
        <th style="width: 100px">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
        @foreach($customers as $key => $cart)
        <tr>
            <td>{{ $cart->id }}</td>
            {{-- <td><a href="{{$product->thumb}}"target="_blank">
                <img src="{{$product->thumb}}" width="50px">
            </a></td> --}}
            <td>{{ $cart->name }}</td>
            <td>{{ $cart->phone }}</td>
            <td>{{ $cart->email }}</td>
            <td>{{ $cart->created_at }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $cart->id }}">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ $cart->id }}, '/admin/customers/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="card-footer clearfix">
    {!! $customers->links() !!}
</div>


@endsection