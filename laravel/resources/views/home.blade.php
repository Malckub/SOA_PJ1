@extends('layout')
@section('title')

@section('content')


<body> 

    <section class="py-5 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <h1 class="fw-light">Hotel</h1>
                    <p class="lead text-body-secondary">เลือกวันที่</p>
                    <form class="needs-validation" novalidate="" action="{{route('Main')}}" method="POST">
                        @csrf
                        @error('product')
                            <div class="my-2"> 
                                <span class="text text-danger">{{$message}}</span>
                            </div>
                        @enderror
                        <div class="row g-3">
    
                            <div class="col-md-6">
                                <label for="date_start" class="form-label">เวลาเริ่มโปรโมชั่น</label>
                                <input type="date" id="pro-start" name="pro-start" value="" min="2024-01-01" max="2025-12-31" />
                                @error('pro-start')
                                    <div class="my-2"> 
                                        <span class="text text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="date_end" class="form-label">เวลาจบโปรโมชั่น</label>
                                <input type="date" id="pro-end" name="pro-end" value="" min="2024-01-01" max="2025-12-31" />
                                @error('pro-end')
                                    <div class="my-2"> 
                                        <span class="text text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        <button class="w-50 btn btn-primary btn-lg" type="submit">สร้างโปรโมชั่น</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    
        {{-- <main >
            <div class="album py-5 bg-body-tertiary ">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                        @foreach($emp as $item)
                        <div class="col order-sm-last"> <!-- ใช้ order-sm-last เพื่อให้แสดงทางขวาในหน้าจอขนาดเล็กขึ้น -->
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect>
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                                <div class="card-body .bg-light">
                                    <p class="card-text">
                                        <h1>{{$item->name}}</h1>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="same-address">
                                          </div>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-body-secondary">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </main> --}}
        
        
        

    <script> src="js/bootstrap.min.js"</script>
    {{-- <script>
        var selectedProductIDs = [];

        function updateSelectedProductIDs() {
            var checkboxes = document.querySelectorAll('input[name="idProduct"]:checked');
            selectedProductIDs = Array.from(checkboxes).map(checkbox => checkbox.value);
            document.getElementById('selectedProductIDs').value = selectedProductIDs.join(',');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var checkboxes = document.querySelectorAll('input[name="idProduct"]');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateSelectedProductIDs);
            });
        });
    </script> --}}
</body>
@endsection