<form class="main-content"  method="POST" action="{{ route('checkcon') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Reservation Number</label>
      <input type="text" class="form-control" name ="reID"id="reID" placeholder="" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" class="form-control" name ="email"id="email" placeholder="" value="">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>