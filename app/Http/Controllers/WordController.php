<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wordModel;
use App\Models\lessonpart;
use App\Models\lessonpart_n;
use App\Models\difficulty;
use Doctrine\Inflector\Rules\Word as RulesWord;
use App\Http\Controllers\destroy;
use App\Models\words;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{   
      
    //
    public function index()
    {
        $words = words::all();
        // $difficulty = difficulty::all();
        $user = Auth::user()->name;   
        // $diff = wordModel::whereBelongsTo($difficulty)->get();
        $countWord = words::where('deleted_at',NULL)->count();
        $countLesson = lessonpart_n::where('deleted_at',NULL)->count();
        return view("admin.index", compact('words','user','countWord','countLesson'));
    }

    public function destroy(REQUEST $request){
        words::destroy($request->id);
        $words = words::all();
        return redirect('admin-word');
        // return view("index", compact('words'));
    }
    public function editWord($id){   
        $words = words::find($id);
        $user = Auth::user()->name; 
        // $countLesson = lessonpart::select('*')->count();
        return view("admin.edit-word", ['words'=>$words]);
    }
    public function updateWord(Request $request,$id){
        $user = Auth::user()->name;   
        $words = words::find($id);
        $words->words = $request->words;
        $words->difficulties_id  = $request->diff;
        $words->languages_id = $request->language;
        $words->save();
        return redirect('admin-word');
    }
    public function create(){
        $user = Auth::user()->name;
        return view("admin.create",compact('user'));
    }
    public function store(Request $request){
        $new_word = new words;
        $new_word->words = $request->words;
        $new_word->difficulties_id = $request->diff;
        $new_word->languages_id = $request->language;
        $new_word->created_by = $By=Auth::user()->name; 
        $new_word->save();
        $words = words::all();
        return redirect('add-word')->with('message','add word successfully');
    }
    public function indexLesson()
    {   $lessons = lessonpart_n::all();
        // $countWord = wordModel::where('deleted_at',NULL)->count();
        $user = Auth::user()->name; 
        // $countLesson = lessonpart::select('*')->count();
        $countWord = words::where('deleted_at',NULL)->count();
        $countLesson = lessonpart_n::where('deleted_at',NULL)->count();
        return view("admin.index-lesson", compact('lessons','user','countLesson','countWord'));
    }   
    public function createLesson(){
        $user = Auth::user()->name;
        return view("admin.create-lesson",compact('user'));
    }
    public function storeLesson(Request $request){
        $user = Auth::user()->name;   
        $lesson = new lessonpart_n;
        $lesson->name = $request->name;
        $lesson->content = $request->content;
        $lesson->language_id = $request->language_id;
        $lesson->lessontitle_id = $request->lessontitle_id;
        $lesson->save();
        $lesson = lessonpart_n::all();
        return redirect('admin-lesson');
    }
    public function editLesson($id)
    {   $lessons = lessonpart_n::find($id);
        $user = Auth::user()->name; 
        // $countLesson = lessonpart::select('*')->count();
        return view("admin.edit-lesson", ['lessons'=>$lessons]);
    }
    public function updateLesson(Request $request,$id){
        $user = Auth::user()->name;   
        $lesson = lessonpart_n::find($id);
        $lesson->name = $request->name;
        $lesson->content = $request->content;
        $lesson->language_id = $request->language_id;
        $lesson->lessontitle_id = $request->lessontitle_id;
        $lesson->save();
        return redirect('admin-lesson');
    }
    public function destroyLesson(REQUEST $request){
        lessonpart_n::destroy($request->id);
        $lesson = lessonpart_n::all();
        return redirect('admin-lesson');
    }
}
