<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testclickModel;

class testController extends Controller
{
    function index(){
        // $test = Test::all();
        return view('test');
    }
    function createForm(){
        return  view("test");
    }
    function create(Request $request){
        $testt = new testclickModel;
        $testt -> countclick = $request -> countclick;
        $testt->save();
        // $test = test::all();
        return view('test');

        // return response()->json(['success'=>'data is successfully added']);
        // return $request->post();
    }
}
