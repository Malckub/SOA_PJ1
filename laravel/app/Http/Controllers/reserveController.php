<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class reserveController extends Controller
{
 public function index(){
    return view('make');
 }
}
