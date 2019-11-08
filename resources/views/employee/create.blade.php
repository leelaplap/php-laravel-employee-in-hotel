@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('employees.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Giới tính</label>
                    <select name="gender">
                            <option>Nam</option>
                            <option>Nữ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>số điện thoại</label>
                    <input type="number" class="form-control" name="phone">
                    @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>số CMND</label>
                    <input type="text" class="form-control" name="cart">
                    @if($errors->has('cart'))
                        <p class="text-danger">{{$errors->first('cart')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>địa chỉ</label>
                    <input type="text" class="form-control" name="address">
                    @if($errors->has('address'))
                        <p class="text-danger">{{$errors->first('address')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob">
                    @if($errors->has('dob'))
                        <p class="text-danger">{{$errors->first('dob')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control " name="email" placeholder="Enter Email">
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Chọn nhóm nhân viên</label>
                    <select name="group_id">
                        @foreach($groups as $group)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

@endsection
