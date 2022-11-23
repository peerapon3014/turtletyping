<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;    

use Illuminate\Http\Request;
use App\Models\words;
use App\Models\language;
use App\Models\difficulty;
use App\Models\teststat;
use App\Models\typingstat_n;


class TurtleTypigController extends Controller
{
    function index(){
        if (Auth::check()) {
            $userid = Auth::user()->id; 
            $word = words::where('difficulties_id',1)->where('languages_id',1)->get();
            $lang = language::all();
            $diff = difficulty::all();
            return view('turtleTyping',compact('word','lang','diff','userid'));
        }else{
            return redirect('login')->with('error','you must login');
        }
        
        
        
    }
    

    public function create(Request $request){
            $data = new typingstat_n;
            $data -> user_id = $request -> user_id;
            $data -> difficulty_id = $request -> difficulties_id;
            $data -> language_id = $request -> languages_id;
            $data -> wpm = $request -> wpm;
            $data -> acc = $request -> acc;
            $data -> raw = $request -> raw;
            $data->save();
            if($data){
                return response()->json($data);
            }
    }

    public function option(Request $request){
        $lang = language::all();
        $diff = difficulty::all();
        $query = words::query();
        if($request->ajax()){
            $word = $query->where(['difficulties_id'=>$request->diff])->where(['languages_id'=>$request->lang])->get();
            return response()->json(['words'=>$word]);
        }
        $word = $query->get();
        return view('turtleTyping',compact('word','lang','diff'));
    }


}