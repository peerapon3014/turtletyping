<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\typingstat_n;
use App\Models\lessonstat_n;


class profileController extends Controller
{
    function index(){
        // return view('profile');
        if (Auth::check()) {
            $user = Auth::user()->name;
            $avgwpm = round(typingstat_n::where('user_id',Auth::user()->id)->avg('wpm'),0);
            $avgacc = round(typingstat_n::where('user_id',Auth::user()->id)->avg('acc'),0);
            $avgraw = round(typingstat_n::where('user_id',Auth::user()->id)->avg('raw'),0);
            $maxwpm = typingstat_n::where('user_id',Auth::user()->id)->max('wpm');
            $maxacc = typingstat_n::where('user_id',Auth::user()->id)->max('acc');
            $maxraw = typingstat_n::where('user_id',Auth::user()->id)->max('raw');
            $sum = typingstat_n::where('user_id',Auth::user()->id)->count();
            $typingstat = typingstat_n::where('user_id',Auth::user()->id)->get();
            $lessonstat = lessonstat_n::where('user_id',Auth::user()->id)->get();
            return view('profile',compact('user','typingstat','lessonstat','avgwpm','avgacc','avgraw','maxwpm','maxacc','maxraw','sum'));
        }else{
            return redirect('login');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/turtleTyping')->with('message','ออกจากระบบสำเร็จ !!');
    }
}
