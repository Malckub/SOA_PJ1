<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Ramsey\Uuid\Type\Integer;

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
            'reservationId' =>(int)$request->reserveID,
            'checkin' =>$request->datestart,
            'checkout'=>$request->dateend,
            'room'=>[
                'roomId'=>(int)$request->roomID,
            ],

            'price'=>(float)$request->Price,
            'name'=>$request->fname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'amount'=>2,
            'date'=>$realdiif
        ];

        $respond = Http::post("http://localhost:8080/SOA_PJ-0.0.1-SNAPSHOT/reservation/create",$reser);
        /* It looks like there is a syntax error in the line `dd(json_encode()-);`. The dash
        symbol `-` at the end of the line is causing the error. */
        // dd($reser);

        

        // dd($reser);
        $date2->add(new DateInterval('P1D'));
        //echo $date2->format('Y-m-d');
        //dd($diff->days);
    }
   
}
