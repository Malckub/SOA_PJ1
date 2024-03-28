<form class="main-content"  method="POST" action="{{ route('checkcon') }}">
    @csrf
    <div class="form-group my-5">
        <label for="exampleInputEmail1">Reservation Number</label>
        <input type="text" class="form-control" name="reID" id="reID" placeholder="" value="">
    </div>
    <div class="form-group" style="margin-bottom: 20px;margin-top: 20px">
        <label for="exampleInputPassword1">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="" value="">
    </div>
    <button class="d-inline" type="submit" class="btn btn-primary">Submit</button>
    <a class="d-inline" href="{{ route('Main') }}" class="btn btn-secondary">กลับไปหน้าหลัก</a>
</form>

@if(session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif

<!-- เพิ่มปุ่มกลับไปหน้าหลัก -->

