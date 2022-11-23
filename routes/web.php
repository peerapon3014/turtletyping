<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController; 
use App\Http\Controllers\typingController; 
use App\Http\Controllers\TurtleTypigController; 
use App\Http\Controllers\lessonController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\testController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\UserController;
use Laravel\Jetstream\Src\Http\Controllers\Inertia\UserProfileController;
use App\Http\Controllers\welcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcom');
});

Route::get('/index',[indexController::class,'index']);
Route::get('/typing',[typingController::class,'index']);
Route::get('/turtleTyping',[TurtleTypigController::class,'index'])->name('turtleTyping');
Route::get('/lesson',[lessonController::class,'index']);
Route::get('/profile',[profileController::class,'index']);
Route::post('/turtleTyping',[TurtleTypigController::class,'create'])->name('create');
Route::get('/lessonTyping/{id}',[lessonController::class,'go']);
Route::post('/lessonTyping',[lessonController::class,'insertlesson'])->name('insertlesson');
Route::get('/welcom',[welcomeController::class,'index']);


Route::get('opt',[TurtleTypigController::class,'option'])->name('opt');


Route::get('/test',[testController::class,'index']);
Route::get('/test/create',[testController::class,'createForm'])->name('test.create');
Route::post('/test/create',[testController::class,'create'])->name('test.create');

// Route::get('/test','testController@index');
// Route::post('/test/post','testController@create')->name('test.post');

//********************admin*******************//

route::get('redirects','App\Http\Controllers\HomeController@index');
// Route::get('/admin-word', [WordController::class, "index"])->middleware('auth');
Route::get('/destroy/{id}', [WordController::class, "destroy"]);
Route::get('/destroyLesson/{id}', [WordController::class, "destroyLesson"]);
Route::post('add-word', [WordController::class, "store"]);
// Route::get('add-word', [WordController::class, "create"])->middleware('admin');
// Route::get('add-lesson', [WordController::class, "createLesson"])->middleware('admin');
// Route::get('/user', [UserController::class, "index"])->middleware('admin');
Route::get('/logout', [profileController::class, "logout"]);

Route::group(['middleware' => ['admin']], function () {
    // Route::get('admin-view', [HomeController::class, 'adminView'])->name('admin.view');
    Route::get('/admin-word', [WordController::class, "index"]);
    Route::get('/admin-lesson', [WordController::class, "indexLesson"]);
    Route::get('add-word', [WordController::class, "create"]);  
    Route::get('add-lesson', [WordController::class, "createLesson"]);
    Route::post('add-lesson', [WordController::class, "storeLesson"]);
    Route::get('edit-lesson/{id}', [WordController::class, "editLesson"]);  //fetch
    Route::put('update-lesson/{id}', [WordController::class, "updateLesson"]); //show
    Route::get('edit-word/{id}', [WordController::class, "editWord"]);
    Route::PUT('update-word/{id}', [WordController::class, "updateWord"]);
    Route::get('edit-user/{id}', [UserController::class, "editUser"]);
    Route::PUT('update-user/{id}', [UserController::class, "updateUser"]);
    Route::get('edit-admin/{id}', [UserController::class, "editAdmin"]);
    Route::PUT('update-admin/{id}', [UserController::class, "updateAdmin"]);
    Route::get('/user', [UserController::class, "index"]);
    Route::get('/admin', [UserController::class, "admin"]);

});
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');


// ****************************************************//

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/turtleTyping', function () {
//         return view('turtleTyping');
//     })->name('turtleTyping');
// });


