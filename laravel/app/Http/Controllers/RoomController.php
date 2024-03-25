<?php 

namespace App\Http\Controllers;

use App\Models\ProductRealModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function index()
    {
        $emp = DB::table('Room')->get();
        return view('Main',compact('emp'));
        //eieiddd
    }
    
    
}
