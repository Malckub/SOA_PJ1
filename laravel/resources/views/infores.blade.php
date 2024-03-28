@extends('layout')
@section('title')

@section('content')


<form class="main-content"  method="POST" action="{{ route('res') }}">
    @csrf
    <div class="col-md-12">   
        <div class="row">                      
            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
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
                                <h5>{{$check->name}}</h5>
                                <p><b>Mobile :</b>{{$check->phone}}</p>
                                <p><b>Email :</b> {{$check->email}}</p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-8 col-md-8">
                            <div class="receipt-left">
                                <h3>RESERVATION # {{$check->reservationId}}</h3>
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
                                <td class="col-md-9">Room : {{$check->room->type}} </td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> {{$check->price}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Food Order</td>
                                <td class="col-md-3"><i class="fa fa-inr"></i>-</td>
                            </tr>
                            
                            
                            <tr>
                                
                                <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$check->price}}/-</strong></h2></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="row">
                    <div class="receipt-header receipt-header-mid receipt-footer">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <p><b>CheckIN :</b> {{$ds}}</p>
                                <p><b>CheckOUT :</b> {{$de}}</p>
                                <h5 style="color: rgb(140, 140, 140);">Please Check your Reservation</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>    
        </div>
    </div>
   
</form>
@endsection