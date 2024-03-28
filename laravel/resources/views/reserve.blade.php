@extends('layout')
@section('title')

@section('content')


<form class="main-content"  method="POST" action="{{ route('res') }}">
    @csrf
    <div class="col-md-12 border border-2 rounded my-5 py-5 justify-content-center" style="width: 1200px;margin-left: auto; margin-right: auto">   
        <div class="row justify-content-center" style="padding-left: 0px">
            <input type="hidden" class="form-control" id="reserveID" name="reserveID" value="{{$data1['ReserveID']}}" placeholder="" required="">
                <div class="input-group has-validation">
                    <input type="hidden" class="form-control" id="Type" name="Type" value="{{$data1['Type']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="roomID" name="roomID" value="{{$data1['roomID']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="Price" name="Price" value="{{$data1['Price']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="Roomsize" name="Roomsize" value="{{$data1['Roomsize']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="Person" name="Person" value="{{$data1['Person']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="fname" name="fname" value="{{$data1['fname']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="lname" name="lnamee" value="{{$data1['lname']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="email" name="email" value="{{$data1['email']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="phone" name="phone" value="{{$data1['phone']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="datestart" name="datestart" value="{{$data1['datestart']}}" placeholder="" required="" readonly>
                    <input type="hidden" class="form-control" id="dateend" name="dateend" value="{{$data1['dateend']}}" placeholder="" required="" readonly>
                </div>
            
            <div class="receipt-main col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 ">
                <div class="row">
                    <div class="receipt-header">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="receipt-left">
                                <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                            <div class="receipt-right">
                        
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="receipt-header receipt-header-mid">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <h1><strong>{{$data1['fname']}}  {{$data1['lname']}}</strong></h1>
                                <p><b>Mobile : </b>{{$data1['phone']}}</p>
                                <p><b>Email : </b> {{$data1['email']}}</p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-8 col-md-8">
                            <div class="receipt-left">
                                <h3>RESERVATION # {{$data1['ReserveID']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9">Room type : {{$data1['Type']}} </td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> {{$data1['Price']}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Food Order</td>
                                <td class="col-md-3"><i class="fa fa-inr"></i>-</td>
                            </tr>
                            
                            
                            <tr>
                                
                                <td class="text-right"><h2><strong>Total</strong></h2></td>
                                <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$data1['Price']}}/-</strong></h2></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="row">
                    <div class="receipt-header receipt-header-mid receipt-footer">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <p><b>Check in date :</b> {{$data1['datestart']}}</p>
                                <p><b>Check out date :</b> {{$data1['dateend']}}</p>
                                <h5 style="color: rgb(255, 57, 57);"><strong>Please Check your Reservation</strong></h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <button style="margin-top: 10px" type="submit" value="Make Reservation" class="btn btn-primary" onclick="return confirm('ต่องการบันทึกการจองหรือไม่')">Make Reservation</button>
            </div>    
        </div>
    </div>
</form>

@endsection