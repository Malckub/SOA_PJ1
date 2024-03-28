<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
class addReserve extends Controller
{
    function index()
    {
        return view('make');
    }
    function addReserve(Request $request){
        //dd($request->all());
        $date1 = new DateTime($request['datestart']);
        $date2 = new DateTime($request['dateend']);
        $diff = $date1->diff($date2);
        $realdiif = $diff->days;
        $reser =[
            'reservationID' =>$request->reserveID,
            'checkin' =>$request->datestart,
            'checkout'=>$request->dateend,
            'room'=>[
                'roomID'=>$request->roomID,
            ],
            'price'=>$request->Price,
            'name'=>$request->fname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'amount'=>"2",
            'date'=>$realdiif
        ];
        

        dd($reser);
        $date2->add(new DateInterval('P1D'));
        //echo $date2->format('Y-m-d');
        //dd($diff->days);
    }
   
}
