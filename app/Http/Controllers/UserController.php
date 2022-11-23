<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    //
    public function index()
    {
        $users = user::where('is_admin','0')->get();
        $user = Auth::user()->name;
        return view("admin.User", compact('users'),compact('user'));
    }
    public function admin()
    {
        $users = User::all();
        $admins = user::where('is_admin','1')->get();
        $user = Auth::user()->name;
        return view("admin.admin", compact('admins'),compact('user'));
    }
    public function editUser($id){   
        $users = User::find($id);
        $user = Auth::user()->name; 
        // $countLesson = lessonpart::select('*')->count();
        return view("admin.edit-user", ['users'=>$users]);
    }
    public function updateUser(Request $request,$id){
        $user = Auth::user()->name;   
        $users = User::find($id);
        $users->name = $request->name;
        $users->email  = $request->email;
        $users->is_admin = $request->role;
        $users->save();
        return redirect('user');
    }
    public function editAdmin($id){   
        $users = User::find($id);
        $user = Auth::user()->name; 
        // $countLesson = lessonpart::select('*')->count();
        return view("admin.edit-admin", ['users'=>$users]);
    }
    public function updateadmin(Request $request,$id){
        $user = Auth::user()->name;   
        $users = User::find($id);
        $users->name = $request->name;
        $users->email  = $request->email;
        $users->is_admin = $request->role;
        $users->save();
        return redirect('admin');
    }

}
