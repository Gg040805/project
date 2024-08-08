<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function show(){
        $data= Member::all();
        return view('userseeder',['member'=>$data]);
    }
    
};
