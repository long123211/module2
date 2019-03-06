@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>
          <table class="table table-striped">
          <thead>
          <tr>
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Ngày Sinh</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
          </tr>
          </thead>
          <tbody>
          @if(count($customers) == 0)
          <tr><td colspan="4">Không có dữ liệu</td></tr>
          @else
                @foreach($customers as $key => $customer1)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $customer1->name }}</td>
                      <td>{{ $customer1->dob }}</td>
                      <td>{{ $customer1->email }}</td>
                      <td><a href="{{ route('customers.edit', $customer1->id) }}">sửa</a></td>
                      <td><a href="{{ route('customers.destroy', $customer1->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
                @endforeach
          @endif
          </tbody>
          </table>
          <a class="btn btn-primary" href="{{ route('customers.create') }}">Thêm mới</a>
          </div>
      </div>
@endsection