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
    public function index()
    {
        $respone = Http::get('http://localhost:8080/api/reservations');
        $profile = $respone->object();
        dd($profile);
        $emp = DB::table('Room')->get();
        return view('Main',compact('emp'));
    }

    function send(Request $request){
    //dd($request->all());
    $data = [
        'Type' => $request->Type,
        'Price' => $request->Price,
        'Roomsize' => $request->Roomsize,
        'Person' => $request->Person,
        'datestart' => $request->datestart,
        'dateend'=>$request->dateend
    ];
    //dd($data);
    return view('make',compact('data'));

    }
    
    
}
