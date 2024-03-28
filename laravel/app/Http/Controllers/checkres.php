<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Illuminate\Support\Facades\DB;
class checkres extends Controller
{
    function index()
    {
        return view('check');
    }

    function check(Request $request){
        
        //dd($request->reID,$request->email);
        $repond = Http::get('http://localhost:8080/SOA_PJ-0.0.1-SNAPSHOT/reservation/'.$request->reID.'/'.$request->email);
        //dd($repond->object());
        $check=$repond->object();
        $ds = date("d-m-Y", strtotime($check->checkin));
        $de =date("d-m-Y", strtotime($check->checkout));
     
       //dd($check , (int)($request->reID));
                if (($check->reservationId == (int)($request->reID) ) && ( $check->email==$request->email)) {
                    return view("infores",compact('check','ds','de'));
                } else {
                    // ไม่พบข้อมูลที่ตรงกัน
                    return back()->with('error', 'ไม่พบข้อมูล');
                }
        //dd($data);
       
    
    }
   
   
}
