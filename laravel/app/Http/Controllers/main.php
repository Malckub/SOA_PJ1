<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Illuminate\Support\Facades\DB;
class main extends Controller
{
    function index()
    {
        return view('home');
    }

    
   
   
}
