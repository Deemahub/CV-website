<?php

use App\Http\Controllers\PgeController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuggestionController;
use Symfony\Component\Console\Completion\Suggestion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/user', function () {
//    $name = strip_tags(request('na')); //strip tags to convert the input to a text
//    $phone = strip_tags(request('ph'));

//   if(isset($name)){
//     echo $name . "<br>" . $phone . view('Deemaa.wel');
//   }
//   else{
//     echo('You didn\'t enter a name');
//   }
  
// });

// Route::get('/{page}',function ($page) {
//     if($page == 1){
//     return view('Deemaa.cv');
//     }
//     elseif($page == 2){
//         return view('Deemaa.2');
//         }
//     elseif($page == 3){
//         return view('Deemaa.3');
//         }
// });

Route::get('/',[PgeController::class,'index'])->name('index');
Route::get('/2',[PgeController::class,'page2'])->name('page2');
Route::get('/3',[PgeController::class,'page3'])->name('page3');
Route::get('/suggestion',[PgeController::class,'page4'])->name('page4');

// Route::get('/',[laptopController::class,'index']);

// Route::resource('post',[PgeController::class,'index']);

// Route::get('/',[DataController::class,'index'])->name('contacts.index');
// Route::post('/4', [DataController::class, 'store'])->name('contacts.store');


// Route::post('/store', [DataController::class, 'store']);


Route::resource("/suggestion", SuggestionController::class);

// Route::get('/',function(){return redirect()->route('suggestion.index');});
// Route::resource('suggestion',SuggestionController::class,(array)'index');
