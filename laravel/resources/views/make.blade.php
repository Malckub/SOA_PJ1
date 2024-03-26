@extends('layout')
@section('title')

@section('content')
<div class="col order-sm-last" >
    <!-- ใช้ order-sm-last เพื่อให้แสดงทางขวาในหน้าจอขนาดเล็กขึ้น -->
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
            focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
        </svg>
        <div class="card-body">
            <h5>{{ $data->Type }}</h5>
            <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
            <div class="list-group-item">
                <input type="hidden" class="form-control" name="Price"
                    value="{{ $data->Price }}" id="Price" placeholder="" required=""
                    readonly>
                <h1>{{ $data->Price }}</h1>
            </div>
            <div class="list-group-item">
                ห้องขนาด :
                <input type="hidden" class="form-control" name="Roomsize"
                    value="{{ $data->RoomSize }}" id="Roomsize" placeholder="" required=""
                    readonly>
                <h1>{{ $data->RoomSize }}</h1>
                ตร.ม.
            </div>
            <div class="list-group-item">
                จำนวน
                <input type="hidden" class="form-control" name="Person"
                    th:text="{{ $data->Person }}" value="{{ $data->Person }}" id="Person"
                    placeholder="" required="" readonly>
                <h1>{{ $data->Person }}</h1>
                คน
            </div>

        </ul>
        <div class="card-body">
            <input type="submit" value="เลือกห้องนีัจร้า" class="btn btn-primary" >
        </div>

    </div>
</div>
    <form class="container" method="POST" action="{{route('makere')}}">
        @csrf
            <div class="form-group">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" name="fname">
            </div>
            @error('fname')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lname">
            </div>
            @error('lname')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" class="form-control" name="em">
            </div>
            @error('em')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone">
            </div>
            @error('phone')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
            @enderror
            <br>
            <input type="submit" value="MAKE A BOOKING" class="btn btn-primary">
    </form>
@endsection
