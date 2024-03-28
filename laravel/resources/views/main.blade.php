@extends('layout')
@section('title')

@section('content')
    <div id="reservationform" class="container py-2">
        <div class="row">
            <a href="{{ route('check') }}">CHECK Your Reservation</a>
        </div>
    </div>

    @php
        $image = ['room1.jpg', 'room2.jpg', 'room3.jpg', 'room4.jpg'];
        $x = 0;
    @endphp
    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($emp as $item)
                        <form method="POST" action="{{ route('send') }}">
                            @csrf
                            <div class="col order-sm-last">
                                <div class="card shadow-sm">
                                    <img src="{{ $image[$x] }}">
                                    <input  type="hidden" name="img" value="{{$image[$x]}}">
                                    <div class="card-body h3">
                                        <p>ประเภทห้อง:</p>
                                        <input type="hidden" name="Type" class="card-title" id="Type" value="{{ $item->type }}">{{ $item->type }}
                                        <input  type="hidden" name="datestart" id="dates" value="">
                                        <input type="hidden" name="dateend" id="datee" value="">
                                        <input type="hidden" name="roomID" class="card-title" id="roomID"
                                            value="{{ $item->roomId }}"></input>
                                        <p class="card-text"></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div class="list-group-item">
                                            ราคา :
                                            <input type="hidden" class="form-control" name="Price"
                                                value="{{ $item->price }}">
                                            <h1>{{ $item->price }}</h1>
                                        </div>
                                        <div class="list-group-item">
                                            ห้องขนาด :
                                            <input type="hidden" class="form-control" name="Roomsize"
                                                value="{{ $item->roomsize }}">
                                            <h1>{{ $item->roomsize }}</h1>
                                            ตร.ม.
                                        </div>
                                        <div class="list-group-item">
                                            จำนวน
                                            <input type="hidden" class="form-control" name="Person"
                                                value="{{ $item->person }}">
                                            <h1>{{ $item->person }}</h1>
                                            คน
                                        </div>
                                    </ul>
                                    <div class="card-body">
                                        <input type="submit" value="เลือกห้องนีั" class="btn btn-primary">
                                    </div>

                                </div>
                            </div>
                        </form>
                        @php
                            $x += 1;
                        @endphp
                    @endforeach

                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('datestart').addEventListener('change', function() {
            var datestart = this.value;
            document.getElementById('dates').value = datestart;
            document.getElementById('dateend').min = datestart;
        });
        document.getElementById('dateend').addEventListener('change', function() {
            var dateend = this.value;
            document.getElementById('datee').value = dateend;
        });
    </script>
@endsection
