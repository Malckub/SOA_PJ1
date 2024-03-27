@extends('layout')
@section('title')

@section('content')
    <form class="main-content" style="position: relative;" method="POST" action="{{ route('makere') }}">
        @csrf
        <div class="container">
            <div class="row" <div class="col order-sm-last">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0 order-lg-1 card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <div class="card-body form-group">
                        <input type="hidden" name="Type" class="card-title" id="Type" value="{{$data['Type']}}">{{ $data['Type'] }}</input>
                        <p class="card-text"></p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <div class="list-group-item form-group">
                            <input type="hidden" class="form-control" name="Price" value="{{ $data['Price'] }}">
                            <h1>{{ $data['Price'] }}</h1>
                        </div>
                        <div class="list-group-item form-group">
                            <input type="hidden" class="form-control" name="roomID" value="{{ $data['roomID'] }}">
                           
                        </div>
                        <div class="list-group-item form-group">
                            <input type="hidden" class="form-control" name="RoomID" value="{{ $data['roomID'] }}">
                            <h1>{{ $data['Price'] }}</h1>
                        </div>

                        <div class="list-group-item form-group">
                            ห้องขนาด :
                            <input type="hidden" class="form-control" name="Roomsize" value="{{ $data['Roomsize'] }}">
                            <h1>{{ $data['Roomsize'] }}</h1>
                            ตร.ม.
                        </div>

                        <div class="list-group-item form-group" >
                            จำนวน
                            <input type="hidden" class="form-control" name="Person" value="{{ $data['Person'] }}">
                            <h1>{{ $data['Person'] }}</h1>
                            คน
                        </div>
                        <div class="list-group-item form-group" >
                            CheckIn
                            <input type="hidden" class="form-control" name="datestart" value="{{ $data['datestart'] }}">
                            <input type="hidden" class="form-control" name="dateend" value="{{ $data['dateend'] }}">
                            <h1>{{ $data['datestart'] }}</h1> CheckOut <h1>{{ $data['dateend'] }}</h1>
                            
                        </div>
                    </ul>
                </div>
                @csrf
                <div class="col-12 col-lg-8 order-lg-0">
                    <div class="form-group">
                        <label class="form-label">Reservation Number </label>
                        <input type="text" class="form-control" name="reserveID" value="<?php echo rand(100000,999999); ?>" readonly>
                    </div>
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
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    <br>
                    <input type="submit" value="MAKE A BOOKING" class="btn btn-primary">
                </div>
            </div>
        </div>
        </div>


    </form>

@endsection
