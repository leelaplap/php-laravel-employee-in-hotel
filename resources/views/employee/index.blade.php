@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">
            <form action="{{route('employees.search')}}" method="get">
                <input type="text" name="search" >
                <button type="submit" class="btn btn-dark">Search</button>
            </form>

            <a href="{{route('employees.create')}}" class="btn badge-dark">ADD</a>

            <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Nhóm nhân viên</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    @foreach($employees as $key =>$employee)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$employee->group->name}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>
                                <a href="{{route('employees.edit',$employee->id)}}" class="btn badge-dark" onclick="return confirm('bạn có chắc muốn sửa k ?')">Edit</a>
                                <a href="{{route('employees.delete',$employee->id)}}" class="btn badge-dark" onclick="return confirm('bạn có chắc muốn xóa k ?')">Del</a>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            {{$employees->links()}}

        </div>
    </div>

@endsection
