<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\lessontitle;
use App\Models\lessonpart_n;
use App\Models\lessonstat_n;
use App\Models\testlesson;
use App\Models\User;
use App\Models\user_lessonpart;



class lessonController extends Controller
{
    function index(){
        $lessontitles = lessontitle::all();
        return view('lesson',compact('lessontitles'));
    }
    
  
    public function go($id){
        if (Auth::check()) {
            $lessonpart = lessonpart_n::find($id);
            $userid = Auth::user()->id; 
            return view('lessonTyping',compact('lessonpart','userid'));
        }else{
            return redirect('login')->with('error','you must login');
        }
        
    }


    public function insertlesson(Request $request){
        $data = new lessonstat_n;
        $data -> lessonpart_id = $request -> lessonpart_n_id;
        $data -> user_id = $request -> user_id;
        $data -> wpm = $request -> wpm;
        $data -> acc = $request -> acc;
        $data -> raw = $request -> raw;
        $data->save();
        if($data){
            return response()->json($data);
        }
    }



}