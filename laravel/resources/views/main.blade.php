@extends('layout')
@section('title')

@section('content')

    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($emp as $item)
					<form method="POST" action="{{route('send')}}">
						@csrf
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
                                        <input type="hidden" name="Type" class="card-title" id="Type" value="{{$item->Type}}">{{ $item->Type }}</input>
                                        <p class="card-text"></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div class="list-group-item">
                                            <input type="hidden" class="form-control" name="Price"
                                                value="{{ $item->Price }}" id="Price" placeholder="" required=""
                                                readonly>
                                            <h1>{{ $item->Price }}</h1>
                                        </div>
                                        <div class="list-group-item">
                                            ห้องขนาด :
                                            <input type="hidden" class="form-control" name="Roomsize"
                                                value="{{ $item->RoomSize }}" id="Roomsize" placeholder="" required=""
                                                readonly>
                                            <h1>{{ $item->RoomSize }}</h1>
                                            ตร.ม.
                                        </div>
                                        <div class="list-group-item">
                                            จำนวน
                                            <input type="hidden" class="form-control" name="Person"
                                                th:text="{{ $item->Person }}" value="{{ $item->Person }}" id="Person"
                                                placeholder="" required="" readonly>
                                            <h1>{{ $item->Person }}</h1>
                                            คน
                                        </div>

                                    </ul>
                                    <div class="card-body">
										<input type="submit" value="เลือกห้องนีัจร้า" class="btn btn-primary" >
                                    </div>

                                </div>
                            </div>
					</form>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </main>


@endsection
