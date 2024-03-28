<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class reserveController extends Controller
{
    function index()
    {
        return view('make');
    }
  
    function makere(Request $request)
    {

        //dd($request->all());
        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'em' => 'required|email',
                'phone' => 'required|max:10'
            ],
            [
                'fname.required' => 'กรุณากรอกชื่อ',
                'lname.required' => 'กรุณากรอกนามสกุล',
                'em.required' => 'กรุณากรอกอีเมล',
                'em.email' => 'รูปแบบไม่ถูกต้อง',
                'phone.required' => 'กรุณากรอกเบอร์ติดต่อ',
                'phone.max' => 'เบอร์ติดต่อไม่ควรเกิน 10 ตัว',
            ]
        );

        $data1= [
            'ReserveID'=>$request->reserveID,
            'Type' => $request->Type,
            'Price'=>$request->Price,
            'Roomsize'=>$request->Roomsize,
            'Person'=>$request->Person,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->em,
            'phone' => $request->phone,
            'datestart' =>$request->datestart,
            'dateend' =>$request->dateend,
            'roomID'=>$request->roomID
        ];
       
                    // $data2 =[
        //     ''
        // ];
        //dd($data1);
        return view('reserve',compact('data1'));
    }
}
