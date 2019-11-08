@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('employees.update',$employee->id)}}">
                @csrf
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name" value="{{$employee->name}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <select name="gender">
                        <option >nam</option>
                        <option>nữ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>số điện thoại</label>
                    <input type="number" class="form-control" name="phone" value="{{$employee->phone}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>số CMND</label>
                    <input type="text" class="form-control" name="cart" value="{{$employee->cart}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob" value="{{$employee->dob}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control " name="email" value="{{$employee->email}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Chọn nhóm nhân viên</label>
                    <select name="group_id">
                        @foreach($groups as $group)

                            <option
                                @if($employee->group->id == $group->id)
                                    selected
                                @endif
                                value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhât</button>
            </form>
        </div>
    </div>

@endsection
