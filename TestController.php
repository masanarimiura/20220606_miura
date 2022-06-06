<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function building()
    {
        return view('building');
    }
    public function room($param)
    {
        $item =[
            'param'=>'$param'
        ];
        return view('room',$item);
    }
}