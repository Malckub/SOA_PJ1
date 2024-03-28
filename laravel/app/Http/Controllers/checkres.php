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
        
        //dd($request->all());
        $res = DB::table('reservation')->get();
        $result = $res->where('reservation_id', $request->reID)
                  ->where('email', $request->email)
                  ->first();
                  if ($result) {
                    
                    
                    $data1 = $res->where('reservation_id',$request->reID)->first();
                    //dd($data1);
                    $type = DB::table('room')->where("RoomID",$result->room_id)->get();
                    $TY = $type[0]->Type;
                    return view("infores",compact('data1','TY'));
                } else {
                    // ไม่พบข้อมูลที่ตรงกัน
                    return back()->with('error', 'ไม่พบข้อมูล');
                }
        //dd($data);
       
    
    }
   
   
}
