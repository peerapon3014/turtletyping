<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $is_admin = Auth::user()->is_admin;
        if ($is_admin == '1') {
            return redirect('/admin');
        }else{
            return view('dashboard');
        }
     }
}
