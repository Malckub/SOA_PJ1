<?php

namespace App\Http\Controllers;

use App\Models\ProductRealModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        
        session(['datestart'=>$request->datestart]);
        session(['dateend',$request->dateend]);
        // dd($request->all());
        $repond = Http::get('http://localhost:8080/SOA_PJ-0.0.1-SNAPSHOT/room');
        $emp = $repond->object();
        // dd($emp);
        // $emp = DB::table('room')->get();
        return view('Main', compact('emp'));
    }

    function send(Request $request)
    {
        // $request->validate([
        //     'datestart'=>'required',
        //     'dateend'=>'required',
        // ],[
        //     'datestart.required'=>'กรุณาเลือกวันที่',
        //     'dateend.required'=>'กรุณาเลือกวันที่'
        // ]);
        // dd($request->all());
        $data = [
            'img' => $request->img,
            'Type' => $request->Type,
            'Price' => $request->Price,
            'Roomsize' => $request->Roomsize,
            'Person' => $request->Person,
            'datestart' => $request->datestart,
            'dateend' => $request->dateend,
            'roomID' => $request->roomID
        ];
        // dd($data);
        return view('make', compact('data'));
        
    }
}
